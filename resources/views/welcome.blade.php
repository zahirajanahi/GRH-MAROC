<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRH Maroc - Gestion des Ressources Humaines</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    @include('layouts.navbar')
    <!-- Homepage content starts here -->
    <!-- Hero Section - Completely New Design -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-star"></i>
                    Leader en solutions RH au Maroc depuis 2002
                </div>
                <h1>Solutions RH innovantes pour votre entreprise</h1>
                <p>Expertise en recrutement, travail temporaire et gestion des talents pour optimiser votre capital humain</p>
                <div class="hero-buttons">
                    <a href="#services" class="btn-hero btn-primary">
                        <i class="fas fa-search"></i>
                        Nos Services
                    </a>
                    <a href="#contact" class="btn-hero btn-accent">
                        <i class="fas fa-headset"></i>
                        Nous Contacter
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Preview Section -->
     
    <!-- Services Preview Section -->
<section class="services-preview" id="services">
    <div class="container">
        <div class="section-header fade-in">
            <h2 class="section-title">Nos Services</h2>
            <p class="section-subtitle">Des solutions complètes pour tous vos besoins en ressources humaines</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card fade-in">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216" alt="Temporary workers team">
                </div>
                <h3>Intérim & Travail Temporaire</h3>
                <p>Solutions flexibles pour répondre à vos besoins ponctuels et saisonniers avec des profils qualifiés.</p>
                <a href="#" class="service-link">
                    En savoir plus
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="service-card fade-in">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1551135049-8a33b5883817?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Job interview process">
                </div>
                <h3>Recrutement Permanent</h3>
                <p>Identification et sélection des meilleurs talents pour vos postes permanents et stratégiques.</p>
                <a href="#" class="service-link">
                    En savoir plus
                    <i class="fas fa-arrow-right"></i>
                </a>
                            </div>

            <div class="service-card fade-in">
                <div class="service-image">
                    <img src="{{ asset('assets/images/dylan-gillis-KdeqA3aTnBY-unsplash.jpg') }}" alt="HR professionals meeting">
                </div>
                <h3>Conseil RH</h3>
                <p>Expertise en droit du travail marocain et accompagnement dans vos projets de transformation RH.</p>
                <a href="#" class="service-link">
                    En savoir plus
                    <i class="fas fa-arrow-right"></i>
                </a>
                                </div>
                            </div>
    </div>
</section>
 <!-- secteur -->
   <div class="sectors-container">
        <div class="sectors-header">
            <h1>Nos Secteurs d'Activité</h1>
            <p>Découvrez les domaines dans lesquels nous excellons</p>
        </div>
        
        <div class="carousel">
            <div class="carousel-inner">
                <!-- Automobile -->
                <div class="sector-item">
                    <img src="{{ asset('assets/images/6960e14ab36e3c6adbef4ace0e291b0b20240913153347.jpeg') }}" alt="Automobile" class="sector-image">
                    <div class="sector-title">Automobile</div>
                        </div>

                <!-- Textile -->
                <div class="sector-item">
                    <img src="https://images.unsplash.com/photo-1536924940846-227afb31e2a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Textile" class="sector-image">
                    <div class="sector-title">Textile</div>
                            </div>

                <!-- Pharmaceutique -->
                <div class="sector-item">
                    <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Pharmaceutique" class="sector-image">
                    <div class="sector-title">Pharmaceutique</div>
                                </div>
                
                <!-- Agricole -->
                <div class="sector-item">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Agricole" class="sector-image">
                    <div class="sector-title">Agricole</div>
                            </div>
                
                <!-- Aéronautique -->
                <div class="sector-item">
                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Aéronautique" class="sector-image">
                    <div class="sector-title">Aéronautique</div>
                        </div>

                <!-- Logistique -->
                <div class="sector-item">
                    <img src="https://images.unsplash.com/photo-1494412519320-aa613dfb7738?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Logistique" class="sector-image">
                    <div class="sector-title">Logistique</div>
                </div>

                 <!-- BTB  -->
                <div class="sector-item">
                    <img src="{{ asset('assets/images/secteurbtb.jpg') }}" alt="Logistique" class="sector-image">
                    <div class="sector-title">BTB</div>
                </div>


                 <!-- INDUSTERIE -->
                <div class="sector-item">
                    <img src="https://images.unsplash.com/photo-1496247749665-49cf5b1022e9?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Logistique" class="sector-image">
                    <div class="sector-title">Industerie</div>
                            </div>

                <!-- Transport-->
                <div class="sector-item">
                    <img src="https://images.unsplash.com/photo-1559297434-fae8a1916a79?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Logistique" class="sector-image">
                    <div class="sector-title">Transport</div>
                                </div>

                            </div>
                        </div>

        <div class="carousel-controls">
            <div class="carousel-dot active" data-index="0"></div>
            <div class="carousel-dot" data-index="1"></div>
        </div>
    </div>
    
    <section class="blog-grh-section">
        <div class="container">
            <div class="blog-header">
                <h1 class="blog-title">Le Blog GRH</h1>
                <p class="blog-subtitle">Découvrez nos dernières insights et analyses sur les tendances RH</p>
                            </div>

            <div class="blog-cards-row">
                <!-- Blog Card 1 -->
                <div class="blog-card-modern">
                    <div class="blog-card-image">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Recrutement">
                        <div class="blog-card-overlay">
                            <span class="blog-category-tag">Recrutement</span>
                                </div>
                            </div>
                    <div class="blog-card-content">
                        <div class="blog-meta">
                            <span class="blog-date">15 Jan 2025</span>
                            <span class="blog-read-time">5 min read</span>
                        </div>
                        <h3>Recrutement : Et si l'émotion y prenait place ?</h3>
                        <p>Exploration du rôle croissant de l'émotion dans les processus de recrutement modernes et comment créer des parcours qui engagent émotionnellement les talents.</p>
                        <div class="blog-card-footer">
                            <a href="#" class="read-more-btn">
                                Lire l'article
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 2 -->
                <div class="blog-card-modern">
                    <div class="blog-card-image">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Innovation RH">
                        <div class="blog-card-overlay">
                            <span class="blog-category-tag">Innovation</span>
                        </div>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-meta">
                            <span class="blog-date">12 Jan 2025</span>
                            <span class="blog-read-time">7 min read</span>
                        </div>
                        <h3>Innovations RH & Managériales</h3>
                        <p>Les outils innovants qui transforment la gestion des ressources humaines et les approches managériales adaptées aux nouvelles générations.</p>
                        <div class="blog-card-footer">
                            <a href="#" class="read-more-btn">
                                Lire l'article
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 3 -->
                <div class="blog-card-modern">
                    <div class="blog-card-image">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Stratégie RH">
                        <div class="blog-card-overlay">
                            <span class="blog-category-tag">Stratégie</span>
                        </div>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-meta">
                            <span class="blog-date">10 Jan 2025</span>
                            <span class="blog-read-time">6 min read</span>
                        </div>
                        <h3>Stratégie RH : Êtes-vous un RH du futur ?</h3>
                        <p>Comment la fonction RH évolue dans l'ère numérique et les compétences clés pour les professionnels RH de demain.</p>
                        <div class="blog-card-footer">
                            <a href="#" class="read-more-btn">
                                Lire l'article
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        </div>
                    </div>

                <!-- Blog Card 4 -->
                <div class="blog-card-modern">
                    <div class="blog-card-image">
                        <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Intelligence Artificielle">
                        <div class="blog-card-overlay">
                            <span class="blog-category-tag">IA & Tech</span>
                        </div>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-meta">
                            <span class="blog-date">8 Jan 2025</span>
                            <span class="blog-read-time">8 min read</span>
                        </div>
                        <h3>IA : Fini le chaos des absences ?</h3>
                        <p>Comment l'IA anticipe et gère les absences imprévues avec des solutions digitales pour optimiser la gestion des plannings.</p>
                        <div class="blog-card-footer">
                            <a href="#" class="read-more-btn">
                                Lire l'article
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="blog-cta">
                <a href="#" class="view-all-blog-btn">
                    <span>Voir tous les articles</span>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Trust Indicators Section -->
    <section class="trust-section">
        <div class="container">
            <div class="section-header fade-in">
                <h2 class="section-title">Ils nous font confiance</h2>
                <p class="section-subtitle"> Nos principes directeurs se sont concrétisés en forces, offrant des avantages à nos clients et à nos ressources</p>
            </div>
            
            <div class="stats-grid">
                <div class="stat-card fade-in">
                    <span class="stat-number">30+</span>
                    <div class="stat-label">Entreprises clientes</div>
                </div>
                <div class="stat-card fade-in">
                    <span class="stat-number">20+</span>
                    <div class="stat-label">Collaborateurs</div>
                </div>
                <div class="stat-card fade-in">
                    <span class="stat-number">10,000+</span>
                    <div class="stat-label">Candidats placés</div>
                </div>
                <div class="stat-card fade-in">
                    <span class="stat-number">98%</span>
                    <div class="stat-label">Taux de satisfaction</div>
                </div>
            </div>
    
        </div>
    </section>
         <!-- JavaScript -->

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carouselInner = document.querySelector('.carousel-inner');
            const dots = document.querySelectorAll('.carousel-dot');
            const sectorItems = document.querySelectorAll('.sector-item');
            const itemWidth = sectorItems[0].offsetWidth + 20; // width + margin
            let currentIndex = 0;
            let slideInterval;
            
            // Calculate how many items to show based on screen width
            function getVisibleItems() {
                if (window.innerWidth >= 1200) return 4;
                if (window.innerWidth >= 992) return 3;
                if (window.innerWidth >= 768) return 2;
                return 1;
            }
            
            // Update carousel position
            function updateCarousel() {
                const visibleItems = getVisibleItems();
                const offset = -currentIndex * itemWidth * visibleItems;
                carouselInner.style.transform = `translateX(${offset}px)`;
                
                // Update dots
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentIndex);
                });
            }
            
            // Auto slide
            function startAutoSlide() {
                slideInterval = setInterval(() => {
                    const visibleItems = getVisibleItems();
                    const totalItems = sectorItems.length;
                    const maxIndex = Math.ceil(totalItems / visibleItems) - 1;
                    
                    currentIndex = (currentIndex >= maxIndex) ? 0 : currentIndex + 1;
                    updateCarousel();
                }, 3000);
            }
            
            // Initialize
            function init() {
                const visibleItems = getVisibleItems();
                const totalItems = sectorItems.length;
                const dotCount = Math.ceil(totalItems / visibleItems);
                
                // Adjust dots based on visible items
                document.querySelector('.carousel-controls').innerHTML = '';
                for (let i = 0; i < dotCount; i++) {
                    const dot = document.createElement('div');
                    dot.className = `carousel-dot ${i === 0 ? 'active' : ''}`;
                    dot.dataset.index = i;
                    dot.addEventListener('click', () => {
                        currentIndex = i;
                        updateCarousel();
                        resetAutoSlide();
                    });
                    document.querySelector('.carousel-controls').appendChild(dot);
                }
                
                updateCarousel();
                startAutoSlide();
            }
            
            // Reset auto slide timer
            function resetAutoSlide() {
                clearInterval(slideInterval);
                startAutoSlide();
            }
            
            // Initialize carousel
            init();
            
            // Handle window resize
            window.addEventListener('resize', () => {
                init();
            });
        });
    </script>


    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                if (this.getAttribute('href') === '#') return;
                
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Sticky header on scroll
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);
        
        // Observe all animated elements
        document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right').forEach(el => {
            observer.observe(el);
        });
        
        // Add hover effects to service cards
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Animate stats on scroll
        const statNumbers = document.querySelectorAll('.stat-number');
        const animateStats = () => {
            statNumbers.forEach(stat => {
                const target = parseInt(stat.textContent);
                let current = 0;
                const increment = target / 50;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        stat.textContent = target + (stat.textContent.includes('+') ? '+' : '') + (stat.textContent.includes('%') ? '%' : '');
                        clearInterval(timer);
                    } else {
                        stat.textContent = Math.floor(current) + (stat.textContent.includes('+') ? '+' : '') + (stat.textContent.includes('%') ? '%' : '');
                    }
                }, 30);
            });
        };
        
        // Trigger stats animation when section is visible
        const statsSection = document.querySelector('.trust-section');
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateStats();
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        statsObserver.observe(statsSection);
    </script>

    @include('layouts.footer')
    </body>
</html>
