<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark-800 dark:text-dark-200 leading-tight">
            {{ __('Modifier une Matière') }}
        </h2>
    </x-slot>

    <div class="container mt-5 mx-auto">
        <div class="bg-white rounded shadow-md p-8 max-w-xl mx-auto">
            <h1 class="text-center mb-8 bg-gradient-to-r from-blue-500 to-purple-500 text-white py-2 px-4 rounded">Modifier un module</h1>

            <form action="{{ route('matiere.update', $matiere->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') {{-- Use PUT method for update --}}

                <div class="mb-6">
                    <label for="module_id" class="block text-sm font-medium text-gray-700">Nom module :</label>
                    <select name="module_id" id="module_id" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                        <option disabled>Select un Module</option>
                        @foreach($modules as $module)
                            <option value="{{ $module->id }}" @if($module->module_id == $module->id) selected @endif>{{ $module->nom }}</option>
                        @endforeach
                    </select>
                    @error('module_id')
                        <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg dark:text-red-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="nom" class="block text-sm font-medium text-gray-700">Nom :</label>
                    <input type="text" name="nom" id="nom" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('nom', $matiere->nom) }}" >
                    @error('nom')
                        <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg dark:text-red-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description :</label>
                    <input type="text" name="description" id="description" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('description', $matiere->description) }}" >
                    @error('description')
                        <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg dark:text-red-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <div class="text-center">
                    <a href="{{ route('matiere.index') }}" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Retour à la liste</a>
                    <button type="submit" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>