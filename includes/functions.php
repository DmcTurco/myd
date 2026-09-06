<?php
/**
 * Marca el item activo del menu. Con URLs limpias ya no existe ?page=, asi
 * que index.php deja la pagina resuelta en $GLOBALS['page'].
 */
function active_page(string $page): string {
    $current = $GLOBALS['page'] ?? ($_GET['page'] ?? 'home');
    return $current === $page ? 'active' : '';
}

function asset(string $path): string {
    return SITE_URL . '/assets/' . ltrim($path, '/');
}

/**
 * Igual que asset(), pero agrega ?v=<fecha de modificacion> para que el
 * navegador no sirva CSS/JS cacheado despues de editarlo.
 */
function asset_v(string $path): string {
    $file = __DIR__ . '/../assets/' . ltrim($path, '/');
    $url  = asset($path);
    return is_file($file) ? $url . '?v=' . filemtime($file) : $url;
}

/**
 * URL publica de una pagina. Devuelve las rutas limpias del sitio original
 * (/nosotros/, /servicios/, ...). El mapa vive en config/rutas.php.
 */
function page_url(string $page): string {
    static $mapa = null;
    if ($mapa === null) {
        require __DIR__ . '/../config/rutas.php';
        $mapa = $paginas_rutas;
    }
    $ruta = $mapa[$page] ?? null;
    if ($ruta === null)  { return SITE_URL . '/index.php?page=' . urlencode($page); }
    if ($ruta === '')    { return SITE_URL . '/'; }
    return SITE_URL . '/' . $ruta . '/';
}

/** URL publica de una ficha de servicio o seguro */
function servicio_url(string $slug): string {
    static $mapa = null;
    if ($mapa === null) {
        require __DIR__ . '/../config/rutas.php';
        $mapa = $servicios_rutas;
    }
    $ruta = $mapa[$slug] ?? null;
    return $ruta === null
        ? SITE_URL . '/index.php?page=servicio&s=' . urlencode($slug)
        : SITE_URL . '/' . $ruta . '/';
}

/** URL publica de una noticia: /2017/11/20/la-positiva/ */
function noticia_url(array $noticia): string {
    return !empty($noticia['ruta'])
        ? SITE_URL . '/' . $noticia['ruta'] . '/'
        : SITE_URL . '/index.php?page=noticias&id=' . (int)$noticia['id'];
}

function sanitize(string $input): string {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

function redirect(string $url): void {
    header('Location: ' . $url);
    exit;
}
