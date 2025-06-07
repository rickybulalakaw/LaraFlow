@php 
$module = "plan";
@endphp 
<x-app-layout :module="$module">

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Planning') }}
        </h2>
    </x-slot>

    {{ $slot }}

</x-app-layout>