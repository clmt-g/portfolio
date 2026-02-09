@extends('layouts.app')

@section('title', 'Portfolio - Votre Nom')

@push('styles')
    <style>
        .hero-title {
            font-size: clamp(3rem, 8vw, 7rem);
            line-height: 0.9;
            font-weight: 900;
            font-family: 'Playfair Display', serif;
        }

        .section-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            font-family: 'Playfair Display', serif;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: #e94560;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #e94560;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .skill-badge {
            background: linear-gradient(135deg, #16213e, #1a1a2e);
            transition: transform 0.2s ease;
        }

        .skill-badge:hover {
            transform: scale(1.05);
        }

        .timeline-dot {
            width: 16px;
            height: 16px;
            background: #e94560;
            border: 4px solid white;
            box-shadow: 0 0 0 2px #e94560;
        }

        .btn-primary {
            background: #e94560;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #d63850;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(233, 69, 96, 0.3);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
    </style>
@endpush

@section('content')

    <!-- Section Accueil / Hero -->
    <section id="accueil" class="min-h-screen flex items-center justify-center pt-20 px-6 bg-gradient-to-br from-white via-gray-50 to-gray-100">
        <div class="container mx-auto text-center">
            <div class="animate-fade-in-up">
                <h1 class="hero-title mb-6">
                    <span class="block">Votre</span>
                    <span class="block bg-gradient-to-r from-accent to-pink-500 bg-clip-text text-transparent">Nom</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-2xl mx-auto font-light">
                    Bienvenue sur mon portfolio
                </p>
                <p class="text-lg text-gray-500 mb-12 max-w-xl mx-auto">
                    Étudiant en BTS SIO - Spécialité SISR/SLAM
                </p>
                <a href="#apropos" class="btn-primary inline-block px-8 py-4 text-white rounded-lg font-semibold shadow-lg">
                    Découvrir mon parcours
                </a>
            </div>
        </div>
    </section>

    <!-- Section À propos -->
    <section id="apropos" class="py-24 px-6 bg-white">
        <div class="container mx-auto max-w-6xl">
            <h2 class="section-title mb-16">À propos</h2>

            <div class="grid md:grid-cols-2 gap-12 mb-16">
                <!-- Présentation -->
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Présentation</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Passionné par l'informatique et la cybersécurité,
                        je suis actuellement en formation BTS SIO avec une spécialisation en [SISR/SLAM].
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Mon objectif est de développer mes compétences techniques tout en contribuant à des projets innovants
                        dans le domaine de l'informatique et de la sécurité des systèmes d'information.
                    </p>
                </div>

                <!-- Photo placeholder -->
                <div class="flex items-center justify-center">
                    <div class="w-64 h-64 bg-gradient-to-br from-secondary to-accent rounded-2xl shadow-xl flex items-center justify-center text-white text-6xl font-bold">
                        Photo
                    </div>
                </div>
            </div>

            <!-- CV Download -->
            <div class="mb-16 p-8 bg-gray-50 rounded-2xl border-2 border-dashed border-gray-300">
                <div class="flex items-center justify-between flex-wrap gap-4">
                    <div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Curriculum Vitae</h4>
                        <p class="text-gray-600">Téléchargez mon CV complet au format PDF</p>
                    </div>
                    <a href="/cv.pdf" class="btn-primary px-6 py-3 text-white rounded-lg font-semibold inline-flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Télécharger CV
                    </a>
                </div>
            </div>

            <!-- Certifications & Compétitions -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Certifications & Compétitions</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="card bg-gradient-to-br from-orange-500 to-red-600 p-6 rounded-xl shadow-lg text-white">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold">Root-Me</h4>
                                <p class="text-white/80">Plateforme CTF</p>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span>Rang</span>
                                <span class="font-bold">#1234</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Points</span>
                                <span class="font-bold">500 pts</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Challenges</span>
                                <span class="font-bold">25 validés</span>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-gradient-to-br from-blue-500 to-purple-600 p-6 rounded-xl shadow-lg text-white">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold">PassTonHack</h4>
                                <p class="text-white/80">Compétition CTF</p>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span>Année</span>
                                <span class="font-bold">2024</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Classement</span>
                                <span class="font-bold">Top 50</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Catégorie</span>
                                <span class="font-bold">Web / Crypto</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Compétences -->
            <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Compétences Techniques</h3>

                <div class="space-y-8">
                    <!-- Développement -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Développement</h4>
                        <div class="flex flex-wrap gap-3">
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">PHP</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Laravel</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">JavaScript</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Python</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">SQL</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">HTML/CSS</span>
                        </div>
                    </div>

                    <!-- Systèmes & Réseaux -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Systèmes & Réseaux</h4>
                        <div class="flex flex-wrap gap-3">
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Linux</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Windows Server</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Docker</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Réseaux TCP/IP</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Active Directory</span>
                        </div>
                    </div>

                    <!-- Cybersécurité -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Cybersécurité</h4>
                        <div class="flex flex-wrap gap-3">
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Pentest</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">CTF</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">OWASP</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Cryptographie</span>
                        </div>
                    </div>

                    <!-- Outils -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Outils</h4>
                        <div class="flex flex-wrap gap-3">
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Git</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">VS Code</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Wireshark</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Burp Suite</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Parcours -->
    <section id="parcours" class="py-24 px-6 bg-gray-50">
        <div class="container mx-auto max-w-4xl">
            <h2 class="section-title mb-16">Mon Parcours</h2>

            <div class="relative">
                <!-- Timeline line -->
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gray-300"></div>

                <!-- Timeline items -->
                <div class="space-y-12">
                    <!-- Item 1 -->
                    <div class="relative pl-20">
                        <div class="timeline-dot absolute left-6 top-2 rounded-full"></div>
                        <div class="card bg-white p-6 rounded-xl shadow-md">
                            <div class="flex items-center justify-between mb-3 flex-wrap gap-2">
                                <h3 class="text-xl font-bold text-gray-800">BTS SIO - Option SISR/SLAM</h3>
                                <span class="text-sm text-accent font-semibold bg-red-50 px-3 py-1 rounded-full">2023 - 2025</span>
                            </div>
                            <p class="text-gray-600 font-medium mb-2">Lycée [Nom du Lycée]</p>
                            <p class="text-gray-500">
                                Formation en Services Informatiques aux Organisations avec spécialisation en Solutions d'Infrastructure,
                                Systèmes et Réseaux / Solutions Logicielles et Applications Métiers.
                            </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="relative pl-20">
                        <div class="timeline-dot absolute left-6 top-2 rounded-full"></div>
                        <div class="card bg-white p-6 rounded-xl shadow-md">
                            <div class="flex items-center justify-between mb-3 flex-wrap gap-2">
                                <h3 class="text-xl font-bold text-gray-800">Baccalauréat [Série]</h3>
                                <span class="text-sm text-accent font-semibold bg-red-50 px-3 py-1 rounded-full">2023</span>
                            </div>
                            <p class="text-gray-600 font-medium mb-2">Lycée [Nom du Lycée]</p>
                            <p class="text-gray-500">
                                Obtention du baccalauréat avec mention [Mention]. Spécialités : [NSI, Mathématiques, etc.]
                            </p>
                        </div>
                    </div>

                    <!-- Item 3 - Stage -->
                    <div class="relative pl-20">
                        <div class="timeline-dot absolute left-6 top-2 rounded-full"></div>
                        <div class="card bg-white p-6 rounded-xl shadow-md border-l-4 border-accent">
                            <div class="flex items-center justify-between mb-3 flex-wrap gap-2">
                                <h3 class="text-xl font-bold text-gray-800">Stage - [Nom Entreprise]</h3>
                                <span class="text-sm text-accent font-semibold bg-red-50 px-3 py-1 rounded-full">2024</span>
                            </div>
                            <p class="text-gray-600 font-medium mb-2">Poste : Technicien Informatique / Développeur</p>
                            <ul class="text-gray-500 space-y-1 list-disc list-inside">
                                <li>Mission principale 1</li>
                                <li>Mission principale 2</li>
                                <li>Technologies utilisées : Laravel, Docker, Linux...</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="relative pl-20">
                        <div class="timeline-dot absolute left-6 top-2 rounded-full"></div>
                        <div class="card bg-white p-6 rounded-xl shadow-md">
                            <div class="flex items-center justify-between mb-3 flex-wrap gap-2">
                                <h3 class="text-xl font-bold text-gray-800">Autoformation & Projets</h3>
                                <span class="text-sm text-accent font-semibold bg-red-50 px-3 py-1 rounded-full">2022 - Présent</span>
                            </div>
                            <p class="text-gray-500">
                                Participation active à des plateformes de CTF (Root-Me, TryHackMe), développement de projets personnels,
                                et veille technologique continue sur les nouvelles technologies et vulnérabilités.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Projets -->
    <section id="projets" class="py-24 px-6 bg-white">
        <div class="container mx-auto max-w-6xl">
            <h2 class="section-title mb-16">Mes Projets</h2>

            <div class="grid md:grid-cols-2 gap-8">
                @include('components.project-card', [
                    'title' => 'Nom du Projet 1',
                    'description' => 'Description courte du projet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Application web développée avec Laravel pour gérer...',
                    'tags' => ['Laravel', 'MySQL', 'Tailwind'],
                    'gradient' => 'from-blue-500 to-purple-600',
                    'github' => '#',
                    'demo' => '#'
                ])

                @include('components.project-card', [
                    'title' => 'Nom du Projet 2',
                    'description' => 'Description courte du projet. Outil en ligne de commande développé en Python pour automatiser...',
                    'tags' => ['Python', 'Linux', 'Bash'],
                    'gradient' => 'from-green-500 to-teal-600',
                    'github' => '#'
                ])

                @include('components.project-card', [
                    'title' => 'Nom du Projet 3',
                    'description' => 'Infrastructure réseau complète pour une PME avec serveur Active Directory, DHCP, DNS...',
                    'tags' => ['Windows Server', 'Active Directory', 'Réseaux'],
                    'gradient' => 'from-red-500 to-pink-600',
                    'doc' => '#'
                ])

                @include('components.project-card', [
                    'title' => 'Nom du Projet 4',
                    'description' => 'Application mobile développée en React Native pour la gestion de...',
                    'tags' => ['React Native', 'JavaScript', 'API REST'],
                    'gradient' => 'from-orange-500 to-yellow-600',
                    'github' => '#'
                ])
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="py-24 px-6 bg-gray-50">
        <div class="container mx-auto max-w-4xl">
            <h2 class="section-title mb-16">Contact</h2>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Informations de contact -->
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Restons en contact</h3>
                    <p class="text-gray-600 mb-8">
                        N'hésitez pas à me contacter pour toute question, opportunité de stage ou collaboration.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Email</p>
                                <a href="mailto:votre.email@example.com" class="text-gray-800 font-medium hover:text-accent">votre.email@example.com</a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Téléphone</p>
                                <a href="tel:+33612345678" class="text-gray-800 font-medium hover:text-accent">+33 6 12 34 56 78</a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Localisation</p>
                                <p class="text-gray-800 font-medium">Paris, France</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">Réseaux sociaux</h4>
                        <div class="flex gap-4">
                            <a href="#" class="w-12 h-12 bg-gray-800 hover:bg-accent rounded-full flex items-center justify-center text-white transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-blue-600 hover:bg-accent rounded-full flex items-center justify-center text-white transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Formulaire de contact -->
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Envoyez-moi un message</h3>
                    <form action="#" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent" placeholder="Votre nom">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent" placeholder="votre@email.com">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent" placeholder="Votre message..."></textarea>
                        </div>
                        <button type="submit" class="btn-primary w-full px-6 py-3 text-white rounded-lg font-semibold shadow-lg">
                            Envoyer le message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Épreuve BTS (Protected) -->
    @auth
        <section id="epreuve-bts" class="bg-gradient-to-br from-purple-600 to-indigo-700 py-24 px-6">
            <div class="container mx-auto max-w-6xl">
                <h2 class="section-title text-white mb-16">Épreuve E4 - BTS SIO</h2>

                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 text-white">
                    <h3 class="text-3xl font-bold mb-6">Documentation de l'épreuve</h3>

                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="bg-white/5 p-6 rounded-xl">
                            <h4 class="text-xl font-bold mb-4">Contexte professionnel</h4>
                            <p class="text-white/80 mb-4">
                                Description du contexte de l'entreprise fictive ou réelle dans laquelle se déroule le projet.
                            </p>
                            <ul class="space-y-2 text-white/80">
                                <li>• Secteur d'activité</li>
                                <li>• Problématique identifiée</li>
                                <li>• Objectifs du projet</li>
                            </ul>
                        </div>

                        <div class="bg-white/5 p-6 rounded-xl">
                            <h4 class="text-xl font-bold mb-4">Compétences mobilisées</h4>
                            <div class="space-y-2">
                                <div class="bg-white/10 px-4 py-2 rounded-lg">B1.1 - Gestion du patrimoine informatique</div>
                                <div class="bg-white/10 px-4 py-2 rounded-lg">B1.2 - Réponse aux incidents et demandes</div>
                                <div class="bg-white/10 px-4 py-2 rounded-lg">B1.3 - Développement de la présence en ligne</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white/5 p-6 rounded-xl mb-8">
                        <h4 class="text-xl font-bold mb-4">Productions réalisées</h4>
                        <div class="grid md:grid-cols-3 gap-4">
                            <a href="#" class="bg-white/10 hover:bg-white/20 p-4 rounded-lg transition text-center">
                                <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <p class="font-medium">Tableau de synthèse</p>
                            </a>
                            <a href="#" class="bg-white/10 hover:bg-white/20 p-4 rounded-lg transition text-center">
                                <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                                <p class="font-medium">Documentation technique</p>
                            </a>
                            <a href="#" class="bg-white/10 hover:bg-white/20 p-4 rounded-lg transition text-center">
                                <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                                <p class="font-medium">Code source</p>
                            </a>
                        </div>
                    </div>

                    <div class="bg-white/5 p-6 rounded-xl">
                        <h4 class="text-xl font-bold mb-4">Timeline du projet</h4>
                        <div class="space-y-4">
                            <div class="flex items-start gap-4">
                                <div class="w-2 h-2 bg-white rounded-full mt-2"></div>
                                <div>
                                    <p class="font-bold">Phase 1 : Analyse et conception</p>
                                    <p class="text-white/80 text-sm">Étude du besoin et conception de la solution</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-2 h-2 bg-white rounded-full mt-2"></div>
                                <div>
                                    <p class="font-bold">Phase 2 : Développement</p>
                                    <p class="text-white/80 text-sm">Implémentation de la solution technique</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-2 h-2 bg-white rounded-full mt-2"></div>
                                <div>
                                    <p class="font-bold">Phase 3 : Tests et déploiement</p>
                                    <p class="text-white/80 text-sm">Validation et mise en production</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endauth

@endsection
