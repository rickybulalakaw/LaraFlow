@php
$module = "personnel";
@endphp
<x-app-layout :module="$module">
    <div class="p-8">

        {{ $slot }}
    </div>


</x-app-layout>