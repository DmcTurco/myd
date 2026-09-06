# Subir a producción

## 1. Qué subir

Todo el proyecto **menos** estas carpetas y archivos:

| No subir | Por qué |
|---|---|
| `mydsac.com-*.wpress` | El respaldo de WordPress, 246 MB. Es la fuente del contenido, pero no tiene nada que hacer en el servidor. |
| `_wp_import/` | Imágenes ya copiadas a `assets/images/`. |
| `_backup/` | Copias de los archivos anteriores a cada cambio. |
| `.git/` | Historial del repositorio. |
| `DESPLIEGUE.md` | Esta nota. |
| `_logs/` | Los mensajes que se han enviado desde tu equipo. En el servidor se crea sola. |
| `_tools/` | Script de prueba del correo, solo para consola. |

Todo lo demás sí va: `index.php`, `.htaccess`, `assets/`, `config/`, `data/`,
`includes/`, `pages/`, `actions/` y `vendor/`.

**Importante**: `config/mail.php` no está en el repositorio (lleva la contraseña
del buzón). Súbelo por FTP a mano, o créalo en el servidor copiando
`config/mail.example.php`. Ver el punto 4.

## 2. Activar HTTPS y el dominio sin www

En `.htaccess`, **descomenta** las cuatro líneas del bloque 1 (las que empiezan por
`RewriteCond %{HTTPS}` y `RewriteCond %{HTTP_HOST} ^www\.`). Están comentadas para
que el sitio siga funcionando en `localhost`.

Cuando confirmes que todo carga por https sin avisos de contenido mixto, descomenta
también la línea de `Strict-Transport-Security` en el bloque 4.

## 3. La URL del sitio se detecta sola

`config/config.php` calcula `SITE_URL` a partir del dominio y de la carpeta donde
esté instalado, así que **no hay que tocar nada** al pasar de `localhost/MYD` a
`mydsac.com`. Si prefieres fijarla a mano, reemplaza ese bloque por:

```php
define('SITE_URL', 'https://mydsac.com');
```

## 4. Requisitos del servidor

- PHP 7.4 o superior.
- Apache con `mod_rewrite` activo (imprescindible: sin él no funcionan las URLs limpias).
- Recomendables pero opcionales: `mod_headers`, `mod_deflate`, `mod_expires`. Si no
  están, el `.htaccess` los ignora sin romper nada.
- Para el formulario de contacto: salida SMTP permitida (puerto 465 o 587) y
  las extensiones `openssl` y `mbstring`, que vienen activas por defecto en
  casi todos los hosting.

## 4 bis. El correo del formulario

El formulario envía por **SMTP autenticado** con PHPMailer (incluido en
`vendor/PHPMailer/`, sin Composer). Se hace así y no con la función `mail()` de
PHP porque un correo que sale sin autenticar desde el servidor no cuadra con el
SPF del dominio y acaba en la carpeta de spam.

**Qué falta por hacer:**

1. Pide al hosting los datos de correo saliente del buzón `informes@mydsac.com`.
   En el panel suelen estar como *Configuración del cliente de correo*. Necesitas
   servidor, puerto y contraseña.
2. Copia `config/mail.example.php` a `config/mail.php` y rellénalo. Lo habitual:

   ```php
   'host'  => 'mail.mydsac.com',
   'port'  => 465,      // 465 con 'ssl', 587 con 'tls'
   'cifra' => 'ssl',
   'user'  => 'informes@mydsac.com',
   'pass'  => '...',
   ```

3. Pruébalo desde la consola, sin pasar por el navegador:

   ```
   cd C:\xampp\htdocs\MYD
   C:\xampp\php\php.exe _tools\probar-correo.php
   ```

   Si falla, pon `'depurar' => true` en `config/mail.php` y vuelve a ejecutarlo:
   la conversación completa con el servidor queda en `_logs/smtp.log`.

**Detalles que ya están resueltos:**

- El remitente (`From`) es la dirección del propio dominio y el `Reply-To` es el
  del visitante, así que al responder el correo se le contesta a él.
- **Cada mensaje se guarda en `_logs/contacto.log` antes de intentar enviarlo.**
  Si el SMTP se cae, la consulta no se pierde: está en ese archivo.
- Si el envío falla, al visitante se le muestra el correo y el teléfono de la
  empresa en lugar de un error seco.
- Anti-spam: campo trampa oculto, token de sesión y un envío cada 30 segundos
  por visitante.
- `_logs/`, `config/` y `vendor/` devuelven 404 por web.

## 5. Las direcciones se conservan

Las URLs son las mismas que las del sitio original, así que los enlaces y el
posicionamiento que ya existen se mantienen:

- `/`, `/nosotros/`, `/servicios/`, `/clientes/`, `/companias/`, `/socios/`, `/noticias/`, `/contacto/`
- `/carta-fianza-y-seguros-de-caucion/`, `/gestion-de-seguros-generales/`, `/trc/`, `/trm/`, `/trec/`, `/sctr/`, `/accidentes-personales/`, `/vida-ley/`, `/eps/`, `/oncologico/`, `/vehicular/`, `/soat/`
- Noticias: `/2017/11/20/la-positiva/` y equivalentes.

El mapa vive en `config/rutas.php`. Para agregar una página nueva basta con
añadirla ahí.

## 6. Después de subir, comprobar

- La home y las ocho secciones del menú.
- Un par de fichas del desplegable de Servicios (por ejemplo `/trc/` y `/soat/`).
- El detalle de una noticia (`/2017/11/20/la-positiva/`).
- Una dirección inventada: debe devolver la página de error, no un listado.
- Que `/config/config.php` y `/data/noticias.php` respondan 404.
- Enviar el formulario de contacto y verificar que llega el correo a
  `informes@mydsac.com` (mira también la carpeta de spam la primera vez).
- Que `/config/mail.php`, `/_logs/contacto.log` y `/vendor/` respondan 404.
