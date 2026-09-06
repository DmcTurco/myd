<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

// Páginas válidas
$valid_pages = [
    'home', 'empresa', 'servicios', 'clientes',
    'companias', 'socios', 'noticias', 'contacto',
];

$page = $_GET['page'] ?? 'home';

if (!in_array($page, $valid_pages, true)) {
    $page = 'home';
}

$page_file = __DIR__ . '/pages/' . $page . '.php';

// Títulos y descripciones por página
$titles = [
    'home'      => SITE_NAME,
    'empresa'   => 'Nosotros | ' . SITE_NAME,
    'servicios' => 'Servicios | ' . SITE_NAME,
    'clientes'  => 'Clientes | ' . SITE_NAME,
    'companias' => 'Compañías Asociadas | ' . SITE_NAME,
    'socios'    => 'Socios | ' . SITE_NAME,
    'noticias'  => 'Noticias | ' . SITE_NAME,
    'contacto'  => 'Contáctenos | ' . SITE_NAME,
];

$descriptions = [
    'home'      => 'M&D Asesores Financieros - Especialistas en Cartas Fianza, Pólizas de Caución y Seguros en Lima, Perú.',
    'empresa'   => 'Conoce quiénes somos, nuestra misión, visión y valores corporativos.',
    'servicios' => 'Gestión de Cartas Fianza, Pólizas de Caución, Seguros Generales y Servicios Administrativos.',
    'clientes'  => 'Empresas que confían en M&D Asesores Financieros a nivel nacional.',
    'companias' => 'Compañías aseguradoras y financieras con las que trabajamos.',
    'socios'    => 'Conoce a nuestro equipo de socios y asesores.',
    'noticias'  => 'Últimas noticias y novedades del sector de seguros y fianzas.',
    'contacto'  => 'Contáctenos para una asesoría personalizada sin costo.',
];

$page_title = $titles[$page] ?? SITE_NAME;
$page_desc  = $descriptions[$page] ?? '';

require_once __DIR__ . '/includes/header.php';

if (file_exists($page_file)) {
    require_once $page_file;
} else {
    echo '<div class="container" style="padding:80px 0;text-align:center;"><h2>Página no encontrada</h2><a href="' . page_url('home') . '" class="btn btn--primary">Volver al inicio</a></div>';
}

require_once __DIR__ . '/includes/footer.php';
