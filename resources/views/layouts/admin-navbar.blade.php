<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex items-center space-x-8">
                <a href="/dashboard" class="flex items-center">
                    <i class="fas fa-briefcase text-indigo-600 text-3xl mr-2"></i>
                    <span class="text-xl font-bold text-gray-900 font-heading">Admin Dashboard</span>
                </a>
                <div class="hidden md:flex space-x-6">
                    <a href="/job-offers" class="text-gray-600 hover:text-indigo-600 font-medium">Offres d'emploi</a>
                    <a href="/job-offers/create" class="text-gray-600 hover:text-indigo-600 font-medium">+ Ajouter Offre</a>
                    <a href="/admin/applications" class="text-gray-600 hover:text-indigo-600 font-medium">Candidatures</a>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none">
                        <span class="text-gray-600 font-medium">{{ Auth::user()->name }}</span>
                        <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                    </button>
                    
                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Déconnexion</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>