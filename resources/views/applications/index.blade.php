@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-r from-indigo-50 to-blue-100 py-10 mb-8">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-4xl font-extrabold text-indigo-900 mb-2">Candidatures reçues</h1>
        <p class="text-lg text-gray-600">Consultez les utilisateurs ayant postulé à vos offres d'emploi.</p>
    </div>
</div>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white shadow-2xl rounded-2xl overflow-x-auto border border-gray-100">
        <table class="min-w-full divide-y divide-gray-200 text-lg">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-8 py-4 text-left font-semibold text-gray-600 uppercase tracking-wider">Offre</th>
                    <th class="px-8 py-4 text-left font-semibold text-gray-600 uppercase tracking-wider">Nom</th>
                    <th class="px-8 py-4 text-left font-semibold text-gray-600 uppercase tracking-wider">Email</th>
                    <th class="px-8 py-4 text-left font-semibold text-gray-600 uppercase tracking-wider">Téléphone</th>
                    <th class="px-8 py-4 text-left font-semibold text-gray-600 uppercase tracking-wider">CV</th>
                    <th class="px-8 py-4 text-left font-semibold text-gray-600 uppercase tracking-wider">Message</th>
                    <th class="px-8 py-4 text-left font-semibold text-gray-600 uppercase tracking-wider">Date</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($applications as $app)
                <tr class="hover:bg-indigo-50 transition">
                    <td class="px-8 py-6 whitespace-nowrap font-medium text-gray-900">{{ $app->jobOffer->title ?? '-' }}</td>
                    <td class="px-8 py-6 whitespace-nowrap">{{ $app->full_name }}</td>
                    <td class="px-8 py-6 whitespace-nowrap">{{ $app->email }}</td>
                    <td class="px-8 py-6 whitespace-nowrap">{{ $app->phone }}</td>
                    <td class="px-8 py-6 whitespace-nowrap">
                        <a href="{{ asset('storage/' . $app->cv) }}" target="_blank" class="text-indigo-600 hover:underline font-semibold">Télécharger</a>
                    </td>
                    <td class="px-8 py-6 whitespace-nowrap">{{ $app->message }}</td>
                    <td class="px-8 py-6 whitespace-nowrap">{{ $app->created_at->format('d/m/Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-6">{{ $applications->links() }}</div>
    </div>
</div>
@endsection
