<?php
/**
 * Mapa de URLs limpias -> paginas internas.
 *
 * Se conservan exactamente las rutas del sitio original (mydsac.com) para no
 * romper enlaces ni posicionamiento ya existentes.
 */

// Ruta publica => nombre de la pagina en /pages
$rutas_paginas = [
    ''          => 'home',
    'nosotros'  => 'empresa',
    'servicios' => 'servicios',
    'clientes'  => 'clientes',
    'companias' => 'companias',
    'socios'    => 'socios',
    'noticias'  => 'noticias',
    'contacto'  => 'contacto',
];

// Ruta publica => slug en $servicios_paginas (data/servicios.php)
$rutas_servicios = [
    'carta-fianza-y-seguros-de-caucion'                                          => 'soluciones-integrales',
    'gestion-para-apertura-y-aumento-de-linea-de-credito-para-las-cartas-fianzas' => 'linea-credito',
    'gestion-de-cartas-fianzas-para-obras-publicas-y-privadas'                    => 'cartas-fianzas-obras',
    'gestion-de-seguros-generales'                                               => 'seguros-generales',
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

// Inversos, para generar enlaces
$paginas_rutas   = array_flip($rutas_paginas);
$servicios_rutas = array_flip($rutas_servicios);
