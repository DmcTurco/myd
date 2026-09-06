<?php
function active_page(string $page): string {
    $current = $_GET['page'] ?? 'home';
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

function page_url(string $page): string {
    return SITE_URL . '/index.php?page=' . $page;
}

function sanitize(string $input): string {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

function redirect(string $url): void {
    header('Location: ' . $url);
    exit;
}
