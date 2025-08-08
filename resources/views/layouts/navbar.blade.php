<nav class="navbar" id="navbar">
    <div class="nav-container">
        <img src="{{ asset('assets/images/logo grh.png') }}" alt="GRH HP SOLUTIONS" class="logo">
        <ul class="nav-links">
            <li class="nav-item">
                <a href="#">Le Groupe GRH <i class="fa-solid fa-angle-down"></i></a>
                <div class="dropdown">
                    <div class="dropdown-item"><a href="#">Mot du Président</a></div>
                    <div class="dropdown-item"><a href="#">Qui sommes nous ?</a></div>
                </div>
            </li>
            <li class="nav-item">
                <a href="#">Nos Services <i class="fa-solid fa-angle-down"></i></a>
                <div class="dropdown">
                    <div class="dropdown-item"><a href="#">Travail temporaire</a></div>
                    <div class="dropdown-item"><a href="#">Intérim</a></div>
                    <div class="dropdown-item"><a href="#">Recrutement</a></div>
                    <div class="dropdown-item"><a href="#">Conseil RH</a></div>
                </div>
            </li>
            <li class="nav-item"><a href="{{ route('job-offers.public') }}">Offres d'emploi</a></li>
            <li class="nav-item"><a href="#">Candidature</a></li>
            <li class="nav-item">
                <a href="#">GRH+ <i class="fa-solid fa-angle-down"></i></a>
                <div class="dropdown">
                    <div class="dropdown-item"><a href="#">Agence sur site</a></div>
                    <div class="dropdown-item"><a href="#">Notre blog</a></div>
                    <div class="dropdown-item"><a href="#">Nos valeurs</a></div>
                    <div class="dropdown-item"><a href="#">Outils RH</a></div>
                    <div class="dropdown-item"><a href="#">Guide de l'intérim</a></div>
                </div>
            </li>
            <li class="nav-item"><a href="#">Contact</a></li>
            <li class="nav-item"><a href="#">Actualité</a></li>
            <li class="nav-item"><a href="#">GRH Suivi</a></li>
        </ul>
        <div class="nav-buttons">
            <button class="btn btn-outline">Esp Client</button>
            <button class="btn btn-solid">App Mobile</button>
        </div>
    </div>
</nav>
