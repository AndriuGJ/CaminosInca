
export function initHeroVideo() {
    const container = document.querySelector('#hero-video');

    if (!container) return;

    const desktop = window.matchMedia('(min-width: 768px)');
    const reducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    );

    const connection = navigator.connection;

    // Evitar descargar video si el usuario quiere ahorrar datos
    if (connection?.saveData) return;

    if (!desktop.matches || reducedMotion.matches) return;

    const video = document.createElement('video');

    video.autoplay = true;
    video.muted = true;
    video.loop = true;
    video.playsInline = true;
    video.preload = 'none';

    video.className =
        'h-full w-full object-cover opacity-0 transition-opacity duration-700';

    const webm = document.createElement('source');
    webm.src = container.dataset.webm;
    webm.type = 'video/webm';

    const mp4 = document.createElement('source');
    mp4.src = container.dataset.mp4;
    mp4.type = 'video/mp4';

    video.append(webm, mp4);

    video.addEventListener('playing', () => {
        video.classList.remove('opacity-0');
    }, { once: true });

    container.appendChild(video);

    video.play().catch(() => {
        video.remove();
    });

    // Detener el video cuando la pestaña no está visible
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            video.pause();
        } else if (video.isConnected && desktop.matches) {
            video.play().catch(() => {});
        }
    });

    // Evitar mantener el video al cambiar a modo móvil
    desktop.addEventListener('change', (event) => {
        if (!event.matches) {
            video.pause();
            video.remove();
        }
    });
}
