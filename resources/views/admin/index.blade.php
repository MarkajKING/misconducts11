<!--
Dit moet de pagina voorstellen die alleen zichtbaar is voor admins.
Het is geen officiele pagina. Ik had het alleen nodig om mijn gedeelte te maken.
Deze pagina wordt veranderd naar de echte admin pagina die is gemaakt door iemand anders.

Mvg,
Sena
-->

<x-layout>
    <section class="py-8 max-w-7xl mx-auto">

        <h1 class="text-lg font-bold text-4xl text-blue-500 mt-10 ">Hallo, {{ Auth::user()->name }}</h1>

        <p class="mt-1 text-sm text-gray-600">Hier kunt u uw account bekijken. </p>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-10">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="flex">

            <aside class="flex-shrink-0">
                <p>
                    <a href="/admin/mijn-informatie/create"
                       class="text-decoration-none mx-5 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow-sm"
                    >Mijn Informatie</a>
                </p>

                <p>
                    <a href="#"
                       class="text-decoration-none mx-5 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow-sm"
                    >Link</a>
                </p>
            </aside>

            <main class="flex-1">
            </main>

        </div>

    </section>
</x-layout>
