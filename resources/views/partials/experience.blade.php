{{-- resources/views/partials/experience.blade.php --}}
<section id="experiencia" class="py-24 px-6" data-aos="fade-up">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-14 text-center" 
            data-aos="fade-down" 
            data-aos-delay="200">
            Experiencia Profesional
        </h2>

        <div class="space-y-16 relative">
            <!-- Línea vertical central (opcional, más limpia con CSS) -->
            <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-linear-to-b from-blue-500/50 to-gray-700/50 hidden md:block"></div>

            <!-- Experiencia 1 -->
            <div class="flex gap-6 relative" 
                 data-aos="fade-right" 
                 data-aos-delay="400"
                 data-aos-duration="600">
                
                <!-- Punto + línea -->
                <div class="flex flex-col items-center z-10">
                    <div class="w-4 h-4 bg-blue-500 rounded-full ring-4 ring-blue-500/30 shadow-lg"></div>
                    <div class="w-0.5 bg-linear-to-b from-blue-500 to-transparent flex-1 mt-2"></div>
                </div>

                <!-- Contenido -->
                <div class="flex-1 pb-16 bg-gray-800/40 backdrop-blur-sm rounded-xl p-6 border border-gray-700/50 
                            shadow-lg hover:shadow-xl hover:border-blue-500/30 
                            transition-all duration-300 group">
                    <p class="text-blue-400 text-sm font-medium">Ene 2021 – Presente</p>
                    <h3 class="text-xl font-semibold mt-1 text-white group-hover:text-blue-300 transition-colors">
                        Fullstack Developer en Tech Solutions Inc.
                    </h3>
                    <p class="text-gray-300 mt-2 leading-relaxed text-sm">
                        Desarrollo y mantenimiento de aplicaciones web complejas con Laravel y Vue.js. 
                        Implementación de arquitecturas escalables, integración con APIs externas y optimización de rendimiento.
                    </p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-600/20 text-blue-300 text-xs rounded-full">Laravel</span>
                        <span class="px-3 py-1 bg-green-600/20 text-green-300 text-xs rounded-full">Vue.js</span>
                        <span class="px-3 py-1 bg-purple-600/20 text-purple-300 text-xs rounded-full">MySQL</span>
                    </div>
                </div>
            </div>

            <!-- Experiencia 2 -->
            <div class="flex gap-6 relative" 
                 data-aos="fade-left" 
                 data-aos-delay="600"
                 data-aos-duration="600">
                
                <!-- Punto -->
                <div class="flex flex-col items-center z-10">
                    <div class="w-4 h-4 bg-blue-500 rounded-full ring-4 ring-blue-500/30 shadow-lg"></div>
                </div>

                <!-- Contenido -->
                <div class="flex-1 bg-gray-800/40 backdrop-blur-sm rounded-xl p-6 border border-gray-700/50 
                            shadow-lg hover:shadow-xl hover:border-blue-500/30 
                            transition-all duration-300 group">
                    <p class="text-blue-400 text-sm font-medium">Jun 2018 – Dic 2020</p>
                    <h3 class="text-xl font-semibold mt-1 text-white group-hover:text-blue-300 transition-colors">
                        Backend PHP Developer en Web Innovators
                    </h3>
                    <p class="text-gray-300 mt-2 leading-relaxed text-sm">
                        Creación de APIs RESTful y gestión de bases de datos MySQL. 
                        Desarrollo de sistemas de autenticación JWT, integración con Stripe y despliegues en AWS.
                    </p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-red-600/20 text-red-300 text-xs rounded-full">PHP</span>
                        <span class="px-3 py-1 bg-orange-600/20 text-orange-300 text-xs rounded-full">MySQL</span>
                        <span class="px-3 py-1 bg-teal-600/20 text-teal-300 text-xs rounded-full">AWS</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>