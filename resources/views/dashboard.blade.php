@extends('layouts.app')

@section('title', 'Portfolio - Clément Guerault')

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

        /* certifications */
        .cert-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1rem;
        }

        .cert-card {
            position: relative;
            background: linear-gradient(135deg, #16213e, #1a1a2e);
            border-radius: 16px;
            padding: 1.5rem;
            color: white;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(233, 69, 96, 0.15);
        }

        .cert-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #e94560, #ff6b8a);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .cert-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 40px rgba(233, 69, 96, 0.2);
        }

        .cert-card:hover::before {
            opacity: 1;
        }

        .cert-card-bg-glow {
            position: absolute;
            top: -40px;
            right: -40px;
            width: 120px;
            height: 120px;
            background: radial-gradient(circle, rgba(233, 69, 96, 0.12), transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .cert-issuer {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #e94560;
            font-weight: 600;
            margin-bottom: 0.35rem;
        }

        .cert-name {
            font-size: 1rem;
            font-weight: 700;
            color: #f1f1f1;
            line-height: 1.3;
            margin-bottom: 0.5rem;
        }

        .cert-comment {
            font-size: 0.8rem;
            color: rgba(255,255,255,0.5);
            margin-bottom: 1rem;
            font-style: italic;
        }

        .cert-date {
            font-size: 0.75rem;
            color: rgba(255,255,255,0.35);
            margin-bottom: 1rem;
        }

        .cert-pdf-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            background: rgba(233, 69, 96, 0.15);
            color: #e94560;
            border: 1px solid rgba(233, 69, 96, 0.3);
            padding: 0.4rem 0.9rem;
            border-radius: 8px;
            font-size: 0.78rem;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.2s ease, border-color 0.2s ease;
        }

        .cert-pdf-btn:hover {
            background: rgba(233, 69, 96, 0.28);
            border-color: #e94560;
            color: #ff6b8a;
        }

        .cert-icon {
            width: 36px;
            height: 36px;
            background: rgba(233, 69, 96, 0.15);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
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
        /* Section E4 */
        .bts-section {
            background: linear-gradient(135deg, #0d1117 0%, #16213e 50%, #1a1a2e 100%);
            position: relative;
            overflow: hidden;
        }

        .bts-section::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(233, 69, 96, 0.08), transparent 70%);
            pointer-events: none;
        }

        .bts-badge {
            display: inline-block;
            background: rgba(233, 69, 96, 0.15);
            color: #e94560;
            border: 1px solid rgba(233, 69, 96, 0.4);
            padding: 0.25rem 0.85rem;
            border-radius: 999px;
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.12em;
        }

        .bts-pdf-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(233, 69, 96, 0.12);
            color: #e94560;
            border: 1px solid rgba(233, 69, 96, 0.35);
            padding: 0.6rem 1.2rem;
            border-radius: 10px;
            font-size: 0.82rem;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.2s, border-color 0.2s, transform 0.2s;
            white-space: nowrap;
            align-self: flex-start;
            margin-top: 0.25rem;
        }

        .bts-pdf-btn:hover {
            background: rgba(233, 69, 96, 0.25);
            border-color: #e94560;
            transform: translateY(-2px);
        }

        /* Table wrapper avec scroll horizontal sur mobile */
        .bts-table-wrapper {
            overflow-x: auto;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .bts-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }

        /* Header */
        .bts-table thead tr {
            background: rgba(255, 255, 255, 0.04);
            border-bottom: 1px solid rgba(233, 69, 96, 0.3);
        }

        .bts-table thead th {
            padding: 1rem 0.85rem;
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: rgba(255, 255, 255, 0.6);
            text-align: center;
            line-height: 1.4;
            vertical-align: top;
        }

        .bts-th-context {
            text-align: left !important;
            color: rgba(255, 255, 255, 0.3) !important;
            width: 150px;
            min-width: 130px;
        }

        .bts-col-number {
            display: block;
            color: #e94560;
            font-size: 0.65rem;
            margin-bottom: 0.3rem;
            opacity: 0.9;
        }

        /* Body rows */
        .bts-table tbody tr {
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            transition: background 0.2s;
        }

        .bts-table tbody tr:last-child {
            border-bottom: none;
        }

        .bts-table tbody tr:hover {
            background: rgba(255, 255, 255, 0.03);
        }

        .bts-table tbody td {
            padding: 1.1rem 0.85rem;
            text-align: center;
            vertical-align: middle;
        }

        /* Row label */
        .bts-row-label {
            text-align: left !important;
            font-size: 0.82rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.75);
            padding-left: 1.2rem !important;
            white-space: nowrap;
        }

        .bts-row-number {
            display: inline-block;
            font-size: 0.6rem;
            color: #e94560;
            font-weight: 700;
            margin-right: 0.4rem;
            opacity: 0.7;
        }

        /* Check cells */
        .bts-check {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 700;
            text-decoration: none;
            background: rgba(255, 255, 255, 0.04);
            color: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.07);
            transition: background 0.2s, color 0.2s, border-color 0.2s, transform 0.15s;
        }

        .bts-check:hover {
            background: rgba(233, 69, 96, 0.15);
            color: #e94560;
            border-color: rgba(233, 69, 96, 0.4);
            transform: scale(1.15);
        }

        /* Case active (compétence validée avec lien) */
        .bts-check--active {
            background: rgba(233, 69, 96, 0.18);
            color: #e94560;
            border-color: rgba(233, 69, 96, 0.45);
        }

        .bts-check--active:hover {
            background: rgba(233, 69, 96, 0.32);
            transform: scale(1.15);
        }
    </style>
@endpush

@section('content')

    <!-- Section Accueil / Hero -->
    <section id="accueil" class="min-h-screen flex items-center justify-center pt-20 px-6 bg-gradient-to-br from-white via-gray-50 to-gray-100">
        <div class="container mx-auto text-center">
            <div class="animate-fade-in-up">
                <h1 class="hero-title mb-6">
                    <span class="block bg-gradient-to-r from-accent to-gray-500 bg-clip-text text-transparent">Clément</span>
                    <span class="block bg-gradient-to-r from-accent to-pink-500 bg-clip-text text-transparent">Guerault</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-2xl mx-auto font-light">
                    Bienvenue sur mon portfolio
                </p>
                <p class="text-lg text-gray-500 mb-12 max-w-xl mx-auto">
                    Étudiant en BTS SIO - Spécialité SLAM
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
            <h2 class="section-title mb-16 bg-gradient-to-r from-accent to-pink-500 bg-clip-text text-transparent">À propos</h2>

            <div class="grid md:grid-cols-2 gap-12 mb-16">
                <!-- Présentation -->
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Présentation</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Je m’appelle Clément Guérault, étudiant en deuxième année de BTS SIO, spécialité SLAM,
                        à l’Institution des Chartreux. Passionné par le développement et les technologies du web.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Actuellement, je cherche à consolider mes compétences techniques et méthodologiques à travers des projets concrets.
                        Mon objectif à court terme est d’intégrer l’école d’ingénieur ICS.
                    </p>
                </div>

                <!-- animation -->
                <div class="flex items-center justify-center">
                    <div class="relative w-64 h-64">
                        <!-- Halo flou avec gradient doux -->
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-accent to-pink-500 blur-3xl opacity-25 animate-pulse"></div>

                        <!-- Orbites minimalistes -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-48 h-48 border border-pink-300/30 rounded-full animate-spin-slow"></div>
                            <div class="absolute w-36 h-36 border border-accent/20 rounded-full animate-spin-reverse"></div>
                        </div>

                        <!-- Noyau central discret -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 bg-accent/90 rounded-full shadow-lg animate-float"></div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CV Download -->
            <div class="mb-16 p-8 bg-gray-50 rounded-2xl border-2 border-dashed border-gray-300">
                <div class="flex items-center justify-between flex-wrap gap-4">
                    <div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Curriculum Vitae</h4>
                        <p class="text-gray-600">Consulter mon CV complet au format PDF</p>
                    </div>
                    <a href="{{ asset('images/CV_CLEMENT_GUERAULT.pdf') }}" target="_blank" class="btn-primary px-6 py-3 text-white rounded-lg font-semibold inline-flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Consulter CV
                    </a>
                </div>
            </div>

            <!-- Certifications & Compétitions -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">CTF</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="card bg-gradient-to-br from-orange-500 to-red-600 p-6 rounded-xl shadow-lg text-white">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex items-center gap-2">
                                    <h3 class="text-xl font-bold">Root-Me</h3>
                                    <a href="https://www.root-me.org/c-guerault?lang=fr" target="_blank"
                                       class="text-white/80 hover:text-white flex items-center gap-1 text-sm">
                                        Voir <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>
                                <p class="text-white/80 text-sm">Plateforme CTF</p>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span>Rang</span>
                                <span class="font-bold">~#17000</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Points</span>
                                <span class="font-bold">945 pts</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Challenges</span>
                                <span class="font-bold">68 validés</span>
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
                                <span class="font-bold">2026</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Classement</span>
                                <span class="font-bold">3ème</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Equipe</span>
                                <span class="font-bold">Les hommes du mileu</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certifications -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Certifications</h3>
                <div class="cert-grid">
                    @forelse($certifications as $cert)
                        <div class="cert-card">
                            <div class="cert-card-bg-glow"></div>

                            <div class="cert-icon">
                                <svg width="18" height="18" fill="none" stroke="#e94560" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                                </svg>
                            </div>

                            <p class="cert-issuer">{{ $cert->delivre_par }}</p>
                            <p class="cert-name">{{ $cert->nom }}</p>

                            @if($cert->commentaire)
                                <p class="cert-comment">{{ $cert->commentaire }}</p>
                            @endif

                            @if($cert->date_obtention)
                                <p class="cert-date">{{ $cert->date_obtention->format('Y') }}</p>
                            @endif

                            @if($cert->pdf_url)
                                <a href="{{ asset($cert->pdf_url) }}" target="_blank" class="cert-pdf-btn">
                                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                    Voir le certificat
                                </a>
                            @endif
                        </div>
                    @empty
                        <p class="text-gray-400 col-span-full">Aucune certification pour le moment.</p>
                    @endforelse
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
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">C#</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Jave</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Python</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">React native</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">SQL</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">PL/SQL</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">HTML/CSS</span>
                        </div>
                    </div>

                    <!-- Base de données -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Base de données</h4>
                        <div class="flex flex-wrap gap-3">
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Mariadb/MySQL</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">PostgreSQL</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Oracle</span>
                        </div>
                    </div>

                    <!-- Outils -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Outils</h4>
                        <div class="flex flex-wrap gap-3">
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Git</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Wireshark</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">VMWare</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Docker</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Active Directory</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Burp Suite</span>
                        </div>
                    </div>

                    <!-- Systèmes d'exploitation -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-700 mb-3">Systèmes d'exploitations</h4>
                        <div class="flex flex-wrap gap-3">
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Linux</span>
                            <span class="skill-badge text-white px-4 py-2 rounded-full text-sm font-medium">Windows</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Parcours -->
    <section id="parcours" class="py-24 px-6 bg-gray-50">
        <div class="container mx-auto max-w-4xl">
            <h2 class="section-title mb-16 bg-gradient-to-r from-accent to-pink-500 bg-clip-text text-transparent">Mon Parcours</h2>

            <div class="relative">
                <!-- Timeline line -->
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gray-300"></div>

                <!-- Timeline items -->
                <div class="space-y-12">

                    <!-- stage 2 -->
                    <div class="relative pl-20">
                        <div class="timeline-dot absolute left-6 top-2 rounded-full"></div>
                        <div class="card bg-white p-6 rounded-xl shadow-md border-l-4 border-accent">
                            <div class="flex items-center justify-between mb-3 flex-wrap gap-2">
                                <h3 class="text-xl font-bold text-gray-800">Stage - CNRS</h3>
                                <span class="text-sm text-accent font-semibold bg-red-50 px-3 py-1 rounded-full">février - avril 2026 (8 semaines)</span>
                            </div>
                            <p class="text-gray-600 font-medium mb-2">Poste : Développeur</p>
                            <ul class="text-gray-500 space-y-1 list-disc list-inside">
                                <li>Développment d'un logiciel</li>
                                <li>Évaluation basique de la surface d’attaque interne.</li>
                                <li>Technologies utilisées : Python, svelte, javascript, linux</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Stage 1 -->
                    <div class="relative pl-20">
                        <div class="timeline-dot absolute left-6 top-2 rounded-full"></div>
                        <div class="card bg-white p-6 rounded-xl shadow-md border-l-4 border-accent">
                            <div class="flex items-center justify-between mb-3 flex-wrap gap-2">
                                <h3 class="text-xl font-bold text-gray-800">Stage - Petzl</h3>
                                <span class="text-sm text-accent font-semibold bg-red-50 px-3 py-1 rounded-full">juin - juillet 2025 (8 semaines)</span>
                            </div>
                            <p class="text-gray-600 font-medium mb-2">Poste : Technicien Informatique</p>
                            <ul class="text-gray-500 space-y-1 list-disc list-inside">
                                <li>Ségmentation du réseau de l'entreprise en VLANs</li>
                                <li>Support aux utilisateurs</li>
                            </ul>
                        </div>
                    </div>

                    <!-- BTS -->
                    <div class="relative pl-20">
                        <div class="timeline-dot absolute left-6 top-2 rounded-full"></div>
                        <div class="card bg-white p-6 rounded-xl shadow-md border-l-4 border-accent">
                            <div class="flex items-center justify-between mb-3 flex-wrap gap-2">
                                <h3 class="text-xl font-bold text-gray-800">BTS SIO - Option SLAM</h3>
                                <span class="text-sm text-accent font-semibold bg-red-50 px-3 py-1 rounded-full">2024 - 2026</span>
                            </div>
                            <p class="text-gray-600 font-medium mb-2">Institution des Chartreux</p>
                            <p class="text-gray-500">
                                Formation en Services Informatiques aux Organisations avec spécialisation Solutions Logicielles et Applications Métiers.
                            </p>
                        </div>
                    </div>

                    <!-- BAC -->
                    <div class="relative pl-20">
                        <div class="timeline-dot absolute left-6 top-2 rounded-full"></div>
                        <div class="card bg-white p-6 rounded-xl shadow-md border-l-4 border-accent">
                            <div class="flex items-center justify-between mb-3 flex-wrap gap-2">
                                <h3 class="text-xl font-bold text-gray-800">Baccalauréat Général</h3>
                                <span class="text-sm text-accent font-semibold bg-red-50 px-3 py-1 rounded-full">2023</span>
                            </div>
                            <p class="text-gray-600 font-medium mb-2">Lycée polyvalent Gaspard Monge</p>
                            <p class="text-gray-500">
                                Obtention du baccalauréat avec mention bien. Spécialités : Mathématiques, AMC, SI
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <!-- Section Projets -->--}}
{{--    <section id="projets" class="py-24 px-6 bg-white">--}}
{{--        <div class="container mx-auto max-w-6xl">--}}
{{--            <h2 class="section-title mb-16 bg-gradient-to-r from-accent to-pink-500 bg-clip-text text-transparent">Mes Projets</h2>--}}

{{--            <div class="grid md:grid-cols-2 gap-8">--}}
{{--                @include('components.project-card', [--}}
{{--                    'title' => 'Nom du Projet 1',--}}
{{--                    'description' => 'Description courte du projet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Application web développée avec Laravel pour gérer...',--}}
{{--                    'tags' => ['Laravel', 'MySQL', 'Tailwind'],--}}
{{--                    'gradient' => 'from-blue-500 to-purple-600',--}}
{{--                    'github' => '#',--}}
{{--                    'demo' => '#'--}}
{{--                ])--}}

{{--                @include('components.project-card', [--}}
{{--                    'title' => 'Nom du Projet 2',--}}
{{--                    'description' => 'Description courte du projet. Outil en ligne de commande développé en Python pour automatiser...',--}}
{{--                    'tags' => ['Python', 'Linux', 'Bash'],--}}
{{--                    'gradient' => 'from-green-500 to-teal-600',--}}
{{--                    'github' => '#'--}}
{{--                ])--}}

{{--                @include('components.project-card', [--}}
{{--                    'title' => 'Nom du Projet 3',--}}
{{--                    'description' => 'Infrastructure réseau complète pour une PME avec serveur Active Directory, DHCP, DNS...',--}}
{{--                    'tags' => ['Windows Server', 'Active Directory', 'Réseaux'],--}}
{{--                    'gradient' => 'from-red-500 to-pink-600',--}}
{{--                    'doc' => '#'--}}
{{--                ])--}}

{{--                @include('components.project-card', [--}}
{{--                    'title' => 'Nom du Projet 4',--}}
{{--                    'description' => 'Application mobile développée en React Native pour la gestion de...',--}}
{{--                    'tags' => ['React Native', 'JavaScript', 'API REST'],--}}
{{--                    'gradient' => 'from-orange-500 to-yellow-600',--}}
{{--                    'github' => '#'--}}
{{--                ])--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!-- Section Contact -->
    <section id="contact" class="py-24 px-6 bg-gray-50">
        <div class="container mx-auto max-w-4xl">
            <h2 class="section-title mb-16 bg-gradient-to-r from-accent to-pink-500 bg-clip-text text-transparent">Contact</h2>

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
                                <a href="mailto:guerault.clement@gmail.com" class="text-gray-800 font-medium hover:text-accent">guerault.clement@gmail.com</a>
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
                                <p class="text-gray-800 font-medium">Lyon, France</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulaire de contact -->
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Envoyez-moi un message</h3>

                    @if(session('success'))
                        <div id="success-alert" class="mb-6 p-4 rounded-xl bg-green-50 border border-green-200 flex items-center gap-3 animate-fade-in-down">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-green-800 font-medium">{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent text-gray-900" placeholder="Votre nom" value="{{ old('name') }}">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent text-gray-900" placeholder="votre@email.com" value="{{ old('email') }}">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent text-gray-900" placeholder="Votre message...">{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" class="btn-primary w-full px-6 py-3 text-white rounded-lg font-semibold shadow-lg bg-accent hover:opacity-90 transition-opacity">
                            Envoyer le message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Épreuve BTS (Protected) -->
    @auth
        <section id="epreuve-bts" class="bts-section py-24 px-6">
            <div class="container mx-auto max-w-6xl">

                <!-- Header -->
                <div class="bts-header mb-12">
                    <div class="flex items-start justify-between flex-wrap gap-6">
                        <div>
                            <div class="bts-badge mb-3">Option SLAM</div>
                            <h2 class="section-title text-white mb-3">Épreuve E4 — BTS SIO</h2>
                            <p class="text-white/50 text-sm">Solutions Logicielles et Applications Métiers</p>
                        </div>
                        <a href="{{ asset('assets/TABLEAU_SYNTHESE.pdf') }}" target="_blank" class="bts-pdf-btn">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            Grille de compétences
                        </a>
                    </div>
                </div>

                <!-- Tableau -->
                <div class="bts-table-wrapper">
                    <table class="bts-table">
                        <thead>
                        <tr>
                            <th class="bts-th-context">Contexte</th>
                            <th>
                                <span class="bts-col-number">B1.1</span>
                                Patrimoine informatique
                            </th>
                            <th>
                                <span class="bts-col-number">B1.2</span>
                                Incidents &amp; assistance
                            </th>
                            <th>
                                <span class="bts-col-number">B1.3</span>
                                Présence en ligne
                            </th>
                            <th>
                                <span class="bts-col-number">B2.1</span>
                                Mode projet
                            </th>
                            <th>
                                <span class="bts-col-number">B2.2</span>
                                Services utilisateurs
                            </th>
                            <th>
                                <span class="bts-col-number">B2.3</span>
                                Développement pro
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td class="bts-row-label">
                                <span class="bts-row-number">01</span>
                                Formation
                            </td>
                            <td><a href="{{ asset('assets/preuves/PREUVE_7.pdf') }}" target="_blank" class="bts-check bts-check--active" title="Compétence validée">✕</a></td>
                            <td><a class="bts-check" title="Ajouter une réalisation">✕</a></td>
                            <td><a href="{{ asset('assets/preuves/PREUVE_3.pdf') }}" target="_blank" class="bts-check bts-check--active" title="Compétence validée">✕</a></td>
                            <td><a class="bts-check" title="Ajouter une réalisation">✕</a></td>
                            <td><a class="bts-check" title="Ajouter une réalisation">✕</a></td>
                            <td><a href="{{ asset('assets/preuves/PREUVE_6.pdf') }}" target="_blank" class="bts-check bts-check--active" title="Compétence validée">✕</a></td>
                        </tr>
                        <!-- Row 2 -->
                        <tr>
                            <td class="bts-row-label">
                                <span class="bts-row-number">02</span>
                                Stage 1ère année
                            </td>
                            <td><a href="{{ asset('assets/preuves/PREUVE_1.pdf') }}" target="_blank" class="bts-check bts-check--active" title="Compétence validée">✕</a></td>
                            <td><a href="{{ asset('assets/preuves/PREUVE_2.pdf') }}" target="_blank" class="bts-check bts-check--active" title="Compétence validée">✕</a></td>
                            <td><a class="bts-check" title="Ajouter une réalisation">✕</a></td>
                            <td><a class="bts-check" title="Ajouter une réalisation">✕</a></td>
                            <td><a href="{{ asset('assets/preuves/PREUVE_8.pdf') }}" target="_blank" class="bts-check bts-check--active" title="Compétence validée">✕</a></td>
                            <td><a class="bts-check" title="Ajouter une réalisation">✕</a></td>
                        </tr>
                        <!-- Row 3 -->
                        <tr>
                            <td class="bts-row-label">
                                <span class="bts-row-number">03</span>
                                Stage 2ème année
                            </td>
                            <td><a  class="bts-check" title="Ajouter une réalisation">✕</a></td>
                            <td><a class="bts-check" title="Ajouter une réalisation">✕</a></td>
                            <td><a class="bts-check" title="Ajouter une réalisation">✕</a></td>
                            <td><a href="{{ asset('assets/preuves/PREUVE_4.pdf') }}" target="_blank" class="bts-check bts-check--active" title="Compétence validée">✕</a></td>
                            <td><a href="{{ asset('assets/preuves/PREUVE_5.pdf') }}" target="_blank" class="bts-check bts-check--active" title="Compétence validée">✕</a></td>
                            <td><a class="bts-check" title="Ajouter une réalisation">✕</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <p class="text-white/30 text-xs mt-4 text-right">Cliquez sur une case ✕ pour accéder à la réalisation associée</p>

            </div>
        </section>
    @endauth

@endsection
