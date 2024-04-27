<!-- doctor-account-settings-app works! -->
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
        <?php include_once(__DIR__ . "./components/doctor-account-settings-navigation.php"); ?>

        <div class="my-4"></div>
        <div class="h-full overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">



            <div class="px-4 py-4 sm:px-6 bg-accent-600 font-semibold">
                <h3 class="text-lg">Delete account</h3>
            </div>
            <div class="px-4 py-4 sm:px-6">
                <h3 class="font-semibold text-lg">What happens when you delete your account?</h3>
                <ul class="list-disc ml-4">
                    <li>
                        Your profile won't be shown on our dashboard anymore.
                    </li>
                    <li>
                        Active Appointments will be cancelled.
                    </li>
                </ul>
                <div class="my-4"></div>
                <button type="submit" class="step-control next-btn text-red-500 bg-white hover:bg-gray-100 border border-red-500 focus:ring-1 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center">
                    Delete
                </button>
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