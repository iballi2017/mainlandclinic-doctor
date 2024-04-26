<!-- header -->
<?php include_once(__DIR__ . "./components/header.php"); ?>
<div class="my-4"></div>
<div class="mx-auto max-w-5xl px-2 sm:px-6 lg:px-8">
    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-md dark:bg-gray-800 dark:border-gray-700">
        <h1 class="p-4 text-xl font-semibold bg-secondary-500 text-white">Patient's medical report</h1>

        <div class="p-4">
            <form action="">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <label for="clinic_id" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mainland clinics ID number</label>
                        <input type="text" id="clinic_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                    </div>
                    <div class="col-span-12 sm:col-span-4">
                        <label for="first_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                    </div>
                    <div class="col-span-12 sm:col-span-4">
                        <label for="middle_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle Name</label>
                        <input type="text" id="middle_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                    </div>
                    <div class="col-span-12 sm:col-span-4">
                        <label for="last_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                        <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                    </div>
                    <div class="col-span-12">
                        <label for="suffix" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Suffix <small class="text-accent-700">(Optional)</small></label>
                        <select id="suffix" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected>...</option>
                        </select>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="email" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="phone" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                        <input type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="dob" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Birth</label>
                        <input type="date" id="dob" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="sex" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sex</label>
                        <select id="sex" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="male" selected>Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="col-span-12">
                        <label for="report" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Report
                        </label>
                        <textarea name="report" id="report" cols="30" rows="5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required></textarea>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="appointment_date" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Appointment date</label>
                        <input type="date" id="appointment_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="appointment_time" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Appointment time</label>
                        <select id="appointment_time" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="" selected>---</option>
                        </select>
                    </div>

                    <div class="col-span-12">
                        <hr class="my-4">
                        <fieldset>
                            <legend class="sr-only">Doctor's Information</legend>
                            <div class="grid grid-cols-12 gap-4">
                                <div class="col-span-12 sm:col-span-4">
                                    <label for="doctor_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Doctor's Name</label>
                                    <input type="email" id="doctor_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                </div>
                                <div class="col-span-12 sm:col-span-4">
                                    <label for="doctor_email" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Doctor's Email Address</label>
                                    <input type="email" id="doctor_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                </div>
                                <div class="col-span-12 sm:col-span-4">
                                    <label for="doctor_phone" class="cursor-pointer block mb-2 text-sm font-medium text-gray-900 dark:text-white">Doctor's Phone Number</label>
                                    <input type="text" id="doctor_phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-span-12">
                        <div class="flex items-center gap-4">
                            <button type="submit" class="step-control prev-btn text-white bg-primary-500 hover:bg-primary-600 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Submit</button>
                            <!-- <button type="button" class="back-history-btn text-white bg-gray-300 hover:bg-gray-400 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm inline-block px-5 sm:px-8 py-2.5 text-center">Go back</button> -->
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="my-8"></div>
<!-- footer -->
<?php include_once(__DIR__ . "./components/footer.php"); ?>