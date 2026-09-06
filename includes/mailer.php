<?php
/**
 * Envio de correo por SMTP con PHPMailer.
 *
 * PHPMailer va incluido en /vendor/PHPMailer (tres archivos, sin Composer).
 * Las credenciales viven en config/mail.php, que no se sube al repositorio.
 */

require_once __DIR__ . '/../vendor/PHPMailer/Exception.php';
require_once __DIR__ . '/../vendor/PHPMailer/PHPMailer.php';
require_once __DIR__ . '/../vendor/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/**
 * Lee config/mail.php. Devuelve null si todavia no existe o esta a medias.
 */
function mail_config(): ?array
{
    static $cfg = false;
    if ($cfg !== false) {
        return $cfg;
    }

    $ruta = __DIR__ . '/../config/mail.php';
    $cfg  = is_file($ruta) ? require $ruta : null;

    if (!is_array($cfg) || empty($cfg['host']) || empty($cfg['user']) || empty($cfg['pass'])) {
        $cfg = null;
    }
    return $cfg;
}

/**
 * Deja una linea en _logs/. Nunca revienta la peticion si no puede escribir.
 */
function mail_log(string $archivo, string $texto): void
{
    $dir = __DIR__ . '/../_logs';
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
    @file_put_contents(
        $dir . '/' . $archivo,
        '[' . date('Y-m-d H:i:s') . '] ' . $texto . "\n",
        FILE_APPEND | LOCK_EX
    );
}

/**
 * Envia el mensaje del formulario de contacto.
 *
 * @param array $d  nombre, email, telefono, asunto, mensaje
 * @return array [bool $ok, string $motivo]  El motivo solo se usa para el log.
 */
function enviar_contacto(array $d): array
{
    $cfg = mail_config();
    if ($cfg === null) {
        return [false, 'config/mail.php no existe o le faltan host/user/pass'];
    }

    $asunto_limpio = trim($d['asunto']) !== '' ? trim($d['asunto']) : 'Consulta desde la web';

    // Texto plano, por si el lector no muestra HTML
    $texto = "Nuevo mensaje desde el formulario de mydsac.com\n\n"
           . 'Nombre:   ' . $d['nombre']   . "\n"
           . 'Email:    ' . $d['email']    . "\n"
           . 'Telefono: ' . ($d['telefono'] !== '' ? $d['telefono'] : '(no indicado)') . "\n"
           . 'Asunto:   ' . $asunto_limpio . "\n\n"
           . "Mensaje:\n" . $d['mensaje'] . "\n\n"
           . '---' . "\n"
           . 'Enviado el ' . date('d/m/Y H:i') . " desde " . SITE_URL . "\n"
           . 'IP: ' . ($_SERVER['REMOTE_ADDR'] ?? '?') . "\n";

    $e = fn($v) => htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
    $html = '<div style="font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#333;">'
          . '<h2 style="font-family:Arial;color:#0d4772;margin:0 0 16px;">Nuevo mensaje desde la web</h2>'
          . '<table cellpadding="6" cellspacing="0" style="border-collapse:collapse;">'
          . '<tr><td style="color:#888;">Nombre</td><td><strong>'   . $e($d['nombre'])   . '</strong></td></tr>'
          . '<tr><td style="color:#888;">Email</td><td><a href="mailto:' . $e($d['email']) . '">' . $e($d['email']) . '</a></td></tr>'
          . '<tr><td style="color:#888;">Teléfono</td><td>'         . $e($d['telefono'] !== '' ? $d['telefono'] : '(no indicado)') . '</td></tr>'
          . '<tr><td style="color:#888;">Asunto</td><td>'           . $e($asunto_limpio) . '</td></tr>'
          . '</table>'
          . '<p style="margin:16px 0 6px;color:#888;">Mensaje</p>'
          . '<div style="border-left:3px solid #50adef;padding-left:12px;white-space:pre-wrap;">' . $e($d['mensaje']) . '</div>'
          . '<p style="margin-top:20px;font-size:12px;color:#aaa;">Enviado el ' . date('d/m/Y H:i') . ' desde ' . $e(SITE_URL) . '</p>'
          . '</div>';

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = $cfg['host'];
        $mail->Port       = (int) $cfg['port'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $cfg['user'];
        $mail->Password   = $cfg['pass'];
        $mail->CharSet    = 'UTF-8';
        $mail->Timeout    = 15;

        if (($cfg['cifra'] ?? '') === 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        } elseif (($cfg['cifra'] ?? '') === 'tls') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        } else {
            $mail->SMTPSecure  = false;
            $mail->SMTPAutoTLS = false;
        }

        if (!empty($cfg['depurar'])) {
            $mail->SMTPDebug   = SMTP::DEBUG_SERVER;
            $mail->Debugoutput = fn($str) => mail_log('smtp.log', rtrim($str));
        }

        // El remitente tiene que ser del propio dominio; la respuesta va al visitante
        $mail->setFrom($cfg['desde'], $cfg['desde_nombre'] ?? 'Web');
        $mail->addReplyTo($d['email'], $d['nombre']);
        foreach ((array) ($cfg['para'] ?? []) as $destino) {
            $mail->addAddress($destino);
        }
        foreach ((array) ($cfg['cco'] ?? []) as $copia) {
            $mail->addBCC($copia);
        }

        $mail->Subject = 'Web MyDSAC: ' . $asunto_limpio;
        $mail->isHTML(true);
        $mail->Body    = $html;
        $mail->AltBody = $texto;

        $mail->send();
        return [true, 'ok'];
    } catch (Exception $ex) {
        return [false, $mail->ErrorInfo ?: $ex->getMessage()];
    }
}
