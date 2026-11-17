<section id="todos-los-pilotos" class="bg-marfil px-5 pb-20 pt-10 sm:px-6 lg:px-8 lg:pb-28">
    <div class="mx-auto w-full max-w-[1600px]">
        <div class="mb-6 flex flex-wrap items-end justify-between gap-4">
            <div>
                <div class="mb-3 flex items-center gap-3">
                    <span class="h-[2px] w-9 bg-arena"></span>
                    <span class="text-xs font-semibold uppercase tracking-[0.2em] text-carbon/60">Participantes oficiales
                        de la lista compartida</span>
                </div>
                <h2 class="font-display text-4xl uppercase text-carbon sm:text-6xl">
                    TODOS LOS <span class="text-[#A38D68]">COMPETIDORES.</span>
                </h2>
            </div>
            <p class="text-sm font-semibold text-carbon/70">{{ $competidores->total() }} resultados</p>
        </div>

        {{-- Línea geométrica inspirada en motivos andinos --}}
        <div aria-hidden="true" class="mb-6 h-2 opacity-70"
            style="background:repeating-linear-gradient(135deg,#C7B18C 0 5px,transparent 5px 12px,#20212433 12px 14px,transparent 14px 22px)">
        </div>


        {{-- Buscador y filtro en tiempo real --}}
        <form id="competidores-filtros" method="GET" action="{{ route('pilotos') }}"
            class="mb-5 grid gap-3 sm:grid-cols-[minmax(0,1fr)_200px]">
            {{-- Buscar --}}
            <label class="block">
                <span class="sr-only">Buscar competidor</span>

                <input type="search" name="buscar" value="{{ $buscar }}" autocomplete="off"
                    placeholder="Buscar piloto, copiloto, número, vehículo..."
                    class="w-full border border-carbon/20 bg-white
                   px-4 py-3 text-sm text-carbon outline-none
                   focus:border-[#A38D68]">
            </label>

            {{-- Filtrar por clase --}}
            <label class="block">
                <span class="sr-only">Clase</span>

                <select name="clase"
                    class="w-full border border-carbon/20 bg-white
                   px-4 py-3 text-sm text-carbon outline-none
                   focus:border-[#A38D68]">
                    <option value="">Todas las clases</option>

                    @foreach ($clases as $opcion)
                        <option value="{{ $opcion }}" @selected($clase === $opcion)>
                            {{ $opcion }}
                        </option>
                    @endforeach
                </select>
            </label>
        </form>

        <div id="competidores-resultados">

            <div class="overflow-x-auto border border-carbon/15 bg-white">
                <table class="w-full min-w-[900px] border-collapse text-left text-sm">
                    <thead class="bg-carbon text-[#E6D8BE]">
                        <tr class="text-xs uppercase tracking-[0.12em]">
                            <th class="px-4 py-4">Orden</th>
                            <th class="px-4 py-4">N.º</th>
                            <th class="px-4 py-4">Piloto</th>
                            <th class="px-4 py-4">Copiloto</th>
                            <th class="px-4 py-4">Vehículo</th>
                            <th class="px-4 py-4">Localidad</th>
                            <th class="px-4 py-4">Clase</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-carbon/10 text-carbon">
                        @forelse ($competidores as $competidor)
                            <tr class="hover:bg-[#F6F0E5]">
                                <td class="px-4 py-3 text-carbon/50">
                                    {{ str_pad($competidor->orden, 2, '0', STR_PAD_LEFT) }}
                                </td>
                                <td class="px-4 py-3 font-bold">#{{ $competidor->numero }}</td>
                                <td class="px-4 py-3 font-semibold">{{ $competidor->piloto }}</td>
                                <td class="px-4 py-3">{{ $competidor->copiloto }}</td>
                                <td class="px-4 py-3">{{ $competidor->vehiculo }}</td>
                                <td class="px-4 py-3">{{ $competidor->localidad }}</td>
                                <td class="px-4 py-3 font-bold text-[#96774B]">{{ $competidor->clase }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-4 py-10 text-center text-carbon/60">No se encontraron
                                    competidores.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($competidores->hasPages())
                <nav aria-label="Paginación de competidores"
                    class="mt-6 flex flex-wrap items-center justify-between gap-3 text-sm text-carbon">
                    <span>Mostrando {{ $competidores->firstItem() }}–{{ $competidores->lastItem() }} de
                        {{ $competidores->total() }}</span>
                    <div class="flex gap-2">
                        @if ($competidores->onFirstPage())
                            <span class="border border-carbon/15 px-4 py-2 text-carbon/35">Anterior</span>
                        @else
                            <a class="border border-carbon/25 px-4 py-2 hover:bg-white"
                                href="{{ $competidores->previousPageUrl() }}#todos-los-pilotos">Anterior</a>
                        @endif
                        <span class="px-3 py-2">{{ $competidores->currentPage() }} /
                            {{ $competidores->lastPage() }}</span>
                        @if ($competidores->hasMorePages())
                            <a class="border border-carbon/25 px-4 py-2 hover:bg-white"
                                href="{{ $competidores->nextPageUrl() }}#todos-los-pilotos">Siguiente</a>
                        @else
                            <span class="border border-carbon/15 px-4 py-2 text-carbon/35">Siguiente</span>
                        @endif
                    </div>
                </nav>
            @endif
        </div>
    </div>
</section>
