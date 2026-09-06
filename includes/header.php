<?php require_once __DIR__ . '/../data/menu.php'; ?>
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
    <link rel="stylesheet" href="<?= asset_v('css/footer.css') ?>">
    <link rel="stylesheet" href="<?= asset_v('css/responsive.css') ?>">
</head>
<body>

<!-- ===== NAVBAR ===== -->
<header class="navbar" id="navbar">
    <div class="container navbar__inner">
        <!-- Logo -->
        <a href="<?= page_url('home') ?>" class="navbar__logo">
            <img src="<?= asset('images/logo.png') ?>" alt="M&D Asesoría Financiera"
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
                <li><a href="<?= page_url('home') ?>"      class="<?= active_page('home') ?>">Inicio</a></li>
                <li><a href="<?= page_url('empresa') ?>"   class="<?= active_page('empresa') ?>">Nosotros</a></li>
                <li class="has-dropdown">
                    <a href="<?= page_url('servicios') ?>" class="<?= active_page('servicios') ?><?= ($GLOBALS['page'] ?? '') === 'servicio' ? ' active' : '' ?>">Servicios <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <?php foreach ($menu_servicios as $ms): ?>
                        <li class="<?= !empty($ms['hijos']) ? 'has-submenu' : '' ?>">
                            <a href="<?= servicio_url($ms['slug']) ?>"><?= htmlspecialchars($ms['titulo']) ?></a>
                            <?php if (!empty($ms['hijos'])): ?>
                            <ul class="dropdown dropdown--sub">
                                <?php foreach ($ms['hijos'] as $h): ?>
                                <li><a href="<?= servicio_url($h['slug']) ?>"><?= htmlspecialchars($h['titulo']) ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li><a href="<?= page_url('clientes') ?>"  class="<?= active_page('clientes') ?>">Clientes</a></li>
                <li><a href="<?= page_url('companias') ?>" class="<?= active_page('companias') ?>">Compañías</a></li>
                <li><a href="<?= page_url('socios') ?>"    class="<?= active_page('socios') ?>">Socios</a></li>
                <li><a href="<?= page_url('noticias') ?>"  class="<?= active_page('noticias') ?>">Noticias</a></li>
                <li><a href="<?= page_url('contacto') ?>"  class="<?= active_page('contacto') ?>">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>
