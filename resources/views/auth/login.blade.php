<x-guest-layout>
    
    {{-- <div class="lg:grid grid-cols-3 w-full " style="background-image: url('{{ asset('images/idc.jpg') }}')">
        <div class="col-span-2 object-center" >
            <div class="lg:min-h-screen flex sm:visible md:flex-col lg:justify-center items-center ">
                <div class=" bg-slate-200 border border-blue-400 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
     
                    <div class=" p-4 leading-normal">
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">When I look at your heavens, the work of your fingers, the moon and the stars, which you have set in place,</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">what is man that you are mindful of him, and the son of man that you care for him?</p>
                        <p class="text-right">
                            Psalms 8:3-4 (NIV)
                        </p>
                    </div>
                </div>

            </div>

        </div> --}}


        <x-authentication-card>

            
            <x-slot name="logo" >
                <x-authentication-card-logo />
            </x-slot>
            <div class="text-3xl  text-center font-bold font-sans text-blue-700 my-0 ">
                {{ config ('app.name') }}
            </div>
    
            <x-validation-errors class="mb-4" />
    
            @session('status')
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ $value }}
                </div>
            @endsession
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>
    
                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>
    
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
    
                    <x-button class="ms-4">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </x-authentication-card>

    {{-- </div> --}}

</x-guest-layout>
