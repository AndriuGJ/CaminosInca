
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initPilotoDestacado() {
    const section = document.querySelector('#piloto-destacado');

    if (!section) return;

    const reducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    if (reducedMotion) return;

    const titulo = section.querySelector('.destacado-titulo');
    const imagen = section.querySelector('.destacado-imagen');

    gsap.from(titulo, {
        opacity: 0,
        y: 25,
        duration: 0.7,
        ease: 'power2.out',
        clearProps: 'all',
        scrollTrigger: {
            trigger: titulo,
            start: 'top 90%',
            once: true
        }
    });

    gsap.from(imagen, {
        opacity: 0,
        y: 45,
        scale: 0.97,
        duration: 0.9,
        ease: 'power2.out',
        clearProps: 'all',
        scrollTrigger: {
            trigger: imagen,
            start: 'top 90%',
            once: true
        }
    });
}
