<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between space-x-3">
            <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
                {{ __('Ajouter un client') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-purple-500 to-blue-500">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg p-8">
                <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                    @csrf

                    <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-6">
                        <div>
                            <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                            <input type="text" name="nom" id="nom"
                                class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-lg focus:border-purple-500 focus:ring-purple-500 focus:outline-none transition duration-150 ease-in-out"
                                required>
                        </div>

                        <div>
                            <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
                            <input type="text" name="prenom" id="prenom"
                                class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-lg focus:border-purple-500 focus:ring-purple-500 focus:outline-none transition duration-150 ease-in-out"
                                required>
                        </div>

                        <div>
                            <label for="adress" class="block text-sm font-medium text-gray-700">Adresse</label>
                            <input type="text" name="adress" id="adress"
                                class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-lg focus:border-purple-500 focus:ring-purple-500 focus:outline-none transition duration-150 ease-in-out"
                                required>
                        </div>

                        <div>
                            <label for="telephone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                            <input type="text" name="telephone" id="telephone"
                                class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-lg focus:border-purple-500 focus:ring-purple-500 focus:outline-none transition duration-150 ease-in-out"
                                required>
                        </div>

                        <div>
                            <label for="cin" class="block text-sm font-medium text-gray-700">CIN</label>
                            <input type="text" name="cin" id="cin"
                                class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-lg focus:border-purple-500 focus:ring-purple-500 focus:outline-none transition duration-150 ease-in-out"
                                required>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email"
                                class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-lg focus:border-purple-500 focus:ring-purple-500 focus:outline-none transition duration-150 ease-in-out"
                                required>
                        </div>

                        <div>
                            <label for="sport_categories_id" class="block text-sm font-medium text-gray-700">Catégorie
                                Sportive</label>
                            <select name="sport_categorie_id" id="sport_categorie_id"
                                class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-lg focus:border-purple-500 focus:ring-purple-500 focus:outline-none transition duration-150 ease-in-out"
                                required>
                                @foreach ($sportCategories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="statut" class="block text-sm font-medium text-gray-700">Statut</label>
                            <select name="statut" id="statut"
                                class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-lg focus:border-purple-500 focus:ring-purple-500 focus:outline-none transition duration-150 ease-in-out"
                                required>
                                <option value="payé">Payé</option>
                                <option value="non payé">Non Payé</option>
                            </select>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
                            <input type="file" name="photo" id="photo"
                                class="mt-1 block w-full text-sm text-gray-900 bg-gray-100 border-gray-300 rounded-md cursor-pointer shadow-lg focus:border-purple-500 focus:ring-purple-500 focus:outline-none transition duration-150 ease-in-out">
                        </div>
                    </div>

                    <div class="flex items-center justify-end">
                        <button type="submit"
                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-lg text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            Ajouter
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
