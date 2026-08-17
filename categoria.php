<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/posts-data.php';
require_once __DIR__ . '/includes/taxonomy.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$cat_name = category_name_from_slug($posts, $slug);

if (!$cat_name) {
    http_response_code(404);
    $page_title = 'Categoria não encontrada | ' . SITE_NAME;
    $page_description = 'A categoria que você procura não existe ou foi movida.';
    $page_robots = 'noindex, follow';
    include __DIR__ . '/includes/header.php';
    echo '<section class="section"><div class="container" style="text-align:center">';
    echo '<h1>Categoria não encontrada</h1><p class="lede" style="margin:0 auto 24px">Veja todos os artigos disponíveis.</p>';
    echo '<a href="/financas-pessoais.php" class="btn btn-primary">Ver todos os artigos</a>';
    echo '</div></section>';
    include __DIR__ . '/includes/footer.php';
    exit;
}

$cat_posts = get_posts_by_category_slug($posts, $slug);
usort($cat_posts, function ($a, $b) { return strtotime($b['date']) <=> strtotime($a['date']); });

$per_page = 9;
$total = count($cat_posts);
$total_pages = max(1, (int)ceil($total / $per_page));
$page_num = isset($_GET['pagina']) ? max(1, min($total_pages, (int)$_GET['pagina'])) : 1;
$page_posts = array_slice($cat_posts, ($page_num - 1) * $per_page, $per_page);

$intro = category_description($cat_name);
$page_title = $cat_name . ($page_num > 1 ? ' – Página ' . $page_num : '') . ' | Artigos | ' . SITE_NAME;
$page_description = $intro;
$page_url = SITE_URL . '/categoria/' . $slug . ($page_num > 1 ? '?pagina=' . $page_num : '');
if ($page_num > 1) $page_prev = SITE_URL . '/categoria/' . $slug . ($page_num - 1 > 1 ? '?pagina=' . ($page_num - 1) : '');
if ($page_num < $total_pages) $page_next = SITE_URL . '/categoria/' . $slug . '?pagina=' . ($page_num + 1);

$breadcrumb_items = [
    ['Início', SITE_URL . '/'],
    ['Artigos', SITE_URL . '/financas-pessoais.php'],
    [$cat_name, SITE_URL . '/categoria/' . $slug],
];
$breadcrumb_json = breadcrumb_schema($breadcrumb_items);

include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <?php echo breadcrumb_html($breadcrumb_items, true); ?>
        <span class="eyebrow">Categoria</span>
        <h1><?php echo htmlspecialchars($cat_name); ?></h1>
        <p><?php echo htmlspecialchars($intro); ?></p>
    </div>
</section>

<section class="section">
    <div class="container">
        <p style="margin-bottom:20px;color:var(--text-muted)"><?php echo $total; ?> artigo(s) em <?php echo htmlspecialchars($cat_name); ?></p>
        <div class="post-grid">
            <?php foreach ($page_posts as $post): echo post_card_html($post); endforeach; ?>
        </div>

        <?php if ($total_pages > 1): ?>
        <nav class="pagination" aria-label="Paginação">
            <?php if ($page_num > 1): ?><a href="/categoria/<?php echo $slug; ?><?php echo $page_num - 1 > 1 ? '?pagina=' . ($page_num - 1) : ''; ?>">&laquo;</a><?php endif; ?>
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <?php if ($i === $page_num): ?><span class="current"><?php echo $i; ?></span>
                <?php else: ?><a href="/categoria/<?php echo $slug; ?><?php echo $i > 1 ? '?pagina=' . $i : ''; ?>"><?php echo $i; ?></a><?php endif; ?>
            <?php endfor; ?>
            <?php if ($page_num < $total_pages): ?><a href="/categoria/<?php echo $slug; ?>?pagina=<?php echo $page_num + 1; ?>">&raquo;</a><?php endif; ?>
        </nav>
        <?php endif; ?>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
