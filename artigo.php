<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/posts-data.php';
require_once __DIR__ . '/includes/authors.php';
require_once __DIR__ . '/includes/taxonomy.php';
require_once __DIR__ . '/includes/newsletter.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$post = get_post_by_slug($slug);

if (!$post) {
    http_response_code(404);
    $page_title = 'Artigo não encontrado | ' . SITE_NAME;
    $page_description = 'O artigo que você procura não existe ou foi movido.';
    $page_robots = 'noindex, follow';
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
$page_url = SITE_URL . '/artigo/' . $post['slug'];
$page_image = SITE_URL . asset_v($post['image']);
$page_type = 'article';

$author = get_author($post['author'] ?? 'equipe-ponte-financeira');
$author_url = SITE_URL . '/autor/' . $author['slug'];
$updated_date = !empty($post['updated']) && $post['updated'] !== $post['date'] ? $post['updated'] : null;

$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $post['title'],
    'description' => $post['excerpt'],
    'datePublished' => $post['date'],
    'dateModified' => $updated_date ?: $post['date'],
    'image' => $page_image,
    'author' => ['@type' => 'Person', 'name' => $author['name'], 'url' => $author_url],
    'publisher' => [
        '@type' => 'Organization',
        'name' => SITE_NAME,
        'logo' => ['@type' => 'ImageObject', 'url' => SITE_URL . '/assets/img/logo.png'],
    ],
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $page_url],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

$breadcrumb_items = [
    ['Início', SITE_URL . '/'],
    ['Artigos', SITE_URL . '/financas-pessoais.php'],
    [$post['title'], $page_url],
];
$breadcrumb_json = breadcrumb_schema($breadcrumb_items);

if (!empty($post['faq'])) {
    $faq_json = json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array_map(function ($qa) {
            return [
                '@type' => 'Question',
                'name' => $qa[0],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $qa[1]],
            ];
        }, $post['faq']),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

include __DIR__ . '/includes/header.php';

// Sugestões: 3 outros artigos (mesma categoria quando possível)
$related = array_values(array_filter($posts, function ($p) use ($post) {
    return $p['slug'] !== $post['slug'] && array_intersect($p['category'], $post['category']);
}));
if (count($related) < 3) {
    $related = array_values(array_filter($posts, function ($p) use ($post) { return $p['slug'] !== $post['slug']; }));
}
$related = array_slice($related, 0, 3);

$cta = contextual_cta($post['category']);
$has_disclaimer = strpos($post['content'], 'class="callout"') !== false;
?>

<article>
    <header class="article-header">
        <div class="container">
            <?php echo breadcrumb_html($breadcrumb_items); ?>
            <div class="post-cats"><?php echo category_pills($post['category']); ?></div>
            <h1><?php echo htmlspecialchars($post['title']); ?></h1>
            <div class="article-meta">
                <span>Publicado em <?php echo date('d/m/Y', strtotime($post['date'])); ?></span>
                <?php if ($updated_date): ?><span>&middot;</span><span>Atualizado em <?php echo date('d/m/Y', strtotime($updated_date)); ?></span><?php endif; ?>
                <span>&middot;</span>
                <span><?php echo htmlspecialchars($post['read_time']); ?> de leitura</span>
            </div>
            <div class="article-byline">
                <?php if ($author['photo']): ?>
                    <img src="<?php echo htmlspecialchars(asset_v($author['photo'])); ?>" alt="" class="author-avatar" width="36" height="36">
                <?php else: ?>
                    <span class="author-avatar author-avatar-placeholder" aria-hidden="true"><?php echo htmlspecialchars(mb_substr($author['name'], 0, 1)); ?></span>
                <?php endif; ?>
                <span>Por <a href="/autor/<?php echo htmlspecialchars($author['slug']); ?>"><?php echo htmlspecialchars($author['name']); ?></a> — <?php echo htmlspecialchars($author['role']); ?></span>
            </div>
        </div>
    </header>

    <div class="container" style="padding-top:32px">
        <?php echo picture_tag($post['image'], $post['title'], 1200, 630, 'article-hero-img', true); ?>
    </div>

    <div class="article-body">
        <?php echo $post['content']; ?>

        <?php if (!$has_disclaimer): ?>
        <div class="callout">
            <p><strong>Aviso importante:</strong> este conteúdo tem caráter exclusivamente educacional e informativo, e não constitui recomendação de investimento, crédito ou qualquer produto financeiro. Antes de tomar uma decisão, avalie sua situação e, se necessário, procure orientação profissional habilitada.</p>
        </div>
        <?php endif; ?>

        <?php if (!empty($post['tags'])): ?>
        <div class="article-tags">
            <?php foreach (explode(',', $post['tags']) as $tag): $tag = trim($tag); if ($tag === '') continue; ?>
                <a href="/tag/<?php echo htmlspecialchars(slugify($tag)); ?>"><?php echo htmlspecialchars($tag); ?></a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="author-box">
            <?php if ($author['photo']): ?>
                <img src="<?php echo htmlspecialchars(asset_v($author['photo'])); ?>" alt="<?php echo htmlspecialchars($author['name']); ?>" class="author-avatar author-avatar-lg" width="56" height="56">
            <?php else: ?>
                <span class="author-avatar author-avatar-lg author-avatar-placeholder" aria-hidden="true"><?php echo htmlspecialchars(mb_substr($author['name'], 0, 1)); ?></span>
            <?php endif; ?>
            <div>
                <p class="author-box-name">Escrito por <a href="/autor/<?php echo htmlspecialchars($author['slug']); ?>"><?php echo htmlspecialchars($author['name']); ?></a></p>
                <p class="author-box-bio"><?php echo htmlspecialchars($author['credentials']); ?></p>
            </div>
        </div>
    </div>

    <div class="article-cta">
        <div class="box">
            <div>
                <h3><?php echo htmlspecialchars($cta['title']); ?></h3>
                <p><?php echo htmlspecialchars($cta['text']); ?></p>
            </div>
            <a href="<?php echo htmlspecialchars($cta['href']); ?>" class="btn btn-light"><?php echo htmlspecialchars($cta['label']); ?></a>
        </div>
    </div>

    <div class="article-cta article-cta-newsletter">
        <?php render_newsletter_block('artigo:' . $post['slug']); ?>
    </div>

    <?php if (!empty($related)): ?>
    <section class="section" style="padding-top:0">
        <div class="container">
            <div class="section-head"><span class="eyebrow">Continue lendo</span><h2>Artigos relacionados</h2></div>
            <div class="post-grid">
                <?php foreach ($related as $r): echo post_card_html($r); endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
</article>

<?php include __DIR__ . '/includes/footer.php'; ?>
