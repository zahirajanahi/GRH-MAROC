@extends('layouts.guest')

@section('content')
<div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight mb-6">Postuler à l'offre : {{ $jobOffer->title }}</h2>
        <form method="POST" action="{{ route('job-application.store', $jobOffer) }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Nom complet</label>
                <input type="text" name="full_name" class="mt-1 block w-full border-gray-300 rounded" value="{{ old('full_name') }}" required>
                @error('full_name')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="mt-1 block w-full border-gray-300 rounded" value="{{ old('email') }}" required>
                @error('email')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Téléphone</label>
                <input type="text" name="phone" class="mt-1 block w-full border-gray-300 rounded" value="{{ old('phone') }}" required>
                @error('phone')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">CV (PDF, DOC, DOCX, max 2Mo)</label>
                <input type="file" name="cv" class="mt-1 block w-full border-gray-300 rounded" required>
                @error('cv')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Message</label>
                <textarea name="message" class="mt-1 block w-full border-gray-300 rounded">{{ old('message') }}</textarea>
                @error('message')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
            </div>
            <div class="flex justify-end">
                <a href="{{ route('job-offers.public') }}" class="mr-4 text-gray-600">Annuler</a>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Envoyer</button>
            </div>
        </form>
    </div>
</div>
@endsection
