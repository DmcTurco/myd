/* =============================================
   CARRUSEL DE COMPAÑÍAS
   ============================================= */
function initCompaniesCarousel() {
    const slides = document.querySelectorAll('.comp-carousel__slide');
    const dots   = document.querySelectorAll('.comp-carousel__dot');

    if (!slides.length) return;

    let current  = 0;
    let interval = null;

    function goTo(idx) {
        slides[current].classList.remove('comp-carousel__slide--active');
        if (dots[current]) dots[current].classList.remove('comp-carousel__dot--active');

        current = (idx + slides.length) % slides.length;

        slides[current].classList.add('comp-carousel__slide--active');
        if (dots[current]) dots[current].classList.add('comp-carousel__dot--active');
    }

    dots.forEach(d => {
        d.addEventListener('click', () => goTo(+d.dataset.idx));
    });

    interval = setInterval(() => goTo(current + 1), 3000);
}
