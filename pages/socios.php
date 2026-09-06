<!-- ===== FOTO DE CABECERA (sin titulo encima, 270px como el original) ===== -->
<section class="photo-hero photo-hero--bare" style="background-image:url('<?= asset('images/hero/hero-socios.jpg') ?>')"></section>

<!-- ===== TITULO ===== -->
<section class="socios-head">
    <div class="container">
        <h1 class="socios-title">SOCIOS ESTRÁTEGICOS</h1>
        <h4 class="serv-band-title serv-band-title--sentence">Trabajamos con los siguientes socios estratégicos:</h4>
    </div>
</section>

<!-- ===== SOCIOS =====
     El original coloca el logo y el texto en dos columnas centradas de
     260px, y el ancho del texto acompana al de cada logo. -->
<?php
$socios = [
    [
        'logo'   => 'partners/tmgroup.png',
        'alt'    => 'TM Group',
        'ancho'  => 260,   // ancho con el que se muestra el logo
        'alto'   => 260,   // alto del contenido de la fila en el original
        'texto'  => 'Se encuentra en el centro del país donde aseguramos nuestra presencia brindando la misma calidad de servicio y asesoría personalizada.',
    ],
    [
        'logo'   => 'partners/dinamo.png',
        'alt'    => 'Dinamo Corredores de Seguros',
        'ancho'  => 160,
        'alto'   => 260,
        'texto'  => 'Broker de seguros el cual brinda la asesoría en seguros generales donde brindamos la misma calidad de servicio y asesoría personalizada.',
    ],
    [
        'logo'   => 'partners/leigh.jpg',
        'alt'    => 'Corredor de seguros',
        'ancho'  => 160,
        'alto'   => 184,
        'texto'  => 'Corredor de Seguros.',
    ],
];
foreach ($socios as $s): ?>
<section class="socios-row">
    <div class="container socios-grid" style="min-height:<?= (int)$s['alto'] ?>px">
        <div class="socios-logo">
            <img src="<?= asset('images/' . $s['logo']) ?>" alt="<?= htmlspecialchars($s['alt']) ?>"
                 style="width:<?= (int)$s['ancho'] ?>px">
        </div>
        <div class="socios-text">
            <p><?= htmlspecialchars($s['texto']) ?></p>
        </div>
    </div>
</section>
<?php endforeach; ?>
