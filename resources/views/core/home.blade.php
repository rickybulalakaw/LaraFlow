
<x-layout-core >


    <div class="py-12">
        <div class="w-10/12 mt-24 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
                        <x-application-logo />
                        Welcome to the Core Module!
                    </h1>

                    <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
                        The {{ config ('app.name') }} Core Module allows the human resource management team to set up and administer the "core" or underlying elements of managing human resources of a government agency. This includes offices, positions, and plantilla which will serve as basis for assigning personnel by the Personnel Team. The Core Module also sets up agency contexts and system settings that be referenced by other modules.  The Core Administrator only has access to user activity of the users of the system and not access to the personal data of the employees. 
                    </p>
                </div>

                <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z"/>
                            </svg>
                            
                            <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
                                <a href="{{ route ('office.index') }}">Offices</a>
                            </h2>
                        </div>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">  
                            Create offices, divisions, committees, and oversight offices, as applicable. 
                        </p>

                    </div>

                    <div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 0 0-2 2v4m5-6h8M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m0 0h3a2 2 0 0 1 2 2v4m0 0v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m18 0s-4 2-9 2-9-2-9-2m9-2h.01"/>
                            </svg>
                            
                            <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
                                <a href="{{ route ('position.index') }}">Positions </a>
                            </h2>
                        </div>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Create positions as basis for creation of plantilla items. 
                        </p>
                    </div>

                    <div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z"/>
                            </svg>
                            
                            <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
                                <a href="{{ route ('plantilla.index') }}">
                                    Plantilla
                                </a>
                            </h2>
                        </div>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Create plantilla items linked to positions and offices.
                        </p>
                    </div>

                    <div>
                        <div class="flex items-center">
                            
                            <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>
                            
                            <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
                                <a href="https://tailwindcss.com/">System Administration  </a>
                            </h2>
                        </div>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Administer the {{ config ('app.name')}} application-wide and organizational settings. Identify and assign special roles to individuals for key functions.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout-core>
