<?php
/**
 * Procesa el formulario de contacto.
 *
 * Guarda SIEMPRE el mensaje en _logs/contacto.log antes de intentar el envio,
 * asi que aunque el SMTP falle no se pierde ninguna consulta.
 */
session_start();

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/mailer.php';

/** Vuelve al formulario conservando lo escrito y el aviso que toque. */
function volver(string $estado, array $datos = [], array $errores = []): void
{
    $_SESSION['contacto'] = ['estado' => $estado, 'datos' => $datos, 'errores' => $errores];
    redirect(page_url('contacto') . '#contacto-form');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect(page_url('contacto'));
    exit;
}

// Trampa para robots: el campo va oculto, una persona nunca lo rellena.
if (!empty($_POST['website'])) {
    volver('ok');
}

// Token de sesion, para que el formulario solo se pueda enviar desde la web
if (empty($_POST['token']) || empty($_SESSION['token']) || !hash_equals($_SESSION['token'], $_POST['token'])) {
    volver('error', [], ['La sesión caducó. Vuelve a enviar el mensaje.']);
}

// Un envio cada 30 segundos por visitante
$ahora = time();
if (!empty($_SESSION['ultimo_envio']) && ($ahora - $_SESSION['ultimo_envio']) < 30) {
    volver('error', [], ['Espera unos segundos antes de enviar otro mensaje.']);
}

$datos = [
    'nombre'   => sanitize($_POST['nombre']   ?? ''),
    'email'    => sanitize($_POST['email']    ?? ''),
    'telefono' => sanitize($_POST['telefono'] ?? ''),
    'asunto'   => sanitize($_POST['asunto']   ?? ''),
    'mensaje'  => sanitize($_POST['mensaje']  ?? ''),
];

$errores = [];
if (mb_strlen($datos['nombre']) < 3) {
    $errores['nombre'] = 'Escribe tu nombre completo.';
}
if (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
    $errores['email'] = 'El correo no parece válido.';
}
if ($datos['asunto'] === '') {
    $errores['asunto'] = 'Indica el asunto.';
}
if (mb_strlen($datos['mensaje']) < 10) {
    $errores['mensaje'] = 'Cuéntanos un poco más (mínimo 10 caracteres).';
}

if ($errores) {
    volver('error', $datos, $errores);
}

// Se guarda antes de enviar: si el correo falla, la consulta no se pierde
mail_log('contacto.log', json_encode(
    $datos + ['ip' => $_SERVER['REMOTE_ADDR'] ?? '?'],
    JSON_UNESCAPED_UNICODE
));

[$enviado, $motivo] = enviar_contacto($datos);

$_SESSION['ultimo_envio'] = $ahora;
unset($_SESSION['token']);

if ($enviado) {
    volver('ok');
}

mail_log('contacto.log', 'FALLO AL ENVIAR: ' . $motivo);
volver('fallo', $datos);
