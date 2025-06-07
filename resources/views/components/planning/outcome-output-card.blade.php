@props(['outcome', 'outcome_counter', 'outputs'])
<div class="mt-4 org-children">
    @php
        $outputCounter = 1;
    @endphp
    @if (!isset($outputs))

        NO output yet
    @else
        @foreach ($outputs as $output)
            <div class="p-4 text-white bg-blue-200 rounded shadow org-item">
                <p>
                    Output {{ $outcomeCounter }}.{{ $outputCounter }} NEw lines
                </p>

                <a href="" class="text-center">View Output details</a>
            </div>
            @php
                $outputCounter++;
            @endphp
        @endforeach
    @endif


</div>
