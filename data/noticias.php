<?php
/**
 * Noticias — contenido extraído VERBATIM del respaldo de WordPress de mydsac.com
 * (mydsac.com-20260901-173210-129.wpress → database.sql → tabla posts).
 *
 * Cada entrada conserva el título, el texto y la fecha exactos del sitio original,
 * en el mismo orden cronológico inverso en que aparecen en https://mydsac.com/noticias/
 *
 * Las imágenes (assets/images/noticias/*.webp) son las imágenes destacadas reales
 * del backup (uploads/2017/09/video1..9.jpg, convertidas a WebP), renombradas.
 *
 * Nota: los videos de YouTube del sitio original están actualmente en privado,
 * por eso se muestra la miniatura con botón de play que enlaza a YouTube en vez
 * de incrustar un reproductor que diría "Video no disponible".
 *
 * Se omite un post duplicado del WordPress original (ID 3084, "Supuestos excluidos…"
 * repetido con el texto equivocado del post de "Principios").
 */
$noticias = [
    [
        'id'          => 1,
        'wp_id'       => 3099,
        'slug'        => 'la-positiva',
        'ruta'        => '2017/11/20/la-positiva',   // permalink del sitio original
        'titulo'      => 'LA POSITIVA',
        'resumen'     => 'Nuestro objetivo es acercar el seguro a todos los peruanos para que tengan una vida más positiva. La Positiva Seguros. Siempre positivos, siempre para todos.',
        'contenido'   => '<p>Nuestro objetivo es acercar el seguro a todos los peruanos para que tengan una vida más positiva. La Positiva Seguros. Siempre positivos, siempre para todos.</p>',
        'imagen'      => 'noticias/positiva.webp',
        'video'       => 'https://www.youtube.com/watch?v=GFjOIzj5Y6s',
        'fecha'       => '20 de noviembre, 2017',
        'fecha_larga' => 'noviembre 20, 2017',
        'autor'       => 'mydsac',
        'categoria'   => 'M&D',
        'comentarios' => 0,
    ],
    [
        'id'          => 2,
        'wp_id'       => 3096,
        'slug'        => 'avla',
        'ruta'        => '2017/11/20/avla',   // permalink del sitio original
        'titulo'      => 'AVLA',
        'resumen'     => 'AVLA es una compañía de servicios financieros pionera en ofrecer soluciones integrales en Latinoamérica a través de Garantías Financieras, Garantías Técnicas y soluciones de Financiamiento.',
        'contenido'   => '<p>AVLA es una compañía de servicios financieros pionera en ofrecer soluciones integrales en Latinoamérica a través de Garantías Financieras, Garantías Técnicas y soluciones de Financiamiento.</p>',
        'imagen'      => 'noticias/avla.webp',
        'video'       => 'https://www.youtube.com/watch?v=8YksA8UFtMY',
        'fecha'       => '20 de noviembre, 2017',
        'fecha_larga' => 'noviembre 20, 2017',
        'autor'       => 'mydsac',
        'categoria'   => 'M&D',
        'comentarios' => 0,
    ],
    [
        'id'          => 3,
        'wp_id'       => 3093,
        'slug'        => 'secrex',
        'ruta'        => '2017/11/20/secrex',   // permalink del sitio original
        'titulo'      => 'SECREX',
        'resumen'     => 'EXPORTADOR DE LA SEMANA: Secrex Cesce',
        'contenido'   => '<p>EXPORTADOR DE LA SEMANA: Secrex Cesce</p>',
        'imagen'      => 'noticias/secrex.webp',
        'video'       => 'https://www.youtube.com/watch?v=BV5vLpdNpO4',
        'fecha'       => '20 de noviembre, 2017',
        'fecha_larga' => 'noviembre 20, 2017',
        'autor'       => 'mydsac',
        'categoria'   => 'M&D',
        'comentarios' => 0,
    ],
    [
        'id'          => 4,
        'wp_id'       => 3090,
        'slug'        => 'fogapi',
        'ruta'        => '2017/11/20/fogapi',   // permalink del sitio original
        'titulo'      => 'FOGAPI',
        'resumen'     => 'FOGAPI acompaño con garantías a más de 100 mil MYPES.',
        'contenido'   => '<p>FOGAPI acompaño con garantías a más de 100 mil MYPES.</p>',
        'imagen'      => 'noticias/fogapi.webp',
        'video'       => 'https://www.youtube.com/watch?v=mR0xQRmDBo8',
        'fecha'       => '20 de noviembre, 2017',
        'fecha_larga' => 'noviembre 20, 2017',
        'autor'       => 'mydsac',
        'categoria'   => 'M&D',
        'comentarios' => 0,
    ],
    [
        'id'          => 5,
        'wp_id'       => 3087,
        'slug'        => 'principios-de-la-nueva-ley-de-contrataciones-del-estado-30225',
        'ruta'        => '2017/09/25/principios-de-la-nueva-ley-de-contrataciones-del-estado-30225',   // permalink del sitio original
        'titulo'      => 'Principios de la Nueva Ley de Contrataciones del Estado 30225',
        'resumen'     => 'Carlos Rivera, capacitador del OSCE nos explica los Principios contemplados en la Nueva Ley de Contrataciones del Estado N°30225',
        'contenido'   => '<p>Carlos Rivera, capacitador del OSCE nos explica los Principios contemplados en la Nueva Ley de Contrataciones del Estado N°30225</p>',
        'imagen'      => 'noticias/ley-30225.webp',
        'video'       => 'https://www.youtube.com/watch?v=II2G_fnMqqs',
        'fecha'       => '25 de septiembre, 2017',
        'fecha_larga' => 'septiembre 25, 2017',
        'autor'       => 'mydsac',
        'categoria'   => 'M&D',
        'comentarios' => 0,
    ],
    [
        'id'          => 6,
        'wp_id'       => 3081,
        'slug'        => 'supuestos-excluidos-del-ambito-de-aplicacion-de-la-ley-de-contrataciones-n30225',
        'ruta'        => '2017/09/25/supuestos-excluidos-del-ambito-de-aplicacion-de-la-ley-de-contrataciones-n30225',   // permalink del sitio original
        'titulo'      => 'Supuestos excluidos del ámbito de aplicación de la Ley de Contrataciones N°30225',
        'resumen'     => 'Dr.Héctor Inga, capacitador del OSCE nos explica los Supuestos Excluidos del Ámbito de Aplicación de la Ley de Contrataciones del Estado N°30225',
        'contenido'   => '<p>Dr.Héctor Inga, capacitador del OSCE nos explica los Supuestos Excluidos del Ámbito de Aplicación de la Ley de Contrataciones del Estado N°30225</p>',
        'imagen'      => 'noticias/supuestos-excluidos.webp',
        'video'       => 'https://www.youtube.com/watch?v=4K7zCnIVBCE',
        'fecha'       => '25 de septiembre, 2017',
        'fecha_larga' => 'septiembre 25, 2017',
        'autor'       => 'mydsac',
        'categoria'   => 'M&D',
        'comentarios' => 0,
    ],
    [
        'id'          => 7,
        'wp_id'       => 3078,
        'slug'        => 'impedimentos-para-vender-al-estado',
        'ruta'        => '2017/09/25/impedimentos-para-vender-al-estado',   // permalink del sitio original
        'titulo'      => 'Impedimentos para Vender al Estado',
        'resumen'     => 'Luis Bossano, capacitador del OSCE nos explica los Impedimentos para Vender al Estado, de acuerdo a la Ley de Contrataciones del Estado N°30225.',
        'contenido'   => '<p>Luis Bossano, capacitador del OSCE nos explica los Impedimentos para Vender al Estado, de acuerdo a la Ley de Contrataciones del Estado N°30225.</p>',
        'imagen'      => 'noticias/impedimentos-estado.webp',
        'video'       => 'https://www.youtube.com/watch?v=Fxss1hlrHtM',
        'fecha'       => '25 de septiembre, 2017',
        'fecha_larga' => 'septiembre 25, 2017',
        'autor'       => 'mydsac',
        'categoria'   => 'M&D',
        'comentarios' => 0,
    ],
    [
        'id'          => 8,
        'wp_id'       => 3074,
        'slug'        => 'sctr',
        'ruta'        => '2017/09/25/sctr',   // permalink del sitio original
        'titulo'      => 'SCTR',
        'resumen'     => '¿Qué es el Seguro Complementario de Trabajo de Riesgo? SCTR',
        'contenido'   => '<h2>¿Qué es el Seguro Complementario de Trabajo de Riesgo? SCTR</h2>',
        'imagen'      => 'noticias/sctr.webp',
        'video'       => 'https://www.youtube.com/watch?v=eCNYbEJDyBk',
        'fecha'       => '25 de septiembre, 2017',
        'fecha_larga' => 'septiembre 25, 2017',
        'autor'       => 'mydsac',
        'categoria'   => 'M&D',
        'comentarios' => 0,
    ],
];
