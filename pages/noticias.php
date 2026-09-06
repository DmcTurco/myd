<?php require_once __DIR__ . '/../data/noticias.php'; ?>

<!-- ===== PAGE HERO ===== -->
<section class="page-hero" style="background-image:linear-gradient(135deg, var(--navy), var(--navy-dark))">
    <div class="page-hero__overlay"></div>
    <div class="container page-hero__content">
        <h1>Noticias</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?= page_url('home') ?>">Inicio</a></li>
                <li>Noticias</li>
            </ol>
        </nav>
    </div>
</section>

<?php
// Detalle de noticia
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$noticia_actual = null;
if ($id > 0) {
    foreach ($noticias as $n) {
        if ($n['id'] === $id) { $noticia_actual = $n; break; }
    }
}

if ($noticia_actual):
?>

<!-- ===== DETALLE DE NOTICIA (layout mydsac.com) ===== -->
<section class="section">
    <div class="container">
        <article class="post post--single">

            <a class="post__media" href="<?= htmlspecialchars($noticia_actual['video']) ?>"
               target="_blank" rel="noopener"
               title="Ver el video en YouTube"
               style="background-image:url('<?= asset('images/' . $noticia_actual['imagen']) ?>')">
                <span class="post__badge"><i class="fas fa-video"></i></span>
            </a>

            <p class="post__date"><?= htmlspecialchars($noticia_actual['fecha_larga']) ?></p>
            <h1 class="post__title"><?= htmlspecialchars($noticia_actual['titulo']) ?></h1>

            <div class="post__body">
                <?= $noticia_actual['contenido'] ?>
            </div>

            <div class="post__meta">
                <span><i class="fas fa-user"></i> <?= htmlspecialchars($noticia_actual['autor']) ?></span>
                <span><i class="fas fa-tags"></i> <?= htmlspecialchars($noticia_actual['categoria']) ?></span>
                <span><i class="fas fa-comment"></i> <?= (int)$noticia_actual['comentarios'] ?> Comment</span>
            </div>

            <div class="post__back">
                <a href="<?= page_url('noticias') ?>" class="btn btn--outline-dark">
                    <i class="fas fa-arrow-left"></i> Volver a noticias
                </a>
            </div>
        </article>
    </div>
</section>

<?php else: ?>

<!-- ===== LISTADO DE NOTICIAS (layout mydsac.com) ===== -->
<section class="section">
    <div class="container">
        <div class="post-list">
            <?php foreach ($noticias as $n): ?>
            <article class="post">

                <a class="post__media" href="<?= page_url('noticias') ?>&amp;id=<?= $n['id'] ?>"
                   style="background-image:url('<?= asset('images/' . $n['imagen']) ?>')">
                    <span class="post__badge"><i class="fas fa-video"></i></span>
                </a>

                <p class="post__date"><?= htmlspecialchars($n['fecha_larga']) ?></p>

                <h2 class="post__title">
                    <a href="<?= page_url('noticias') ?>&amp;id=<?= $n['id'] ?>"><?= htmlspecialchars($n['titulo']) ?></a>
                </h2>

                <p class="post__excerpt"><?= htmlspecialchars($n['resumen']) ?></p>

                <div class="post__meta">
                    <span><i class="fas fa-user"></i> <?= htmlspecialchars($n['autor']) ?></span>
                    <span><i class="fas fa-tags"></i> <?= htmlspecialchars($n['categoria']) ?></span>
                    <span><i class="fas fa-comment"></i> <?= (int)$n['comentarios'] ?> Comment</span>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php endif; ?>
