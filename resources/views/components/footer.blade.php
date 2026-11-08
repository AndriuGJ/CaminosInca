
<footer id="footer" class="relative overflow-hidden bg-[#202124] text-white">

    {{-- CONTENIDO PRINCIPAL --}}
    <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-24">

        <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-12 lg:gap-8">

            {{-- COLUMNA 1: LOGO --}}
            <div class="flex flex-col items-center text-center lg:col-span-3">

                <a href="{{ route('inicio') }}" aria-label="Volver al inicio">
                    @if (file_exists(public_path('assets/img/footer/logo-rally.webp')))
                        <img
                            src="{{ asset('assets/img/footer/logo-rally.webp') }}"
                            alt="Rally Caminos del Inca"
                            class="h-auto w-52 object-contain"
                            loading="lazy"
                        >
                    @else
                        <span class="font-display text-3xl uppercase">
                            CAMINOS <span class="text-arena">DEL INCA</span>
                        </span>
                    @endif
                </a>

                {{-- Se activará cuando definamos el formulario --}}
                <span
                    class="mt-8 flex min-h-13 w-full max-w-60 items-center
                           justify-between border border-arena/50 px-4
                           text-xs font-semibold uppercase tracking-wide
                           text-white/70"
                >
                    Comparte tu opinión
                    <span class="text-xl text-arena" aria-hidden="true">↗</span>
                </span>
            </div>

            {{-- COLUMNA 2: NAVEGACIÓN --}}
            <div class="lg:col-span-3 lg:border-l lg:border-white/20 lg:pl-8">

                <h3 class="sr-only">Explorar</h3>

                <nav aria-label="Secciones del Rally"
                     class="flex flex-col items-start gap-5">

                    @foreach ([
                        'POSICIONES',
                        'CORREDORES',
                        'EQUIPOS',
                        'EL DESBLOQUEADO'
                    ] as $item)

                        <span
                            class="flex items-center gap-2 font-display
                                   text-2xl uppercase leading-none
                                   tracking-wide text-white"
                        >
                            <span class="text-lg text-arena" aria-hidden="true">+</span>
                            {{ $item }}
                        </span>

                    @endforeach
                </nav>

            </div>

            {{-- COLUMNA 3: REDES SOCIALES --}}
            <div class="lg:col-span-4 lg:border-l lg:border-white/20 lg:pl-8">

                <h3 class="mb-7 text-[11px] font-semibold uppercase tracking-[0.18em] text-arena">
                    Encuéntranos en redes
                </h3>

                <div class="flex flex-col gap-5 text-xs sm:text-sm">

                    <div class="flex items-center gap-3">
                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-white font-bold text-carbon">
                            f
                        </span>
                        <span>Rally Caminos del Inca · Facebook</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="flex w-6 shrink-0 items-center justify-center text-xl">
                            𝕏
                        </span>
                        <span>@CDIOficial · X</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="flex w-6 shrink-0 items-center justify-center text-lg">
                            ◎
                        </span>
                        <span>@rallycaminosdelinca · Instagram</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="flex w-6 shrink-0 items-center justify-center text-lg">
                            ▶
                        </span>
                        <span>Rally Caminos del Inca · YouTube</span>
                    </div>

                </div>
            </div>

            {{-- COLUMNA 4: COLIBRÍ DE NAZCA --}}
            <div class="flex items-center justify-center lg:col-span-2">

                <img
                    src="{{ asset('assets/img/footer/colibri-nazca.webp') }}"
                    alt=""
                    aria-hidden="true"
                    class="w-36 object-contain opacity-90 sm:w-44 lg:w-full"
                    loading="lazy"
                >

            </div>

        </div>
    </div>

    {{-- FRANJA INFERIOR --}}
    <div class="relative border-t border-arena/25 px-5 py-5">

        <p class="text-center text-[10px] font-medium uppercase tracking-[0.12em] text-white/80 sm:text-xs">
            © {{ date('Y') }} Rally Caminos del Inca · Todos los derechos reservados
        </p>

        {{-- Líneas diagonales decorativas --}}
        <div
            aria-hidden="true"
            class="footer-diagonales absolute bottom-0 right-0 hidden h-4 w-32 opacity-50 md:block"
        ></div>

    </div>

</footer>
