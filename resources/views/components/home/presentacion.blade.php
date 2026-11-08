
<section
    id="presentacion"
    class="relative overflow-hidden bg-marfil py-20 sm:py-24 lg:py-32"
>
    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

            {{-- Contenido --}}
            <div class="presentacion-texto">

                <div class="mb-6 flex items-center gap-3">
                    <span class="h-[2px] w-9 bg-arena"></span>
                    <span class="text-xs font-semibold uppercase tracking-[0.25em] text-carbon/60">
                        Espíritu del Rally
                    </span>
                </div>

                <h2 class="font-display text-[clamp(2.8rem,6vw,5.5rem)] uppercase leading-[1.05]">
                    MÁS QUE
                    <span class="block">UNA</span>
                    <span class="block text-[#A38D68]">CARRERA.</span>
                </h2>

                <p class="mt-7 max-w-lg text-base leading-8 text-carbon/75">
                    Caminos del Inca es una de las competencias
                    más emblemáticas del automovilismo peruano.
                    Una aventura que reúne pasión, velocidad
                    y resistencia a través de los impresionantes
                    paisajes del país.
                </p>

                <p class="mt-4 max-w-lg text-sm leading-7 text-carbon/60">
                    Cada edición representa nuevos desafíos,
                    historias y protagonistas que mantienen
                    vivo el espíritu del rally.
                </p>

                <a
                    href="{{ url('/historia') }}"
                    class="group mt-9 inline-flex min-h-12 items-center gap-4 border-b-2 border-arena pb-2 text-sm font-semibold uppercase tracking-wider transition-colors hover:text-[#A38D68]"
                >
                    Conoce nuestra historia
                    <span
                        aria-hidden="true"
                        class="transition-transform duration-300 group-hover:translate-x-1"
                    >→</span>
                </a>
            </div>

            {{-- Fotografía --}}
            <div class="presentacion-imagen relative">

                <div class="relative overflow-hidden bg-carbon">

                    <img
                        src="{{ asset('assets/img/presentacion.webp') }}"
                        alt="Vehículo de rally recorriendo una ruta de montaña"
                        class="aspect-[4/5] w-full object-cover sm:aspect-[5/4] lg:aspect-[4/5]"
                        loading="lazy"
                        decoding="async"
                        width="1200"
                        height="1500"
                    >

                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/55 via-transparent to-transparent"></div>

                    <div class="absolute bottom-6 left-6 right-6 text-white sm:bottom-8 sm:left-8">
                        <p class="text-xs font-semibold uppercase tracking-[0.25em] text-arena">
                            Perú
                        </p>

                        <p class="mt-2 font-display text-2xl uppercase sm:text-3xl">
                            PASIÓN SIN LÍMITES
                        </p>
                    </div>
                </div>

                {{-- Detalle decorativo --}}
                <div
                    aria-hidden="true"
                    class="absolute -bottom-4 -right-3 -z-10 hidden h-32 w-32 border-b-4 border-r-4 border-arena lg:block"
                ></div>

            </div>

        </div>

        {{-- Separador inferior --}}
        <div class="mt-20 flex items-center gap-5 lg:mt-28">
            <span class="h-px flex-1 bg-carbon/15"></span>

            <span class="text-[10px] font-semibold uppercase tracking-[0.25em] text-carbon/40">
                Caminos del Inca
            </span>

            <span class="h-px flex-1 bg-carbon/15"></span>
        </div>

    </div>
</section>
