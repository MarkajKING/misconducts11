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
            <h1 class="font-bold dark:text-white text-3xl text-center mb-1">{{ $confidant->name}}</h1>

            <p class="text-center py-2 mt-2 mb-0 pb-0 w-100 rounded ">
                <i class="fa-regular fa-address-card"></i>
                &nbsp;Gespeciliseerd in
            </p>
            <p class="text-center text-success"> <strong>{{ $confidant->speciality }} </strong></p>


            <div class="bg-gray-50 rounded mt-0 py-2">
                <p class="font-italic text-center text-black-900 "><i class="fa-solid fa-user"></i><small> &nbsp; &nbsp; &nbsp;Persoonlijke Informatie</small></p>
                <div class="bg-gray-50 px-4 py-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Leeftijd</dt>
                    <dd class="mt-0 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $confidant->age }}</dd>
                </div>
                <div class="bg-gray-50 px-4 py-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Achtergrond</dt>
                    <dd class="mt-0 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $confidant->background }}</dd>
                </div>
                <div class="bg-gray-50 px-4 py-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Geslacht</dt>
                    <dd class="mt-0 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $confidant->gender }}</dd>
                </div>
                <div class="bg-gray-50 px-4 py-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Talen</dt>
                    <dd class="mt-0 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $confidant->language }}</dd>
                </div>
            </div>


            <p class="text-center text-gray-600 dark:text-gray-200 text-base pt-3 font-normal">{{ $confidant->excerpt }}</p>
            <p class="text-gray-400 dark:text-white text-sm text-center">" {{ $confidant->motto }} "</p>

            <div class="w-full flex justify-center pt-2 pb-5">
                <a href="/vertrouwenspersonen/{{ $confidant->name }}"
                   class="inline-flex justify-center rounded-md border border-transparent bg-green-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 text-decoration-none"
                >Meer informatie</a>
            </div>
        </div>
    </div>
</div>
