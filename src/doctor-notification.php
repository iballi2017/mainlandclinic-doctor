<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>

<div class="min-h-screen">
    <!-- Sidenav -->
    <?php include_once(__DIR__ . "./components/doctor-account-side-navigation.php"); ?>


    <div class="lg:ml-64">

        <!-- main toolbar -->
        <?php $pageTitle = "Notification";
        include(__DIR__ . "./components/main-toolbar.php"); ?>
        <!-- open main area -->
        <?php include_once(__DIR__ . "./components/open-main-area.php"); ?>
        <ul class="flex items-center gap-2">
            <li>
                <a href="doctor-notification.php" class="text-white bg-primary-500 hover:bg-primary-600 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center">All feeds</a></li>
            <li>
                <a href="doctor-notification-settings.php" class="py-2.5 px-5 text-sm font-medium focus:outline-none bg-gray-300 rounded-full border border-gray-200 hover:bg-gray-100">Settings</a>
            </li>
        </ul>
        <div class="my-4"></div>
        <div class="h-full overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">



            <div class="px-4 py-2 sm:px-6">
                <ul class="notifications">
                    <li class="item">
                        <a href="" class="flex items-center justify-between gap-4">
                            <span>
                                <span class="font-semibold">Reminder:</span>&nbsp;Your time has complete, please stay tuned as our doctor will attend to you
                            </span>
                            <span class="text-accent-650">1s</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="" class="flex items-center justify-between gap-4">
                            <span>
                                <span class="font-semibold">Reminder:</span>&nbsp;Your have 3 hours left to your appointment time.
                            </span>
                            <span class="text-accent-650">1s</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="" class="flex items-center justify-between gap-4">
                            <span>
                                <span class="font-semibold">Reminder:</span>&nbsp;Your have 4 hours left to your appointment time.
                            </span>
                            <span class="text-accent-650">1s</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="" class="flex items-center justify-between gap-4">
                            <span>
                                <span class="font-semibold">Reminder:</span>&nbsp;This to notify that <span class="font-semibold text-blue-500 hover:text-blue-600">Bunmi Salako</span> have book an appointment.
                            </span>
                            <span class="text-accent-650">1s</span>
                        </a>
                    </li>
                </ul>
            </div>


        </div>
        <!-- close main area -->
        <?php include_once(__DIR__ . "./components/close-main-area.php"); ?>


        <!-- foot -->
        <?php include(__DIR__ . "./components/foot.php"); ?>
    </div>
</div>



<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>