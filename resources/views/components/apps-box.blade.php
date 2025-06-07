<button type="button" data-dropdown-toggle="apps-dropdown"
    class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
    <span class="sr-only">View notifications</span>
    <!-- Icon -->
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
        </path>
    </svg>
</button>
<div class="z-50 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 shadow-lg dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
    id="apps-dropdown">
    <div
        class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-600 dark:text-gray-300">
        Apps
    </div>
    <div class="grid grid-cols-3 gap-4 p-4">
        <a href="{{ route('dashboard') }}"
            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
            <svg class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <div class="text-sm text-gray-900 dark:text-white">Core</div>
        </a>
        <a href="{{ route('dashboard') }}"
            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
            <svg aria-hidden="true"
                class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                </path>
            </svg>
            <div class="text-sm text-gray-900 dark:text-white">Personnel</div>
        </a>
        <a href="{{ route('dashboard') }}"
            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
            {{-- <svg aria-hidden="true"
                class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                    clip-rule="evenodd"></path>
            </svg> --}}
            <svg class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z"
                    clip-rule="evenodd" />
            </svg>

            <div class="text-sm text-gray-900 dark:text-white">My PDS</div>
        </a>
        <a href="{{ route('dashboard') }}"
            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
            <svg class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16.153 19 21 12l-4.847-7H3l4.848 7L3 19h13.153Z" />
            </svg>
            <div class="text-sm text-gray-900 dark:text-white">
                Planning
            </div>
        </a>
        <a href="{{ route('dashboard') }}"
            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
            <svg class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207" />
            </svg>
            <div class="text-sm text-gray-900 dark:text-white">
                Performance
            </div>
        </a>
        <a href="{{ route('dashboard') }}"
            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">

            <svg class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7H5a2 2 0 0 0-2 2v4m5-6h8M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m0 0h3a2 2 0 0 1 2 2v4m0 0v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m18 0s-4 2-9 2-9-2-9-2m9-2h.01" />
            </svg>
            <div class="text-sm text-gray-900 dark:text-white">
                Recruitment
            </div>
        </a>
        <a href="{{ route('dashboard') }}"
            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">

            <svg class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4" />
            </svg>

            <div class="text-sm text-gray-900 dark:text-white">
                Learning
            </div>
        </a>
        <a href="{{ route('dashboard') }}"
            class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">

            <svg class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="2"
                    d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
            </svg>
            <div class="text-sm text-gray-900 dark:text-white">
                Recognition
            </div>
        </a>
        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
            <svg aria-hidden="true"
                class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                </path>
            </svg>
            <div class="text-sm text-gray-900 dark:text-white">
                Logout (NotWorking)
            </div>
        </a>
    </div>
</div>
