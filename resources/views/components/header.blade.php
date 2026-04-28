<header class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-sm shadow-sm z-50">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <a href="{{ route('dashboard') }}" class="text-2xl font-bold bg-gradient-to-r from-accent to-pink-500 bg-clip-text text-transparent">
                Portfolio
            </a>

            <!-- Desktop Navigation -->
            <ul class="hidden md:flex space-x-8 items-center">
                <li><a href="#accueil" class="nav-link text-gray-700 hover:text-accent font-medium relative">Accueil</a></li>
                <li><a href="#apropos" class="nav-link text-gray-700 hover:text-accent font-medium relative">À propos</a></li>
                <li><a href="#parcours" class="nav-link text-gray-700 hover:text-accent font-medium relative">Parcours</a></li>
{{--                <li><a href="#projets" class="nav-link text-gray-700 hover:text-accent font-medium relative">Projets</a></li>--}}
                <li><a href="#contact" class="nav-link text-gray-700 hover:text-accent font-medium relative">Contact</a></li>

                @auth
                    <li>
                        <a href="#epreuve-bts" class="nav-link text-gray-700 hover:text-accent font-medium relative">Épreuve BTS</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="px-4 py-2 border-2 border-accent text-accent rounded-lg hover:bg-accent hover:text-white transition">
                                Déconnexion
                            </button>
                        </form>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}" class="px-4 py-2 bg-accent text-white rounded-lg hover:bg-red-600 transition">
                            Connexion
                        </a>
                    </li>
                @endauth
            </ul>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="fixed top-0 right-0 h-full w-64 bg-white shadow-2xl md:hidden p-6 transform translate-x-full transition-transform duration-300">
            <button id="close-menu" class="absolute top-4 right-4 text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <ul class="mt-12 space-y-4">
                <li><a href="#accueil" class="block text-gray-700 hover:text-accent font-medium py-2">Accueil</a></li>
                <li><a href="#apropos" class="block text-gray-700 hover:text-accent font-medium py-2">À propos</a></li>
                <li><a href="#parcours" class="block text-gray-700 hover:text-accent font-medium py-2">Parcours</a></li>
                <li><a href="#projets" class="block text-gray-700 hover:text-accent font-medium py-2">Projets</a></li>
                <li><a href="#contact" class="block text-gray-700 hover:text-accent font-medium py-2">Contact</a></li>

                @auth
                    <li>
                        <a href="#epreuve-bts" class="block text-gray-700 hover:text-accent font-medium py-2">Épreuve BTS</a>
                    </li>
                    <li class="pt-4 border-t">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full px-4 py-2 border-2 border-accent text-accent rounded-lg">
                                Déconnexion
                            </button>
                        </form>
                    </li>
                @else
                    <li class="pt-4 border-t">
                        <a href="{{ route('login') }}" class="block px-4 py-2 bg-accent text-white rounded-lg text-center">
                            Connexion
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>
</header>

@push('scripts')
    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMenuBtn = document.getElementById('close-menu');
        const mobileLinks = mobileMenu.querySelectorAll('a');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('translate-x-full');
        });

        closeMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('translate-x-full');
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('translate-x-full');
            });
        });
    </script>
@endpush
