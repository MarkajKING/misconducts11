<!--
View of the page where the confidant writes information about him or herself
-->

<x-layout>

    <section class="py-8 max-w-7xl mx-auto">

        <h1 class="text-lg font-bold text-4xl text-blue-500 mt-10 ">Hallo, {{ Auth::user()->name }}</h1>

        <p class="mt-1 text-sm text-gray-600">Hier kunt u informatie over uzelf schrijven. <br> Alle informatie die u schrijft is te zien door de gebruikers. </p>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-10">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="container mt-5 p-5 bg-light rounded shadow-sm">
            <div class="row">

                <div class="col">
                    <div class="px-4 sm:px-0 pb-14">
                        <h3 class="text-lg font-bold leading-6 text-yellow-400 text-gray-900">Persoonlijke Informatie</h3>
                        <p class="mt-1 text-sm text-gray-600">Schrijf hier uw persoonlijke informatie.</p>
                    </div>

                    <div class="px-4 sm:px-0 py-14">
                    </div>
                    <div class="px-4 sm:px-0 py-14">
                    </div>
                    <div class="px-4 sm:px-0 py-14">
                    </div>
                    <div class="px-4 sm:px-0 py-14">
                    </div>
                    <div class="px-4 sm:px-0 py-14">
                    </div>
                    <div class="px-4 sm:px-0 pt-5">
                    </div>

                    <div class="hidden sm:block" aria-hidden="true">
                        <div class="py-7">
                            <div class="border-t border-gray-200"></div>
                        </div>
                    </div>

                    <div class="px-4 sm:px-0 pt-2">
                        <h3 class="text-lg font-bold leading-6 text-yellow-400 text-gray-900">Over U</h3>
                        <p class="mt-1 text-sm text-gray-600">Schrijf hier over uzelf en uw ervaringen.</p>
                        <p class="mt-1 text-sm text-gray-400">Bij het stukje 'excerpt' wordt er van u gevraagd om een korte en krachtige samenvatting over uzelf te geven en wat u doet als vertrouwenspersoon. Dit stukje wordt getoont aan de gebruikers op de pagina met alle vertrouwenspersonen.
                        </p>
                    </div>
                </div>

                <div class="col">

                        <form method="POST" action="/mijn-account/" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                       for="name"
                                >
                                    Voor- en Achternaam
                                </label>

                                <input class="border border-gray-400 p-2 w-full rounded"
                                       type="text"
                                       name="name"
                                       id="name"
                                       value="{{ old('name') }}"
                                       required
                                >

                                @error('name')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                       for="gender"
                                >
                                    Geslacht
                                </label>

                                <select class="border border-gray-400 p-2 w-full rounded"
                                        type="text"
                                        name="gender"
                                        id="gender"
                                        required
                                >
                                    <option>-</option>
                                    <option>Vrouw</option>
                                    <option>Man</option>
                                </select>

                                @error('gender')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                       for="age"
                                >
                                    Leeftijd
                                </label>

                                <input class="border border-gray-400 p-2 w-full rounded"
                                       type="text"
                                       name="age"
                                       id="age"
                                       value="{{ old('age') }}"
                                       required
                                >

                                @error('age')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                       for="background"
                                >
                                    Achtergrond
                                </label>

                                <input class="border border-gray-400 p-2 w-full rounded"
                                       type="text"
                                       name="background"
                                       id="background"
                                       value="{{ old('background') }}"
                                       required
                                >

                                @error('background')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                       for="language"
                                >
                                    Taal
                                </label>

                                <input class="border border-gray-400 p-2 w-full rounded"
                                       type="text"
                                       name="language"
                                       id="language"
                                       value="{{ old('language') }}"
                                       required
                                >

                                @error('language')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                       for="email"
                                >
                                    E-mail
                                </label>

                                <input class="border border-gray-400 p-2 w-full rounded"
                                       type="text"
                                       name="email"
                                       id="email"
                                       value="{{ old('email') }}"
                                       placeholder="voorbeeld@email.nl"
                                       required
                                >

                                @error('email')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                       for="phone"
                                >
                                    Telefoon nummer
                                </label>

                                <input class="border border-gray-400 p-2 w-full rounded"
                                       type="text"
                                       name="phone"
                                       id="phone"
                                       value="{{ old('phone') }}"
                                       placeholder="06-00000000"
                                       required
                                >

                                @error('phone')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                       for="photo"
                                >
                                    Foto
                                </label>

                                <input class="border border-gray-400 p-2 w-full rounded"
                                       type="file"
                                       name="photo"
                                       id="photo"
                                       value="{{ old('photo') }}"
                                       required
                                >

                                @error('phone_number')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="hidden sm:block" aria-hidden="true">
                                <div class="py-10">
                                    <div class="border-t border-gray-200"></div>
                                </div>
                            </div>

                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                       for="speciality"
                                >
                                    Gespecialiseerd in
                                </label>

                                <select class="border border-gray-400 p-2 w-full rounded"
                                        type="text"
                                        name="speciality"
                                        id="speciality"
                                        required
                                >
                                    <option>-</option>
                                    <option>Intimidatie</option>
                                    <option>Discriminatie</option>
                                    <option>Pesten</option>
                                    <option>Seksuele intimidatie</option>
                                    <option>Geweld/Agressie</option>
                                </select>

                                @error('speciality')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                       for="excerpt"
                                >
                                    Excerpt
                                </label>

                                <textarea class="border border-gray-400 p-2 w-full rounded"
                                          name="excerpt"
                                          id="excerpt"
                                          required
                                >{{ old('excerpt') }}</textarea>

                                @error('excerpt')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                       for="about"
                                >
                                    Over u
                                </label>

                                <textarea class="border border-gray-400 p-2 w-full rounded"
                                          name="about"
                                          id="about"
                                          rows="7"
                                          required
                                >{{ old('about') }}</textarea>

                                @error('about')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                       for="experiences"
                                >
                                    Ervaringen
                                </label>

                                <textarea class="border border-gray-400 p-2 w-full rounded"
                                          name="experiences"
                                          id="experiences"
                                          rows="7"
                                          required
                                >{{ old('experiences') }}</textarea>

                                @error('experiences')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                       for="motto"
                                >
                                    Motto
                                </label>

                                <input class="border border-gray-400 p-2 w-full rounded"
                                       type="text"
                                       name="motto"
                                       id="motto"
                                       value="{{ old('motto') }}"
                                       required
                                >

                                @error('motto')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="hidden sm:block" aria-hidden="true">
                                <div class="py-10">
                                    <div class="border-t border-gray-200"></div>
                                </div>
                            </div>

                            <button type="submit"
                                    class="bg-green-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-xl hover:bg-blue-600"
                            >Opslaan</button>

                        </form>
                </div>
            </div>
        </div>

    </section>

</x-layout>
