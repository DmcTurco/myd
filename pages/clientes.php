<!-- ===== CABECERA — foto con el titulo en caja translucida ===== -->
<section class="photo-hero" style="background-image:url('<?= asset('images/hero/hero-clientes.webp') ?>')">
    <div class="container photo-hero__inner">
        <h1 class="photo-hero__title"><?= htmlspecialchars(texto_pagina('h1')) ?></h1>
    </div>
</section>

<!-- ===== MAPA + REGIONES ===== -->
<section class="clients-section">
    <div class="container clients-grid">

        <div class="clients-map">
            <img src="<?= asset('images/mapa-cobertura.webp') ?>" alt="Mapa de cobertura de M&D Asesores Financieros en el Perú">
        </div>

        <div class="clients-body">
            <h4 class="page-subtitle">Nuestros clientes se encuentran en las principales regiones del país:</h4>
            <ul class="page-list">
                <?php
                // Regiones tal como las lista el sitio original (mydsac.com/clientes).
                $regiones = ['Amazonas','Ayacucho','Cusco','Huancavelica','Huanuco','Ica','Junin',
                             'La Libertad','Lima','Loreto','Pasco','Piura','Tumbes','San Martín'];
                foreach ($regiones as $r): ?>
                <li><?= htmlspecialchars($r) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</section>
