
@props([
    'numero',
    'nombre',
    'vehiculo',
    'marca',
    'logo',
    'imagen',
    'corredor',
    'color' => '#78634D',
    'oculto' => false,
])

<article
    class="piloto-card group relative isolate min-h-[230px] overflow-visible text-white sm:min-h-[250px] lg:min-h-[270px]"
    style="background-color: {{ $color }};"
    @if($oculto) hidden @endif
>
    {{-- Degradado de fondo --}}
    <div
        class="pointer-events-none absolute inset-0
               bg-gradient-to-br
               from-black/35 via-transparent to-black/40">
    </div>

    {{-- Panel derecho --}}
    <div
        class="pointer-events-none absolute inset-y-0
               right-0 w-[38%] bg-white/5">
    </div>

    {{-- Fotografía del piloto --}}
    <div
        class="pointer-events-none absolute inset-y-0 right-0
               z-10 w-[48%] overflow-hidden"
    >
        <img
            src="{{ asset($corredor) }}"
            alt="{{ $nombre }}"
            class="absolute bottom-[-115%] left-[63%]
                   h-[220%] w-auto max-w-none
                   -translate-x-1/2"
            loading="lazy"
            decoding="async"
        >
    </div>

    {{-- Información superior --}}
    <div
        class="relative z-10 flex items-start
               justify-between gap-4 p-5 sm:p-6"
    >
        <div class="min-w-0">
            <p
                class="mb-2 text-xs font-semibold
                       uppercase tracking-widest text-white/70"
            >
                COMPETIDOR #{{ str_pad($numero, 2, '0', STR_PAD_LEFT) }}
            </p>

            <h3
                class="font-display text-2xl uppercase
                       leading-tight sm:text-3xl"
            >
                {{ $nombre }}
            </h3>

            <p class="mt-2 text-xs font-medium text-white/75 sm:text-sm">
                {{ $vehiculo }}
            </p>
        </div>

        {{-- Logotipo de la marca --}}
        <div
            class="absolute top-5 right-[40%] z-20
                   flex h-13 w-13 items-center justify-center
                   rounded-full bg-black/25 p-3"
        >
            <img
                src="{{ asset($logo) }}"
                alt="{{ $marca }}"
                class="h-full w-full object-contain"
                loading="lazy"
                decoding="async"
            >
        </div>
    </div>

    {{-- IMAGEN DEL CARRO --}}
<div class="pointer-events-none absolute bottom-0 left-0 z-10 w-full">

    <img
        src="{{ asset($imagen) }}"
        alt="Automóvil de {{ $nombre }}"
        class="block h-auto w-[55%] max-w-none drop-shadow-xl"
        loading="lazy"
        decoding="async"
    >

</div>

    {{-- Línea decorativa inferior --}}
    <div
        class="absolute bottom-0 left-0 z-20
               h-1 w-0 bg-arena
               transition-all duration-500
               group-hover:w-full"
    ></div>
</article>
