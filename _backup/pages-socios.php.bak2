<!-- ===== PAGE HERO ===== -->
<section class="page-hero" style="background-image:url('<?= asset('images/hero/hero-socios.jpg') ?>')">
    <div class="page-hero__overlay"></div>
    <div class="container page-hero__content">
        <h1>Socios</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?= page_url('home') ?>">Inicio</a></li>
                <li>Socios</li>
            </ol>
        </nav>
    </div>
</section>

<section class="section">
    <div class="container" style="max-width:780px;text-align:center;">
        <span class="section-tag">Alianzas estratégicas</span>
        <h2>Nuestros Socios Estratégicos</h2>
        <p>Trabajamos junto a los siguientes socios estratégicos para brindarle la misma calidad de servicio y asesoría personalizada en todo el país.</p>
    </div>
</section>

<!-- ===== SOCIOS ESTRATÉGICOS ===== -->
<section class="section section--alt">
    <div class="container">
        <div class="partner-rows">
            <?php
            $socios = [
                ['nombre' => 'TM Group',                    'foto' => 'partners/tmgroup.png', 'bio' => 'Presencia estratégica en el centro del país, asegurando la misma calidad de servicio y asesoría personalizada para nuestros clientes.'],
                ['nombre' => 'Dinamo Corredores de Seguros', 'foto' => 'partners/dinamo.png',  'bio' => 'Broker de seguros que brinda asesoría especializada en seguros generales, con la misma calidad de servicio y trato personalizado.'],
                ['nombre' => 'Henry Leigh Riofrío',          'foto' => '',                    'bio' => 'Corredor de seguros registrado, aliado estratégico de M&D Asesores Financieros.'],
            ];
            foreach ($socios as $s):
            ?>
            <div class="partner-row">
                <div class="partner-row__logo">
                    <?php if ($s['foto']): ?>
                        <img src="<?= asset('images/' . $s['foto']) ?>" alt="<?= htmlspecialchars($s['nombre']) ?>">
                    <?php else: ?>
                        <span class="partner-row__initial"><?= htmlspecialchars(mb_substr($s['nombre'], 0, 1)) ?></span>
                    <?php endif; ?>
                </div>
                <div class="partner-row__body">
                    <h3><?= htmlspecialchars($s['nombre']) ?></h3>
                    <p><?= htmlspecialchars($s['bio']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-banner__inner">
        <div>
            <h2>¿Le interesa ser nuestro socio estratégico?</h2>
            <p>Escríbanos y con gusto evaluaremos una alianza.</p>
        </div>
        <a href="mailto:<?= SITE_EMAIL ?>" class="btn btn--white">Escríbanos</a>
    </div>
</section>
