<!-- doctor-appointment-chat-messenger-app works! -->
<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>

<div class="min-h-screen">
    <!-- Sidenav -->
    <?php include_once(__DIR__ . "./components/doctor-account-side-navigation.php"); ?>


    <div class="lg:ml-64">

        <!-- main toolbar -->
        <?php $pageTitle = "Appointments";
        include(__DIR__ . "./components/main-toolbar.php"); ?>
        <!-- open main area -->
        <?php include_once(__DIR__ . "./components/open-main-area.php"); ?>

        <div class="grid grid-cols-12 gap-2" x-data="{ isOpenInfo: false }">
            <div x-bind:class="! isOpenInfo ? 'col-span-12' : 'hidden sm:block col-span-7'">
                <div class="h-full overflow-hidden bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center gap-2 px-2 py-4 sm:px-6 bg-accent-600 font-semibold">
                        <button class="back-history-btn">
                            <i class="fas fa-arrow-left"></i>
                        </button>
                        <h3 class="">Appointment Details</h3>
                    </div>
                    <div class="px-2 py-4 sm:px-6">

                        <!-- doctor-appointment-details-toolbar -->
                        <?php include_once(__DIR__ . "./components/doctor-appointment-details-toolbar.php"); ?>

                        <div class="my-4"></div>

                        <!-- CONTENT -->

                        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden dark:bg-gray-800 dark:border-gray-700">

                            <div class="p-2 sm:p-4 h-80 min-h-80 text-sm overflow-auto primary-scrollbar">
                                <!-- Typing... -->

                                <ul class="chat-screen | flex flex-col items-center gap-8">
                                    <li class="streams w-full">
                                        <div class="date text-center block mx-auto mb-10">
                                            <span class="inline-block bg-accent-400 text-accent-720 rounded-lg px-4 py-2">FEB 13, 2024</span>
                                        </div>
                                        <ul class="events | flex flex-col gap-4">
                                            <li data-type="host" class="event">
                                                <div class="inline-block max-w-lg">
                                                    <div class="content">
                                                        <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                            <div class="flex items-center justify-between gap-8 mb-2">
                                                                <div class="font-bold">Me</div>
                                                                <div class="time | text-accent-720">07:20pm</div>
                                                            </div>
                                                            <div class="body">Hello Mr Alade</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-type="client" class="event">
                                                <div class="inline-block max-w-lg">
                                                    <div class="content">
                                                        <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                            <div class="flex items-center justify-between gap-8 mb-2">
                                                                <div class="font-bold">Mr Alade</div>
                                                                <div class="time | text-accent-720">07:20pm</div>
                                                            </div>
                                                            <div class="body">Hi</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-type="host" class="event">
                                                <div class="inline-block max-w-lg">
                                                    <div class="content">
                                                        <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                            <div class="flex items-center justify-between gap-8 mb-2">
                                                                <div class="font-bold">Me</div>
                                                                <div class="time | text-accent-720">07:22pm</div>
                                                            </div>
                                                            <div class="body">Did you get the memo?</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-type="client" class="event">
                                                <div class="inline-block max-w-lg">
                                                    <div class="content">
                                                        <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                            <div class="flex items-center justify-between gap-8 mb-2">
                                                                <div class="font-bold">Mr Alade</div>
                                                                <div class="time | text-accent-720">07:20pm</div>
                                                            </div>
                                                            <div class="body">Haven't checked my mail today.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-type="client" class="event">
                                                <div class="inline-block max-w-lg">
                                                    <div class="content">
                                                        <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                            <div class="flex items-center justify-between gap-8 mb-2">
                                                                <div class="font-bold">Mr Alade</div>
                                                                <div class="time | text-accent-720">07:20pm</div>
                                                            </div>
                                                            <div class="body"> I'm goin to look it up rightaway</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-type="host" class="event">
                                                <div class="inline-block max-w-lg">
                                                    <div class="content">
                                                        <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                            <div class="flex items-center justify-between gap-8 mb-2">
                                                                <div class="font-bold">Me</div>
                                                                <div class="time | text-accent-720">07:25pm</div>
                                                            </div>
                                                            <div class="body">Please do, it is very important</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-type="client" class="event">
                                                <div class="inline-block max-w-lg">
                                                    <div class="content">
                                                        <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                            <div class="flex items-center justify-between gap-8 mb-2">
                                                                <div class="font-bold">Mr Alade</div>
                                                                <div class="time | text-accent-720">07:25pm</div>
                                                            </div>
                                                            <div class="body">Thank you.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="streams w-full">
                                        <div class="date text-center block mx-auto mb-10">
                                            <span class="inline-block bg-accent-400 text-accent-720 rounded-lg px-4 py-2">FEB 15, 2024</span>
                                        </div>
                                        <ul class="events | flex flex-col gap-4">
                                            <li data-type="client" class="event">
                                                <div class="inline-block max-w-lg">
                                                    <div class="content">
                                                        <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                            <div class="flex items-center justify-between gap-8 mb-2">
                                                                <div class="font-bold">Mr Alade</div>
                                                                <div class="time | text-accent-720">08:00am</div>
                                                            </div>
                                                            <div class="body">Are you in his office?</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-type="host" class="event">
                                                <div class="inline-block max-w-lg">
                                                    <div class="content">
                                                        <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                            <div class="flex items-center justify-between gap-8 mb-2">
                                                                <div class="font-bold">Me</div>
                                                                <div class="time | text-accent-720">09:20am</div>
                                                            </div>
                                                            <div class="body">Not yet</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-type="host" class="event">
                                                <div class="inline-block max-w-lg">
                                                    <div class="content">
                                                        <div class="inner px-4 py-2 text-dark-900 rounded-lg">
                                                            <div class="flex items-center justify-between gap-8 mb-2">
                                                                <div class="font-bold">Me</div>
                                                                <div class="time | text-accent-720">09:20am</div>
                                                            </div>
                                                            <div class="body">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio rem fugit facilis consequuntur non sed inventore officiis enim iste maxime laboriosam laudantium, labore soluta corrupti reprehenderit ab tenetur nesciunt accusamus veritatis expedita modi possimus? Ut, quod impedit quo iure suscipit eos vel perspiciatis tempore assumenda molestiae ab eveniet sed optio.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>


                            <div class="px-2 py-4 sm:x-4 sm:py-8 bg-white border-t border-gray-200 rounded-b-lg dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex items-center gap-2">
                                    <button title="Refresh messages" aria-label="refresh messages" class="bg-gray-50 border border-gray-300 text-gray-900 rounded sm:rounded-lg focus:ring-secondary-500 focus:border-secondary-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-secondary-500">
                                        <i class="fas fa-redo text-secondary-500"></i>
                                    </button>
                                    <div class="w-full relative">
                                        <form action="">
                                            <button type="submit" class="absolute inset-y-0 end-0 flex items-center pe-3.5">
                                                <img src="./assets/icons/paper-plane-blue.svg" alt="">
                                            </button>
                                            <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 rounded sm:rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pe-10 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-primary-500" required>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!--  -->

                            <div class="px-2 py-4 sm:x-4 sm:py-8">
                                <hr class="mb-4 sm:mb-8">
                                <p class="text-center text-accent-720">Appointment completed. Chat will expire in 5days</p>
                                <div class="my-4"></div>
                                <button type="submit" class="text-white bg-primary-500 hover:bg-primary-800 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full max-w-md block mx-auto px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    Export chat
                                </button>
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