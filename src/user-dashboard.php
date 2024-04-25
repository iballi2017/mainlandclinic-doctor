<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>

<div class="min-h-screen">
    <!-- Sidenav -->
    <?php include_once(__DIR__ . "./components/user-account-side-navigation.php"); ?>


    <div class="lg:ml-64">

        <!-- main toolbar -->
        <?php include(__DIR__ . "./components/main-toolbar.php"); ?>

        <main class="p-4 bg-neutral-600">
            <ul class="grid grid-cols-12 items-stretch gap-4">
                <li class="col-span-6 sm:col-span-3">
                    <div class="line-top-after p-6 h-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="text-base font-semibold">Total Appointment</h5>
                        <p class="text-2xl font-bold">41</p>
                    </div>
                </li>
                <li class="col-span-6 sm:col-span-3">
                    <div class="line-top-after p-6 h-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="text-base font-semibold">Pending / Started Appointment</h5>
                        <p class="text-2xl font-bold">1</p>
                    </div>
                </li>
                <li class="col-span-6 sm:col-span-3">
                    <div class="line-top-after p-6 h-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="text-base font-semibold">Completed Appointment</h5>
                        <p class="text-2xl font-bold">30</p>
                    </div>
                </li>
                <li class="col-span-6 sm:col-span-3">
                    <div class="line-top-after p-6 h-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="text-base font-semibold">Canceled Appointment</h5>
                        <p class="text-2xl font-bold">10</p>
                    </div>
                </li>
            </ul>

            <div class="my-4"></div>

            <div class="h-full overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h5 class="text-base font-semibold px-4 py-2 sm:px-6 sm:py-4 bg-dark-700 text-white">Appointment Summary</h5>
                <div class="px-4 py-2 sm:px-6 sm:py-4">
                    <div class="rounded-md overflow-hidden border border-gray-200">
                        <div class="relative overflow-x-auto">
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
                                        <th scope="col" class="px-6 py-3">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-4 py-2 sm:px-6 sm:py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            11233645BS
                                        </th>
                                        <td class="px-4 py-2 sm:px-6 sm:py-4">
                                            <div class="user-avatar-tag whitespace-nowrap">
                                                Bumi Salako
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
                                        <td class="px-4 py-2 sm:px-6 sm:py-4">
                                            <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Started</span>
                                            <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Completed</span>
                                            <span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Cancelled</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </main>

        <!-- foot -->
        <?php include(__DIR__ . "./components/foot.php"); ?>
    </div>
</div>



<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>