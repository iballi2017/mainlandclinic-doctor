<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>

<div class="min-h-screen">
    <!-- Sidenav -->
    <?php include_once(__DIR__ . "./components/user-account-side-navigation.php"); ?>


    <div class="lg:ml-64">

        <!-- main toolbar -->
        <?php $pageTitle = "Patient's Report History";
        include(__DIR__ . "./components/main-toolbar.php"); ?>
        <!-- open main area -->
        <?php include_once(__DIR__ . "./components/open-main-area.php"); ?>

        <div class="grid grid-cols-12 gap-2" x-data="{ isOpenInfo: false }">
            <div x-bind:class="! isOpenInfo ? 'col-span-12' : 'hidden sm:block col-span-7'">
                <div class="h-full overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center gap-2 px-4 py-4 sm:px-6 bg-accent-600 font-semibold">
                        <button class="back-history-btn">
                            <i class="fas fa-arrow-left"></i>
                        </button>
                        <h3 class="">Report Details</h3>
                    </div>
                    <div class="px-4 py-4 sm:px-6">
                        <!-- content -->
                        <div>
                            <!-- report details -->
                            <div class="px-4 py-2 sm:py-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                <h3 class="pb-4 font-semibold border-b">Patient's Information</h3>

                                <div class="grid grid-cols-12 py-4 gap-4 items-center text-sm">
                                    <div class="transition-spacing delay-500 duration-300 ease-in-out" x-bind:class="! isOpenInfo ? 'col-span-4 lg:col-span-1' : 'lg:col-span-2'">
                                        <span>
                                            <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M35 0C15.68 0 0 15.68 0 35C0 54.32 15.68 70 35 70C54.32 70 70 54.32 70 35C70 15.68 54.32 0 35 0ZM35 14C41.755 14 47.25 19.495 47.25 26.25C47.25 33.005 41.755 38.5 35 38.5C28.245 38.5 22.75 33.005 22.75 26.25C22.75 19.495 28.245 14 35 14ZM35 63C27.895 63 19.495 60.13 13.51 52.92C19.425 48.3 26.88 45.5 35 45.5C43.12 45.5 50.575 48.3 56.49 52.92C50.505 60.13 42.105 63 35 63Z" fill="#C4C4C4" />
                                            </svg>

                                        </span>
                                    </div>
                                    <div class="transition-spacing delay-500 duration-300 ease-in-out" x-bind:class="! isOpenInfo ? 'col-span-8 lg:col-span-2' : 'lg:col-span-5'">
                                        <h6 class="font-semibold">Name</h6>
                                        <p>Bumi Salako</p>
                                    </div>
                                    <div class="transition-spacing delay-500 duration-300 ease-in-out" x-bind:class="! isOpenInfo ? 'col-span-6 lg:col-span-2' : 'lg:col-span-5'">
                                        <h6 class="font-semibold">ID Number</h6>
                                        <p>11233645BS</p>
                                    </div>
                                    <div class="transition-spacing delay-500 duration-300 ease-in-out" x-bind:class="! isOpenInfo ? 'col-span-6 lg:col-span-2' : 'lg:col-span-4'">
                                        <h6 class="font-semibold">Phone Number</h6>
                                        <p>09074664838</p>
                                    </div>
                                    <div class="transition-spacing delay-500 duration-300 ease-in-out" x-bind:class="! isOpenInfo ? 'col-span-12 lg:col-span-3' : 'lg:col-span-4'">
                                        <h6 class="font-semibold">Email Address</h6>
                                        <p class="whitespace-normal">BumiSalako0099@ghotmail.com</p>
                                    </div>
                                    <div class="lg:text-right" x-bind:class="! isOpenInfo ? 'col-span-12 lg:col-span-2' : 'lg:col-span-4'">
                                        <!-- <div x-show="isOpenInfo">Content to show on hover</div> -->
                                        <button @click="isOpenInfo = true" type="button" class="text-primary-500 bg-white border border-primary-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Info</button>
                                    </div>
                                </div>
                            </div>


                            <div class="my-4"></div>


                            <!-- medical Concerns -->
                            <div class="px-4 py-2 sm:py-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                <h3 class="pb-4 font-semibold border-b">Duration</h3>
                                <div class="pt-4 text-sm">
                                    <ul class="flex items-center gap-8">
                                        <li>
                                            <h6 class="text-base font-semibold">Date</h6>
                                            <p>23/11/2024</p>
                                        </li>
                                        <li>
                                            <h6 class="text-base font-semibold">Time</h6>
                                            <p>07:00am</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="my-4"></div>


                            <!-- Reports -->
                            <div class="px-4 py-2 sm:py-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                <h3 class="pb-4 font-semibold border-b">Reports</h3>

                                <div class="pt-4 text-sm">
                                    <h4 class="font-semibold mb-2">Primary/main</h4>
                                    <p>
                                        I am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach painI am having stomach pain
                                    </p>
                                </div>
                            </div>

                            <div class="my-4"></div>

                            <div class="px-4 py-2 sm:py-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                <h3 class="pb-4 font-semibold border-b">Doctor's Information</h3>

                                <div class="grid grid-cols-12 py-4 gap-4 items-center text-sm">
                                    <div class="transition-spacing delay-500 duration-300 ease-in-out" x-bind:class="! isOpenInfo ? 'col-span-4 lg:col-span-1' : 'lg:col-span-2'">
                                        <span>
                                            <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M35 0C15.68 0 0 15.68 0 35C0 54.32 15.68 70 35 70C54.32 70 70 54.32 70 35C70 15.68 54.32 0 35 0ZM35 14C41.755 14 47.25 19.495 47.25 26.25C47.25 33.005 41.755 38.5 35 38.5C28.245 38.5 22.75 33.005 22.75 26.25C22.75 19.495 28.245 14 35 14ZM35 63C27.895 63 19.495 60.13 13.51 52.92C19.425 48.3 26.88 45.5 35 45.5C43.12 45.5 50.575 48.3 56.49 52.92C50.505 60.13 42.105 63 35 63Z" fill="#C4C4C4" />
                                            </svg>

                                        </span>
                                    </div>
                                    <div class="transition-spacing delay-500 duration-300 ease-in-out" x-bind:class="! isOpenInfo ? 'col-span-8 lg:col-span-2' : 'lg:col-span-5'">
                                        <h6 class="font-semibold">Name</h6>
                                        <p>Bumi Salako</p>
                                    </div>
                                    <div class="transition-spacing delay-500 duration-300 ease-in-out" x-bind:class="! isOpenInfo ? 'col-span-6 lg:col-span-2' : 'lg:col-span-4'">
                                        <h6 class="font-semibold">Phone Number</h6>
                                        <p>09074664838</p>
                                    </div>
                                    <div class="transition-spacing delay-500 duration-300 ease-in-out" x-bind:class="! isOpenInfo ? 'col-span-12 lg:col-span-3' : 'lg:col-span-4'">
                                        <h6 class="font-semibold">Phone Number</h6>
                                        <p class="whitespace-normal">BumiSalako0099@ghotmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-5" x-show="isOpenInfo">
                <div class="h-full overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                    <div class="px-4 py-4 sm:px-6">

                        <!-- content -->
                        <div>
                            <!-- appointment details -->
                            <h3 class="pb-4 font-semibold border-b flex items-center gap-4">
                                <button @click="isOpenInfo = false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.40002 18.6538L5.34619 17.6L10.9462 12L5.34619 6.40002L6.40002 5.34619L12 10.9462L17.6 5.34619L18.6538 6.40002L13.0538 12L18.6538 17.6L17.6 18.6538L12 13.0538L6.40002 18.6538Z" fill="black" />
                                    </svg>
                                </button>
                                Customers Information
                            </h3>

                            <div class="grid grid-cols-12 py-4 gap-4 items-center text-sm">
                                <div class="col-span-12 sm:col-span-2 row-span-4">
                                    <span>
                                        <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M35 0C15.68 0 0 15.68 0 35C0 54.32 15.68 70 35 70C54.32 70 70 54.32 70 35C70 15.68 54.32 0 35 0ZM35 14C41.755 14 47.25 19.495 47.25 26.25C47.25 33.005 41.755 38.5 35 38.5C28.245 38.5 22.75 33.005 22.75 26.25C22.75 19.495 28.245 14 35 14ZM35 63C27.895 63 19.495 60.13 13.51 52.92C19.425 48.3 26.88 45.5 35 45.5C43.12 45.5 50.575 48.3 56.49 52.92C50.505 60.13 42.105 63 35 63Z" fill="#C4C4C4" />
                                        </svg>

                                    </span>
                                </div>
                                <div class="col-span-12 sm:col-span-10">
                                    <h6 class="font-semibold">Name</h6>
                                    <p>Bumi Salako</p>
                                </div>
                                <div class="col-span-12 sm:col-span-10">
                                    <h6 class="font-semibold">ID Number</h6>
                                    <p>11233645BS</p>
                                </div>
                                <div class="col-span-12 sm:col-span-10">
                                    <h6 class="font-semibold">Phone Number</h6>
                                    <p>09074664838</p>
                                </div>
                                <div class="col-span-12 sm:col-span-10">
                                    <h6 class="font-semibold">Email Address</h6>
                                    <p class="whitespace-normal">BumiSalako0099@ghotmail.com</p>
                                </div>
                            </div>

                            <div class="my-4"></div>


                            <!-- payment information -->
                            <div class="px-4 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">

                                <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                                    <ul class="flex flex-wrap -mb-px">
                                        <li class="me-2">
                                            <a href="user-appointment-details.php?id=123&details=1&chat=0&medical-history=1&medical-lab=0" class="inline-block p-4 font-semibold text-primary-500 border-b-2 border-primary-500 rounded-t-lg active dark:text-primary-400 dark:border-primary-400" aria-current="page">
                                                Medical History
                                            </a>
                                        </li>
                                        <li class="me-2">
                                            <a href="user-appointment-details.php?id=123&details=1&chat=0&medical-history=0&medical-lab=1" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">
                                                Medical Lab
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- medical history content -->
                                <div class="py-4 text-sm">
                                    <dl>
                                        <dt class="font-semibold mb-2">Past Medical History</dt>
                                        <dd class="mb-4">
                                            Asthma, Diabetes, Seizures (Convulsions)
                                        </dd>
                                        <dt class="font-semibold mb-2">Past Surgical History</dt>
                                        <dd>
                                            Appendix, Tooth removed
                                        </dd>
                                    </dl>
                                    <div class="my-4"></div>
                                    <section>
                                        <h5 class="text-lg font-bold mb-4">Drug and Allergy History</h5>
                                        <dl>
                                            <dt class="font-semibold mb-2">Are you on any routine medications?</dt>
                                            <dd class="mb-4">
                                                Yes
                                            </dd>
                                            <dt class="font-semibold mb-2">Specific routine medications</dt>
                                            <dd class="mb-4">
                                                AMAPHINE SJSDKK
                                            </dd>
                                            <dt class="font-semibold mb-2">Allergies or adverse reactions to medications?</dt>
                                            <dd class="mb-4">
                                                Yes
                                            </dd>
                                            <dt class="font-semibold mb-2">Specific Allergies or adverse reactions to medications</dt>
                                            <dd>
                                                Sneezing
                                            </dd>
                                        </dl>
                                    </section>
                                    <div class="my-4"></div>
                                    <section>
                                        <h5 class="text-lg font-bold mb-4">Additional Information</h5>
                                        <dl>
                                            <dt class="font-semibold mb-2">Other medical conditions or concerns?</dt>
                                            <dd class="mb-4">
                                                Yes
                                            </dd>
                                        </dl>
                                    </section>
                                </div>

                                <hr> <!-- remove horizontal line after implementation -->

                                <!-- medical lab content -->
                                <div class="py-4 text-sm">
                                    <div class="flex items-center gap-8">
                                        <div>Bumi Salako.PDF</div>
                                        <button class="text-blue-500 hover:text-blue-700 font-semibold">Download</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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