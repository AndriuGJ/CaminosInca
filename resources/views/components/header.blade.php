
@php
    $esInicio = request()->routeIs('inicio');
@endphp

<header
    id="site-header"
    data-home="{{ $esInicio ? 'true' : 'false' }}"
    class="fixed inset-x-0 top-0 z-50 border-b border-white/10 text-white transition-colors duration-300 {{ $esInicio ? 'bg-transparent' : 'bg-carbon' }}"
>
    <nav class="mx-auto flex h-20 max-w-7xl items-center justify-between px-5 lg:px-8">

        <!-- Logo -->
        <a
            href="{{ route('inicio') }}"
            class="relative z-50 font-display text-2xl uppercase tracking-wide"
        >
            CAMINOS <span class="text-arena">DEL INCA</span>
        </a>

        <!-- Navegación escritorio -->
        <div class="hidden items-center gap-8 lg:flex">
            <a href="{{ route('inicio') }}" class="text-sm font-semibold hover:text-arena">INICIO</a>
            <a href="{{ url('/pilotos') }}" class="text-sm font-semibold hover:text-arena">PILOTOS</a>
            <a href="{{ url('/rutas') }}" class="text-sm font-semibold hover:text-arena">RUTAS</a>
            <a href="{{ url('/historia') }}" class="text-sm font-semibold hover:text-arena">HISTORIA</a>
            <a href="{{ url('/corredores') }}" class="text-sm font-semibold hover:text-arena">CORREDORES</a>
        </div>

        <!-- Botón menú móvil -->
        <button
            id="menu-toggle"
            type="button"
            aria-label="Abrir menú"
            aria-controls="menu-mobile"
            aria-expanded="false"
            class="relative z-50 flex h-10 w-10 items-center justify-center lg:hidden"
        >
            <span id="menu-icon" class="text-3xl">☰</span>
        </button>
    </nav>

    <!-- Menú móvil -->
    <div
        id="menu-mobile"
        class="invisible absolute left-0 top-full w-full -translate-y-3 bg-carbon opacity-0 transition-all duration-300 lg:hidden"
    >
        <div class="flex flex-col gap-6 px-6 py-8">
            <a href="{{ route('inicio') }}" class="text-sm font-semibold">INICIO</a>
            <a href="{{ url('/pilotos') }}" class="text-sm font-semibold">PILOTOS</a>
            <a href="{{ url('/rutas') }}" class="text-sm font-semibold">RUTAS</a>
            <a href="{{ url('/historia') }}" class="text-sm font-semibold">HISTORIA</a>
            <a href="{{ url('/corredores') }}" class="text-sm font-semibold">CORREDORES</a>
        </div>
    </div>
</header>
