
export function initHeader() {
    const header = document.querySelector('#site-header');
    const toggle = document.querySelector('#menu-toggle');
    const menu = document.querySelector('#menu-mobile');
    const icon = document.querySelector('#menu-icon');

    if (!header || !toggle || !menu || !icon) return;

    const isHome = header.dataset.home === 'true';
    let menuOpen = false;

    function updateHeader() {
        const scrolled = window.scrollY > 40;

        header.classList.toggle(
            'bg-carbon',
            scrolled || menuOpen || !isHome
        );
        header.classList.toggle(
            'bg-transparent',
            !scrolled && !menuOpen && isHome
        );
    }
    function setMenu(open) {
        menuOpen = open;

        menu.classList.toggle('invisible', !open);
        menu.classList.toggle('opacity-0', !open);
        menu.classList.toggle('-translate-y-3', !open);

        toggle.setAttribute('aria-expanded', String(open));
        toggle.setAttribute(
            'aria-label',
            open ? 'Cerrar menú' : 'Abrir menú'
        );
        icon.textContent = open ? '✕' : '☰';
        updateHeader();
    }

    toggle.addEventListener('click', () => {
        setMenu(!menuOpen);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && menuOpen) {
            setMenu(false);
        }
    });

    window.addEventListener('scroll', updateHeader, {
        passive: true
    });

    updateHeader();
}
