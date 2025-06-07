@props(['plan']) 
@php 
$goalCount = $plan->goals->count();
$goalCounter = 1;
@endphp
<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
        @foreach($plan->goals as $goal)
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#goal-{{$goal->id}}" type="button" role="tab" aria-controls="profile" aria-selected="false">Goal {{$goalCounter}}</button>
        </li>
        @php $goalCounter++; @endphp 
        @endforeach
        
    </ul>
</div>

<div id="default-styled-tab-content">
    @foreach($plan->goals as $goalb)
    <x-planning.single-goal-component :goal="$goalb"/>
    
    @endforeach 
    
</div>