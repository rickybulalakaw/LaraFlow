@php 
$module = "core";
@endphp 
<x-app-layout :module="$module">
        {{ $slot }}
    
</x-app-layout>