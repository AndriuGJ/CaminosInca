
@extends('layouts.app')

@section('title', 'Inicio | Rally Caminos del Inca')

@section('content')

    {{-- Portada principal --}}
    @include('components.home.hero')

    {{-- Presentación del rally --}}
    <section
        id="presentacion"
        class="bg-marfil px-5 py-20 lg:px-8 lg:py-28"
    >
        <div class="mx-auto max-w-7xl">

            <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-carbon/60">
                Nuestra historia
            </p>

            <h2 class="font-display text-4xl uppercase sm:text-6xl">
                MÁS QUE UNA CARRERA
            </h2>

            <p class="mt-5 max-w-2xl text-base leading-relaxed text-carbon/70">
                Caminos del Inca representa la pasión por el
                automovilismo y el desafío de recorrer los
                impresionantes paisajes del Perú.
            </p>

        </div>
    </section>

@endsection
