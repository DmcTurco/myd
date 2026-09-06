<?php
/**
 * Prueba de envio. Se ejecuta SOLO desde la consola, no por la web:
 *
 *     cd C:\xampp\htdocs\MYD
 *     C:\xampp\php\php.exe _tools\probar-correo.php
 *
 * Si algo falla, pon 'depurar' => true en config/mail.php y vuelve a
 * ejecutarlo: la conversacion completa con el servidor queda en
 * _logs/smtp.log.
 */

if (PHP_SAPI !== 'cli') {
    http_response_code(404);
    exit;
}

$_SERVER['HTTP_HOST']     = 'mydsac.com';
$_SERVER['DOCUMENT_ROOT'] = dirname(__DIR__);
$_SERVER['REMOTE_ADDR']   = '127.0.0.1';

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/mailer.php';

$cfg = mail_config();
if ($cfg === null) {
    fwrite(STDERR, "No hay credenciales todavia.\n"
        . "Copia config/mail.example.php a config/mail.php y rellena host, user y pass.\n");
    exit(1);
}

echo "Servidor : {$cfg['host']}:{$cfg['port']} ({$cfg['cifra']})\n";
echo "Usuario  : {$cfg['user']}\n";
echo "Para     : " . implode(', ', (array) $cfg['para']) . "\n\n";
echo "Enviando...\n";

[$ok, $motivo] = enviar_contacto([
    'nombre'   => 'Prueba de la web',
    'email'    => $cfg['desde'],
    'telefono' => '999 999 999',
    'asunto'   => 'Prueba de configuración',
    'mensaje'  => "Si lees esto, el formulario de contacto ya envía correo.\n"
                . 'Generado el ' . date('d/m/Y H:i') . '.',
]);

if ($ok) {
    echo "OK. Revisa la bandeja de " . implode(', ', (array) $cfg['para']) . "\n";
    echo "Si no aparece en unos minutos, mira tambien la carpeta de spam.\n";
    exit(0);
}

fwrite(STDERR, "FALLO: $motivo\n");
exit(1);
