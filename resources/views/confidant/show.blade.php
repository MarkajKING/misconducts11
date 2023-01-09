<!--
View of the page where the information about the chosen confidant is shown
-->

@props(['confidant'])

<x-layout>

    <section class="px-6 py-0">
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">

            <div class="col-span-8">
                <div class="hidden lg:flex justify-between mb-0">
                    <a href="/vertrouwenspersonen"
                       class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-1000 text-decoration-none">
                        <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path class="fill-current"
                                      d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                </path>
                            </g>
                        </svg>

                        Terug naar overzicht vertrouwenspersonen
                    </a>

                </div>

                <div class="bg-white">
                <div class="pt-0">

                    <div class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
                        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                            <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $confidant->name }}</h1>
                        </div>

                        <div class="mt-4 lg:row-span-3 lg:mt-0 bg-light px-0 pb-10 rounded shadow-md">
                            <div class="h-64 w-64 mt-0 mb-5 mx-5">
                                <img src="{{ asset('storage/' . $confidant->photo) }}" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>

                            <p class="text-center mb-0 pb-0 w-100 rounded ">
                            <i class="fa-regular fa-address-card"></i>
                            &nbsp;Gespeciliseerd in
                            </p>
                            <p class="text-center text-success"> <strong>{{ $confidant->speciality }} </strong></p>

                            <form class="mt-8">
                                <div class="bg-gray-200 rounded mt-0 py-2 mx-2">
                                    <p class="font-italic text-center text-black-900 "><i class="fa-solid fa-user"></i><small> &nbsp; &nbsp; &nbsp;Persoonlijke Informatie</small></p>
                                    <div class="bg-gray-200 px-4 py-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Leeftijd</dt>
                                        <dd class="mt-0 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $confidant->age }}</dd>
                                    </div>
                                    <div class="bg-gray-200 px-4 py-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Achtergrond</dt>
                                        <dd class="mt-0 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $confidant->background }}</dd>
                                    </div>
                                    <div class="bg-gray-200 px-4 py-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Geslacht</dt>
                                        <dd class="mt-0 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $confidant->gender }}</dd>
                                    </div>
                                    <div class="bg-gray-200 px-4 py-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Talen</dt>
                                        <dd class="mt-0 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $confidant->language }}</dd>
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-sm text-center w-full font-medium text-gray-500">" {{ $confidant->motto }} "</h3>
                                    </div>
                                </div>

                                <button type="submit" class="mt-10 flex w-75 mx-5 items-center justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Kies {{ $confidant->name }}</button>
                            </form>
                        </div>

                        <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pb-16 lg:pr-8">
                            <div>
                                <h3 class="sr-only">Description</h3>

                                <div class="space-y-6">
                                    <h3 class="text-base font-bold text-gray-900">Over mij</h3>
                                    <p class="text-base text-gray-900"> {!! $confidant->about !!} </p>
                                </div>
                            </div>

                            <div class="mt-10">
                                <h3 class="text-base font-bold text-gray-900">Ervaringen</h3>

                                <div class="mt-4">
                                    <p class="text-base text-gray-900"> {!! $confidant->experiences !!} </p>
                                </div>
                            </div>

                            <div class="mt-10">
                                <h3 class="text-base font-bold text-gray-900">Contact</h3>

                                <div class="mt-0">
                                    <p class="text-base text-gray-900 m-0 p-0"> <i class="fa-solid fa-phone"></i> &nbsp; &nbsp; &nbsp; {{ $confidant->phone}} </p>
                                    <p class="text-base text-gray-900 m-0 p-0"> <i class="fa-solid fa-envelope"></i> &nbsp; &nbsp; &nbsp; {{ $confidant->email }} </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </main>
    </section>

</x-layout>
