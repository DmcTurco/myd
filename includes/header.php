<?php require_once __DIR__ . '/../data/menu.php';

// $paginas viene de config/rutas.php (el registro unico de paginas)
if (!isset($paginas)) { require __DIR__ . '/../config/rutas.php'; }

/* Servicio que se esta viendo, para marcarlo en azul en el desplegable igual
   que hace el original (current-menu-item / current-menu-ancestor). */
$serv_actual = (($GLOBALS['page'] ?? '') === 'servicio') ? ($_GET['s'] ?? '') : '';
$serv_padre  = '';
if ($serv_actual !== '') {
    foreach ($menu_servicios as $__ms) {
        foreach ($__ms['hijos'] ?? [] as $__h) {
            if ($__h['slug'] === $serv_actual) { $serv_padre = $__ms['slug']; break 2; }
        }
    }
} ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?? SITE_NAME ?></title>
    <meta name="description" content="<?= $page_desc ?? 'M&D Asesores Financieros - Especialistas en Cartas Fianza, Pólizas de Caución y Seguros Generales en Lima, Perú.' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Estilos propios (divididos por modulo) -->
    <link rel="stylesheet" href="<?= asset_v('css/base.css') ?>">
    <link rel="stylesheet" href="<?= asset_v('css/header.css') ?>">
    <link rel="stylesheet" href="<?= asset_v('css/hero.css') ?>">
    <link rel="stylesheet" href="<?= asset_v('css/home.css') ?>">
    <link rel="stylesheet" href="<?= asset_v('css/pages.css') ?>">
    <link rel="stylesheet" href="<?= asset_v('css/servicio.css') ?>">
    <link rel="stylesheet" href="<?= asset_v('css/footer.css') ?>">
    <link rel="stylesheet" href="<?= asset_v('css/responsive.css') ?>">
</head>
<body>

<!-- ===== NAVBAR ===== -->
<header class="navbar" id="navbar">
    <div class="container navbar__inner">
        <!-- Logo -->
        <a href="<?= page_url('home') ?>" class="navbar__logo">
            <img src="<?= asset('images/logo.webp') ?>" alt="M&D Asesoría Financiera"
                 onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
            <span class="navbar__logo-text" style="display:none;">M<strong>&D</strong> <small style="font-size:.6em;font-weight:400;letter-spacing:.02em;color:#555;margin-left:4px;">Asesoría Financiera</small></span>
        </a>

        <!-- Hamburger (móvil) -->
        <button class="navbar__toggle" id="navToggle" aria-label="Abrir menú" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>

        <!-- Menú -->
        <nav class="navbar__menu" id="navMenu">
            <ul>
                <?php foreach ($paginas as $clave => $pg):
                    if (empty($pg['menu'])) continue;          // no sale en el menu
                    $tiene_sub = !empty($pg['submenu']);
                ?>
                <li<?= $tiene_sub ? ' class="has-dropdown"' : '' ?>>
                    <a href="<?= page_url($clave) ?>" class="<?= active_page($clave) ?><?= ($tiene_sub && ($GLOBALS['page'] ?? '') === 'servicio') ? ' active' : '' ?>"><?= htmlspecialchars($pg['menu']) ?></a>

                    <?php if ($tiene_sub): ?>
                    <ul class="dropdown">
                        <?php foreach ($menu_servicios as $ms): ?>
                        <li class="<?= !empty($ms['hijos']) ? 'has-submenu' : '' ?>">
                            <a href="<?= servicio_url($ms['slug']) ?>" class="<?= ($ms['slug'] === $serv_actual || $ms['slug'] === $serv_padre) ? 'current' : '' ?>"><?= htmlspecialchars($ms['titulo']) ?></a>
                            <?php if (!empty($ms['hijos'])): ?>
                            <ul class="dropdown dropdown--sub">
                                <?php foreach ($ms['hijos'] as $h): ?>
                                <li><a href="<?= servicio_url($h['slug']) ?>" class="<?= $h['slug'] === $serv_actual ? 'current' : '' ?>"><?= htmlspecialchars($h['titulo']) ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>
