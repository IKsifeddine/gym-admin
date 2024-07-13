<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between space-x-3">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Liste des clients') }}
            </h2>
            <div class="flex">
                <form action="{{ route('clients.search') }}" method="GET" class="flex items-center space-x-2">
                    @csrf
                    <input type="search" name="cin" placeholder="Rechercher par CIN" class="drop-shadow-md p-2 border focus:outline-none">
                    <button type="submit" class="bg-green-400 rounded-lg p-2 drop-shadow-md text-white font-semibold">Chercher</button>
                </form>
                <a href="{{ route('clients.create') }}" class="bg-blue-300 rounded-lg p-2 drop-shadow-md text-white font-semibold ml-2">Ajouter un client</a>
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
                                <td class="py-3 px-4 border-b"><img src="{{ asset('storage/' . $client->photo) }}" alt="Photo" class="w-10 h-10 rounded-full"></td>
                                <td class="py-3 px-4 border-b flex space-x-2">
                                    <form action="{{ route('clients.destroy', $client->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="bg-red-500 rounded-lg p-2 drop-shadow-md text-white font-semibold">Supprimer</button>
                                    </form>
                                    <a href="{{ route('clients.edit', $client->id) }}" class="bg-green-400 rounded-lg p-2 drop-shadow-md text-white font-semibold">Modifier</a>
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
