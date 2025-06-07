<x-guest-layout>
    <div class="font-[sans-serif] bg-gradient-to-r from-purple-900 via-purple-800 to-purple-600 text-gray-800">
        <div class="flex items-center justify-center min-h-screen p-4 fle-col lg:p-6">
            <div class="grid items-center w-full max-w-6xl gap-10 md:grid-cols-2">
                <div>
                    <a href="">
                        <h1 class="font-sans text-2xl font-semibold text-white">GraceIT Software Development Services
                        </h1>
                    </a>
                    <h2 class="text-4xl font-extrabold lg:leading-[50px] text-white">
                        Integrated HR Information System (IHRIS)
                    </h2>
                    <p class="mt-6 text-sm text-white">
                        This page is for applicants. Current personnel should coordinate with the @php
                            if (config('app.admin_office_is_separate_from_hr') === true) {
                                echo config('app.system_hr_office');
                            } else {
                                echo config('app.system_admin_office');
                            }
                        @endphp for
                        access.
                    </p>
                    <p class="mt-6 text-sm text-white">
                        Applicants get access to internal application tools to monitor status of their application.
                    </p>
                    <p class="mt-6 text-sm text-white">Already have have an account? <a href="{{ route('login') }}"
                            class="ml-1 font-semibold text-white underline hover:text-cyan-400">Log in here</a></p>
                </div>

                <form method="POST" action="{{ route('register') }}"
                    class="w-full max-w-md px-6 py-8 space-y-6 bg-white rounded-xl md:ml-auto">
                    @csrf
                    <h3 class="mb-12 text-3xl font-bold">
                        Applicant Registration Form
                    </h3>

                    <div>
                        <input name="name" type="text" autofocus
                            class="bg-gray-100 focus:bg-transparent w-full text-sm px-4 py-3.5 rounded-md outline-gray-800"
                            placeholder="First Name" />
                        <x-input-error for="name" />
                    </div>
                    <div>
                        <input name="last_name" type="text"
                            class="bg-gray-100 focus:bg-transparent w-full text-sm px-4 py-3.5 rounded-md outline-gray-800"
                            placeholder="Last Name" />
                        <x-input-error for="last_name" />
                    </div>

                    <div>
                        <input name="email" type="email" autocomplete="email"
                            class="bg-gray-100 focus:bg-transparent w-full text-sm px-4 py-3.5 rounded-md outline-gray-800"
                            placeholder="Active Email address" />
                        <x-input-error for="email" />
                    </div>
                    <div>
                        <input name="password" type="password" autocomplete="current-password"
                            class="bg-gray-100 focus:bg-transparent w-full text-sm px-4 py-3.5 rounded-md outline-gray-800"
                            placeholder="Password" />
                        <x-input-error for="password" />
                    </div>
                    <div>
                        <input name="password_confirmation" type="password"
                            class="bg-gray-100 focus:bg-transparent w-full text-sm px-4 py-3.5 rounded-md outline-gray-800"
                            placeholder="Retype Password" />
                        <x-input-error for="password_confirmation" />
                    </div>

                    <div>
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />

                                        <div class="ms-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' =>
                                                    '<a target="_blank" href="' .
                                                    route('terms.show') .
                                                    '" class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">' .
                                                    __('Terms of Service') .
                                                    '</a>',
                                                'privacy_policy' =>
                                                    '<a target="_blank" href="' .
                                                    route('policy.show') .
                                                    '" class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">' .
                                                    __('Privacy Policy') .
                                                    '</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                        @endif
                    </div>


                    <div>
                        <button type="submit"
                            class="w-full shadow-xl py-3 px-6 text-sm font-semibold rounded-md text-white bg-gray-800 hover:bg-[#222] focus:outline-none">
                            Submit
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>


</x-guest-layout>
