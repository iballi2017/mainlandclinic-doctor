<!-- header -->
<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>



<div class="mx-auto min-h-screen flex items-center justify-center">
    <div class="mx-auto w-full max-w-lg px-2 sm:px-6 lg:px-8">
        <div class="block mx-auto bg-white border border-gray-200 rounded-lg overflow-hidden shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="grid grid-cols-2">
                <div class="col-span-2 p-8">
                    <h1 class="text-center font-bold text-2xl text-secondary-500 uppercase">Sign In</h1>

                    <div class="my-8"></div>
                    <form class="max-w-sm mx-auto" autocomplete="off">
                        <div class="mb-5">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>
                        <div class="mb-5">
                            <div class="flex items-center justify-between">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <a href="#" class="block text-sm text-[hsl(195,86%,64%)] hover:text-blue-500 font-semibold">Forgot password?</a>
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
                            <label for="remember" class="cursor-pointer ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                        </div>
                        <button type="submit" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="my-4"></div>
        <p>
            Don't have an account? <a href="./register.php" class="text-primary-500 font-semibold">Sign Up</a>
        </p>
    </div>
</div>

<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>