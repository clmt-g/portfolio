<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page non trouvée</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <style>
        .hero-title {
            font-size: clamp(4rem, 12vw, 10rem);
            line-height: 0.9;
            font-weight: 900;
            font-family: 'Playfair Display', serif;
        }

        .subtitle {
            font-size: clamp(1.5rem, 4vw, 2.5rem);
            font-weight: 700;
            font-family: 'Playfair Display', serif;
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

        .btn-secondary {
            border: 2px solid #e94560;
            color: #e94560;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: #e94560;
            color: white;
            transform: translateY(-2px);
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
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

        .glitch {
            position: relative;
        }

        .glitch::before,
        .glitch::after {
            content: '404';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .glitch::before {
            animation: glitch-1 2s infinite;
            color: #e94560;
            z-index: -1;
        }

        .glitch::after {
            animation: glitch-2 2s infinite;
            color: #d63850;
            z-index: -2;
        }

        @keyframes glitch-1 {
            0%, 100% {
                transform: translate(0);
            }
            33% {
                transform: translate(-2px, 2px);
            }
            66% {
                transform: translate(2px, -2px);
            }
        }

        @keyframes glitch-2 {
            0%, 100% {
                transform: translate(0);
            }
            33% {
                transform: translate(2px, -2px);
            }
            66% {
                transform: translate(-2px, 2px);
            }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-white via-gray-50 to-gray-100">
<div class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl w-full text-center animate-fade-in-up">

        <!-- 404 Animated -->
        <div class="mb-8 floating">
            <h1 class="hero-title glitch bg-gradient-to-r from-accent to-pink-500 bg-clip-text text-transparent">
                404
            </h1>
        </div>

        <!-- Title -->
        <h2 class="subtitle text-gray-800 mb-6">
            Oups ! Page introuvable
        </h2>

        <!-- Description -->
        <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
            La page que vous recherchez semble avoir disparu dans les méandres du cyberespace.
            Elle a peut-être été déplacée, supprimée, ou n'a jamais existé.
        </p>

        <!-- Illustration / Icon -->
        <div class="mb-12">
            <svg class="w-64 h-64 mx-auto text-accent opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a
                href="{{ route('dashboard') }}"
                class="btn-primary inline-flex items-center gap-2 px-8 py-4 text-white rounded-lg font-semibold shadow-lg"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Retour à l'accueil
            </a>

            <button
                onclick="history.back()"
                class="btn-secondary inline-flex items-center gap-2 px-8 py-4 rounded-lg font-semibold"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Page précédente
            </button>
        </div>

        <!-- Additional Links -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <p class="text-gray-500 mb-4">Vous cherchiez peut-être :</p>
            <div class="flex flex-wrap gap-3 justify-center">
                <a href="{{ route('dashboard') }}#apropos" class="text-accent hover:underline font-medium">À propos</a>
                <span class="text-gray-300">•</span>
                <a href="{{ route('dashboard') }}#projets" class="text-accent hover:underline font-medium">Projets</a>
                <span class="text-gray-300">•</span>
                <a href="{{ route('dashboard') }}#parcours" class="text-accent hover:underline font-medium">Parcours</a>
                <span class="text-gray-300">•</span>
                <a href="{{ route('dashboard') }}#contact" class="text-accent hover:underline font-medium">Contact</a>
            </div>
        </div>

    </div>
</div>

<!-- Decorative Elements -->
<div class="fixed top-0 left-0 w-full h-full pointer-events-none overflow-hidden -z-10">
    <div class="absolute top-20 left-10 w-72 h-72 bg-accent/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-pink-500/5 rounded-full blur-3xl"></div>
</div>
</body>
</html>
