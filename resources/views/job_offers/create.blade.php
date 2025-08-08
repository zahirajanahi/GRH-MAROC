@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">Nouvelle offre d'emploi</h2>
        <form method="POST" action="{{ route('job-offers.store') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Titre</label>
                <input type="text" name="title" class="mt-1 block w-full border-gray-300 rounded" value="{{ old('title') }}" required>
                @error('title')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Secteur</label>
                <input type="text" name="sector" class="mt-1 block w-full border-gray-300 rounded" value="{{ old('sector') }}" required>
                @error('sector')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Description</label>
                <textarea name="description" class="mt-1 block w-full border-gray-300 rounded" required>{{ old('description') }}</textarea>
                @error('description')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Type de contrat</label>
                <input type="text" name="contract_type" class="mt-1 block w-full border-gray-300 rounded" value="{{ old('contract_type') }}" required>
                @error('contract_type')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Niveau d’études</label>
                <input type="text" name="education_level" class="mt-1 block w-full border-gray-300 rounded" value="{{ old('education_level') }}" required>
                @error('education_level')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Expérience requise (années)</label>
                <input type="number" name="experience_years" class="mt-1 block w-full border-gray-300 rounded" value="{{ old('experience_years') }}" min="0" required>
                @error('experience_years')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Ville</label>
                <input type="text" name="city" class="mt-1 block w-full border-gray-300 rounded" value="{{ old('city') }}" required>
                @error('city')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Adresse</label>
                <input type="text" name="address" class="mt-1 block w-full border-gray-300 rounded" value="{{ old('address') }}" required>
                @error('address')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Date de publication</label>
                <input type="date" name="publication_date" class="mt-1 block w-full border-gray-300 rounded" value="{{ old('publication_date') }}" required>
                @error('publication_date')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="flex justify-end">
                <a href="{{ route('job-offers.index') }}" class="mr-4 text-gray-600">Annuler</a>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Créer</button>
            </div>
        </form>
    </div>
</div>
@endsection
