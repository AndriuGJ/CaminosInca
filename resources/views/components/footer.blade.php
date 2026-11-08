
<footer class="bg-carbon px-5 py-10 text-white">
    <div class="mx-auto max-w-7xl">
        <div class="flex flex-col gap-6 border-b border-white/10 pb-8 md:flex-row md:items-center md:justify-between">
            <div>
                <h2 class="font-display text-3xl uppercase">
                    CAMINOS <span class="text-arena">DEL INCA</span>
                </h2>
                <p class="mt-2 text-sm text-white/60">
                    Historia, velocidad y pasión por el rally.
                </p>
            </div>

            <div class="flex flex-wrap gap-5 text-sm">
                <a href="{{ route('inicio') }}" class="hover:text-arena">Inicio</a>
                <a href="{{ url('/pilotos') }}" class="hover:text-arena">Pilotos</a>
                <a href="{{ url('/rutas') }}" class="hover:text-arena">Rutas</a>
                <a href="{{ url('/historia') }}" class="hover:text-arena">Historia</a>
            </div>
        </div>

        <p class="pt-6 text-center text-xs text-white/50">
            © {{ date('Y') }} Rally Caminos del Inca.
        </p>
    </div>
</footer>
