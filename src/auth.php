<!-- header -->
<?php include_once("./components/header.php"); ?>
<?php

$error = true;

?>


<div class="mx-auto min-h-screen flex items-center justify-center">
    <div class="mx-auto w-full max-w-5xl px-2 sm:px-6 lg:px-8">
        <div class="block mx-auto w-full bg-white border border-gray-200 rounded-lg overflow-hidden shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="grid grid-cols-2">
                <div class="hidden sm:block col-span-2 sm:col-span-1 bg-dark-room-surgeon text-white">
                    <div class="h-full flex flex-col items-center justify-center">
                        <h2 class="uppercase font-bold text-3xl">Sign Up</h2>
                        <p class="max-w-60 text-center">If you dont have a personal account please sign up</p>
                        <div class="my-2"></div>
                        <a href="./register.php" class="inline-flex items-center justify-center w-full max-w-40 mx-auto border border-white rounded-md py-2 px-8 text-sm hover:bg-white hover:text-gray-700">Register</a>
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-1 p-6">
                    <h1 class="text-center font-bold text-2xl text-secondary-500">Sign Into Your Account</h1>
                    <p class="text-center text-accent-750">Use your email to login</p>

                    <div class="my-4"></div>
                    <form class="max-w-sm mx-auto" autocomplete="off">
                        <div class="mb-5">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>
                        <div class="mb-5">
                            <div class="flex items-center justify-between">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <a href="#" class="block text-sm text-blue-500 font-semibold">Forgot password?</a>
                            </div>
                            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>


                        <!-- Error field sample -->
                        <!-- <div class="my-8 bg-gray-200 p-2 rounded-lg">
                            <label for="username-error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Error field</label>
                            <input type="text" id="username-error" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500" placeholder="Bonnie Green">
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Username already taken!</p>
                        </div> -->
                        <!--  -->


                        <div class="flex items-start mb-5">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                        </div>
                        <button type="submit" class="text-white bg-primary-500 hover:bg-primary-800 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include_once("./components/footer.php"); ?>