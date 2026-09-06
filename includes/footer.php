<?php
// Últimas noticias para el footer (cargadas solo si no están ya cargadas)
if (!isset($noticias)) {
    require_once __DIR__ . '/../data/noticias.php';
}
?>
<!-- ===== FOOTER — 3 columnas estilo mydsac.com ===== -->
<footer class="footer">
    <div class="container footer__grid">

        <!-- Columna 1: Marca y logo -->
        <div>
            <span class="footer__brand-title">M&amp;D Asesores Financieros</span>
            <div class="footer__logo">
                <img src="<?= asset('images/logo-white.webp') ?>" alt="M&D Asesoría Financiera"
                     onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                <span class="footer__logo-text" style="display:none;">M<strong>&D</strong></span>
            </div>
            <p class="footer__brand-desc">Somos una empresa joven formada desde el 2015 la cual brinda asesoría integral para gestión de cartas fianzas, pólizas de caución en obras públicas y privadas, con un equipo de profesionales el cual está entrenado para lograr el éxito de la gestión.</p>
        </div>

        <!-- Columna 2: Últimas Noticias -->
        <div class="footer__col">
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
        </div>

        <!-- Columna 3: Contáctenos -->
        <div class="footer__col">
            <h4>Contáctenos</h4>
            <ul class="footer__contact-list">
                <li class="footer__contact-item">
                    <i class="fas fa-home"></i>
                    <span><?= SITE_ADDRESS ?></span>
                </li>
                <li class="footer__contact-item">
                    <i class="fas fa-phone"></i>
                    <span><?= SITE_PHONE ?></span>
                </li>
                <li class="footer__contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>
                </li>
            </ul>
            <div class="footer__hours">
                Horario de Atención:<br>
                Lunes a Viernes de 9:00 am a 6:00 pm
            </div>
        </div>

    </div>

    <div class="footer__bottom">
        <div class="container">
            <p><?= date('Y') ?> Todos los Derechos Reservados &copy; M&amp;D Asesores Financieros</p>
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
