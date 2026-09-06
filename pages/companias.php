<!-- ===== CABECERA — foto con el titulo en caja translucida ===== -->
<section class="photo-hero" style="background-image:url('<?= asset('images/hero/hero-companias.jpg') ?>')">
    <div class="container photo-hero__inner">
        <h1 class="photo-hero__title">COMPAÑIAS</h1>
    </div>
</section>

<!-- ===== INTRO ===== -->
<section class="comp-intro">
    <div class="container">
        <p class="page-text">Tener un buen respaldo es nuestra mejor garantía. Contamos con el respaldo de 3 prestigiosas compañías de seguros, 1 fundación para fomento para la pequeña y micro empresa y 1 reaseguradora internacional con las más elevada clasificación de riesgo que confían en nuestra experiencia y estabilidad. Todas avaladas y autorizadas por la SBS para la emisión de las cartas fianzas.</p>
    </div>
</section>

<!-- ===== PARTNERS DIRECTOS ===== -->
<section class="comp-heading">
    <div class="container">
        <h4 class="page-subtitle page-subtitle--plain">Principales Partners Directos</h4>
    </div>
</section>

<section class="comp-logos">
    <div class="container comp-grid">
        <?php
        // Mismo orden que el sitio original: AVLA, SECREX, AmTrust, La Positiva, InSur.
        $partners = [
            ['nombre' => 'AVLA',                        'logo' => 'avla.png'],
            ['nombre' => 'SECREX CESCE',                'logo' => 'secrex.png'],
            ['nombre' => 'AmTrust Insurance Spain',     'logo' => 'amtrust.png'],
            ['nombre' => 'La Positiva Seguros',         'logo' => 'positiva.png'],
            ['nombre' => 'InSur — Partner of Atradius', 'logo' => 'insur-atradius.png'],
        ];
        foreach ($partners as $p): ?>
        <div class="comp-cell">
            <img src="<?= asset('images/partners/' . $p['logo']) ?>" alt="<?= htmlspecialchars($p['nombre']) ?>">
        </div>
        <?php endforeach; ?>
    </div>
</section>
