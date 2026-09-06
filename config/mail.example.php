<?php
/**
 * CREDENCIALES DEL CORREO
 * -----------------------
 * 1. Copia este archivo como  config/mail.php
 * 2. Rellena los valores con los datos del buzon informes@mydsac.com.
 * 3. NO subas config/mail.php al repositorio (ya esta en .gitignore).
 *
 * Los datos te los da el panel del hosting: normalmente aparecen como
 * "Configuracion del cliente de correo" o "Mail client manual settings".
 * Casi siempre son:  host = mail.mydsac.com, puerto 465 (SSL) o 587 (TLS),
 * usuario = la direccion completa, contrasena = la del buzon.
 */
return [
    // Servidor de salida (SMTP)
    'host'   => 'mail.mydsac.com',
    'port'   => 465,          // 465 con 'ssl'  |  587 con 'tls'
    'cifra'  => 'ssl',        // 'ssl' | 'tls' | '' (sin cifrado, no recomendado)
    'user'   => 'informes@mydsac.com',
    'pass'   => 'PON-AQUI-LA-CONTRASENA',

    // De quien sale el correo. Tiene que ser una direccion del propio dominio,
    // si no los servidores lo marcan como spam.
    'desde'        => 'informes@mydsac.com',
    'desde_nombre' => 'Web MyDSAC',

    // A quien llega. Puede ser mas de uno.
    'para' => ['informes@mydsac.com'],

    // Copia oculta, opcional. Ej: ['gerencia@mydsac.com']
    'cco'  => [],

    // Ponlo en true solo para depurar: escribe la conversacion con el
    // servidor SMTP en _logs/smtp.log
    'depurar' => false,
];
