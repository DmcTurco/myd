<?php
/**
 * ===========================================================================
 *  REGISTRO DE PAGINAS  —  el unico sitio donde se editan
 * ===========================================================================
 *
 * Cada pagina se define UNA sola vez. De aqui salen automaticamente:
 *   - la URL publica            (/nosotros/, /socios/ ...)
 *   - el texto del boton del menu
 *   - el titulo de la pestaña del navegador
 *   - la descripcion para Google
 *   - la lista de paginas validas del enrutador
 *
 * Para renombrar una seccion basta con cambiarla aqui: el menu, los enlaces,
 * la pestaña y el buscador se actualizan solos.
 *
 *   'ruta'   Lo que se ve en la URL. '' es la portada. null = no tiene URL
 *            propia (la ficha de servicio la recibe de $rutas_servicios).
 *   'menu'   Texto del boton en la cabecera. null = no sale en el menu.
 *   'titulo' Va delante del nombre del sitio en la pestaña.
 *            null = solo el nombre del sitio (caso de la portada).
 *   'desc'   Descripcion que muestra Google en los resultados.
 *   'h1'     Titulo grande que se ve DENTRO de la pagina.
 *   'bajada' Linea que va debajo de ese titulo.
 *   'submenu' Solo para Servicios: dibuja el desplegable de tres niveles.
 *
 * OJO: la CLAVE de la izquierda ('home', 'empresa', 'socios'...) es el nombre
 * del archivo en /pages y NO se debe cambiar. Todo lo demas si.
 */
$paginas = [

    'home' => [
        'ruta'   => '',
        'menu'   => 'Inicio',
        'titulo' => null,
        'desc'   => 'M&D Asesores Financieros - Especialistas en Cartas Fianza, Pólizas de Caución y Seguros en Lima, Perú.',
    ],

    'empresa' => [
        'ruta'   => 'nosotros',
        'menu'   => 'Nosotros',
        'titulo' => 'Nosotros',
        'desc'   => 'Conoce quiénes somos, nuestra misión, visión y valores corporativos.',
    ],

    'servicios' => [
        'ruta'    => 'servicios',
        'menu'    => 'Servicios',
        'titulo'  => 'Servicios',
        'desc'    => 'Gestión de Cartas Fianza, Pólizas de Caución, Seguros Generales y Servicios Administrativos.',
        'h1'      => 'NUESTROS SERVICIOS',
        'submenu' => true,
    ],

    // 'clientes' => [
    //     'ruta'   => 'clientes',
    //     'menu'   => 'Clientes',
    //     'titulo' => 'Clientes',
    //     'desc'   => 'Empresas que confían en M&D Asesores Financieros a nivel nacional.',
    //     'h1'     => 'NUESTROS CLIENTES',
    // ],

    'companias' => [
        'ruta'   => 'Aseguradoras',
        'menu'   => 'Aseguradoras',
        'titulo' => 'Compañías Asociadas',
        'desc'   => 'Compañías aseguradoras y financieras con las que trabajamos.',
        'h1'     => 'ASEGURADORAS',
    ],

    'socios' => [
        'ruta'   => 'partners',
        'menu'   => 'Partners',
        'titulo' => 'Partners',
        'desc'   => 'Conoce a los partners estratégicos de M&D Asesores Financieros.',
        'h1'     => 'PARTNERS',
        'bajada' => 'Trabajamos con los siguientes partners:',
    ],

    // 'noticias' => [
    //     'ruta'   => 'noticias',
    //     'menu'   => 'Noticias',
    //     'titulo' => 'Noticias',
    //     'desc'   => 'Últimas noticias y novedades del sector de seguros y fianzas.',
    // ],

    'contacto' => [
        'ruta'   => 'contacto',
        'menu'   => 'Contacto',
        'titulo' => 'Contáctenos',
        'desc'   => 'Contáctenos para una asesoría personalizada sin costo.',
    ],

    // Ficha de un servicio o seguro. No sale en el menu y su URL la da
    // $rutas_servicios; el titulo real lo pone la propia ficha.
    'servicio' => [
        'ruta'   => null,
        'menu'   => null,
        'titulo' => 'Servicios',
        'desc'   => 'Cartas fianza, pólizas de caución y seguros generales.',
    ],
];


/**
 * Rutas de las 14 fichas de servicio y seguro.
 * Ruta publica => clave en $servicios_paginas (data/servicios.php).
 * Se conservan tal cual las tenia el sitio original.
 */
$rutas_servicios = [
    'carta-fianza-y-seguros-de-caucion'                                           => 'soluciones-integrales',
    'gestion-para-apertura-y-aumento-de-linea-de-credito-para-las-cartas-fianzas' => 'linea-credito',
    'gestion-de-cartas-fianzas-para-obras-publicas-y-privadas'                    => 'cartas-fianzas-obras',
    'gestion-de-seguros-generales'                                                => 'seguros-generales',
    'trc'                   => 'trc',
    'trm'                   => 'trm',
    'trec'                  => 'trec',
    'sctr'                  => 'sctr',
    'accidentes-personales' => 'accidentes-personales',
    'vida-ley'              => 'vida-ley',
    'eps'                   => 'eps',
    'oncologico'            => 'oncologico',
    'vehicular'             => 'vehicular',
    'soat'                  => 'soat',
];


/* ===========================================================================
   De aqui abajo no hace falta tocar nada: todo se arma solo con $paginas.
   =========================================================================== */

$rutas_paginas = [];   // ruta publica  => clave de pagina
$valid_pages   = [];   // claves que el enrutador acepta
$titles        = [];   // clave => titulo de la pestaña
$descriptions  = [];   // clave => descripcion para Google

foreach ($paginas as $clave => $p) {
    $valid_pages[] = $clave;
    if (($p['ruta'] ?? null) !== null) {
        $rutas_paginas[$p['ruta']] = $clave;
    }
    $titles[$clave]       = empty($p['titulo']) ? SITE_NAME : $p['titulo'] . ' | ' . SITE_NAME;
    $descriptions[$clave] = $p['desc'] ?? '';
}

$paginas_rutas   = array_flip($rutas_paginas);   // clave de pagina => ruta
$servicios_rutas = array_flip($rutas_servicios);
