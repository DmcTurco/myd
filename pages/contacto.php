<!-- ===== CONTACTO — dos columnas: formulario (357px) y oficina (743px) ===== -->
<section class="contacto-section">
    <div class="container contacto-grid">

        <!-- Formulario -->
        <div class="contacto-form">
            <div class="headline-wrap"><h4 class="headline-line">Escríbanos, le contestaremos en breve</h4></div>

            <?php
            // Estado que dejo actions/contact.php: aviso, datos escritos y errores
            // (la sesion la abre index.php, antes de imprimir nada)
            $c   = $_SESSION['contacto'] ?? null;
            unset($_SESSION['contacto']);
            $val = $c['datos']   ?? [];
            $err = $c['errores'] ?? [];
            $v   = fn(string $k) => htmlspecialchars($val[$k] ?? '', ENT_QUOTES, 'UTF-8');

            // Token de un solo uso contra envios desde fuera de la web
            if (empty($_SESSION['token'])) { $_SESSION['token'] = bin2hex(random_bytes(16)); }
            ?>

            <?php if (($c['estado'] ?? '') === 'ok'): ?>
            <div class="alert alert--success">
                <i class="fas fa-check-circle"></i> Mensaje enviado. Le contactaremos en breve.
            </div>
            <?php elseif (($c['estado'] ?? '') === 'fallo'): ?>
            <div class="alert alert--error">
                <i class="fas fa-exclamation-circle"></i> No pudimos enviar el mensaje. Escríbanos a
                <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a> o llame al <?= SITE_PHONE ?>.
            </div>
            <?php elseif ($err): ?>
            <?php
            // Los errores con clave numerica son generales (sesion caducada,
            // demasiados envios seguidos); los demas van bajo su campo.
            $generales = array_filter($err, 'is_int', ARRAY_FILTER_USE_KEY);
            ?>
            <div class="alert alert--error">
                <i class="fas fa-exclamation-circle"></i>
                <?= $generales ? htmlspecialchars(implode(' ', $generales)) : 'Revise los campos marcados.' ?>
            </div>
            <?php endif; ?>

            <form action="<?= SITE_URL ?>/actions/contact.php" method="POST" class="form-mydsac" id="contacto-form" novalidate>
                <label for="nombre">Nombres y Apellidos:
                    <input type="text" id="nombre" name="nombre" value="<?= $v('nombre') ?>" required>
                    <?php if (!empty($err['nombre'])): ?><span class="campo-error"><?= $err['nombre'] ?></span><?php endif; ?>
                </label>
                <label for="email">Tu correo electrónico:
                    <input type="email" id="email" name="email" value="<?= $v('email') ?>" required>
                    <?php if (!empty($err['email'])): ?><span class="campo-error"><?= $err['email'] ?></span><?php endif; ?>
                </label>
                <label for="telefono">Tu Teléfono:
                    <input type="tel" id="telefono" name="telefono" value="<?= $v('telefono') ?>">
                </label>
                <label for="asunto">Asunto:
                    <input type="text" id="asunto" name="asunto" value="<?= $v('asunto') ?>" required>
                    <?php if (!empty($err['asunto'])): ?><span class="campo-error"><?= $err['asunto'] ?></span><?php endif; ?>
                </label>
                <label for="mensaje">Mensaje:
                    <textarea id="mensaje" name="mensaje" required><?= $v('mensaje') ?></textarea>
                    <?php if (!empty($err['mensaje'])): ?><span class="campo-error"><?= $err['mensaje'] ?></span><?php endif; ?>
                </label>

                <!-- Trampa para robots: oculta, una persona nunca la rellena -->
                <input type="text" name="website" style="display:none;" tabindex="-1" autocomplete="off">
                <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">

                <button type="submit" class="btn-enviar">Enviar</button>
            </form>
        </div>

        <!-- Oficinas -->
        <div class="contacto-oficina">
            <div class="headline-wrap"><h4 class="headline-line">Nuestras oficinas</h4></div>

            <div class="contacto-oficina__maps">
                <!-- Oficina Lima -->
                <div class="contacto-oficina__item">
                    <div class="contacto-map">
                        <iframe src="https://www.google.com/maps?q=-12.126175,-77.019684&amp;z=16&amp;output=embed"
                                title="Ubicación oficina Lima - M&D Asesoria Financiera"
                                allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <ul class="contacto-datos">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?= SITE_ADDRESS ?></span>
                        </li>
                    </ul>
                </div>

                <!-- Oficina Piura -->
                <div class="contacto-oficina__item">
                    <div class="contacto-map">
                        <iframe src="https://www.google.com/maps?q=<?= urlencode(SITE_ADDRESS_2 . ', Perú') ?>&amp;z=16&amp;output=embed"
                                title="Ubicación oficina Piura - M&D Asesoria Financiera"
                                allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <ul class="contacto-datos">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?= SITE_ADDRESS_2 ?></span>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="contacto-datos">
                <li>
                    <i class="fas fa-phone"></i>
                    <span><a href="tel:<?= preg_replace('/[^0-9+]/', '', SITE_PHONE) ?>"><?= SITE_PHONE ?></a></span>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <span><a href="tel:<?= preg_replace('/[^0-9+]/', '', SITE_PHONE_2) ?>"><?= SITE_PHONE_2 ?></a></span>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <span><a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></span>
                </li>
            </ul>
        </div>

    </div>
</section>
