/* =============================================
   HERO SLIDER — clases hero-v2
   ============================================= */
function initHeroSlider() {
    const slides  = document.querySelectorAll('.hero-v2__slide');
    const dots    = document.querySelectorAll('.hero-v2__dot');
    const btnPrev = document.getElementById('heroPrev');
    const btnNext = document.getElementById('heroNext');

    if (!slides.length) return;

    let current  = 0;
    let interval = null;

    function goTo(idx) {
        slides[current].classList.remove('hero-v2__slide--active');
        if (dots[current]) dots[current].classList.remove('hero-v2__dot--active');

        current = (idx + slides.length) % slides.length;

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
