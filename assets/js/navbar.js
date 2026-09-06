/* =============================================
   NAVBAR — sticky + hamburger
   ============================================= */
function initNavbar() {
    const toggle = document.getElementById('navToggle');
    const menu   = document.getElementById('navMenu');
    const navbar = document.getElementById('navbar');

    if (toggle && menu) {
        toggle.addEventListener('click', () => {
            const isOpen = menu.classList.toggle('open');
            toggle.setAttribute('aria-expanded', isOpen);
        });

        document.addEventListener('click', (e) => {
            if (navbar && !navbar.contains(e.target)) {
                menu.classList.remove('open');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });
    }
}
