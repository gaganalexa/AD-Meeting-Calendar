<?php
// call the layout you want to use from layout folder
require_once 'bootstrap.php';
require_once LAYOUTS_PATH . "/main.layout.php";
$mongoCheckerResult = require_once HANDLERS_PATH . "/mongodbChecker.handler.php";
$postgresqlCheckerResult = require_once HANDLERS_PATH . "/postgreChecker.handler.php";

$title = "Landing Page";

// functions that will render the layout of your choosing
renderMainLayout(
    function () use ($mongoCheckerResult, $postgresqlCheckerResult) {
        // Data for features
        require_once STATICDATAS_PATH . "/feature.staticData.php";
        ?>
    <!-- Hero Section -->
    <section class="relative w-full min-h-screen bg-[url('/assets/img/meeting-bg.avif')] bg-cover bg-center bg-no-repeat flex justify-center items-center">
    <!-- Blurred Overlay Box -->
    <div class="backdrop-blur-md bg-white/30 p-8 rounded-lg max-w-3xl text-center">
        <h2 class="font-black text-4xl text-black">
            Organize Meetings. Sync Teams. Streamline Your Schedule.
        </h2>
        <h2 class="font-black text-black text-2xl mt-4">
           Simplifies team coordination with an intuitive interface for scheduling, tracking, and managing meetings — all in one place.
        </h2>
    </div>
</section>


    <!-- Feature Section -->
    <section class="flex justify-center my-24 w-full">
        <div class="gap-4 grid grid-cols-3 grid-flow-row-dense container Features">
            <?php foreach ($featuresList as $value): ?>
                <div class="flex flex-col gap-4 p-4 pb-14 border rounded-lg">
                    <img src=<?php echo $value['image'] ?> alt=""
                        class="bg-gray-400 rounded-md rounded-md object-cover aspect-square">
                    <h3 class="font-bold text-xl"><?php echo $value["title"] ?></h3>
                    <p class="font-semibold text-gray-500">
                        <?php echo $value['description'] ?>
                        <br>
                        <?php if ($value["title"] == "Dockerized Workflow.") {
                                echo $mongoCheckerResult;
                                echo $postgresqlCheckerResult;
                            } ?>
                        <br>

                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Catch Phrase -->
    <section class="flex flex-col justify-center items-center my-42 w-full max-h-[200px]">
        <h3 class="font-black text-4xl">Get Started – Explore Demo</h3>
        <p class="text-gray-500 text-xl">See How It Works</p>
    </section>
    <?php
    },
    $title
)
    ?>