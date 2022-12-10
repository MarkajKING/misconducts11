<!--
Blade component of the gird for each confidant on the page /vertrouwenspersonen.
-->

@props(['confidants'])

@if ($confidants->count() > 0)

    <div class="lg:grid lg:grid-cols-3">
        @foreach($confidants as $confidant)
            <x-all-confidants-card
                :confidant="$confidant"></x-all-confidants-card>
            {{--Col-span to have three next to eachother --}}
        @endforeach
    </div>

@endif
