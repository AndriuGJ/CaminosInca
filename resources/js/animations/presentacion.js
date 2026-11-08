
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initPresentacion() {
    const section = document.querySelector('#presentacion');

    if (!section) return;

    const reducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    if (reducedMotion) return;

    const texto = section.querySelector('.presentacion-texto');
    const imagen = section.querySelector('.presentacion-imagen');

    gsap.from([texto, imagen], {
        opacity: 0,
        y: 35,
        duration: 0.85,
        stagger: 0.15,
        ease: 'power2.out',
        clearProps: 'all',
        scrollTrigger: {
            trigger: section,
            start: 'top 85%',
            once: true
        }
    });
}
