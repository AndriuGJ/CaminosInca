@extends('layouts.app')

@section('title', 'Pilotos | Rally Caminos del Inca')

@section('content')


    {{-- PORTADA --}}

    {{-- PORTADA DE PILOTOS --}}
    <section id="pilotos-hero" class="relative flex min-h-svh items-center overflow-hidden bg-carbon text-white">
        {{-- Imagen de fondo --}}
        <picture class="absolute inset-0">
            <img src="{{ asset('assets/img/pilotos/hero-pilotos.webp') }}" alt=""
                class="h-full w-full object-cover object-center" fetchpriority="high">
        </picture>

        {{-- Degradado principal: más oscuro a la izquierda --}}
        <div class="absolute inset-0 bg-gradient-to-r
               from-[#202124]/95 via-[#202124]/70 to-[#202124]/25">
        </div>

        {{-- Degradado inferior --}}
        <div class="absolute inset-0 bg-gradient-to-t
               from-[#111213]/80 via-transparent to-transparent"></div>

        {{-- Contenido alineado a la izquierda --}}
        <div class="pilotos-portada relative z-10 w-full px-5 py-28 sm:px-8 lg:px-12 xl:px-16">

            <div class="max-w-3xl">

                <p class="mb-5 text-xs font-semibold uppercase tracking-[0.3em] text-arena sm:text-sm">
                    Rally Caminos del Inca
                </p>

                <h1 class="font-display text-6xl uppercase leading-none sm:text-8xl lg:text-9xl">
                    NUESTROS
                    <span class="block text-arena">PILOTOS</span>
                </h1>

                <p class="mt-6 max-w-xl text-sm leading-7 text-white/80 sm:text-base">
                    Conoce a los protagonistas que desafían los caminos
                    y mantienen viva la pasión por el rally.
                </p>

                <a href="#lista-pilotos"
                    class="mt-9 inline-flex min-h-12 items-center gap-4
                       bg-arena px-7 py-3 text-sm font-semibold uppercase
                       tracking-wider text-carbon transition-colors hover:bg-white">
                    VER PILOTOS
                    <span aria-hidden="true">↓</span>
                </a>

            </div>
        </div>
    </section>

    {{-- Piloto destacado --}}
    @include('components.pilotos.destacado')


    {{-- LISTADO DE PILOTOS --}}
    <section id="lista-pilotos"
        class="scroll-mt-16 bg-marfil px-5 pt-8 pb-20 sm:px-6 sm:pt-10 sm:pb-24 lg:px-8 lg:pt-12 lg:pb-28">
        <div class="mx-auto w-full max-w-[1600px]">

            {{-- Encabezado --}}
            <div class="pilotos-entrada mb-12">

                <div class="mb-4 flex items-center gap-3">
                    <span class="h-[2px] w-9 bg-arena"></span>
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-carbon/60">
                        Competidores
                    </p>
                </div>

                <h2 class="font-display text-4xl uppercase leading-tight sm:text-6xl">
                    TOP <span class="text-[#A38D68]">9.</span>
                </h2>

                <p class="mt-4 max-w-xl text-sm leading-7 text-carbon/65">
                    Descubre a los pilotos que forman parte de la historia
                    de Caminos del Inca.
                </p>
            </div>


            {{-- GRID DE PILOTOS --}}
            <div id="pilotos-grid"
                class="grid grid-cols-1 gap-5
           min-[720px]:grid-cols-2
           min-[1250px]:grid-cols- lg:gap-6">

                {{-- PILOTO 1 --}}
                <x-pilotos.tarjeta numero="1" nombre="Eduardo Castro Yangali" vehiculo="Ford Fiesta Rally3"
                    marca="Ford" logo="assets/img/pilotos/marcas/ford.webp"
                    imagen="assets/img/pilotos/carros/carro-1.webp" corredor="assets/img/pilotos/corredores/Piloto-1.webp"
                    color="#78634D" />

                {{-- PILOTO 2 --}}
                <x-pilotos.tarjeta numero="2" nombre="André Martínez" vehiculo="Ford Fiesta Rally3" marca="Ford"
                    logo="assets/img/pilotos/marcas/ford.webp" imagen="assets/img/pilotos/carros/carro-2.webp"
                    corredor="assets/img/pilotos/corredores/piloto-2.png" color="#244B80" />

                {{-- PILOTO 3 --}}
                <x-pilotos.tarjeta numero="3" nombre="Raúl Orlandini Griswold" vehiculo="Mitsubishi	Lancer Evo X"
                    marca="Mitsubishi" logo="assets/img/pilotos/marcas/mitsubishi.webp"
                    imagen="assets/img/pilotos/carros/carro-3.webp" corredor="assets/img/pilotos/corredores/piloto3.png"
                    color="#3E6972" />

                {{-- PILOTO 4 --}}
                <x-pilotos.tarjeta numero="4" nombre="Jorge Martínez" vehiculo="Hyundai	i20 N Rally2" marca="Hyundai"
                    logo="assets/img/pilotos/marcas/hyundai.webp" imagen="assets/img/pilotos/carros/carro-4.webp"
                    corredor="assets/img/pilotos/corredores/piloto-4.png" color="#3E6972" />

                {{-- PILOTO 5 --}}
                <x-pilotos.tarjeta numero="5" nombre="Luis Alayza Freundt" vehiculo="Toyota	GR Yaris" marca="Toyota"
                    logo="assets/img/pilotos/marcas/toyota.webp" imagen="assets/img/pilotos/carros/carro-5.webp"
                    corredor="assets/img/pilotos/corredores/piloto-5.png" color="#57635B" />

                {{-- PILOTO 6 --}}
                <x-pilotos.tarjeta numero="6" nombre="Ronmel Palomino" vehiculo="Škoda	Fabia N5" marca="Škoda"
                    logo="assets/img/pilotos/marcas/shoda.webp" imagen="assets/img/pilotos/carros/carro-6.webp"
                    corredor="assets/img/pilotos/corredores/piloto-6.png" color="#74464A" />

                {{-- PILOTO 7 --}}
                <x-pilotos.tarjeta numero="7" nombre="Richard Palomino" vehiculo="Škoda	Fabia N5" marca="Škoda"
                    logo="assets/img/pilotos/marcas/shoda.webp" imagen="assets/img/pilotos/carros/carro-7.webp"
                    corredor="assets/img/pilotos/corredores/piloto-7.png" color="#756044" :oculto="true" />

                {{-- PILOTO 8 --}}
                <x-pilotos.tarjeta numero="8" nombre="José Carlos Vallejo" vehiculo="Volkswagen	Amarok V6"
                    marca="Volkswagen	" logo="assets/img/pilotos/marcas/wolkwagen.webp"
                    imagen="assets/img/pilotos/carros/carro-8.webp" corredor="assets/img/pilotos/corredores/piloto-8.png"
                    color="#435D73" :oculto="true" />

                {{-- PILOTO 9 --}}
                <x-pilotos.tarjeta numero="9" nombre="Santiago Aguayo" vehiculo="Toyota	GT86" marca="Toyota"
                    logo="assets/img/pilotos/marcas/toyota.webp" imagen="assets/img/pilotos/carros/carros-9.webp"
                    corredor="assets/img/pilotos/corredores/piloto-9.png" color="#5D6258" :oculto="true" />

            </div>

            {{-- Ver más / Ocultar --}}
            <div class="mt-12 flex justify-center">

                <button id="pilotos-ver-mas" type="button" aria-controls="pilotos-grid" aria-expanded="false"
                    class="inline-flex min-h-12 items-center gap-4
               border border-carbon px-9 py-3
               text-sm font-semibold uppercase tracking-wide
               transition-colors hover:bg-carbon hover:text-white">
                    <span id="pilotos-boton-texto">VER MÁS</span>
                    <span id="pilotos-boton-icono" aria-hidden="true">+</span>
                </button>

            </div>

            {{-- Lista general de pilotos --}}
            @include('components.pilotos.lista-competidores')

        </div>
    </section>

@endsection
