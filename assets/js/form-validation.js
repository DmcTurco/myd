/* =============================================
   VALIDACIÓN DE FORMULARIO
   ============================================= */
function initFormValidation() {
    const form = document.querySelector('.contact-form');
    if (!form) return;

    form.addEventListener('submit', (e) => {
        let valid = true;

        form.querySelectorAll('.form-error').forEach(el => el.remove());
        form.querySelectorAll('.input-error').forEach(el => el.classList.remove('input-error'));

        const nombre  = form.querySelector('#nombre');
        const email   = form.querySelector('#email');
        const asunto  = form.querySelector('#asunto');
        const mensaje = form.querySelector('#mensaje');

        if (nombre && nombre.value.trim().length < 3) {
            showError(nombre, 'Ingrese su nombre completo.');
            valid = false;
        }
        if (email && !isValidEmail(email.value.trim())) {
            showError(email, 'Ingrese un correo electrónico válido.');
            valid = false;
        }
        if (asunto && asunto.value.trim().length < 3) {
            showError(asunto, 'Ingrese un asunto.');
            valid = false;
        }
        if (mensaje && mensaje.value.trim().length < 10) {
            showError(mensaje, 'El mensaje debe tener al menos 10 caracteres.');
            valid = false;
        }

        if (!valid) e.preventDefault();
    });
}

function showError(el, msg) {
    el.classList.add('input-error');
    const err = document.createElement('span');
    err.className   = 'form-error';
    err.textContent = msg;
    err.style.cssText = 'color:#dc3545;font-size:.78rem;margin-top:.2rem;display:block;';
    el.parentNode.appendChild(err);
    el.focus();
}

function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}
