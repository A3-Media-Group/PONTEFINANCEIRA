<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/posts-data.php';
require_once __DIR__ . '/includes/authors.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

if (!isset($GLOBALS['authors'][$slug])) {
    http_response_code(404);
    $page_title = 'Autor não encontrado | ' . SITE_NAME;
    $page_description = 'O perfil que você procura não existe ou foi movido.';
    $page_robots = 'noindex, follow';
    include __DIR__ . '/includes/header.php';
    echo '<section class="section"><div class="container" style="text-align:center">';
    echo '<h1>Autor não encontrado</h1><p class="lede" style="margin:0 auto 24px">Veja todos os artigos disponíveis.</p>';
    echo '<a href="/financas-pessoais.php" class="btn btn-primary">Ver todos os artigos</a>';
    echo '</div></section>';
    include __DIR__ . '/includes/footer.php';
    exit;
}

$author = get_author($slug);
$author_posts = array_values(array_filter($posts, function ($p) use ($slug) {
    return ($p['author'] ?? 'equipe-ponte-financeira') === $slug;
}));
usort($author_posts, function ($a, $b) { return strtotime($b['date']) <=> strtotime($a['date']); });

$page_title = $author['name'] . ' | Autor | ' . SITE_NAME;
$page_description = $author['bio'];
$page_url = SITE_URL . '/autor/' . $slug;

$breadcrumb_items = [
    ['Início', SITE_URL . '/'],
    [$author['name'], $page_url],
];
$breadcrumb_json = breadcrumb_schema($breadcrumb_items);

$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'ProfilePage',
    'name' => $author['name'],
    'url' => $page_url,
    'mainEntity' => [
        '@type' => 'Person',
        'name' => $author['name'],
        'jobTitle' => $author['role'],
        'description' => $author['bio'],
        'url' => $page_url,
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <?php echo breadcrumb_html($breadcrumb_items, true); ?>
        <span class="eyebrow">Autor</span>
        <h1><?php echo htmlspecialchars($author['name']); ?></h1>
        <p><?php echo htmlspecialchars($author['role']); ?></p>
    </div>
</section>

<section class="section" style="padding-bottom:0">
    <div class="container">
        <div class="author-bio-card">
            <?php if ($author['photo']): ?>
                <img src="<?php echo htmlspecialchars(asset_v($author['photo'])); ?>" alt="<?php echo htmlspecialchars($author['name']); ?>" class="author-photo" width="88" height="88">
            <?php else: ?>
                <div class="author-photo author-photo-placeholder" aria-hidden="true"><?php echo htmlspecialchars(mb_substr($author['name'], 0, 1)); ?></div>
            <?php endif; ?>
            <div>
                <p><?php echo htmlspecialchars($author['bio']); ?></p>
                <p class="author-credentials"><?php echo htmlspecialchars($author['credentials']); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head"><span class="eyebrow">Artigos</span><h2>Publicados por <?php echo htmlspecialchars($author['name']); ?></h2></div>
        <div class="post-grid">
            <?php foreach ($author_posts as $post): ?>
                <a class="post-card" href="/artigo/<?php echo urlencode($post['slug']); ?>">
                    <div class="thumb"><?php echo picture_tag($post['image'], $post['title'], 640, 400); ?></div>
                    <div class="post-card-body">
                        <div class="post-cats"><?php echo category_pills($post['category']); ?></div>
                        <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                        <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
                        <div class="post-meta">
                            <span><?php echo date('d/m/Y', strtotime($post['date'])); ?></span>
                            <span>&middot;</span>
                            <span><?php echo htmlspecialchars($post['read_time']); ?> de leitura</span>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
