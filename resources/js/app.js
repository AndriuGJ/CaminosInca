//
import gsap from 'gsap';
import { initHero } from './animations/hero';
import { initHeroVideo } from './components/hero-video';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { initHeader } from './components/header.js';
import { initPresentacion } from './animations/presentacion.js';
import { initPilotos } from './animations/pilotos.js';
import { initPilotoDestacado } from './animations/piloto-destacado.js';
import { initListaCompetidores } from './components/lista-competidores';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
    initHero();
    initHeroVideo();
    initHeader();
    initPresentacion();
    initPilotos();
    initPilotoDestacado();
    initListaCompetidores();
});


