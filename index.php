<?php
// La sesion se abre antes de imprimir nada: el formulario de contacto la usa
// para guardar lo escrito y el aviso de "enviado" entre una peticion y otra.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

/* config/rutas.php es el registro unico de paginas: de ahi salen
   $paginas, $rutas_paginas, $paginas_rutas, $valid_pages, $titles y
   $descriptions. Para renombrar una seccion se edita solo ese archivo. */
require_once __DIR__ . '/config/rutas.php';

/* ------------------------------------------------------------------
   Enrutado. El .htaccess manda todo lo que no sea un archivo real a
   index.php?ruta=<lo que venia en la URL>. Se conservan las rutas del
   sitio original; ?page=... sigue funcionando como respaldo.
   ------------------------------------------------------------------ */
$ruta = trim($_GET['ruta'] ?? '', '/');
$page = null;

if ($ruta !== '' || isset($_GET['ruta'])) {
    if (isset($rutas_paginas[$ruta])) {
        // /nosotros/, /servicios/, /noticias/ ...
        $page = $rutas_paginas[$ruta];
    } elseif (isset($rutas_servicios[$ruta])) {
        // /trc/, /vida-ley/, /carta-fianza-y-seguros-de-caucion/ ...
        $page = 'servicio';
        $_GET['s'] = $rutas_servicios[$ruta];
    } elseif (preg_match('#^\d{4}/\d{2}/\d{2}/([a-z0-9\-]+)$#', $ruta, $m)) {
        // /2017/11/20/la-positiva/  -> detalle de noticia
        require_once __DIR__ . '/data/noticias.php';
        foreach ($noticias as $n) {
            if ($n['slug'] === $m[1]) { $page = 'noticias'; $_GET['id'] = $n['id']; break; }
        }
    }
    if ($page === null) {
        http_response_code(404);
        $page = '404';
    }
}

if ($page === null) {
    $page = $_GET['page'] ?? 'home';
}

if ($page !== '404' && !in_array($page, $valid_pages, true)) {
    http_response_code(404);
    $page = '404';
}

$page_file = __DIR__ . '/pages/' . $page . '.php';

$page_title = $page === '404' ? 'Página no encontrada | ' . SITE_NAME : ($titles[$page] ?? SITE_NAME);
$page_desc  = $descriptions[$page] ?? '';

// El detalle de una noticia toma su titulo del articulo
if ($page === 'noticias' && !empty($_GET['id'])) {
    require_once __DIR__ . '/data/noticias.php';
    foreach ($noticias as $n) {
        if ($n['id'] === (int)$_GET['id']) {
            $page_title = $n['titulo'] . ' | ' . SITE_NAME;
            $page_desc  = $n['resumen'];
            break;
        }
    }
}

// La ficha de servicio toma su titulo de la propia pagina
if ($page === 'servicio') {
    require_once __DIR__ . '/data/servicios.php';
    $s_slug = $_GET['s'] ?? '';
    if (isset($servicios_paginas[$s_slug])) {
        $page_title = $servicios_paginas[$s_slug]['titulo'] . ' | ' . SITE_NAME;
    }
}

require_once __DIR__ . '/includes/header.php';

if ($page !== '404' && file_exists($page_file)) {
    require_once $page_file;
} else {
    echo '<section class="section" style="text-align:center;">'
       . '<div class="container">'
       . '<h1 style="font-size:34px;font-weight:300;margin-bottom:10px;">Página no encontrada</h1>'
       . '<p style="margin-bottom:24px;">La dirección que buscas no existe o cambió de sitio.</p>'
       . '<a href="' . page_url('home') . '" class="btn btn--primary">Volver al inicio</a>'
       . '</div></section>';
}

require_once __DIR__ . '/includes/footer.php';
