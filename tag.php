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

// Tags com poucos artigos geram conteúdo fino/repetitivo (praticamente uma
// cópia da página do próprio artigo) e consomem crawl budget do Google sem
// necessidade. A navegação continua funcionando normalmente — só pedimos
// para o Google não indexar essa página específica enquanto ela tiver
// menos de 3 artigos.
if (count($tag_posts) < 3) {
    $page_robots = 'noindex, follow';
}

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
            <?php foreach ($tag_posts as $post): echo post_card_html($post); endforeach; ?>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
