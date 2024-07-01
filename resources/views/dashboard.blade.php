<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-screen">
                {{-- <ul>
                    @foreach ($clients as $client)
                        <li>{{ $client->prenom }}</li>
                    @endforeach
                </ul> --}}
                <div class="flex flex-col justify-center items-center gap-5">
                    <div>
                        <form action="">
                            @csrf
                            <input type="search" class="drop-shadow-md p-2 border focus:outline-none">
                            <button class="bg-green-400 rounded-lg p-2 drop-shadow-md text-white font-semibold w-fit">Chercher</button>
                        </form>
                    </div>
                    <div>

                        <button class="bg-blue-300 rounded-lg p-2 drop-shadow-md text-white font-semibold">Ajouter un
                            client</button>
                        <button class="bg-red-500 rounded-lg p-2 drop-shadow-md text-white font-semibold">Supprimer un
                            client</button>
                        <button class="bg-green-400 rounded-lg p-2 drop-shadow-md text-white font-semibold">Modifier un
                            client</button>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
