<?php
// Últimas noticias para el footer (cargadas solo si no están ya cargadas)
if (!isset($noticias)) {
    require_once __DIR__ . '/../data/noticias.php';
}
?>
<!-- ===== FOOTER — 2 columnas: logo centrado | contáctenos más ancho ===== -->
<footer class="footer">
    <div class="container footer__grid">

        <!-- Columna 1: Logo centrado -->
        <div class="footer__logo-col">
            <div class="footer__logo">
                <img src="<?= asset('images/logo-white.webp') ?>" alt="M&D Asesoría Financiera"
                     onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                <span class="footer__logo-text" style="display:none;">M<strong>&D</strong></span>
            </div>
        </div>

        <!-- Columna 2: Últimas Noticias -->
        <!-- <div class="footer__col">
            <h4>Últimas Noticias</h4>
            <?php foreach (array_slice($noticias, 0, 3) as $noticia): ?>
            <div class="footer__news-item">
                <a href="<?= noticia_url($noticia) ?>">
                    <?= htmlspecialchars($noticia['titulo']) ?>
                </a>
                <span class="footer__news-date"><?= htmlspecialchars($noticia['fecha_larga']) ?></span>
                <span class="footer__news-excerpt">
                    <?= htmlspecialchars(mb_substr($noticia['resumen'], 0, 50)) ?>...
                </span>
            </div>
            <?php endforeach; ?>
        </div> -->

        <!-- Columna 3: Contáctenos -->
        <div class="footer__col">
            <h4>Contáctenos</h4>
            <ul class="footer__contact-list">
                <li class="footer__contact-item">
                    <i class="fas fa-location-dot"></i> <!-- icono de location -->
                    <span><?= SITE_ADDRESS ?> <span class="footer__sep">|</span> <?= SITE_ADDRESS_2 ?></span>
                </li>
                <li class="footer__contact-item">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>
                        <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', SITE_PHONE) ?>" target="_blank" rel="noopener"><?= SITE_PHONE ?></a>
                        <span class="footer__sep">|</span>
                        <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', SITE_PHONE_2) ?>" target="_blank" rel="noopener"><?= SITE_PHONE_2 ?></a>
                    </span>
                </li>
                <li class="footer__contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>
                </li>
            </ul>
            <div class="footer__hours">
                Horario de Atención:<br>
                Lunes a Viernes de 8:30 am a 5:00 pm
            </div>
        </div>

    </div>

    <div class="footer__bottom">
        <div class="container">
            <p><?= date('Y') ?> Todos los Derechos Reservados &copy; M&amp;D Asesoria Financiera</p>
        </div>
    </div>
</footer>

<script src="<?= asset_v('js/navbar.js') ?>"></script>
<script src="<?= asset_v('js/hero-slider.js') ?>"></script>
<script src="<?= asset_v('js/companies-carousel.js') ?>"></script>
<script src="<?= asset_v('js/form-validation.js') ?>"></script>
<script src="<?= asset_v('js/main.js') ?>"></script>
</body>
</html>
