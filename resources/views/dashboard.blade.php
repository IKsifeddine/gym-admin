<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between space-x-3">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Liste des clients') }}
            </h2>
            <div class="flex">
                <form action="" class="flex items-center space-x-2">
                    @csrf
                    <input type="search" class="drop-shadow-md p-2 border focus:outline-none">
                    <button class="bg-green-400 rounded-lg p-2 drop-shadow-md text-white font-semibold">Chercher</button>
                    <button class="bg-blue-300 rounded-lg p-2 drop-shadow-md text-white font-semibold">Ajouter un client</button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden w-full shadow-sm sm:rounded-lg h-screen p-6 flex flex-col">
                <div class="overflow-x-auto flex-grow">
                    <table class="w-full min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="py-3 px-4 border-b text-left">Nom</th>
                                <th class="py-3 px-4 border-b text-left">Prénom</th>
                                <th class="py-3 px-4 border-b text-left">Adresse</th>
                                <th class="py-3 px-4 border-b text-left">Téléphone</th>
                                <th class="py-3 px-4 border-b text-left">CIN</th>
                                <th class="py-3 px-4 border-b text-left">Email</th>
                                <th class="py-3 px-4 border-b text-left">Catégorie Sportive</th>
                                <th class="py-3 px-4 border-b text-left">Statut</th>
                                <th class="py-3 px-4 border-b text-left">Photo</th>
                                <th class="py-3 px-4 border-b text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 border-b">{{ $client->nom }}</td>
                                <td class="py-3 px-4 border-b">{{ $client->prenom }}</td>
                                <td class="py-3 px-4 border-b">{{ $client->adress }}</td>
                                <td class="py-3 px-4 border-b">{{ $client->telephone }}</td>
                                <td class="py-3 px-4 border-b">{{ $client->cin }}</td>
                                <td class="py-3 px-4 border-b">{{ $client->email }}</td>
                                <td class="py-3 px-4 border-b">{{ $client->sport_categories_id }}</td>
                                <td class="py-3 px-4 border-b">{{ $client->status }}</td>
                                <td class="py-3 px-4 border-b"><img src="{{ $client->photo }}" alt="Photo" class="w-10 h-10 rounded-full"></td>
                                <td class="py-3 px-4 border-b flex space-x-2">
                                    <button class="bg-red-500 rounded-lg p-2 drop-shadow-md text-white font-semibold">Supprimer</button>
                                    <button class="bg-green-400 rounded-lg p-2 drop-shadow-md text-white font-semibold">Modifier</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $clients->links('vendor.pagination.tailwind') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
