@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">Détail de l'offre d'emploi</h2>
        <div class="bg-white shadow rounded p-6">
            <div class="mb-2"><strong>Titre:</strong> {{ $jobOffer->title }}</div>
            <div class="mb-2"><strong>Secteur:</strong> {{ $jobOffer->sector }}</div>
            <div class="mb-2"><strong>Description:</strong> {{ $jobOffer->description }}</div>
            <div class="mb-2"><strong>Type de contrat:</strong> {{ $jobOffer->contract_type }}</div>
            <div class="mb-2"><strong>Niveau d’études:</strong> {{ $jobOffer->education_level }}</div>
            <div class="mb-2"><strong>Expérience requise:</strong> {{ $jobOffer->experience_years }} ans</div>
            <div class="mb-2"><strong>Ville:</strong> {{ $jobOffer->city }}</div>
            <div class="mb-2"><strong>Adresse:</strong> {{ $jobOffer->address }}</div>
            <div class="mb-2"><strong>Date de publication:</strong> {{ $jobOffer->publication_date }}</div>
            <div class="mt-4">
                <a href="{{ route('job-offers.edit', $jobOffer) }}" class="text-blue-600 hover:underline">Modifier</a>
                <a href="{{ route('job-offers.index') }}" class="ml-4 text-gray-600">Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection
