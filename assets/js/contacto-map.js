/* =============================================
   CONTACTO — selector de oficina en el mapa
   Al hacer clic (o Enter) en una direccion de
   .contacto-datos, cambia el iframe de Google Maps
   a la ubicacion guardada en su data-map.
   ============================================= */
function initContactoMap() {
    const frame = document.getElementById('contacto-map-frame');
    const items = document.querySelectorAll('.contacto-datos__direccion');

    if (!frame || !items.length) return;

    function seleccionar(item) {
        const destino = item.dataset.map;
        if (!destino) return;

        frame.src = `https://www.google.com/maps?q=${destino}&z=16&output=embed`;

        items.forEach(i => i.classList.remove('contacto-datos__direccion--active'));
        item.classList.add('contacto-datos__direccion--active');
    }

    items.forEach(item => {
        item.addEventListener('click', () => seleccionar(item));
        item.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                seleccionar(item);
            }
        });
    });
}
