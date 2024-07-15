<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Abonnements') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-6">Créer un Abonnement</h2>

                <form action="{{ route('abonements.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="date_debut" class="block text-sm font-medium text-gray-700">Date Début</label>
                        <input type="date" name="date_debut" id="date_debut" value="{{ old('date_debut') }}" class="mt-1 block w-full p-2 border rounded">
                        @error('date_debut')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="date_fin" class="block text-sm font-medium text-gray-700">Date Fin</label>
                        <input type="date" name="date_fin" id="date_fin" value="{{ old('date_fin') }}" class="mt-1 block w-full p-2 border rounded">
                        @error('date_fin')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="sport_categories_id" class="block text-sm font-medium text-gray-700">Catégorie Sportive</label>
                        <select name="sport_categories_id" id="sport_categories_id" class="mt-1 block w-full p-2 border rounded">
                            <option value="">Sélectionner une catégorie</option>
                            @foreach($sportCategories as $category)
                                <option value="{{ $category->id }}" {{ old('sport_categories_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('sport_categories_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="client_id" class="block text-sm font-medium text-gray-700">Client</label>
                        <select name="client_id" id="client_id" class="mt-1 block w-full p-2 border rounded">
                            <option value="">Sélectionner un client</option>
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}" {{ old('client_id') == $client->id ? 'selected' : '' }}>{{ $client->nom }} {{ $client->prenom }}</option>
                            @endforeach
                        </select>
                        @error('client_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="tarif_abonement" class="block text-sm font-medium text-gray-700">Tarif Abonnement</label>
                        <input type="number" step="0.01" name="tarif_abonement" id="tarif_abonement" value="{{ old('tarif_abonement') }}" class="mt-1 block w-full p-2 border rounded">
                        @error('tarif_abonement')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end">
                        <button type="submit" class="bg-green-500 text-white font-semibold px-4 py-2 rounded">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
