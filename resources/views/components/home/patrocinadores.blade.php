
@php
    $patrocinadores = [
        [
            'nombre' => 'Patrocinador 1',
            'logo' => 'assets/img/patrocinadores/patrocinador-1.webp',
        ],
        [
            'nombre' => 'Patrocinador 2',
            'logo' => 'assets/img/patrocinadores/patrocinador-2.webp',
        ],
        [
            'nombre' => 'Patrocinador 3',
            'logo' => 'assets/img/patrocinadores/patrocinador-3.webp',
        ],
        [
            'nombre' => 'Patrocinador 4',
            'logo' => 'assets/img/patrocinadores/patrocinador-4.webp',
        ],
        [
            'nombre' => 'Patrocinador 5',
            'logo' => 'assets/img/patrocinadores/patrocinador-5.webp',
        ],
        [
            'nombre' => 'Patrocinador 6',
            'logo' => 'assets/img/patrocinadores/patrocinador-6.webp',
        ],
        [
            'nombre' => 'Patrocinador 7',
            'logo' => 'assets/img/patrocinadores/patrocinador-7.webp',
        ],
        [
            'nombre' => 'Patrocinador 8',
            'logo' => 'assets/img/patrocinadores/patrocinador-8.webp',
        ],
        [
            'nombre' => 'Patrocinador 9',
            'logo' => 'assets/img/patrocinadores/patrocinador-9.webp',
        ],
    ];
@endphp

<section
    id="patrocinadores"
    class="overflow-hidden bg-marfil py-12 text-white lg:py-16"
    aria-label="Nuestros patrocinadores"
>
    <div class="mx-auto max-w-7xl px-5 lg:px-8">
        <div class="mb-8 flex items-center gap-4">
            <span class="h-px w-8 bg-arena"></span>

            <h2 class="text-xs font-semibold uppercase tracking-[0.3em] text-carbon/70">
                Nuestros patrocinadores
            </h2>
        </div>
    </div>

    <div class="sponsors-marquee border-y border-carbon/10">
        <div class="sponsors-track py-8">

            @for ($repeticion = 0; $repeticion < 2; $repeticion++)
                <div
                    class="sponsors-group"
                    @if ($repeticion === 1) aria-hidden="true" @endif
                >
                    @foreach ($patrocinadores as $patrocinador)
                        <div class="sponsor-item">
                            <img
                                src="{{ asset($patrocinador['logo']) }}"
                                alt="{{ $repeticion === 0 ? $patrocinador['nombre'] : '' }}"
                                class="h-12 w-auto max-w-36 object-contain sm:h-16"
                                loading="lazy"
                                decoding="async"
                            >
                        </div>
                    @endforeach
                </div>
            @endfor

        </div>
    </div>
</section>
