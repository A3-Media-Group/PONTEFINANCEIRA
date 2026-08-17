<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/posts-data.php';
require_once __DIR__ . '/includes/taxonomy.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$tag_name = tag_name_from_slug($posts, $slug);

if (!$tag_name) {
    http_response_code(404);
    $page_title = 'Tag não encontrada | ' . SITE_NAME;
    $page_description = 'A tag que você procura não existe ou foi movida.';
    $page_robots = 'noindex, follow';
    include __DIR__ . '/includes/header.php';
    echo '<section class="section"><div class="container" style="text-align:center">';
    echo '<h1>Tag não encontrada</h1><p class="lede" style="margin:0 auto 24px">Veja todos os artigos disponíveis.</p>';
    echo '<a href="/financas-pessoais.php" class="btn btn-primary">Ver todos os artigos</a>';
    echo '</div></section>';
    include __DIR__ . '/includes/footer.php';
    exit;
}

$tag_posts = get_posts_by_tag_slug($posts, $slug);
usort($tag_posts, function ($a, $b) { return strtotime($b['date']) <=> strtotime($a['date']); });

$page_title = 'Artigos sobre ' . $tag_name . ' | ' . SITE_NAME;
$page_description = 'Todos os artigos da ' . SITE_NAME . ' marcados com "' . $tag_name . '" — explicados de forma direta e sem jargão.';
$page_url = SITE_URL . '/tag/' . $slug;

$breadcrumb_items = [
    ['Início', SITE_URL . '/'],
    ['Artigos', SITE_URL . '/financas-pessoais.php'],
    [$tag_name, SITE_URL . '/tag/' . $slug],
];
$breadcrumb_json = breadcrumb_schema($breadcrumb_items);

include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <?php echo breadcrumb_html($breadcrumb_items, true); ?>
        <span class="eyebrow">Tag</span>
        <h1><?php echo htmlspecialchars($tag_name); ?></h1>
        <p><?php echo htmlspecialchars($page_description); ?></p>
    </div>
</section>

<section class="section">
    <div class="container">
        <p style="margin-bottom:20px;color:var(--text-muted)"><?php echo count($tag_posts); ?> artigo(s) com essa tag</p>
        <div class="post-grid">
            <?php foreach ($tag_posts as $post): ?>
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
