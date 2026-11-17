
@php
    // Información provisional del piloto destacado
    $pilotoDestacado = [
        'nombre' => 'Orlandini Gusini',
        'vehiculo' => 'Toyota GR Yaris Rally',
        'imagen' => 'assets/img/pilotos/piloto-destacado.webp',
    ];
@endphp

<section
    id="piloto-destacado"
    class="overflow-hidden bg-marfil px-5 pt-16 pb-6 sm:px-6 sm:pt-20 sm:pb-8 lg:px-8 lg:pt-24 lg:pb-10"
>
    <div class="mx-auto w-full max-w-[1400px]">

        {{-- Encabezado --}}
        <div class="destacado-titulo mb-8">

            <div class="mb-3 flex items-center gap-3">
                <span class="h-[2px] w-9 bg-arena"></span>

                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-carbon/60">
                    Protagonista del Rally
                </p>
            </div>

            <h2 class="font-display text-4xl uppercase leading-tight sm:text-6xl">
                PILOTO <span class="text-[#A38D68]">DESTACADO - 2026</span>
            </h2>
        </div>

        {{-- Fotografía del piloto --}}
        <div class="destacado-imagen mx-auto w-full max-w-[1200px]">

            <div class="relative isolate overflow-hidden bg-carbon">

                {{-- Imagen --}}
                <img
                    src="{{ asset($pilotoDestacado['imagen']) }}"
                    alt="Piloto destacado de Caminos del Inca"
                    class="block aspect-[16/9] w-full object-cover"
                    loading="lazy"
                    decoding="async"
                    width="1200"
                    height="300"
                >

                {{-- Degradado de izquierda a derecha --}}
                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-r from-black/85 via-black/45 to-transparent"
                ></div>

                {{-- Degradado inferior --}}
                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/55 via-transparent to-transparent"
                ></div>

                {{-- Información sobre la imagen --}}
                <div class="absolute inset-0 z-10 flex items-end px-6 pb-7 sm:px-10 sm:pb-10 lg:px-14 lg:pb-14">

                    <div class="max-w-xl text-white">

                        <p class="mb-3 text-xs font-semibold uppercase tracking-[0.25em] text-arena">
                            Piloto destacado
                        </p>

                        <h3 class="font-display text-4xl uppercase leading-[1.05] sm:text-6xl lg:text-7xl">
                            {{ $pilotoDestacado['nombre'] }}
                        </h3>

                        <div class="mt-5 h-[2px] w-12 bg-arena"></div>

                        <p class="mt-4 text-xs font-semibold uppercase tracking-[0.18em] text-white/60">
                            Vehículo
                        </p>

                        <p class="mt-1 text-base font-semibold text-white/90 sm:text-xl">
                            {{ $pilotoDestacado['vehiculo'] }}
                        </p>

                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
