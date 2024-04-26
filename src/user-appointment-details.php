<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>

<div class="min-h-screen">
    <!-- Sidenav -->
    <?php include_once(__DIR__ . "./components/user-account-side-navigation.php"); ?>


    <div class="lg:ml-64">

        <!-- main toolbar -->
        <?php $pageTitle = "Appointments";
        include(__DIR__ . "./components/main-toolbar.php"); ?>
        <!-- open main area -->
        <?php include_once(__DIR__ . "./components/open-main-area.php"); ?>

        <div class="grid grid-cols-12 gap-2" x-data="{ isOpenInfo: false }">
            <div x-bind:class="! isOpenInfo ? 'col-span-12' : 'col-span-6'">
                <div class="h-full overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center gap-2 px-4 py-2 sm:px-6 sm:py-4 bg-accent-600 font-semibold">
                        <button class="back-history-btn">
                            <i class="fas fa-arrow-left"></i>
                        </button>
                        <h3 class="">Appointment Details</h3>
                    </div>
                    <div class="px-4 py-2 sm:px-6 sm:py-4">
                        <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px">
                                <li class="me-2">
                                    <a href="#" class="inline-block p-4 font-semibold text-primary-500 border-b-2 border-primary-500 rounded-t-lg active dark:text-primary-400 dark:border-primary-400" aria-current="page">Details</a>
                                </li>
                                <li class="me-2">
                                    <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Chat</a>
                                </li>
                                <li>
                                    <a class="inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500">Disabled</a>
                                </li>
                            </ul>
                        </div>


                        <div class="my-4"></div>
                        <!-- content -->
                        <div>
                            <!-- appointment details -->
                            <div class="px-4 py-2 sm:py-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                <h3 class="pb-4 font-semibold border-b">Customers Information</h3>

                                <div class="grid grid-cols-12 py-4 gap-4 items-center text-sm">
                                    <div class="" x-bind:class="! isOpenInfo ? 'col-span-4 lg:col-span-1' : 'lg:col-span-2'">
                                        <span>
                                            <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M35 0C15.68 0 0 15.68 0 35C0 54.32 15.68 70 35 70C54.32 70 70 54.32 70 35C70 15.68 54.32 0 35 0ZM35 14C41.755 14 47.25 19.495 47.25 26.25C47.25 33.005 41.755 38.5 35 38.5C28.245 38.5 22.75 33.005 22.75 26.25C22.75 19.495 28.245 14 35 14ZM35 63C27.895 63 19.495 60.13 13.51 52.92C19.425 48.3 26.88 45.5 35 45.5C43.12 45.5 50.575 48.3 56.49 52.92C50.505 60.13 42.105 63 35 63Z" fill="#C4C4C4" />
                                            </svg>

                                        </span>
                                    </div>
                                    <div class="" x-bind:class="! isOpenInfo ? 'col-span-8 lg:col-span-2' : 'lg:col-span-5'">
                                        <h6 class="font-semibold">Name</h6>
                                        <p>Bumi Salako</p>
                                    </div>
                                    <div class="" x-bind:class="! isOpenInfo ? 'col-span-6 lg:col-span-2' : 'lg:col-span-5'">
                                        <h6 class="font-semibold">ID Number</h6>
                                        <p>11233645BS</p>
                                    </div>
                                    <div class="" x-bind:class="! isOpenInfo ? 'col-span-6 lg:col-span-2' : 'lg:col-span-4'">
                                        <h6 class="font-semibold">Phone Number</h6>
                                        <p>09074664838</p>
                                    </div>
                                    <div class="" x-bind:class="! isOpenInfo ? 'col-span-12 lg:col-span-3' : 'lg:col-span-4'">
                                        <h6 class="font-semibold">Phone Number</h6>
                                        <p class="whitespace-normal">BumiSalako0099@ghotmail.com</p>
                                    </div>
                                    <div class="lg:text-right" x-bind:class="! isOpenInfo ? 'col-span-12 lg:col-span-2' : 'lg:col-span-4'">
                                        <!-- <div x-show="isOpenInfo">Content to show on hover</div> -->
                                        <button @click="isOpenInfo = !isOpenInfo" type="button" class="text-primary-500 bg-white border border-primary-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Info</button>
                                    </div>
                                </div>

                                <div>

                                </div>
                            </div>


                            <div class="my-4"></div>


                            <!-- medical Concerns -->
                            <div class="px-4 py-2 sm:py-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                <h3 class="pb-4 font-semibold border-b">Medical Concerns</h3>

                                <div class="py-4 text-sm">
                                    <dl>
                                        <dt class="font-semibold mb-2">Primary/main</dt>
                                        <dd class="mb-4">
                                            I am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach pain
                                        </dd>
                                        <dt class="font-semibold mb-2">Other</dt>
                                        <dd>
                                            Had flu before now Had flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before nowHad flu before now
                                        </dd>
                                    </dl>
                                </div>
                            </div>


                            <div class="my-4"></div>


                            <!-- appointment preview -->
                            <div class="px-4 py-2 sm:py-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">

                                <div class="border rounded-lg">
                                    <div class="flex justify-between flex-wrap sm:flex-nowrap text-sm">
                                        <div class="p-2 sm:p-4 leading-normal">
                                            <h5 class="font-semibold text-lg">Telemedicine</h5>
                                            <h6 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">₦2,400.00</h6>
                                            <span class="inline-block mb-2 bg-orange-100 text-orange-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-orange-900 dark:text-orange-300">Pending</span>
                                            <span class="inline-block mb-2 bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Completed</span>
                                            <span class="inline-block mb-2 bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-900 dark:text-gray-300">Cancelled</span>
                                            <div class="flex items-center gap-4 flex-nowrap mb-3 font-normal text-gray-700 dark:text-gray-400">
                                                <span>Date:&nbsp;15-03-2023</span>
                                                <span>Time:&nbsp;07:00am</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <a href="#" class="rounded py-2 px-8 block text-center text-nowrap text-xs bg-primary-500 hover:bg-primary-600 text-white font-semibold">
                                                Start
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="my-4"></div>


                            <!-- payment information -->
                            <div class="px-4 py-2 sm:py-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                <h3 class="pb-4 font-semibold border-b">Payment information</h3>

                                <div class="py-4 text-sm">
                                    <dl>
                                        <dt class="font-semibold mb-2">Payment method</dt>
                                        <dd class="mb-4">
                                            Pay with cards, Bank Transfer or USSD
                                        </dd>
                                        <dt class="font-semibold mb-2">Payment Details</dt>
                                        <dd>
                                            Items total; ₦25, 000.00
                                        </dd>
                                    </dl>
                                    <div class="my-4"></div>
                                    <p class="text-base">Total: ₦25,000.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-6">
                SIDE B
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