<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>

<div class="min-h-screen">
    <!-- Sidenav -->
    <?php include_once(__DIR__ . "./components/doctor-account-side-navigation.php"); ?>


    <div class="lg:ml-64">

        <!-- main toolbar -->
        <?php $pageTitle = "Patient's Report History";
        include(__DIR__ . "./components/main-toolbar.php"); ?>
        <!-- open main area -->
        <?php include_once(__DIR__ . "./components/open-main-area.php"); ?>
        <div class="h-full overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <!-- filter and search section -->
            <section class="px-4 py-2 border border-b sm:px-6 sm:py-2">
                <h2 class="sr-only">Filter appointment list</h2>
                <div class="flex items-center justify-between gap-2 text-sm">
                    <p>
                        Showing 1-12 of 12 results
                    </p>
                    <div class="flex items-center gap-4">
                        <p>Filter:</p>
                        <select id="filter" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                            <option selected>Sort by</option>
                            <option value="all" selected>All</option>
                            <option value="...">...</option>
                        </select>
                    </div>
                </div>
            </section>
            <div class="px-4 py-2 sm:px-6">
                <div class="rounded-md overflow-hidden border border-gray-200">
                    <div class="relative overflow-x-auto remove-scrollbar">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-accent-600 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 rounded-tl-sm">
                                        ID number
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Patients name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Service
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Time
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Date
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-4 py-2 sm:px-6 sm:py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <a href="report-details.php" class="font-semibold">11233645BS</a>
                                    </th>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4">
                                        <div class="user-avatar-tag whitespace-nowrap">
                                            <a href="report-details.php" class="font-semibold">Bumi Salako</a>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4">
                                        Telemedicine
                                    </td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4">
                                        07:00am
                                    </td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4">
                                        23/11/2024
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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