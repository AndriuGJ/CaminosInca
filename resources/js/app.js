//
import gsap from 'gsap';
import { initHero } from './animations/hero';
import { initHeroVideo } from './components/hero-video';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { initHeader } from './components/header.js';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
    initHero();
    initHeroVideo();
    initHeader();
});


