@php 
$module = "learn";
@endphp 
<x-app-layout :module="$module">
    
    {{ $slot }}

</x-app-layout>