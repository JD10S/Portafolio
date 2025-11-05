{{-- resources/views/partials/about.blade.php --}}
<section id="acerca" class="py-24 px-6" data-aos="fade-up">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-8" data-aos="fade-down" data-aos-delay="200">
            Acerca de Mí
        </h2>
        <p class="text-gray-300 leading-relaxed mb-10 text-lg" data-aos="fade-up" data-aos-delay="400">
            Soy un desarrollador con experiencia en la creación de aplicaciones web robustas y escalables.
            Me centro en construir productos de alta calidad, desde la planificación hasta la implementación,
            utilizando el ecosistema PHP. Disfruto resolver problemas complejos y mantenerme actualizado
            con las últimas tecnologías.
        </p>

        <h3 class="text-xl font-semibold mb-6" data-aos="fade-up" data-aos-delay="600">
            Mis Tecnologías
        </h3>
        <div class="grid grid-cols-3 sm:grid-cols-6 gap-6">

            <!-- PHP -->
            <div class="group text-center" data-aos="zoom-in" data-aos-delay="700">
                <div class="w-16 h-16 bg-purple-500/20 rounded-xl flex items-center justify-center mx-auto mb-2 shadow-lg transition-all duration-300 group-hover:bg-purple-500/30 group-hover:scale-110 group-hover:shadow-xl">
                    <img src="{{ asset('icons/php.svg') }}" alt="PHP" class="w-10 h-10 filter brightness-0 invert transition-all group-hover:drop-shadow-lg">
                </div>
                <p class="text-xs text-gray-300 font-medium">PHP</p>
            </div>

            <!-- Laravel -->
            <div class="group text-center" data-aos="zoom-in" data-aos-delay="800">
                <div class="w-16 h-16 bg-red-500/20 rounded-xl flex items-center justify-center mx-auto mb-2 shadow-lg transition-all duration-300 group-hover:bg-red-500/30 group-hover:scale-110 group-hover:shadow-xl">
                    <img src="{{ asset('icons/laravel.svg') }}" alt="Laravel" class="w-10 h-10 filter brightness-0 invert transition-all group-hover:drop-shadow-lg">
                </div>
                <p class="text-xs text-gray-300 font-medium">Laravel</p>
            </div>

            <!-- JavaScript -->
            <div class="group text-center" data-aos="zoom-in" data-aos-delay="900">
                <div class="w-16 h-16 bg-yellow-500/20 rounded-xl flex items-center justify-center mx-auto mb-2 shadow-lg transition-all duration-300 group-hover:bg-yellow-500/30 group-hover:scale-110 group-hover:shadow-xl">
                    <img src="{{ asset('icons/javascript.svg') }}" alt="JavaScript" class="w-10 h-10 filter brightness-0 invert transition-all group-hover:drop-shadow-lg">
                </div>
                <p class="text-xs text-gray-300 font-medium">JavaScript</p>
            </div>

            <!-- MySQL -->
            <div class="group text-center" data-aos="zoom-in" data-aos-delay="1000">
                <div class="w-16 h-16 bg-blue-500/20 rounded-xl flex items-center justify-center mx-auto mb-2 shadow-lg transition-all duration-300 group-hover:bg-blue-500/30 group-hover:scale-110 group-hover:shadow-xl">
                    <img src="{{ asset('icons/mysql.svg') }}" alt="MySQL" class="w-10 h-10 filter brightness-0 invert transition-all group-hover:drop-shadow-lg">
                </div>
                <p class="text-xs text-gray-300 font-medium">MySQL</p>
            </div>

            <!-- HTML5 -->
            <div class="group text-center" data-aos="zoom-in" data-aos-delay="1100">
                <div class="w-16 h-16 bg-orange-500/20 rounded-xl flex items-center justify-center mx-auto mb-2 shadow-lg transition-all duration-300 group-hover:bg-orange-500/30 group-hover:scale-110 group-hover:shadow-xl">
                    <img src="{{ asset('icons/html5.svg') }}" alt="HTML5" class="w-10 h-10 filter brightness-0 invert transition-all group-hover:drop-shadow-lg">
                </div>
                <p class="text-xs text-gray-300 font-medium">HTML5</p>
            </div>

            <!-- CSS3 -->
            <div class="group text-center" data-aos="zoom-in" data-aos-delay="1200">
                <div class="w-16 h-16 bg-cyan-500/20 rounded-xl flex items-center justify-center mx-auto mb-2 shadow-lg transition-all duration-300 group-hover:bg-cyan-500/30 group-hover:scale-110 group-hover:shadow-xl">
                    <img src="{{ asset('icons/css.svg') }}" alt="CSS" class="w-10 h-10 filter brightness-0 invert transition-all group-hover:drop-shadow-lg">
                </div>
                <p class="text-xs text-gray-300 font-medium">CSS</p>
            </div>

            <!-- Git -->
            <div class="group text-center" data-aos="zoom-in" data-aos-delay="1300">
                <div class="w-16 h-16 bg-orange-600/20 rounded-xl flex items-center justify-center mx-auto mb-2 shadow-lg transition-all duration-300 group-hover:bg-orange-600/30 group-hover:scale-110 group-hover:shadow-xl">
                    <img src="{{ asset('icons/git.svg') }}" alt="Git" class="w-10 h-10 filter brightness-0 invert transition-all group-hover:drop-shadow-lg">
                </div>
                <p class="text-xs text-gray-300 font-medium">Git</p>
            </div>

            <!-- Tailwind CSS -->
            <div class="group text-center" data-aos="zoom-in" data-aos-delay="1400">
                <div class="w-16 h-16 bg-teal-500/20 rounded-xl flex items-center justify-center mx-auto mb-2 shadow-lg transition-all duration-300 group-hover:bg-teal-500/30 group-hover:scale-110 group-hover:shadow-xl">
                    <img src="{{ asset('icons/tailwindcss.svg') }}" alt="Tailwind CSS" class="w-10 h-10 filter brightness-0 invert transition-all group-hover:drop-shadow-lg">
                </div>
                <p class="text-xs text-gray-300 font-medium">Tailwind</p>
            </div>

            <!-- Vue.js -->
            <div class="group text-center" data-aos="zoom-in" data-aos-delay="1500">
                <div class="w-16 h-16 bg-green-500/20 rounded-xl flex items-center justify-center mx-auto mb-2 shadow-lg transition-all duration-300 group-hover:bg-green-500/30 group-hover:scale-110 group-hover:shadow-xl">
                    <img src="{{ asset('icons/vuedotjs.svg') }}" alt="Vue.js" class="w-10 h-10 filter brightness-0 invert transition-all group-hover:drop-shadow-lg">
                </div>
                <p class="text-xs text-gray-300 font-medium">Vue.js</p>
            </div>

            <!-- React -->
            <div class="group text-center" data-aos="zoom-in" data-aos-delay="1600">
                <div class="w-16 h-16 bg-cyan-600/20 rounded-xl flex items-center justify-center mx-auto mb-2 shadow-lg transition-all duration-300 group-hover:bg-cyan-600/30 group-hover:scale-110 group-hover:shadow-xl">
                    <img src="{{ asset('icons/react.svg') }}" alt="React" class="w-10 h-10 filter brightness-0 invert transition-all group-hover:drop-shadow-lg">
                </div>
                <p class="text-xs text-gray-300 font-medium">React</p>
            </div>

        </div>
    </div>
</section>