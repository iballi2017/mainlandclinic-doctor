<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-full lg:w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full py-4 overflow-y-auto bg-primary-650">
        <ul class="space-y-2 font-medium text-sm">
            <li>
                <div class="px-3 py-2 flex items-center justify-between gap-4">
                    <div class="max-w-24">
                        <img src="./assets/images/brand-logo-inverse.svg" alt="brand logo">
                    </div>


                    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Close sidebar</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.40002 18.6538L5.34619 17.6L10.9462 12L5.34619 6.40002L6.40002 5.34619L12 10.9462L17.6 5.34619L18.6538 6.40002L13.0538 12L18.6538 17.6L17.6 18.6538L12 13.0538L6.40002 18.6538Z" fill="white" />
                        </svg>
                    </button>
                </div>
            </li>
            <li>
                <a href="user-dashboard.php" class="hover-line-after flex items-center px-3 py-2 text-accent-50 rounded dark:text-white hover:bg-primary-630 dark:hover:bg-gray-700 group">
                    <i class="fas fa-chart-pie"></i>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="user-appointments.php" class="hover-line-after flex items-center px-3 py-2 text-accent-50 rounded dark:text-white hover:bg-primary-630 dark:hover:bg-gray-700 group">
                    <i class="far fa-calendar-check"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Appointments</span>
                    <span class="inline-flex items-center justify-center px-2 ms-3 text-xs font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">23</span>
                </a>
            </li>
            <li>
                <a href="patient-report-history.php" class="hover-line-after flex items-center px-3 py-2 text-accent-50 rounded dark:text-white hover:bg-primary-630 dark:hover:bg-gray-700 group">
                    <i class="fas fa-history"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Patient's report history</span>
                </a>
            </li>
            <li>
                <a href="user-notification.php" class="hover-line-after flex items-center px-3 py-2 text-accent-50 rounded dark:text-white hover:bg-primary-630 dark:hover:bg-gray-700 group">
                    <i class="far fa-bell"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Notification</span>
                    <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-xs font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                </a>
            </li>
            <li>
                <a href="user-settings.php" class="hover-line-after flex items-center px-3 py-2 text-accent-50 rounded dark:text-white hover:bg-primary-630 dark:hover:bg-gray-700 group">
                    <i class="fas fa-cog"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Settings</span>
                </a>
            </li>
            <li class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
                <a href="logout.php" class="hover-line-after flex items-center px-3 py-2 text-red-500 rounded dark:text-red-500 hover:bg-white dark:hover:bg-white group">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                </a>
            </li>
        </ul>
    </div>
</aside>