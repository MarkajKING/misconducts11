<!--
Dit moet de pagina voorstellen die alleen zichtbaar is voor admins.
Het is geen officiele pagina. Ik had het alleen nodig om mijn gedeelte te maken.
Deze pagina wordt veranderd naar de echte admin pagina die is gemaakt door iemand anders.

Mvg,
Sena
-->
@props(['confidant'])

<x-layout>

    <section class="py-8 max-w-7xl mx-auto">

        <h1 class="text-lg font-bold text-4xl text-blue-500 mt-10 ">Hallo, {{ Auth::user()->name }}</h1>

        <p class="mt-1 text-sm text-gray-600">Hier kunt u uw account bekijken. </p>
        <ul>
            <li>
                {{Auth::user()->name}}
            </li>
            <li>
                {{Auth::user()->email}}
            </li>
        </ul>


        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-10">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>
@if(Auth::user()->is_confidant)
            <div class="flex justify-content-center">

                @if ($confidants->count())
                    <x-myinfo-grid :confidants="$confidants"></x-myinfo-grid>
                @else
                    <div class=" overflow-hidden bg-white shadow sm:rounded-lg w-75">
                        <div class="border-gray-200">


                            <div class="bg-white px-4 py-4 mb-2">
                                <p class="pt-3 mb-4">U heeft nog geen informatie over uzelf geschreven.
                                    <br> Om dat te doen, klik op de knop onderin.
                                </p>

                                <a href="/mijn-account/create"
                                   class="text-decoration-none my-5 bg-green-500 hover:bg-green-800 text-white font-semibold py-2 px-4  border border-gray-400 rounded shadow-sm "
                                >Mijn Informatie</a>
                            </div>
@endif


            <aside class="flex-shrink-0">

{{--                <p>--}}
{{--                    <a href="#"--}}
{{--                       class="text-decoration-none mx-5 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow-sm"--}}
{{--                    >Link</a>--}}
{{--                </p>--}}
            </aside>



                    </div>
                </div>
            @endif

        </div>



    </section>


</x-layout>
