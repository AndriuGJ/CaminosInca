
import gsap from 'gsap';

export function initHero() {
    const hero = document.querySelector('#hero');

    if (!hero) return;

    const reduceMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    // No animar si el usuario prefiere movimiento reducido
    if (reduceMotion) return;

    gsap.from('.hero-animate', {
        opacity: 0,
        y: 30,
        duration: 0.8,
        stagger: 0.15,
        ease: 'power2.out',
        clearProps: 'all'
    });
}
