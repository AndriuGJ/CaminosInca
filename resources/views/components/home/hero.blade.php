
<section
    id="hero"
    class="relative isolate flex main-h-svh items-center overflow-hidden bg-carbon text-white"
>
    <!-- Imagen de fondo para todos los dispositivos -->
    <picture class="absolute inset-0 -z-20">
        <source
            media="(max-width: 767px)"
            srcset="{{ asset('assets/img/hero-mobile.webp') }}"
        >

        <img
            src="{{ asset('assets/img/hero.webp') }}"
            alt="Vehículo de rally recorriendo los Caminos del Inca"
            class="h-full w-full object-cover"
            fetchpriority="high"
        >
    </picture>

    <!-- Video: se incorpora mediante JavaScript en escritorio -->
    <div
        id="hero-video"
        class="pointer-events-none absolute inset-0 -z-10"
        data-webm="{{ asset('assets/video/hero.webm') }}"
        data-mp4="{{ asset('assets/video/hero.mp4') }}"
    ></div>

    <!-- Degradados para mejorar la legibilidad -->
    <div class="pointer-events-none absolute inset-0 bg-gradient-to-r from-black/80 via-black/45 to-black/15"></div>
    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-black/20"></div>

    <!-- Contenido principal -->
    <div class="relative z-10 mx-auto w-full max-w-7xl px-5 py-20 lg:px-8">

        <div class="max-w-4xl">

            <p
                class="hero-animate mb-5 text-xs font-semibold uppercase tracking-[0.35em] text-arena sm:text-sm"
            >
                Pasión · Historia · Velocidad
            </p>

            <h1
                class="hero-animate font-display text-6xl uppercase leading-[0.95] sm:text-7xl lg:text-9xl"
            >
                CAMINOS
                <span class="block text-arena">DEL INCA</span>
            </h1>

            <p
                class="hero-animate mt-7 max-w-xl text-sm leading-relaxed text-white/85 sm:text-base lg:text-lg"
            >
                Una aventura que desafía los caminos del Perú.
                Descubre la historia, los pilotos y las rutas de
                una de las competencias más emblemáticas del automovilismo.
            </p>

            <div class="hero-animate mt-9 flex flex-wrap gap-4">
                <a
                    href="#presentacion"
                    class="bg-arena px-7 py-3 text-sm font-semibold uppercase tracking-wide text-carbon transition-colors hover:bg-white"
                >
                    Descubrir el rally
                </a>

                <a
                    href="{{ url('/pilotos') }}"
                    class="border border-white/70 px-7 py-3 text-sm font-semibold uppercase tracking-wide text-white transition-colors hover:bg-white hover:text-carbon"
                >
                    Ver pilotos
                </a>
            </div>

        </div>
    </div>

    <!-- Indicador de desplazamiento -->
    <a
        href="#presentacion"
        class="absolute bottom-7 left-1/2 z-10 -translate-x-1/2 text-xs uppercase tracking-[0.25em] text-white/75"
    >
        Desliza ↓
    </a>
</section>
