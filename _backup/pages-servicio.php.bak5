<?php
require_once __DIR__ . '/../data/servicios.php';
require_once __DIR__ . '/../data/menu.php';

$slug = $_GET['s'] ?? '';
$pag  = $servicios_paginas[$slug] ?? null;

if (!$pag) {
    echo '<div class="container" style="padding:80px 0;text-align:center;">'
       . '<h2>Servicio no encontrado</h2>'
       . '<a href="' . page_url('servicios') . '" class="btn btn--primary">Ver todos los servicios</a></div>';
    return;
}

// Cadena de migas: Home › [padre] › titulo
$migas = [];
if (!empty($pag['padre']) && isset($servicios_paginas[$pag['padre']])) {
    $migas[] = ['url' => servicio_url($pag['padre']), 'txt' => $servicios_paginas[$pag['padre']]['titulo']];
}
?>

<!-- ===== BARRA DE MIGAS ===== -->
<section class="subheader subheader--bar">
    <div class="container">
        <nav class="breadcrumb-bar" aria-label="breadcrumb">
            <ol class="breadcrumb-list">
                <li><a href="<?= page_url('home') ?>">Home</a></li>
                <li><a href="<?= page_url('servicios') ?>">Servicios</a></li>
                <?php foreach ($migas as $m): ?>
                <li><a href="<?= $m['url'] ?>"><?= htmlspecialchars($m['txt']) ?></a></li>
                <?php endforeach; ?>
                <li><?= htmlspecialchars($pag['titulo']) ?></li>
            </ol>
        </nav>
    </div>
</section>

<!-- ===== FOTO DE CABECERA CON EL TITULO ===== -->
<section class="photo-hero photo-hero--center" style="background-image:url('<?= asset('images/servicios/' . $pag['hero']) ?>')">
    <div class="container photo-hero__inner">
        <h1 class="photo-hero__title"><?= htmlspecialchars($pag['titulo']) ?></h1>
    </div>
</section>

<!-- ===== TEXTO ===== -->
<section class="serv-intro">
    <div class="container serv-cuerpo">
        <?php foreach ($pag['textos'] as $t): ?>
            <?php if (strpos($t, '<ul>') !== false || strpos($t, '<li>') !== false): ?>
                <div class="page-text"><?= $t ?></div>
            <?php else: ?>
                <p class="page-text"><?= $t ?></p>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>

<?php if (!empty($pag['logos'])): ?>
<!-- ===== COMPAÑIAS ===== -->
<section class="serv-logos">
    <div class="container">
        <div class="serv-logos__grid">
            <?php foreach ($pag['logos'] as $l): ?>
            <div class="serv-logos__cell">
                <img src="<?= asset('images/servicios/' . $l) ?>" alt="Compañía aseguradora">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
