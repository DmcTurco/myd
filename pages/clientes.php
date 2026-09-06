<!-- ===== PAGE HERO ===== -->
<section class="page-hero" style="background-image:url('<?= asset('images/hero/hero-clientes.jpg') ?>')">
    <div class="page-hero__overlay"></div>
    <div class="container page-hero__content">
        <h1>Nuestros Clientes</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?= page_url('home') ?>">Inicio</a></li>
                <li>Clientes</li>
            </ol>
        </nav>
    </div>
</section>

<!-- ===== INTRO ===== -->
<section class="section">
    <div class="container" style="max-width:780px;text-align:center;">
        <span class="section-tag">Confían en nosotros</span>
        <h2>Empresas que nos respaldan</h2>
        <p>Somos una empresa joven formada desde 2015, brindando asesoría integral para gestión de cartas fianza y pólizas de caución a más de 300 empresas en todo el Perú.</p>
    </div>
</section>

<!-- ===== MAPA DE COBERTURA ===== -->
<section class="section section--alt">
    <div class="container coverage">
        <div class="coverage__content">
            <span class="section-tag">Cobertura Nacional</span>
            <h2>Presencia en todo el Perú</h2>
            <p>Atendemos clientes en las siguientes regiones:</p>
            <ul class="coverage__regions-list">
                <?php
                $regiones = ['Amazonas','Ayacucho','Cusco','Huancavelica','Huánuco','Ica','Junín','La Libertad','Lima','Loreto','Pasco','Piura','San Martín','Tumbes'];
                foreach ($regiones as $r):
                ?>
                <li><?= $r ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="coverage__map">
            <img src="<?= asset('images/mapa-cobertura.png') ?>" alt="Mapa de cobertura M&D Asesores Financieros"
                 style="width:100%;height:auto;border-radius:8px;"
                 onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
            <div class="map-placeholder" style="display:none;">
                <i class="fas fa-map-marked-alt"></i>
                <p>Mapa de cobertura</p>
                <small>14 regiones activas</small>
            </div>
        </div>
    </div>
</section>

