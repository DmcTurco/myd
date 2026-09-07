<?php
require_once __DIR__ . '/../data/noticias.php';

// Compañías para el carrusel de inicio
$companias_home = [
    ['nombre' => 'La Positiva Seguros',        'logo' => 'positiva.webp'],
    ['nombre' => 'AVLA',                       'logo' => 'avla.webp'],
    ['nombre' => 'SECREX CESCE',                'logo' => 'secrex.webp'],
    ['nombre' => 'AmTrust Insurance Spain',    'logo' => 'amtrust.webp'],
    ['nombre' => 'InSur — Partner of Atradius','logo' => 'insur-atradius.webp'],
];

// Parsear fecha al formato: día / "Mes AA"
function parseHomeDate(string $fecha): array {
    $meses = [
        'enero'=>'Ene','febrero'=>'Feb','marzo'=>'Mar','abril'=>'Abr',
        'mayo'=>'May','junio'=>'Jun','julio'=>'Jul','agosto'=>'Ago',
        'septiembre'=>'Sep','octubre'=>'Oct','noviembre'=>'Nov','diciembre'=>'Dic',
    ];
    if (preg_match('/(\d+)\s+de\s+(\w+),?\s*(\d+)/i', $fecha, $m)) {
        return [
            'dia'  => $m[1],
            'mes'  => $meses[strtolower($m[2])] ?? ucfirst(substr($m[2], 0, 3)),
            'anyo' => substr($m[3], 2),
        ];
    }
    return ['dia' => '--', 'mes' => '---', 'anyo' => '--'];
}
?>

<!-- ================================================================
     HERO — carrusel estilo mydsac.com (caja de texto rojo oscuro)
     ================================================================ -->
<div class="home-hero-block">
<section class="hero-v2">
    <div class="hero-v2__slider" id="heroSlider">

        <div class="hero-v2__slide hero-v2__slide--active" style="background-image:url('<?= asset('images/hero/inicio-1.webp') ?>')">
            <div class="hero-v2__text-box">
                <p>Experiencia, Calidad y Compromiso a la medida de las necesidades de nuestros clientes.</p>
            </div>
        </div>

        <div class="hero-v2__slide" data-bg="<?= asset('images/hero/inicio-2.webp') ?>">
            <div class="hero-v2__text-box">
                <p>Promover el éxito de nuestros clientes</p>
            </div>
        </div>

        <div class="hero-v2__slide" data-bg="<?= asset('images/hero/inicio-3.webp') ?>">
            <div class="hero-v2__text-box">
                <p>Cartas Fianza, Seguros de Caución y Seguros Generales</p>
            </div>
        </div>

        <div class="hero-v2__slide" data-bg="<?= asset('images/hero/inicio-4.webp') ?>">
            <div class="hero-v2__text-box">
                <p>Trabajamos&nbsp; de manera personalizada</p>
            </div>
        </div>

        <div class="hero-v2__slide" data-bg="<?= asset('images/hero/inicio-5.webp') ?>">
            <div class="hero-v2__text-box">
                <p>Rapidez y confiabilidad en la gestión de Fianzas</p>
            </div>
        </div>

        <div class="hero-v2__slide" data-bg="<?= asset('images/hero/inicio-6.webp') ?>">
            <div class="hero-v2__text-box">
                <p>Tener un buen respaldo es nuestra mejor garantía.</p>
            </div>
        </div>

    </div>

    <button class="hero-v2__prev" id="heroPrev" aria-label="Anterior">&#10094;</button>
    <button class="hero-v2__next" id="heroNext" aria-label="Siguiente">&#10095;</button>

    <div class="hero-v2__dots" id="heroDots">
        <button class="hero-v2__dot hero-v2__dot--active" data-idx="0"></button>
        <button class="hero-v2__dot" data-idx="1"></button>
        <button class="hero-v2__dot" data-idx="2"></button>
        <button class="hero-v2__dot" data-idx="3"></button>
        <button class="hero-v2__dot" data-idx="4"></button>
        <button class="hero-v2__dot" data-idx="5"></button>
    </div>
</section>

<!-- ================================================================
     CTA STRIP — banda azul oscuro con botón rojo
     ================================================================ -->
<div class="cta-strip">
    <div class="container cta-strip__inner">
        <p>ASESORÍA ESPECIALIZADA&nbsp; EN GESTIÓN DE FIANZAS, PÓLIZAS DE CAUCIÓN PARA OBRAS PÚBLICAS&nbsp;, PRIVADAS Y SEGUROS GENERALES</p>
        <a href="<?= page_url('contacto') ?>" class="cta-strip__btn">
            <i class="fas fa-phone"></i> CONTÁCTENOS
        </a>
    </div>
</div>
</div><!-- /.home-hero-block -->

<!-- ================================================================
     SERVICIOS ÍCONOS — 3 columnas sobre fondo gris claro
     ================================================================ -->
<div class="services-icons">
    <div class="container">
        <div class="services-icons__grid">
            <div class="services-icons__item">
                <i class="fas fa-pencil-alt"></i>
                <p>Gestión para apertura y aumento de línea de crédito para las cartas fianzas y/o pólizas de caucion para obras, servicios o suministros públicos y privados.</p>
            </div>
            <div class="services-icons__item">
                <i class="fas fa-file-alt"></i>
                <p>Garantizamos la aprobacion de sus cartas fianza en tiempo reducido</p>
            </div>
            <div class="services-icons__item">
                <i class="fas fa-paperclip"></i>
                <p>Rapidez y confiabilidad en la preaprobacion de lineas fianzas</p>
            </div>
            <div class="services-icons__item">
                <i class="fas fa-paperclip"></i>
                <p>Apertura de lineas de fianzas en las principales compañias de seguros y el crecimiento de las mismas a corto plazo</p>
            </div>
        </div>
    </div>
</div>

<!-- ================================================================
     CONTENIDO PRINCIPAL — Últimas Noticias | Compañías
     ================================================================ -->
<div class="home-content">
    <div class="container home-content__inner">

        <!-- ── Últimas Noticias ── -->
        <!-- <div class="home-news">
            <div class="home-section-head"><h3 class="home-section-title">Últimas Noticias</h3></div>

            <?php foreach (array_slice($noticias, 0, 3) as $noticia):
                $d = parseHomeDate($noticia['fecha']);
            ?>
            <div class="home-news__item">
                <div class="home-news__date">
                    <span class="home-news__day"><?= htmlspecialchars($d['dia']) ?></span>
                    <span class="home-news__my"><?= htmlspecialchars($d['mes'] . ' ' . $d['anyo']) ?></span>
                </div>
                <div class="home-news__body">
                    <h4><a href="<?= noticia_url($noticia) ?>"><?= htmlspecialchars($noticia['titulo']) ?></a></h4>
                    <p><?= htmlspecialchars(mb_substr($noticia['resumen'], 0, 100)) ?>...</p>
                </div>
            </div>
            <?php endforeach; ?>
        </div> -->

        <!-- ── Compañías (carrusel) ── -->
        <div class="home-companies">
            <div class="home-section-head"><h3 class="home-section-title">Aseguradoras</h3></div>

            <div class="comp-carousel">
                <div class="comp-carousel__track" id="compTrack">
                    <?php foreach ($companias_home as $idx => $c): ?>
                    <div class="comp-carousel__slide<?= $idx === 0 ? ' comp-carousel__slide--active' : '' ?>">
                        <img src="<?= asset('images/partners/' . $c['logo']) ?>"
                             alt="<?= htmlspecialchars($c['nombre']) ?>"
                             onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                        <span class="comp-carousel__name" style="display:none;"><?= htmlspecialchars($c['nombre']) ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="comp-carousel__dots" id="compDots">
                    <?php foreach ($companias_home as $idx => $c): ?>
                    <button class="comp-carousel__dot<?= $idx === 0 ? ' comp-carousel__dot--active' : '' ?>"
                            data-idx="<?= $idx ?>"
                            aria-label="<?= htmlspecialchars($c['nombre']) ?>"></button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</div>
