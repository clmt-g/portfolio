<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <style>
        .hero-title {
            font-size: clamp(2.5rem, 6vw, 4rem);
            line-height: 1.1;
            font-weight: 900;
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

        .input-focus:focus {
            outline: none;
            border-color: #e94560;
            box-shadow: 0 0 0 3px rgba(233, 69, 96, 0.1);
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
</head>
<body class="bg-gradient-to-br from-white via-gray-50 to-gray-100">
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 animate-fade-in-up">
        <!-- Header -->
        <div class="text-center">
            <h1 class="hero-title mb-4">
                    <span class="block bg-gradient-to-r from-accent to-pink-500 bg-clip-text text-transparent">
                        Connexion
                    </span>
            </h1>
            <p class="text-gray-600 text-lg">
                Accédez à votre espace privé
            </p>
        </div>

        <!-- Status Message -->
        @if (session('status'))
            <div class="rounded-xl bg-gradient-to-r from-green-500 to-teal-600 p-4 shadow-lg">
                <p class="text-sm text-white text-center font-medium">{{ session('status') }}</p>
            </div>
        @endif

        <!-- Login Form -->
        <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        Adresse email
                    </label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        required
                        value="{{ old('email') }}"
                        class="input-focus w-full px-4 py-3 border-2 border-gray-200 rounded-lg transition-all duration-200 text-gray-900 placeholder-gray-400"
                        placeholder="votre@email.com"
                    >
                    @error('email')
                    <p class="text-red-600 text-sm mt-2 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                        Mot de passe
                    </label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        required
                        class="input-focus w-full px-4 py-3 border-2 border-gray-200 rounded-lg transition-all duration-200 text-gray-900 placeholder-gray-400"
                        placeholder="••••••••"
                    >
                    @error('password')
                    <p class="text-red-600 text-sm mt-2 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input
                        id="remember"
                        name="remember"
                        type="checkbox"
                        class="w-4 h-4 text-accent focus:ring-accent border-gray-300 rounded transition"
                    >
                    <label for="remember" class="ml-3 block text-sm text-gray-700 font-medium">
                        Se souvenir de moi
                    </label>
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    class="btn-primary w-full py-3 px-6 text-white rounded-lg font-semibold text-lg shadow-lg"
                >
                    Se connecter
                </button>
            </form>
        </div>

        <!-- Back to Home -->
        <div class="text-center">
            <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-accent transition font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Retour à l'accueil
            </a>
        </div>
    </div>
</div>
</body>
</html>
