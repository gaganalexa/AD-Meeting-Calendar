<?php
require_once VENDOR_PATH . 'autoload.php'; // <-- corrected

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$isDocker = file_exists('/.dockerenv');

return [
    'pg_host'    => $isDocker ? 'postgresql' : 'localhost',
    'pg_port'    => $isDocker ? '5432' : '5112',
    'pg_db'      => $_ENV['PG_DB'],
    'pg_user'    => $_ENV['PG_USER'],
    'pg_pass'    => $_ENV['PG_PASS'],
    'mongo_uri'  => $isDocker
        ? 'mongodb://root:rootPassword@mongodb:27017'
        : 'mongodb://root:rootPassword@localhost:27111',
    'mongo_db'   => $_ENV['MONGO_DB'],
];