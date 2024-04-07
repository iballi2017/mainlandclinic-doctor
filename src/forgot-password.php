<!-- header -->
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>



<div class="mx-auto min-h-screen flex items-center justify-center">
    <div class="mx-auto w-full max-w-[800px] px-2 sm:px-6 lg:px-8">
        <div class="block mx-auto bg-white border border-gray-200 rounded-lg overflow-hidden shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="grid grid-cols-2">
                <div class="col-span-2 p-8">
                    <h1 class="text-center font-bold text-2xl text-secondary-500 uppercase">Forgot Password</h1>
                    <div class="my-8"></div>
                    <form class="" autocomplete="off">
                        <div class="grid grid-cols-12 gap-2">
                            <div class="col-span-9">
                                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                            </div>
                            <div class="col-span-3">
                                <button type="submit" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-2 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send Link</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>