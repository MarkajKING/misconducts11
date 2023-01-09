@props(['confidants'])

@if ($confidants->count() > 0)

    <div class="flex justify-content-center">
        @foreach($confidants as $confidant)
            <x-myinfo-card
                :confidant="$confidant"></x-myinfo-card>
            {{--Col-span to have three next to eachother --}}
        @endforeach
    </div>

@endif
