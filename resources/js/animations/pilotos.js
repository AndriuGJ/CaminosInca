
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initPilotos() {
    const section = document.querySelector('#lista-pilotos');

    if (!section) return;

    const reducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    // Animación de portada
    if (!reducedMotion) {
        gsap.from('.pilotos-portada', {
            opacity: 0,
            y: 35,
            duration: 0.85,
            ease: 'power2.out',
            clearProps: 'all'
        });

        gsap.from('.pilotos-entrada', {
            opacity: 0,
            y: 25,
            duration: 0.7,
            ease: 'power2.out',
            clearProps: 'all',
            scrollTrigger: {
                trigger: section,
                start: 'top 80%',
                once: true
            }
        });

        // Animar únicamente tarjetas visibles
        const cards = gsap.utils.toArray(
            '.piloto-card:not([hidden])'
        );

        cards.forEach(card => {
            gsap.from(card, {
                opacity: 0,
                y: 35,
                duration: 0.65,
                ease: 'power2.out',
                clearProps: 'opacity,transform',
                scrollTrigger: {
                    trigger: card,
                    start: 'top 90%',
                    once: true
                }
            });
        });
    }


const boton = document.getElementById('pilotos-ver-mas');
const grid = document.getElementById('pilotos-grid');

if (boton && grid) {

    const tarjetas = Array.from(
        grid.querySelectorAll('.piloto-card')
    );

    // Las primeras 6 permanecen visibles
    const tarjetasExtras = tarjetas.slice(6);

    const texto = document.getElementById('pilotos-boton-texto');
    const icono = document.getElementById('pilotos-boton-icono');

    let expandido = false;

    // Estado inicial
    tarjetasExtras.forEach(tarjeta => {
        tarjeta.hidden = true;
    });

    if (tarjetasExtras.length === 0) {
        boton.hidden = true;
    }

    boton.addEventListener('click', () => {

        expandido = !expandido;

        if (expandido) {

            // Mostrar tarjetas ocultas
            tarjetasExtras.forEach(tarjeta => {
                tarjeta.hidden = false;
            });

            // Animación de entrada
            gsap.fromTo(
                tarjetasExtras,
                {
                    opacity: 0,
                    y: 30
                },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.6,
                    stagger: 0.1,
                    ease: 'power2.out',
                    clearProps: 'opacity,transform'
                }
            );

            texto.textContent = 'OCULTAR';
            icono.textContent = '−';

        } else {

            // Detener animaciones pendientes
            gsap.killTweensOf(tarjetasExtras);

            // Volver a ocultar las tarjetas
            tarjetasExtras.forEach(tarjeta => {
                tarjeta.hidden = true;

                // Limpiar solo estilos de animación
                gsap.set(tarjeta, {
                    clearProps: 'opacity,transform'
                });
            });

            texto.textContent = 'VER MÁS';
            icono.textContent = '+';
        }

        boton.setAttribute(
            'aria-expanded',
            String(expandido)
        );

    });
}


}
