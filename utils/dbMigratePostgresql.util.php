<?php
declare(strict_types=1);

// 1) Autoload Composer
require 'vendor/autoload.php';

// 2) Load bootstrap and set BASE_PATH
require 'bootstrap.php';

// 3) Load .env and extract config
$typeConfig = require_once __DIR__ . '/envSetter.util.php';

$pgConfig = [
    'host' => $typeConfig['pg_host'],
    'port' => $typeConfig['pg_port'],
    'db'   => $typeConfig['pg_db'],
    'user' => $typeConfig['pg_user'],
    'pass' => $typeConfig['pg_pass'],
];

// ——— Connect to PostgreSQL ———
$dsn = "pgsql:host={$pgConfig['host']};port={$pgConfig['port']};dbname={$pgConfig['db']}";
try {
    $pdo = new PDO($dsn, $pgConfig['user'], $pgConfig['pass'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    echo "✅ Connected to PostgreSQL\n";
} catch (PDOException $e) {
    echo "❌ Connection Failed: " . $e->getMessage() . "\n";
    exit(1);
}

// ——— DROP OLD TABLES ———
echo "Dropping old tables…\n";
foreach (['meeting_users', 'tasks', 'meetings', 'users'] as $table) {
    $pdo->exec("DROP TABLE IF EXISTS {$table} CASCADE;");
    echo "✅ Dropped table: {$table}\n";
}

// ——— RE-APPLY SCHEMA FILES ———
$modelFiles = [
    'user.model.sql',
    'meeting.model.sql',
    'meeting_users.model.sql',
    'tasks.model.sql',
];

foreach ($modelFiles as $modelFile) {
    $path = __DIR__ . "/../database/{$modelFile}";
    echo "Applying schema from {$path}…\n";

    $sql = file_get_contents($path);

    if ($sql === false) {
        throw new RuntimeException("❌ Could not read {$path}");
    } else {
        echo "✅ Creation Success from {$path}\n";
    }

    $pdo->exec($sql);
}

echo "🎉 Migration Complete\n";
