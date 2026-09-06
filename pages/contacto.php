<!-- ===== CONTACTO — dos columnas: formulario (357px) y oficina (743px) ===== -->
<section class="contacto-section">
    <div class="container contacto-grid">

        <!-- Formulario -->
        <div class="contacto-form">
            <div class="headline-wrap"><h4 class="headline-line">Escríbanos, le contestaremos en breve</h4></div>

            <?php if (!empty($_GET['enviado'])): ?>
            <div class="alert alert--success">
                <i class="fas fa-check-circle"></i> Mensaje enviado con éxito. Le contactaremos pronto.
            </div>
            <?php elseif (!empty($_GET['error'])): ?>
            <div class="alert alert--error">
                <i class="fas fa-exclamation-circle"></i> Ocurrió un error al enviar. Por favor inténtelo de nuevo.
            </div>
            <?php endif; ?>

            <form action="<?= SITE_URL ?>/actions/contact.php" method="POST" class="form-mydsac" novalidate>
                <label for="nombre">Nombres y Apellidos:
                    <input type="text" id="nombre" name="nombre" required>
                </label>
                <label for="email">Tu correo electrónico:
                    <input type="email" id="email" name="email" required>
                </label>
                <label for="telefono">Tu Teléfono:
                    <input type="tel" id="telefono" name="telefono">
                </label>
                <label for="asunto">Asunto:
                    <input type="text" id="asunto" name="asunto" required>
                </label>
                <label for="mensaje">Mensaje:
                    <textarea id="mensaje" name="mensaje" required></textarea>
                </label>

                <!-- Honeypot anti-spam -->
                <input type="text" name="website" style="display:none;" tabindex="-1" autocomplete="off">

                <button type="submit" class="btn-enviar">Enviar</button>
            </form>
        </div>

        <!-- Oficina -->
        <div class="contacto-oficina">
            <div class="headline-wrap"><h4 class="headline-line">Nuestra oficina</h4></div>

            <div class="contacto-map">
                <iframe src="https://www.google.com/maps?q=-12.126175,-77.019684&amp;z=16&amp;output=embed"
                        title="Ubicación de M&D Asesores Financieros"
                        allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <ul class="contacto-datos">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <span><?= SITE_ADDRESS ?></span>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <span><a href="tel:<?= preg_replace('/[^0-9+]/', '', SITE_PHONE) ?>"><?= SITE_PHONE ?></a></span>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <span><a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></span>
                </li>
            </ul>
        </div>

    </div>
</section>
