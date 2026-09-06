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

Todo lo demás sí va: `index.php`, `.htaccess`, `assets/`, `config/`, `data/`, `includes/`, `pages/`, `actions/`.

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
- Para el formulario de contacto: la función `mail()` habilitada, o cambiar
  `actions/contact.php` por un envío por SMTP.

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
- Enviar el formulario de contacto y verificar que llega el correo.
