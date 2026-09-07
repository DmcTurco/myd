<?php
/**
 * Arbol del desplegable SERVICIOS, calcado del menu original de mydsac.com.
 * Cada 'slug' corresponde a una clave de $servicios_paginas (data/servicios.php).
 */
$menu_servicios = [
    [
        'slug'   => 'soluciones-integrales',
        'titulo' => 'SOLUCIONES INTEGRALES EN HERRAMIENTAS FINANCIERAS Y SEGUROS',
        'hijos'  => [
            ['slug' => 'linea-credito',        'titulo' => 'Gestión para Apertura y Aumento de Línea de Crédito para las Cartas Fianzas'],
            ['slug' => 'cartas-fianzas-obras', 'titulo' => 'Gestión de Cartas Fianzas para Obras Públicas y Privadas'],
        ],
    ],
    // [
    //     'slug'   => 'seguros-generales',
    //     'titulo' => 'SEGUROS GENERALES',
    //     'hijos'  => [
    //         ['slug' => 'trc',                   'titulo' => 'Todo Riesgo de Construcción (TRC)'],
    //         ['slug' => 'trm',                   'titulo' => 'Todo Riesgo de Montaje (TRM)'],
    //         ['slug' => 'trec',                  'titulo' => 'Todo Riesgo de Maquinaria y/o Equipo (TREC)'],
    //         ['slug' => 'sctr',                  'titulo' => 'SCTR (Salud – Pension)'],
    //         ['slug' => 'accidentes-personales', 'titulo' => 'Accidentes Personales'],
    //         ['slug' => 'vida-ley',              'titulo' => 'Vida Ley'],
    //         ['slug' => 'eps',                   'titulo' => 'EPS'],
    //         ['slug' => 'oncologico',            'titulo' => 'Oncologico'],
    //         ['slug' => 'vehicular',             'titulo' => 'Vehicular'],
    //         ['slug' => 'soat',                  'titulo' => 'SOAT DIGITAL'],
    //     ],
    // ],
];

