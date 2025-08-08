@extends('layouts.guest')

@section('content')
<!-- Hero Section -->
<section class="relative bg-indigo-100 overflow-hidden">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover opacity-30" src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Professionals working">
        <div class="absolute inset-0 bg-indigo-900/60 mix-blend-multiply"></div>
    </div>
    <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                Trouvez votre prochaine opportunité
            </h1>
            <p class="mt-6 max-w-3xl mx-auto text-xl text-indigo-100">
                Rejoignez des entreprises innovantes et faites évoluer votre carrière avec nos offres d'emploi exclusives.
            </p>
            <div class="mt-10 flex justify-center">
                <div class="inline-flex rounded-md shadow">
                    <a href="#offres" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-3xl text-indigo-700 bg-white hover:bg-indigo-50">
                        Voir les offres
                        <svg class="ml-3 -mr-1 h-5 w-5 text-indigo-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Job Offers Section -->
<section id="offres" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                <span class="block">Nos offres d'emploi</span>
            </h2>
            <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                Postulez en quelques clics et donnez un nouvel élan à votre carrière
            </p>
        </div>

        <!-- Filters -->
        <div class="mb-8 bg-white p-6 rounded-xl shadow-sm">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div class="w-full md:w-1/3">
                    <label for="sector" class="block text-sm font-medium text-gray-700 mb-1">Secteur d'activité</label>
                    <select id="sector" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option>Tous les secteurs</option>
                        <option>Informatique</option>
                        <option>Santé</option>
                        <option>Bâtiment</option>
                        <option>Commerce</option>
                    </select>
                </div>
                <div class="w-full md:w-1/3">
                    <label for="contract" class="block text-sm font-medium text-gray-700 mb-1">Type de contrat</label>
                    <select id="contract" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option>Tous les contrats</option>
                        <option>CDI</option>
                        <option>CDD</option>
                        <option>Intérim</option>
                    </select>
                </div>
                <div class="w-full md:w-1/3">
                    <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Localisation</label>
                    <select id="location" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option>Partout en Maroc</option>
                        <option>Casablanca</option>
                        <option>El jadida</option>
                        <option>Tanger</option>
                        <option>Mohamedia</option>
                        <option>Autres</option>
                       
                    </select>
                </div>
            </div>
        </div>

        <!-- Job Offers Grid -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @forelse($offers as $offer)
            <div class="bg-white overflow-hidden shadow rounded-lg transition-all duration-300 hover:shadow-xl">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-indigo-500 rounded-md p-3">
                            <i class="fas fa-briefcase text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">{{ $offer->title }}</h3>
                            <div class="flex flex-wrap gap-1 mt-1">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                    {{ $offer->contract_type }}
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    {{ $offer->sector }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-sm text-gray-500 line-clamp-3">{{ Str::limit($offer->description, 150) }}</p>
                    </div>
                    <div class="mt-6 flex items-center text-sm text-gray-500">
                        <i class="fas fa-map-marker-alt mr-1.5 text-gray-400 flex-shrink-0"></i>
                        {{ $offer->city }}
                    </div>
                    <div class="mt-2 flex items-center text-sm text-gray-500">
                        <i class="fas fa-calendar-alt mr-1.5 text-gray-400 flex-shrink-0"></i>
                        Publié le {{ \Carbon\Carbon::parse($offer->publication_date)->format('d/m/Y') }}
                    </div>
                </div>
                <div class="bg-gray-50 px-6 py-4">
                    <div class="text-sm">
                        <a href="{{ route('job-application.form', $offer) }}" class="font-medium text-indigo-600 hover:text-indigo-500 inline-flex items-center">
                            Postuler maintenant
                            <i class="fas fa-arrow-right ml-1.5"></i>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-12">
                <div class="bg-white p-8 rounded-lg shadow-sm">
                    <i class="fas fa-search text-gray-300 text-5xl mb-4"></i>
                    <h3 class="text-lg font-medium text-gray-900">Aucune offre disponible pour le moment</h3>
                    <p class="mt-2 text-sm text-gray-500">Nos conseillers mettent régulièrement à jour les offres. Revenez plus tard ou déposez votre CV pour être contacté.</p>
                    <div class="mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Déposer mon CV
                        </a>
                    </div>
                </div>
            </div>
            @endforelse
        </div>

        @if($offers->count() > 0)
        <div class="mt-12 flex justify-center">
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Previous</span>
                    <i class="fas fa-chevron-left h-5 w-5"></i>
                </a>
                <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    1
                </a>
                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    2
                </a>
                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    3
                </a>
                <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                    ...
                </span>
                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    8
                </a>
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Next</span>
                    <i class="fas fa-chevron-right h-5 w-5"></i>
                </a>
            </nav>
        </div>
        @endif
    </div>
</section>



<!-- Introduction Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Opportunités professionnelles</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                Des carrières qui vous correspondent
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                Notre agence d'intérim connecte les talents avec les entreprises les plus dynamiques. Découvrez des postes adaptés à vos compétences et ambitions.
            </p>
        </div>

        <div class="mt-16">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                    <i class="fas fa-briefcase text-white text-xl"></i>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Diversité des postes</h3>
                            <p class="mt-5 text-base text-gray-500">
                                Accédez à des centaines d'offres dans tous les secteurs d'activité, du poste junior au cadre supérieur.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                    <i class="fas fa-clock text-white text-xl"></i>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Flexibilité</h3>
                            <p class="mt-5 text-base text-gray-500">
                                Choisissez parmi des contrats adaptés à votre situation : CDI, CDD, intérim ou temps partiel.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                    <i class="fas fa-user-tie text-white text-xl"></i>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Accompagnement</h3>
                            <p class="mt-5 text-base text-gray-500">
                                Bénéficiez d'un suivi personnalisé par nos conseillers en recrutement tout au long de votre parcours.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection

