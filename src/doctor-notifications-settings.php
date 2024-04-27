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
        <!-- doctor notifications navigation -->
        <?php include_once(__DIR__ . "./components/doctor-notifications-navigation.php"); ?>
        <div class="my-4"></div>
        <div class="h-full overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">



            <div class="px-4 py-4 sm:px-6 bg-accent-600 font-semibold">
                <h3 class="">Push email notifications</h3>
            </div>
            <div class="px-4 py-4 sm:px-6">
                <div class="text-sm font-medium text-gray-500 dark:text-gray-400 dark:border-gray-700">
                    <ul class="flex flex-col gap-4">
                        <li>
                            <label class="flex items-center justify-between cursor-pointer">
                                <span class="ms-3 text-sm font-semibold text-gray-900 dark:text-gray-300">Appointment messages status updates</span>
                                <span>
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-primary-500 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-400"></div>
                                </span>
                            </label>
                        </li>
                    </ul>
                </div>
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