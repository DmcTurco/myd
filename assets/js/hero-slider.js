/* =============================================
   HERO SLIDER — clases hero-v2
   ============================================= */
function initHeroSlider() {
    const slides  = document.querySelectorAll('.hero-v2__slide');
    const dots    = document.querySelectorAll('.hero-v2__dot');
    const btnPrev = document.getElementById('heroPrev');
    const btnNext = document.getElementById('heroNext');

    if (!slides.length) return;

    /* Las fotos 2 a 6 no van en el HTML sino en data-bg: asi la home solo
       descarga la primera para pintar, y el resto entra despues, sin que el
       visitante espere. La siguiente se adelanta al cambiar de diapositiva. */
    function cargarFondo(slide) {
        if (!slide || !slide.dataset.bg) return;
        slide.style.backgroundImage = "url('" + slide.dataset.bg + "')";
        delete slide.dataset.bg;
    }

    function cargarElResto() {
        slides.forEach(cargarFondo);
    }

    if (document.readyState === 'complete') {
        setTimeout(cargarElResto, 200);
    } else {
        window.addEventListener('load', () => setTimeout(cargarElResto, 200));
    }

    let current  = 0;
    let interval = null;

    function goTo(idx) {
        slides[current].classList.remove('hero-v2__slide--active');
        if (dots[current]) dots[current].classList.remove('hero-v2__dot--active');

        current = (idx + slides.length) % slides.length;

        // por si se adelanta al 'load': la que toca y la siguiente
        cargarFondo(slides[current]);
        cargarFondo(slides[(current + 1) % slides.length]);

        slides[current].classList.add('hero-v2__slide--active');
        if (dots[current]) dots[current].classList.add('hero-v2__dot--active');
    }

    function startAuto() {
        interval = setInterval(() => goTo(current + 1), 5000);
    }

    function resetAuto() {
        clearInterval(interval);
        startAuto();
    }

    btnPrev?.addEventListener('click', () => { goTo(current - 1); resetAuto(); });
    btnNext?.addEventListener('click', () => { goTo(current + 1); resetAuto(); });

    dots.forEach(d => {
        d.addEventListener('click', () => {
            goTo(+d.dataset.idx);
            resetAuto();
        });
    });

    startAuto();
}
