@props(['confidants'])

@if ($confidants->count() > 0)

    <div class="lg:grid lg:grid-cols-3">
        @foreach($confidants as $confidant)
            <x-edit-info
                :confidant="$confidant"></x-edit-info>
            {{--Col-span to have three next to eachother --}}
        @endforeach
    </div>

@endif
