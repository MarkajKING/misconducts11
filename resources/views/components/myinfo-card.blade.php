@props(['confidant'])

<div class="overflow-hidden bg-white shadow sm:rounded-lg w-75">
    <div class="container px-4 py-7 sm:px-6">
        <div class="row">
            <div class="col">
                <h2 class="font-bold leading-6 pt-3 text-gray-900">{{ $confidant->name }}</h2>
                <p class="mt-1 max-w-2xl pt-2 text-sm text-gray-500">Dit is uw Vertrouwenspersoon-Card. <br> Wilt u iets wijzigen over uw informatie? Klik dan op de 'Bewerk'.</p>
            </div>

            <div class="col my-5 text-right">
                <a href="/mijn-account/{{ $confidant->id }}/edit"
                   class="text-decoration-none mx-5 bg-green-500 hover:bg-green-100 text-white font-semibold py-2 px-4  border border-gray-400 rounded shadow-sm "
                >Bewerk</a>
            </div>

        </div>
    </div>
    <div class="border-t border-gray-200">
        <dl>

            <div class="container bg-gray-50 py-4">
                <div class="row">
                    <div class="col ms-2 ps-5">
                        <div class="w-full mx-3">
                            <div class="h-32 w-32">
                                <img src="{{ asset('storage/' . $confidant->photo) }}" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>

                        <h3 class="font-bold dark:text-white mb-1 mt-3">{{ $confidant->name}}</h3>
                        <p class="py-2 mt-2 mb-0 pb-0 w-100 rounded ">
                            <i class="fa-regular fa-address-card"></i>
                            &nbsp;Gespeciliseerd in
                        </p>
                        <p class="text-success"> <strong>{{ $confidant->speciality }} </strong></p>

                    </div>

                    <div class="col bg-white">
                        <div class="rounded mt-0 py-5">
                            <p class="font-bold text-center text-black-900 "><i class="fa-solid fa-user"></i><small> &nbsp; &nbsp; &nbsp;Persoonlijke Informatie</small></p>
                            <div class="px-4 py-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Leeftijd</dt>
                                <dd class="mt-0 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $confidant->age }}</dd>
                            </div>
                            <div class="px-4 py-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Achtergrond</dt>
                                <dd class="mt-0 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $confidant->background }}</dd>
                            </div>
                            <div class="px-4 py-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Geslacht</dt>
                                <dd class="mt-0 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $confidant->gender }}</dd>
                            </div>
                            <div class="px-4 py-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Talen</dt>
                                <dd class="mt-0 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $confidant->language }}</dd>
                            </div>
                        </div>
                    </div>

                    <div class="col px-0 mx-0 pt-5">
                            <p class="font-bold text-center text-black-900">Contact</p>

                            <div class="mt-0">
                                <p class="text-center text-sm text-gray-900 sm:col-span-2 sm:mt-0"> <i class="fa-solid fa-phone"></i> &nbsp;  {{ $confidant->phone}} </p>
                                <p class="text-center text-sm text-gray-900 sm:col-span-2 sm:mt-0"> <i class="fa-solid fa-envelope"></i> &nbsp;  {{ $confidant->email }} </p>
                            </div>
                    </div>
                </div>

            </div>

            <div class="bg-white px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Excerpt</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $confidant->excerpt }}</dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Over u</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $confidant->about }}</dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Ervaringen</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $confidant->experiences }}</dd>
            </div>

        </dl>
    </div>
</div>
