<!-- ===== PAGE HERO ===== -->
<section class="page-hero" style="background-image:url('<?= asset('images/hero/hero-companias.jpg') ?>')">
    <div class="page-hero__overlay"></div>
    <div class="container page-hero__content">
        <h1>Compañías Asociadas</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?= page_url('home') ?>">Inicio</a></li>
                <li>Compañías</li>
            </ol>
        </nav>
    </div>
</section>

<section class="section">
    <div class="container" style="max-width:780px;text-align:center;">
        <span class="section-tag">Nuestros aliados</span>
        <h2>Compañías con las que trabajamos</h2>
        <p>Tener un buen respaldo es nuestra mejor garantía. Contamos con el respaldo de prestigiosas compañías de seguros, una fundación de fomento para la pequeña y micro empresa, y una reaseguradora internacional con la más elevada clasificación de riesgo. Todas avaladas y autorizadas por la SBS para la emisión de cartas fianza.</p>
    </div>
</section>

<!-- ===== PARTNERS DIRECTOS ===== -->
<section class="section section--alt">
    <div class="container">
        <div class="section-header">
            <h3>Principales Partners Directos</h3>
        </div>
        <div class="partners-grid">
            <?php
            $partners = [
                ['nombre' => 'La Positiva Seguros',            'logo' => 'positiva.png'],
                ['nombre' => 'AVLA',                            'logo' => 'avla.png'],
                ['nombre' => 'SECREX CESCE',                    'logo' => 'secrex.png'],
                ['nombre' => 'AmTrust Insurance Spain',         'logo' => 'amtrust.png'],
                ['nombre' => 'InSur — Partner of Atradius',     'logo' => 'insur-atradius.png'],
            ];
            foreach ($partners as $p):
            ?>
            <div class="partner-card">
                <img src="<?= asset('images/partners/' . $p['logo']) ?>" alt="<?= htmlspecialchars($p['nombre']) ?>"
                     onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                <span class="partner-card__name"><?= htmlspecialchars($p['nombre']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-banner__inner">
        <div>
            <h2>¿Quiere trabajar con nosotros?</h2>
            <p>Estamos abiertos a nuevas alianzas estratégicas.</p>
        </div>
        <a href="<?= page_url('contacto') ?>" class="btn btn--white">Contáctenos</a>
    </div>
</section>
