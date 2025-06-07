<div
    class="p-6 bg-white border-b border-gray-200 lg:p-8 dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent dark:border-gray-700">

    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        <x-application-logo />
        Welcome to {{ config('app.name') }}!
    </h1>

    <p class="mt-6 text-lg leading-relaxed text-gray-700 dark:text-gray-300">
        The {{ config('app.long_name') }}, or {{ config('app.name') }}, automates processes and provides
        database-driven decision-making in human resource management. The system supports the organization's pursuit of
        certification under the Program to Institutionalize Meritocracy and Excellence in Human Resource Management
        (PRIME-HRM) of the Civil Service Commission.
    </p>
</div>

<div class="grid grid-cols-1 gap-6 p-4 bg-gray-200 bg-opacity-25 dark:bg-gray-800 md:grid-cols-2 ">
    <div>
        <div class="flex items-center">
            
<svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.6144 7.19994c.3479.48981.5999 1.15357.5999 1.80006 0 1.6569-1.3432 3-3 3-1.6569 0-3.00004-1.3431-3.00004-3 0-.67539.22319-1.29865.59983-1.80006M6.21426 6v4m0-4 6.00004-3 6 3-6 2-2.40021-.80006M6.21426 6l3.59983 1.19994M6.21426 19.8013v-2.1525c0-1.6825 1.27251-3.3075 2.95093-3.6488l3.04911 2.9345 3-2.9441c1.7026.3193 3 1.9596 3 3.6584v2.1525c0 .6312-.5373 1.1429-1.2 1.1429H7.41426c-.66274 0-1.2-.5117-1.2-1.1429Z"/>
</svg>


            <h2 class="text-xl font-semibold text-gray-900 ms-3 dark:text-white">
                <a href="{{ route('dashboard') }}">Enrollment</a>
            </h2>
        </div>

        <p class="mt-4 leading-relaxed text-gray-700 dark:text-gray-300 text-md">
            Set up the basic elements of human resource management in your agency.
        </p>

    </div>
    <div>
        <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z"
                    clip-rule="evenodd" />
            </svg>

            <h2 class="text-xl font-semibold text-gray-900 ms-3 dark:text-white">
                <a href="{{ route('dashboard') }}">Payment</a>
            </h2>
        </div>

        <p class="mt-4 leading-relaxed text-gray-700 dark:text-gray-300 text-md">
            Assign personnel to offices and positions. Manage attendance and leaves.
        </p>

    </div>
    <div>
        <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16.153 19 21 12l-4.847-7H3l4.848 7L3 19h13.153Z" />
            </svg>


            <h2 class="text-xl font-semibold text-gray-900 ms-3 dark:text-white">
                <a href="{{ route('dashboard') }}">Monitoring</a>
            </h2>
        </div>

        <p class="mt-4 leading-relaxed text-gray-700 dark:text-gray-300 text-md">
            Identify organizational priorities and document goals to guide HR and PM strategies.
        </p>

    </div>
    <div>
        <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207" />
            </svg>
            <h2 class="text-xl font-semibold text-gray-900 ms-3 dark:text-white">
                <a href="{{ route('dashboard') }}">Reports</a>
            </h2>
        </div>

        <p class="mt-4 leading-relaxed text-gray-700 dark:text-gray-300 text-md">
            Craft and agree on performance targets and monitor to ensure results and outcomes are achieved.
        </p>

    </div>

 
 
</div>
