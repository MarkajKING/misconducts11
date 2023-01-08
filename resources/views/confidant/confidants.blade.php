<!--
View of the /vertrouwenspersonen page
-->

<x-layout>
    <div class="container flex justify-center mx-auto pt-16">
        <div>
            <h1 class="xl:text-4xl text-3xl text-center text-gray-800 dark:text-white font-extrabold pt-5 sm:w-4/6 w-5/6 mx-auto">Vertrouwenspersonen</h1>
            <p class="text-gray-500 dark:text-gray-200 text-lg text-center font-normal pb-20">Kijk naar de vertrouwenspersonen en kies er een waar bij jij je veilig voelt</p>
        </div>
    </div>
    <div class="w-full bg-gray-100 dark:bg-gray-800 pl-14 pt-20">
        <div class="container mx-auto">
            <div role="list" aria-label="Behind the scenes People " class="lg:flex md:flex sm:flex items-center xl:justify-between flex-wrap md:justify-around sm:justify-around lg:justify-around">

                @if ($confidants->count())
                    <x-confidants-grid :confidants="$confidants"></x-confidants-grid>
                @else
                    <p class="text-center">Nu zijn er momenteel geen vertrouwenspersonen aanwezig. Kom later terug.</p>
                @endif

                </div>
            </div>
        </div>

</x-layout>
