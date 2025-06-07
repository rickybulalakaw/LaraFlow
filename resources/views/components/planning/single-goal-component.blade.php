<div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="goal-{{$goal->id}}" role="tabpanel" aria-labelledby="goal-{{$goal->id}}-tab">
        <h2 class="mb-2 text-lg text-bold">Goal Statement: {{$goal->statement}}</h2>
        <div class="flex gap-4 p-4 bg-blue-100 dark:bg-blue-700">
  
            <a href="">
                <x-flowbite-button buttonColor="blue" href="{{route('dashboard')}}"> 
                    Edit Goal
                </x-flowbite-button>

            </a>

            <x-flowbite-form-modal
                modal_target="delete-goal-{{$goal->id}}"
                modal_title="Confirm Delete Goal"
            >
            <x-slot name="flowbite_button">
                <x-flowbite-button
                data-modal-target="delete-goal-{{$goal->id}}" 
                data-modal-toggle="delete-goal-{{$goal->id}}"
                buttonColor="red"
            
              >
                Delete Goal
              </x-flowbite-button>
            </x-slot>
                <x-slot name="form_content">
                    <div class="p-4 text-center md:p-5">
                        <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete the goal <span class="text-blue-500">{{$goal->statement}}</span>?</h3>
                        <form action="{{route('goal.delete', $goal->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button data-modal-hide="delete-goal-{{$goal->id}}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Yes, I'm sure
                            </button>

                            <button data-modal-hide="delete-goal-{{$goal->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                        </form>
                    </div>

                </x-slot>

            </x-flowbite-form-modal>
    
            <livewire:planning.add-outcome-livewire :goal="$goal" />
            
        </div>

        <!-- Goal Summary  -->
        <div class="p-4 my-4 bg-blue-200 dark:bg-blue-700 dark:text-white">
            <h2 class="text-bold">Goal Outcomes</h2>
            <div class="flex flex-col gap-4">
                @if($goal->outcomes->count() == 0)
                    <p class="text-sm text-gray-900 dark:text-gray-400">No outcomes registered yet</p>
            
                @else  
       
                <ol class="mx-4 list-decimal list-outside">
                    @foreach($goal->outcomes as $outcome)
                        <li> {{$outcome->statement}}</li>
                  
                    @endforeach

                </ol>
                @endif
            </div>
            

        </div>

        @if($goal->outcomes->count() >= 1)
        <div class="p-4 my-4 bg-blue-200 dark:bg-blue-700 dark:text-white">
            <h2 class="text-bold">Plan Details for Goal</h2>
            <p class="text-sm">Arranged by Outcome</p>
            

            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#outcome-tabs" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                    @php
                        $outcomeCounter = 1;
                    @endphp

                    @foreach($goal->outcomes as $outcome)
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab-outcome-{{$outcome->id}}" data-tabs-target="#outcome-tab-{{$outcome->id}}" type="button" role="tab" aria-controls="profile" aria-selected="false">Outcome #{{$outcomeCounter}}</button>
                    </li>
                    @php
                        $outcomeCounter++;
                    @endphp
                    @endforeach
                </ul>
            </div>
            <div id="outcome-tabs">
                @foreach($goal->outcomes as $outcomeb)
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="outcome-tab-{{$outcomeb->id}}" role="tabpanel" aria-labelledby="profile-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Outcome Statement: {{$outcomeb->statement}}.</p>
                    <div class="p-4">

                        <div class="flex gap-4">
                            @can('create', Modules\Planning\Models\OrganizationalOutput::class)
                                
                            <livewire:planning.add-organizational-output-livewire :outcome="$outcomeb"/>
                            <livewire:planning.add-organizational-output-from-other-plan-livewire :outcome="$outcomeb" />
                            <a href="{{route('outcome.outputs.show', $outcomeb->uuid)}}" target="_blank">
                                <x-flowbite-button buttonColor="blue">
                                    Focus on this outcome
                                </x-flowbite-button>

                            </a>
                            @endcan
                                
                  

                        </div>

                        <livewire:planning.outputs-of-outcome-table :outcome="$outcomeb"/>
                    </div>
                </div>
                @endforeach
            
            </div>

        </div>
        @endif
        
    </div>