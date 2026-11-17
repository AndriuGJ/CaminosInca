
export function initListaCompetidores() {
    const seccion = document.getElementById('todos-los-pilotos');
    const formulario = document.getElementById('competidores-filtros');

    if (!seccion || !formulario) return;

    const buscador = formulario.querySelector('[name="buscar"]');
    const clase = formulario.querySelector('[name="clase"]');

    let temporizador = null;
    let controlador = null;
    let solicitudActual = 0;

    async function cargarCompetidores(url) {
        // Cancela la petición anterior
        if (controlador) controlador.abort();

        controlador = new AbortController();
        const solicitud = ++solicitudActual;

        seccion.setAttribute('aria-busy', 'true');

        try {
            const respuesta = await fetch(url, {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'text/html'
                },
                signal: controlador.signal
            });

            if (!respuesta.ok) {
                throw new Error('No se pudieron cargar los competidores');
            }

            const html = await respuesta.text();

            // Evita mostrar resultados de solicitudes anteriores
            if (solicitud !== solicitudActual) return;

            const documento = new DOMParser()
                .parseFromString(html, 'text/html');

            const nuevosResultados = documento
                .getElementById('competidores-resultados');

            const nuevoTotal = documento
                .getElementById('competidores-total');

            const resultadosActuales = document
                .getElementById('competidores-resultados');

            const totalActual = document
                .getElementById('competidores-total');

            if (!nuevosResultados || !resultadosActuales) {
                throw new Error('No se encontró la tabla de resultados');
            }

            resultadosActuales.replaceWith(nuevosResultados);

            if (nuevoTotal && totalActual) {
                totalActual.textContent = nuevoTotal.textContent;
            }

            // Mantener URL actualizada sin recargar
            window.history.replaceState({}, '', url);

        } catch (error) {
            if (error.name !== 'AbortError') {
                console.error('Error AJAX:', error);
            }
        } finally {
            if (solicitud === solicitudActual) {
                seccion.removeAttribute('aria-busy');
            }
        }
    }

    function buscarEnTiempoReal() {
        clearTimeout(temporizador);

        temporizador = setTimeout(() => {
            const url = new URL(formulario.action);

            const texto = buscador.value.trim();
            const categoria = clase.value;

            if (texto) url.searchParams.set('buscar', texto);
            if (categoria) url.searchParams.set('clase', categoria);

            cargarCompetidores(url.toString());
        }, 300);
    }

    // Buscar mientras se escribe
    buscador.addEventListener('input', buscarEnTiempoReal);

    // Filtrar inmediatamente al cambiar la clase
    clase.addEventListener('change', () => {
        clearTimeout(temporizador);

        const url = new URL(formulario.action);

        if (buscador.value.trim()) {
            url.searchParams.set('buscar', buscador.value.trim());
        }

        if (clase.value) {
            url.searchParams.set('clase', clase.value);
        }

        cargarCompetidores(url.toString());
    });

    // Evitar envío tradicional del formulario
    formulario.addEventListener('submit', (evento) => {
        evento.preventDefault();
        clearTimeout(temporizador);
        buscarEnTiempoReal();
    });

    // Paginación mediante AJAX
    seccion.addEventListener('click', (evento) => {
        const enlace = evento.target.closest(
            '#competidores-resultados nav a'
        );

        if (!enlace) return;

        evento.preventDefault();
        clearTimeout(temporizador);

        cargarCompetidores(enlace.href);
    });
}
