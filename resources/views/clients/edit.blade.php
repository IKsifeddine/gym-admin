<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-6">Modifier un client</h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <form action="{{ route('clients.update', $client->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" name="nom" id="nom" value="{{ $client->nom }}" class="mt-1 block w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
                    <input type="text" name="prenom" id="prenom" value="{{ $client->prenom }}" class="mt-1 block w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="adress" class="block text-sm font-medium text-gray-700">Adresse</label>
                    <input type="text" name="adress" id="adress" value="{{ $client->adress }}" class="mt-1 block w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="telephone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                    <input type="text" name="telephone" id="telephone" value="{{ $client->telephone }}" class="mt-1 block w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="cin" class="block text-sm font-medium text-gray-700">CIN</label>
                    <input type="text" name="cin" id="cin" value="{{ $client->cin }}" class="mt-1 block w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ $client->email }}" class="mt-1 block w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="sport_categories_id" class="block text-sm font-medium text-gray-700">Catégorie Sportive</label>
                    <input type="text" name="sport_categories_id" id="sport_categories_id" value="{{ $client->sport_categories_id }}" class="mt-1 block w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700">Statut</label>
                    <input type="text" name="status" id="status" value="{{ $client->status }}" class="mt-1 block w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="photo" class="block text-sm font-medium text-gray-700">Photo (URL)</label>
                    <input type="text" name="photo" id="photo" value="{{ $client->photo }}" class="mt-1 block w-full p-2 border rounded">
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-green-500 text-white font-semibold px-4 py-2 rounded">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>