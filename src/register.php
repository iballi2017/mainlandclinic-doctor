<!-- top-bar -->
<?php include_once(__DIR__ . "./components/top-bar.php"); ?>
<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<!-- main-toolbar -->
<?php include_once(__DIR__ . "./components/main-toolbar.php"); ?>


<div class="mx-auto min-h-screen flex items-center justify-center mt-10 mb-32">
    <div class="mx-auto w-full max-w-4xl px-2 sm:px-6 lg:px-8">
        <div class="block p-6 mx-auto bg-white border border-gray-200 rounded-lg overflow-hidden shadow dark:bg-gray-800 dark:border-gray-700">

            <h1 class="text-center font-bold text-2xl text-secondary-500 uppercase font-display">Sign Up</h1>

            <div class="my-8"></div>
            <form class="" autocomplete="off">
                <fieldset>
                    <legend class="block w-full border-b-2 font-semibold text-lg mb-4">Personal Information</legend>
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <label for="full_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                            <input type="text" id="full_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="email" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="phone" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                            <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="age" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                            <input type="number" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="sex" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sex</label>
                            <select id="sex" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option va;ue="male" selected>Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="regligion" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Religion</label>
                            <select id="regligion" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option va;ue="christianity" selected>Christianity</option>
                                <option value="islam">Islam</option>
                                <option value="traditionalist">Traditionalist</option>
                                <option value="atheist">Atheist</option>
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="marital_status" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marital Status</label>
                            <select id="marital_status" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="single" selected>Single</option>
                                <option value="married">Married</option>
                                <option value=" divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
                <div class="my-8"></div>
                <fieldset>
                    <legend class="block w-full border-b-2 font-semibold text-lg mb-4">Address</legend>
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <label for="address" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                            <input type="text" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="city" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Town/City</label>
                            <input type="text" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="state" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">State</label>
                            <select id="state" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="" selected>....</option>
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="zipcode" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Zip</label>
                            <input type="text" id="zipcode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>
                    </div>

                </fieldset>
                <div class="my-8"></div>
                <fieldset>
                    <legend class="block w-full border-b-2 font-semibold text-lg mb-4">Referrer</legend>
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12 sm:col-span-6">
                            <label for="informant" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Informant</label>
                            <select id="informant" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="single" selected>Toddler</option>
                                <option value="married">Aged</option>
                                <option value=" divorced">Non-english Speaker</option>
                            </select>
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="relationship" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Relationship</label>
                            <input type="text" id="relationship" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>
                    </div>
                </fieldset>
                <div class="my-8"></div>
                <fieldset>
                    <legend class="block w-full border-b-2 font-semibold text-lg mb-4">Create Password</legend>
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12 sm:col-span-6">
                            <label for="password" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="confirm_password" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                            <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                        </div>
                    </div>
                </fieldset>
                <div class="my-8"></div>
                <button type="submit" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm w-full sm:w-auto inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Register</button>

            </form>
        </div>
        <div class="my-4"></div>
        <p>
            Already have an account? <a href="./auth.php" class="text-primary-500 font-semibold">Login</a>
        </p>
    </div>
</div>

<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>