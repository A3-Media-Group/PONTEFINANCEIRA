<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/posts-data.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$post = get_post_by_slug($slug);

if (!$post) {
    http_response_code(404);
    $page_title = 'Artigo não encontrado | ' . SITE_NAME;
    $page_description = 'O artigo que você procura não existe ou foi movido.';
    include __DIR__ . '/includes/header.php';
    echo '<section class="section"><div class="container" style="text-align:center">';
    echo '<h1>Artigo não encontrado</h1><p class="lede" style="margin:0 auto 24px">O conteúdo que você procura não existe ou foi movido.</p>';
    echo '<a href="/financas-pessoais.php" class="btn btn-primary">Ver todos os artigos</a>';
    echo '</div></section>';
    include __DIR__ . '/includes/footer.php';
    exit;
}

$page_title = $post['title'] . ' | ' . SITE_NAME;
$page_description = $post['excerpt'];
$page_url = SITE_URL . '/artigo.php?slug=' . $post['slug'];
$page_image = SITE_URL . $post['image'];
$page_type = 'article';

$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $post['title'],
    'description' => $post['excerpt'],
    'datePublished' => $post['date'],
    'dateModified' => $post['date'],
    'image' => $page_image,
    'author' => ['@type' => 'Organization', 'name' => SITE_NAME],
    'publisher' => [
        '@type' => 'Organization',
        'name' => SITE_NAME,
        'logo' => ['@type' => 'ImageObject', 'url' => SITE_URL . '/assets/img/logo.png'],
    ],
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $page_url],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include __DIR__ . '/includes/header.php';

// Sugestões: 3 outros artigos (mesma categoria quando possível)
$related = array_values(array_filter($posts, function ($p) use ($post) {
    return $p['slug'] !== $post['slug'] && array_intersect($p['category'], $post['category']);
}));
if (count($related) < 3) {
    $related = array_values(array_filter($posts, function ($p) use ($post) { return $p['slug'] !== $post['slug']; }));
}
$related = array_slice($related, 0, 3);
?>

<article>
    <header class="article-header">
        <div class="container">
            <p class="breadcrumbs">
                <a href="/">Início</a><span>/</span><a href="/financas-pessoais.php">Artigos</a><span>/</span><?php echo htmlspecialchars($post['title']); ?>
            </p>
            <div class="post-cats">
                <?php foreach ($post['category'] as $cat): ?><span class="post-cat"><?php echo htmlspecialchars($cat); ?></span><?php endforeach; ?>
            </div>
            <h1><?php echo htmlspecialchars($post['title']); ?></h1>
            <div class="article-meta">
                <span><?php echo date('d/m/Y', strtotime($post['date'])); ?></span>
                <span>&middot;</span>
                <span><?php echo htmlspecialchars($post['read_time']); ?> de leitura</span>
            </div>
        </div>
    </header>

    <div class="container" style="padding-top:32px">
        <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" style="width:100%;max-height:420px;object-fit:cover" loading="lazy">
    </div>

    <div class="article-body">
        <?php echo $post['content']; ?>

        <?php if (!empty($post['tags'])): ?>
        <div class="article-tags">
            <?php foreach (explode(',', $post['tags']) as $tag): ?>
                <span><?php echo htmlspecialchars(trim($tag)); ?></span>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>

    <div class="article-cta">
        <div class="box">
            <div>
                <h3>Simule sua dívida agora</h3>
                <p>Calcule juros, parcelas e o real impacto de uma renegociação — de graça.</p>
            </div>
            <a href="/calculadoras.php" class="btn btn-light">Acessar Calculadoras</a>
        </div>
    </div>

    <?php if (!empty($related)): ?>
    <section class="section" style="padding-top:0">
        <div class="container">
            <div class="section-head"><span class="eyebrow">Continue lendo</span><h2>Artigos relacionados</h2></div>
            <div class="post-grid">
                <?php foreach ($related as $r): ?>
                    <a class="post-card" href="/artigo.php?slug=<?php echo urlencode($r['slug']); ?>">
                        <div class="thumb"><img src="<?php echo htmlspecialchars($r['image']); ?>" alt="<?php echo htmlspecialchars($r['title']); ?>" loading="lazy"></div>
                        <div class="post-card-body">
                            <div class="post-cats"><?php foreach ($r['category'] as $cat): ?><span class="post-cat"><?php echo htmlspecialchars($cat); ?></span><?php endforeach; ?></div>
                            <h3><?php echo htmlspecialchars($r['title']); ?></h3>
                            <p><?php echo htmlspecialchars($r['excerpt']); ?></p>
                            <div class="post-meta"><span><?php echo date('d/m/Y', strtotime($r['date'])); ?></span><span>&middot;</span><span><?php echo htmlspecialchars($r['read_time']); ?></span></div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
</article>

<?php include __DIR__ . '/includes/footer.php'; ?>
