<?php
define('SITE_NAME',    'M&D Asesoria Financiera');
/**
 * SITE_URL se detecta sola: asi el mismo codigo sirve en localhost/MYD y en
 * el dominio de produccion sin tocar nada. Para fijarla a mano, reemplaza
 * todo este bloque por:  define('SITE_URL', 'https://mydsac.com');
 */
if (!defined('SITE_URL')) {
    $esquema = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https') ? 'https' : 'http';
    $host    = $_SERVER['HTTP_HOST'] ?? 'localhost';
    // Carpeta desde la que se sirve el sitio ('' cuando esta en la raiz del
    // dominio). Se calcula comparando la raiz del proyecto con el DOCUMENT_ROOT,
    // asi da igual desde que script se cargue este archivo.
    $raiz    = str_replace('\\', '/', dirname(__DIR__));
    $docroot = str_replace('\\', '/', rtrim(realpath($_SERVER['DOCUMENT_ROOT'] ?? ''), '/\\'));
    $base    = ($docroot && strpos($raiz, $docroot) === 0) ? substr($raiz, strlen($docroot)) : '';
    define('SITE_URL', $esquema . '://' . $host . rtrim($base, '/'));
}
define('SITE_EMAIL',   'informes@mydsac.com');
define('SITE_PHONE',   '+51 981 535 709');
define('SITE_PHONE_2',   '+51 959 434 748');
define('SITE_ADDRESS', 'Av. Benavides 1238 Of. 602, Miraflores, Lima');
define('SITE_ADDRESS_2', 'Av. Ramon Mujica 108 Of. 405, Piura, Piura');
define('SITE_HOURS',   'Lunes a Viernes de 8:30 am a 5:00 pm');

// Mail (configura con tu servidor SMTP real)
define('MAIL_FROM',    'noreply@mydsac.com');
define('MAIL_TO',      'informes@mydsac.com');

// Redes sociales
define('SOCIAL_FB',    '#');
define('SOCIAL_LI',    '#');
define('SOCIAL_TW',    '#');
