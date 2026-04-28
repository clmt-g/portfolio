<footer class="bg-primary text-white py-12 px-6">
    <div class="container mx-auto max-w-6xl">
        <div class="grid md:grid-cols-3 gap-8 mb-8">
            <div>
                <h3 class="text-2xl font-bold mb-4 bg-gradient-to-r from-accent to-pink-500 bg-clip-text text-transparent">
                    Portfolio
                </h3>
                <p class="text-gray-800">
                    Étudiant en BTS SIO passionné par l'informatique et la cybersécurité.
                </p>
            </div>
            <div>
                <h4 class="text-2xl font-bold mb-4 bg-gradient-to-r from-accent to-pink-500 bg-clip-text text-transparent">Navigation</h4>
                <ul class="space-y-2 text-gray-800">
                    <li><a href="#accueil" class="hover:text-accent transition">Accueil</a></li>
                    <li><a href="#apropos" class="hover:text-accent transition">À propos</a></li>
                    <li><a href="#parcours" class="hover:text-accent transition">Parcours</a></li>
{{--                    <li><a href="#projets" class="hover:text-accent transition">Projets</a></li>--}}
                    <li><a href="#contact" class="hover:text-accent transition">Contact</a></li>
                    @auth
                        <li><a href="#epreuve-bts" class="hover:text-accent transition">Épreuve BTS</a></li>
                    @endauth
                </ul>
            </div>
            <div>
                <h4 class="text-2xl font-bold mb-4 bg-gradient-to-r from-accent to-pink-500 bg-clip-text text-transparent">Contact</h4>
                <ul class="space-y-2 text-gray-800">
                    <li>guerault.clement@gmail.com</li>
                    <li>Lyon, France</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-700 pt-8 text-center text-gray-800">
            <p>{{ date('Y') }} Guerault Clément. Tous droits réservés.</p>
        </div>
    </div>
</footer>
