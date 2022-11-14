<!--
Blade component of the card design for the confidants on the page /vertrouwenspersonen.
-->

@props(['confidant'])

<div role="listitem" class="relative mt-16 mb-32 lg:w-4/5">
    <div class="rounded overflow-hidden shadow-md bg-white dark:bg-gray-900">
        <div class="absolute -mt-20 w-full flex justify-center">
            <div class="h-32 w-32">
                <img src="{{ asset('storage/' . $confidant->photo) }}" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
            </div>
        </div>
        <div class="px-6 mt-16" style="min-height:500px">
            <h1 class="font-bold dark:text-white text-3xl text-center mb-1">{{ $confidant->first_name }} {{ $confidant->last_name }} </h1>
            <p class="text-gray-800 dark:text-white text-sm text-center">{{ $confidant->age }} | {{ $confidant->background }} | {{ $confidant->gender }} </p>
            <p class="text-center text-gray-600 dark:text-gray-200 text-base pt-3 font-normal">{{ $confidant->excerpt }}</p>
            <p class="text-gray-400 dark:text-white text-sm text-center">" {{ $confidant->motto }} "</p>

            <div class="w-full flex justify-center pt-2 pb-5">
                <a href="/vertrouwenspersonen/{{ $confidant->first_name }}"
                   class="inline-flex justify-center rounded-md border border-transparent bg-green-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 text-decoration-none"
                >Meer informatie</a>
            </div>
        </div>
    </div>
</div>
