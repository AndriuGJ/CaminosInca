const toggle = document.querySelector('.header-toggle');
const nav = document.querySelector('.header-nav');
if (toggle && nav) {
  toggle.addEventListener('click', () => {
    const opened = toggle.getAttribute('aria-expanded') !== 'true';
    toggle.setAttribute('aria-expanded', String(opened));
    toggle.setAttribute('aria-label', opened ? 'Cerrar menú' : 'Abrir menú');
    nav.classList.toggle('is-open', opened);
  });
  nav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
    nav.classList.remove('is-open');
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'Abrir menú');
  }));
}
const monkey = document.querySelector('.header-monkey');
if (monkey && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
  monkey.pause();
}
