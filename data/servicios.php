<?php
/**
 * Paginas de detalle de cada servicio.
*
 * Generado desde el contenido original de WordPress (shortcodes de WPBakery)
 * que venia en el respaldo .wpress. Cada pagina es una lista de FILAS y cada
 * fila una lista de COLUMNAS, igual que en el maquetador original.
 *
 *   fila:  ancho  fullwidth | default   (si ocupa todo el ancho o solo 1180px)
 *          bordes bottom              (linea inferior de 1px)
 *          grid   true                (dibuja las lineas verticales entre columnas)
 *          bg     imagen de fondo (cabecera con foto)
 *          pt/pb  padding vertical en px (por defecto 25)
 *   item:  heading | texto | imagen | separador
 */

$servicios_paginas = [
    'soluciones-integrales' => [
        'titulo'    => 'SOLUCIONES INTEGRALES EN HERRAMIENTAS FINANCIERAS Y SEGUROS',
        'padre'     => null,
        'filas'     => [
            [ 'ancho' => 'fullwidth', 'bg' => '19.webp', 'bgpos' => 'right top', 'pt' => 100, 'pb' => 140, 'efecto' => 'parallax', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-1', 'txt' => '' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'efecto' => 'parallax', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-3', 'txt' => 'SOLUCIONES INTEGRALES EN HERRAMIENTAS FINANCIERAS Y SEGUROS' ],
                    [ 't' => 'texto', 'html' => 'Ofrecemos las mejores cotizaciones con las tasas más atractivas en diversos tipos de seguros con las compañías de seguros más importantes del país.' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/2' ],
                [ 'w' => '1/2', 'items' => [
                    [ 't' => 'heading', 'size' => 'h4', 'estilo' => 'style-1', 'txt' => 'Tipos de Seguro:' ],
                    [ 't' => 'texto', 'html' => '<ul> <li>Seriedad de Oferta</li> <li>Fiel Cumplimiento de Contrato</li> <li>Adelanto Directo y Adelanto de Materiales</li> <li>Cartas de Acreditacion</li> </ul>' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/6' ],
                [ 'w' => '1/6', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania1.webp' ],
                ] ],
                [ 'w' => '1/6', 'items' => [
                    [ 't' => 'imagen', 'src' => 'cliente4.webp' ],
                ] ],
                [ 'w' => '1/6', 'items' => [
                    [ 't' => 'imagen', 'src' => 'cliente1.webp' ],
                ] ],
                [ 'w' => '1/6', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania5_2.webp' ],
                ] ],
                [ 'w' => '1/6', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania6_2.webp' ],
                ] ],
            ] ],
        ],
    ],
    'linea-credito' => [
        'titulo'    => 'Gestión para Apertura y Aumento de Línea de Crédito para las Cartas Fianzas',
        'padre'     => 'soluciones-integrales',
        'filas'     => [
            [ 'ancho' => 'fullwidth', 'bg' => '308.webp', 'bgpos' => 'right top', 'pt' => 100, 'pb' => 140, 'efecto' => 'parallax', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-4', 'punchline' => 'Nuestros Servicios', 'txt' => 'Gestión para apertura y aumento de línea de crédito para las cartas fianzas' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'bordes' => 'bottom', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => 'Respaldamos la apertura y el aumento de la línea de crédito para las cartas fianzas para afianzar las obras públicas y privadas.' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/2', 'items' => [
                    [ 't' => 'imagen', 'src' => 'DSC_0291.webp' ],
                ] ],
                [ 'w' => '1/2', 'items' => [
                    [ 't' => 'heading', 'size' => 'h4', 'estilo' => 'style-1', 'txt' => 'Beneficios:' ],
                    [ 't' => 'texto', 'html' => '<ul> <li>Garantizamos la aprobacion de sus cartas fianzas</li> <li>Rapidez y Confiabilidad en la pre-aprobacion de lineas de fianza</li> <li>Crecimiento de la línea fianza a corto plazo</li> <li>Menores exigencias con respecto a la banca.</li> <li>Libera tu línea bancaria, mejora tu capacidad financiera.</li> <li>Menores exigencias con respecto a la banca</li> </ul>' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'separador' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/6' ],
                [ 'w' => '1/6', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania1.webp' ],
                ] ],
                [ 'w' => '1/6', 'items' => [
                    [ 't' => 'imagen', 'src' => 'cliente4.webp' ],
                ] ],
                [ 'w' => '1/6', 'items' => [
                    [ 't' => 'imagen', 'src' => 'cliente1.webp' ],
                ] ],
                [ 'w' => '1/6', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania5_2.webp' ],
                ] ],
                [ 'w' => '1/6', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania6_2.webp' ],
                ] ],
            ] ],
        ],
    ],
    'cartas-fianzas-obras' => [
        'titulo'    => 'Gestión de Cartas Fianzas para Obras Públicas y Privadas',
        'padre'     => 'soluciones-integrales',
        'filas'     => [
            [ 'ancho' => 'fullwidth', 'bg' => '14851.webp', 'bgpos' => 'right top', 'pt' => 100, 'pb' => 140, 'efecto' => 'parallax', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-4', 'txt' => 'Gestión de Cartas Fianzas para Obras Públicas y Privadas' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'bordes' => 'bottom', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => 'Garantizamos la gestión de las cartas fianzas de seriedad de oferta, fiel cumplimiento, adelanto directo, adelanto de materiales, correcto uso de anticipos en obras públicas y privadas: <ul> <li>+ Rápido</li> <li>+ Simple</li> <li>+ Personalizado</li> </ul>' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/2', 'items' => [
                    [ 't' => 'imagen', 'src' => '7395.webp' ],
                ] ],
                [ 'w' => '1/2', 'items' => [
                    [ 't' => 'heading', 'size' => 'h4', 'estilo' => 'style-1', 'txt' => 'Beneficios:' ],
                    [ 't' => 'texto', 'html' => '<ul> <li>Menores exigencias con respecto a la banca.</li> <li>Abanico de alternativas con diversas compañías de seguros y financieras autorizadas por la SBS.</li> <li>Agilidad en el proceso de obtención de cartas fianzas.</li> <li>Libera tu línea bancaria, mejora tu capacidad financiera.</li> <li>Menores exigencias con respecto a la banca</li> <li>Ofrecemos las garantías más atractivas del mercado.</li> <li>Asesoría integral en cartas fianzas desde antes que comience tu obra hasta el término de esta.</li> </ul>' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'separador' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/6' ],
                [ 'w' => '1/6', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania1.webp' ],
                ] ],
                [ 'w' => '1/6', 'items' => [
                    [ 't' => 'imagen', 'src' => 'cliente4.webp' ],
                ] ],
                [ 'w' => '1/6', 'items' => [
                    [ 't' => 'imagen', 'src' => 'cliente1.webp' ],
                ] ],
                [ 'w' => '1/6', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania5_2.webp' ],
                ] ],
                [ 'w' => '1/6', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania6_2.webp' ],
                ] ],
            ] ],
        ],
    ],
    'seguros-generales' => [
        'titulo'    => 'SEGUROS GENERALES',
        'padre'     => null,
        'filas'     => [
            [ 'ancho' => 'fullwidth', 'bg' => 'EstrecharMano-2.webp', 'bgpos' => 'right top', 'pt' => 100, 'pb' => 140, 'efecto' => 'parallax', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-1', 'txt' => '' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'efecto' => 'parallax', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-3', 'txt' => 'Seguros Generales' ],
                    [ 't' => 'texto', 'html' => 'Ofrecemos las mejores cotizaciones con las tasas más atractivas en diversos tipos de seguros con las compañías de seguros más importantes del país.' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/2', 'items' => [
                    [ 't' => 'heading', 'size' => 'h4', 'estilo' => 'style-1', 'txt' => 'Tipos de Seguro:' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'trc.webp' ],
                    [ 't' => 'texto', 'html' => '<p style="text-align: center;">Todo Riesgo de Construcción (TRC) o Construction All Risk (CAR)</p>' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'TRM.webp' ],
                    [ 't' => 'texto', 'html' => '<p style="text-align: center;">Todo Riesgo de Montaje (TRM) o Erection All Risks (EAR)</p>' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'trec_2.webp' ],
                    [ 't' => 'texto', 'html' => '<p style="text-align: center;">Todo Riesgo de Maquinaria y/o Equipo de Contratista (TREC)</p>' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'TREC-3.webp' ],
                    [ 't' => 'texto', 'html' => '<p style="text-align: center;">SCTR (Salud - Pension)</p>' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'accidentespersonales.webp' ],
                    [ 't' => 'texto', 'html' => '<p style="text-align: center;">Accidentes Personales</p>' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'vida-ley_9.webp' ],
                    [ 't' => 'texto', 'html' => '<p style="text-align: center;">Vida Ley</p>' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'EPS_3.webp' ],
                    [ 't' => 'texto', 'html' => '<p style="text-align: center;"> EPS</p>' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'ONCOLOGICO_3.webp' ],
                    [ 't' => 'texto', 'html' => '<p style="text-align: center;">Oncologico</p>' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'VEHICULAR_2.webp' ],
                    [ 't' => 'texto', 'html' => '<p style="text-align: center;">Vehicular</p>' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'SOAT.webp' ],
                    [ 't' => 'texto', 'html' => '<p style="text-align: center;">SOAT DIGITAL</p>' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'separador' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania8.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania7.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Icono_SegGeneral-1.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'IconoPosit_SegGeneral-2.webp' ],
                ] ],
            ] ],
        ],
    ],
    'trc' => [
        'titulo'    => 'Todo Riesgo de Construcción (TRC) o Construction All Risk (CAR)',
        'padre'     => 'seguros-generales',
        'migas'     => true,
        'filas'     => [
            [ 'ancho' => 'fullwidth', 'bg' => '7395.webp', 'bgpos' => 'center center', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'pt' => 100, 'pb' => 140, 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-4', 'txt' => '<strong>Todo Riesgo de Construcción (TRC) o Construction All Risk (CAR)</strong>' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => 'El <strong>Seguro Todo Riesgo Construcción</strong> es un seguro creado para cubrir toda clase de obras de edificación y construcción, cuyo objeto fundamental es amparar contra los daños y pérdidas accidentales sufridos en la obra, incluyendo el equipo de construcción del contratista y/o maquinaria de construcción, así como contra reclamaciones de terceros por daños a sus personas, cuando estos ocurran como consecuencia de los trabajos de construcción mencionados.' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'separador' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania8.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania7.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Icono_SegGeneral-1.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'IconoPosit_SegGeneral-2.webp' ],
                ] ],
            ] ],
        ],
    ],
    'trm' => [
        'titulo'    => 'Todo Riesgo de Montaje (TRM) o Erection All Risks (EAR)',
        'padre'     => 'seguros-generales',
        'migas'     => true,
        'filas'     => [
            [ 'ancho' => 'fullwidth', 'bg' => '407.webp', 'bgpos' => 'center center', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'pt' => 100, 'pb' => 140, 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-4', 'txt' => '<strong>Todo Riesgo de Montaje (TRM) o Erection All Risks (EAR)</strong>' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => 'El <strong>Seguro Todo Riesgo Montaje</strong> protege de los riesgos del trabajo de montaje, incluyendo: •Desmontaje. •Despeje y retirada de escombros en caso de siniestro inadmisible. •Contratistas, instalaciones de obra y bienes existentes. Todos estos, opcionales.' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'separador' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania8.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania7.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Icono_SegGeneral-1.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'IconoPosit_SegGeneral-2.webp' ],
                ] ],
            ] ],
        ],
    ],
    'trec' => [
        'titulo'    => 'Todo Riesgo de Maquinaria y/o Equipo de Contratista (TREC)',
        'padre'     => 'seguros-generales',
        'migas'     => true,
        'filas'     => [
            [ 'ancho' => 'fullwidth', 'bg' => '1598.webp', 'bgpos' => 'center center', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'pt' => 100, 'pb' => 140, 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-4', 'txt' => '<strong>Todo Riesgo de Maquinaria y/o Equipo de Contratista (TREC)</strong>' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => '<div class="g"> <div data-hveid="CAgQAA" data-ved="2ahUKEwiChqrUufrkAhXk01kKHeOZAgUQFSgAMAp6BAgIEAA"> <div class="rc"> <div class="s"> <div> <span class="st">El <strong>Seguro T<em>odo Riesgo de Maquinaria y/o Equipo de Contratista </em></strong>protege todas las <em>maquinarias</em> de un <em>contratista</em> frente a los eventos que pueda ocurrir durante su labor normal.' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'separador' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania8.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania7.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Icono_SegGeneral-1.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'IconoPosit_SegGeneral-2.webp' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => '</span> </div> </div> </div> </div> </div>' ],
                ] ],
            ] ],
        ],
    ],
    'sctr' => [
        'titulo'    => 'SCTR (Salud – Pension)',
        'padre'     => 'seguros-generales',
        'migas'     => true,
        'filas'     => [
            [ 'ancho' => 'fullwidth', 'bg' => '249.webp', 'bgpos' => 'center center', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'pt' => 100, 'pb' => 140, 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-4', 'txt' => '<strong>SCTR (Salud – Pension)</strong>' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => '<div class="g"> <div data-hveid="CAgQAA" data-ved="2ahUKEwiChqrUufrkAhXk01kKHeOZAgUQFSgAMAp6BAgIEAA"> <div class="rc"> <div class="s"> El<strong> Seguro Complementario de Trabajo de Riesgo (SCTR) </strong>es un SEGURO OBLIGATORIO creado por la Ley N° 26790 <strong>LEY DE MODERNIZACIÓN DE LA SEGURIDAD SOCIAL EN SALUD</strong> que brinda prestaciones de SALUD y ECONÓMICAS, a los Afiliados Regulares del Seguro Social de <b>Salud</b> que desempeñan actividades de riesgo' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'separador' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania8.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania7.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Icono_SegGeneral-1.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'IconoPosit_SegGeneral-2.webp' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => '</div> </div> </div> </div>' ],
                ] ],
            ] ],
        ],
    ],
    'accidentes-personales' => [
        'titulo'    => 'Accidentes Personales',
        'padre'     => 'seguros-generales',
        'migas'     => true,
        'filas'     => [
            [ 'ancho' => 'fullwidth', 'bg' => '814.webp', 'bgpos' => 'center center', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'pt' => 100, 'pb' => 140, 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-4', 'txt' => '<strong>Accidentes Personales</strong>' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => '<div class="g"> <div data-hveid="CAgQAA" data-ved="2ahUKEwiChqrUufrkAhXk01kKHeOZAgUQFSgAMAp6BAgIEAA"> <div class="rc"> <div class="s"> El <strong>Seguro de Accidentes Personales</strong> tiene por objeto la prestación de indemnizaciones en caso de accidentes que provoquen la muerte o incapacidad del asegurado.' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'separador' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania8.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania7.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Icono_SegGeneral-1.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'IconoPosit_SegGeneral-2.webp' ],
                ] ],
            ] ],
        ],
    ],
    'vida-ley' => [
        'titulo'    => 'Vida Ley',
        'padre'     => 'seguros-generales',
        'migas'     => true,
        'filas'     => [
            [ 'ancho' => 'fullwidth', 'bg' => '15768-1.webp', 'bgpos' => 'center center', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'pt' => 100, 'pb' => 140, 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-4', 'txt' => '<strong>Vida Ley</strong>' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => '<div class="g"> <div data-hveid="CAgQAA" data-ved="2ahUKEwiChqrUufrkAhXk01kKHeOZAgUQFSgAMAp6BAgIEAA"> <div class="rc"> <div class="s"> El <strong>Seguro de Vida Ley</strong> es aquel que debe contratar tu empleador cuando cumples 04 años en tu centro laboral, este seguro te cubre ante los riesgos de muerte natural, muerte accidental e invalidez total y permanente por accidente.' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'separador' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania8.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania7.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Icono_SegGeneral-1.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'IconoPosit_SegGeneral-2.webp' ],
                ] ],
            ] ],
        ],
    ],
    'eps' => [
        'titulo'    => 'EPS',
        'padre'     => 'seguros-generales',
        'migas'     => true,
        'filas'     => [
            [ 'ancho' => 'fullwidth', 'bg' => '339.webp', 'bgpos' => 'center center', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'pt' => 100, 'pb' => 140, 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-4', 'txt' => '<strong>EPS</strong>' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => '<div class="g"> <div data-hveid="CAgQAA" data-ved="2ahUKEwiChqrUufrkAhXk01kKHeOZAgUQFSgAMAp6BAgIEAA"> <div class="rc"> <div class="s"> Cuando ingresas a trabajar a una empresa, accedes a ciertos beneficios. Dentro de estos se encuentra tu afiliación a un<strong> seguro de salud.</strong> En este caso, cuentas con dos alternativas: puedes optar por un <strong>seguro de salud</strong> gestionado en su totalidad por <strong>EsSalud</strong> (administrado por el Estado) o puedes complementar tu atención en <strong>EsSalud</strong> con la de una <strong>EPS</strong> (seguro privado).' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'separador' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania8.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania7.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Icono_SegGeneral-1.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'IconoPosit_SegGeneral-2.webp' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => '</div> </div> </div> </div>' ],
                ] ],
            ] ],
        ],
    ],
    'oncologico' => [
        'titulo'    => 'Oncologico',
        'padre'     => 'seguros-generales',
        'migas'     => true,
        'filas'     => [
            [ 'ancho' => 'fullwidth', 'bg' => '877.webp', 'bgpos' => 'center center', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'pt' => 100, 'pb' => 140, 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-4', 'txt' => '<strong>Oncologico</strong>' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => '<div class="g"> <div data-hveid="CAgQAA" data-ved="2ahUKEwiChqrUufrkAhXk01kKHeOZAgUQFSgAMAp6BAgIEAA"> <div class="rc"> <div class="s"> <div> <span class="st">En el Perú, el cáncer es la segunda causa de muerte. Más de 25 mil peruanos fallecen al año causa de la enfermedad, el 95% de los casos de cáncer que son detectados a tiempo tienen cura. Sin embargo, más allá de las estadísticas, es primordial conocer los beneficios de contar con un <strong>Seguro Oncológico</strong> y las posibilidades que tenemos para prevenir y afrontar esta compleja enfermedad.' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'separador' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania8.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania7.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Icono_SegGeneral-1.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'IconoPosit_SegGeneral-2.webp' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => '</span> </div> </div> </div> </div> </div>' ],
                ] ],
            ] ],
        ],
    ],
    'vehicular' => [
        'titulo'    => 'Vehicular',
        'padre'     => 'seguros-generales',
        'migas'     => true,
        'filas'     => [
            [ 'ancho' => 'fullwidth', 'bg' => '17415-1.webp', 'bgpos' => 'center center', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'pt' => 100, 'pb' => 140, 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-4', 'txt' => '<strong>Vehicular</strong>' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => '<div class="g"> <div data-hveid="CAgQAA" data-ved="2ahUKEwiChqrUufrkAhXk01kKHeOZAgUQFSgAMAp6BAgIEAA"> <div class="rc"> <div class="s"> El S<b>eguro Vehicular</b> es una póliza que cubre, además de los daños a pasajeros, los daños que se han producido a tu vehículo. Es decir, entra en acción en todo tipo de accidente: robos, incendios y cualquier otro daño que sufra tu vehículo, incluyendo la pérdida total.' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'separador' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania8.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania7.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Icono_SegGeneral-1.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'IconoPosit_SegGeneral-2.webp' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => '</div> </div> </div> </div>' ],
                ] ],
            ] ],
        ],
    ],
    'soat' => [
        'titulo'    => 'SOAT DIGITAL',
        'padre'     => 'seguros-generales',
        'migas'     => true,
        'filas'     => [
            [ 'ancho' => 'fullwidth', 'bg' => '3166.webp', 'bgpos' => 'center center', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'pt' => 100, 'pb' => 140, 'items' => [
                    [ 't' => 'heading', 'size' => 'h1', 'estilo' => 'style-4', 'txt' => '<strong>SOAT DIGITAL</strong>' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => '<div class="g"> <div data-hveid="CAgQAA" data-ved="2ahUKEwiChqrUufrkAhXk01kKHeOZAgUQFSgAMAp6BAgIEAA"> <div class="rc"> <div class="s">El <strong>SOAT</strong> es un seguro obligatorio establecido por Ley con un fin netamente social. Su objetivo es asegurar la atención, de manera inmediata e incondicional, de las víctimas de accidentes de tránsito que sufren lesiones corporales y muerte.</div> <div class="s"></div> <div class="s"> El seguro en el más estricto sentido repara el daño causado al asegurado, pero en el caso del SOAT no sólo al asegurado y a los ocupantes de un vehículo, sino también a los peatones que pudieran verse afectados por un accidente de tránsito, en atención a su esencia netamente social. En el caso del SOAT el beneficiario es la sociedad en su conjunto.' ],
                ] ],
            ] ],
            [ 'ancho' => 'fullwidth', 'grid' => true, 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'separador' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania8.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Compania7.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'Icono_SegGeneral-1.webp' ],
                ] ],
                [ 'w' => '1/4', 'items' => [
                    [ 't' => 'imagen', 'src' => 'IconoPosit_SegGeneral-2.webp' ],
                ] ],
            ] ],
            [ 'ancho' => 'default', 'efecto' => 'classic', 'cols' => [
                [ 'w' => '1/1', 'items' => [
                    [ 't' => 'texto', 'html' => '</div> </div> </div> </div>' ],
                ] ],
            ] ],
        ],
    ],
];
