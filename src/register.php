<!-- header -->
<?php include_once("./components/header.php"); ?>
<?php

$error = true;

?>


<div class="mx-auto min-h-screen flex items-center justify-center">
    <div class="mx-auto w-full max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="block mx-auto w-full bg-white border border-gray-200 rounded-lg overflow-hidden shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="grid grid-cols-2">
                <div class="hidden sm:block col-span-2 sm:col-span-1 bg-dark-room-surgeon text-white">
                    <div class="h-full flex flex-col items-center justify-center">
                        <h2 class="uppercase font-bold text-3xl">Sign In</h2>
                        <p class="max-w-60 text-center">If you have a personal account, please sign in</p>
                        <div class="my-2"></div>
                        <a href="./auth.php" class="inline-flex items-center justify-center w-full max-w-40 mx-auto border border-white rounded-sm py-2 px-8 text-sm hover:bg-white hover:text-gray-700">Login</a>
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-1 p-6">
                    <h1 class="text-center font-bold text-2xl text-secondary-500">Create an Account</h1>
                    <p class="text-center text-accent-750">Use valid details</p>

                    <div class="my-4"></div>
                    <form class="max-w-sm mx-auto">
                        <div class="mb-5">
                            <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                            <input type="text" id="full_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="name@flowbite.com" required />
                        </div>
                        <div class="mb-5">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="name@flowbite.com" required />
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>
                        <div class="mb-5">
                            <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                            <input type="confirm_password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>


                        <div class="flex items-start mb-5">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                        </div>
                        <button type="submit" class="text-white bg-primary-500 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Register</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include_once("./components/footer.php"); ?>