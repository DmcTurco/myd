<!-- ===== CONTACTO GRID ===== -->
<section class="section" style="padding-top:2.5rem;">
    <div class="container">
        <div class="section-header">
            <h1>Contáctenos</h1>
        </div>
    </div>
</section>

<section class="section" style="padding-top:0;">
    <div class="container contact-layout">

        <!-- Formulario -->
        <div class="contact-form-wrap">
            <span class="section-tag">Escríbanos</span>
            <h2>Le contestaremos en breve</h2>
            <p>Complete el formulario y un asesor se pondrá en contacto con usted a la brevedad posible.</p>

            <?php if (!empty($_GET['enviado'])): ?>
            <div class="alert alert--success">
                <i class="fas fa-check-circle"></i> Mensaje enviado con éxito. Le contactaremos pronto.
            </div>
            <?php elseif (!empty($_GET['error'])): ?>
            <div class="alert alert--error">
                <i class="fas fa-exclamation-circle"></i> Ocurrió un error al enviar. Por favor inténtelo de nuevo.
            </div>
            <?php endif; ?>

            <form action="<?= SITE_URL ?>/actions/contact.php" method="POST" class="contact-form" novalidate>
                <div class="form-row">
                    <div class="form-group">
                        <label for="nombre">Nombres y Apellidos *</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre completo" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico *</label>
                        <input type="email" id="email" name="email" placeholder="correo@empresa.com" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono" placeholder="+51 999 999 999">
                    </div>
                    <div class="form-group">
                        <label for="asunto">Asunto *</label>
                        <input type="text" id="asunto" name="asunto" placeholder="Ej. Cartas Fianza y Pólizas de Caución" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mensaje">Mensaje *</label>
                    <textarea id="mensaje" name="mensaje" rows="6" placeholder="Cuéntenos en qué podemos ayudarle..." required></textarea>
                </div>
                <!-- Honeypot anti-spam -->
                <input type="text" name="website" style="display:none;" tabindex="-1" autocomplete="off">
                <button type="submit" class="btn btn--gray btn--block">
                    Enviar
                </button>
            </form>
        </div>

        <!-- Info de contacto -->
        <div class="contact-info">
            <div class="contact-info__card">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <h4>Dirección</h4>
                    <p><?= SITE_ADDRESS ?></p>
                </div>
            </div>
            <div class="contact-info__card">
                <i class="fas fa-phone"></i>
                <div>
                    <h4>Teléfono</h4>
                    <p><a href="tel:<?= preg_replace('/[^0-9+]/', '', SITE_PHONE) ?>"><?= SITE_PHONE ?></a></p>
                </div>
            </div>
            <div class="contact-info__card">
                <i class="fas fa-envelope"></i>
                <div>
                    <h4>Correo Electrónico</h4>
                    <p><a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></p>
                </div>
            </div>
            <div class="contact-info__card">
                <i class="fas fa-clock"></i>
                <div>
                    <h4>Horario de Atención</h4>
                    <p><?= SITE_HOURS ?></p>
                </div>
            </div>

            <!-- Mapa -->
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps?q=-12.126175,-77.019684&z=16&output=embed"
                    width="100%" height="250" style="border:0;border-radius:8px;" allowfullscreen
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

    </div>
</section>
