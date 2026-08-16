<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/posts-data.php';

$busca = isset($_GET['busca']) ? trim(strip_tags($_GET['busca'])) : '';
$busca = mb_substr($busca, 0, 80);

if ($busca !== '') {
    $needle = mb_strtolower($busca);
    $filtered_posts = array_values(array_filter($posts, function ($p) use ($needle) {
        $haystack = mb_strtolower($p['title'] . ' ' . $p['excerpt'] . ' ' . implode(' ', $p['category']) . ' ' . $p['tags']);
        return mb_strpos($haystack, $needle) !== false;
    }));
} else {
    $filtered_posts = $posts;
}

$per_page = 6;
$total = count($filtered_posts);
$total_pages = max(1, (int)ceil($total / $per_page));
$page_num = isset($_GET['pagina']) ? max(1, min($total_pages, (int)$_GET['pagina'])) : 1;
$start = ($page_num - 1) * $per_page;
$page_posts = array_slice($filtered_posts, $start, $per_page);

if ($busca !== '') {
    $page_title = 'Resultados para "' . $busca . '" | Ponte Financeira';
    $page_description = 'Artigos da Ponte Financeira relacionados a "' . $busca . '". Encontramos ' . $total . ' resultado(s).';
} else {
    $page_title = 'Artigos sobre Finanças Pessoais e Orçamento' . ($page_num > 1 ? ' – Página ' . $page_num : '') . ' | Ponte Financeira';
    $page_description = 'Descubra artigos sobre finanças pessoais: dicas para gerenciar o orçamento, estratégias para lidar com dívidas e melhorar sua saúde financeira.' . ($page_num > 1 ? ' Página ' . $page_num . '.' : '');
}
$page_url = SITE_URL . '/financas-pessoais.php' . build_query_suffix($busca, $page_num);
if ($busca !== '') {
    $page_robots = 'noindex, follow';
}

include __DIR__ . '/includes/header.php';

function build_query_suffix($busca, $n)
{
    $params = [];
    if ($busca !== '') $params['busca'] = $busca;
    if ($n > 1) $params['pagina'] = $n;
    return $params ? ('?' . http_build_query($params)) : '';
}

function pagina_url($n, $busca = '')
{
    return '/financas-pessoais.php' . build_query_suffix($busca, $n);
}
?>

<section class="page-header">
    <div class="container">
        <span class="eyebrow">Artigos</span>
        <h1>Finanças Pessoais: do orçamento de sobrevivência ao nome limpo</h1>
        <p>Deixe os jargões de lado. Acesse estratégias práticas para organizar seu orçamento sob pressão, negociar dívidas de igual para igual com os bancos e blindar o futuro financeiro da sua família.</p>
        <form action="/financas-pessoais.php" method="get" role="search" class="search-form" style="margin-top:20px;max-width:420px;display:flex;gap:8px">
            <label for="busca-artigos" class="sr-only">Buscar artigos</label>
            <input type="search" id="busca-artigos" name="busca" placeholder="Buscar artigos (ex: FGTS, dívidas, cartão...)" value="<?php echo htmlspecialchars($busca); ?>" style="flex:1;padding:10px 14px;border-radius:8px;border:1px solid var(--line)">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php if ($busca !== ''): ?>
        <p style="margin-bottom:20px;color:var(--text-muted)">
            <?php echo $total; ?> resultado(s) para "<?php echo htmlspecialchars($busca); ?>" —
            <a href="/financas-pessoais.php">limpar busca</a>
        </p>
        <?php endif; ?>
        <?php if (empty($page_posts)): ?>
        <p>Nenhum artigo encontrado para essa busca. Tente outro termo ou <a href="/financas-pessoais.php">veja todos os artigos</a>.</p>
        <?php endif; ?>
        <div class="post-grid">
            <?php foreach ($page_posts as $post): ?>
                <a class="post-card" href="/artigo/<?php echo urlencode($post['slug']); ?>">
                    <div class="thumb"><img src="<?php echo htmlspecialchars(asset_v($post['image'])); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" loading="lazy"></div>
                    <div class="post-card-body">
                        <div class="post-cats">
                            <?php foreach ($post['category'] as $cat): ?><span class="post-cat"><?php echo htmlspecialchars($cat); ?></span><?php endforeach; ?>
                        </div>
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

        <?php if ($total_pages > 1): ?>
        <nav class="pagination" aria-label="Paginação de artigos">
            <?php if ($page_num > 1): ?><a href="<?php echo pagina_url($page_num - 1, $busca); ?>">&laquo;</a><?php endif; ?>
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <?php if ($i === $page_num): ?>
                    <span class="current"><?php echo $i; ?></span>
                <?php else: ?>
                    <a href="<?php echo pagina_url($i, $busca); ?>"><?php echo $i; ?></a>
                <?php endif; ?>
            <?php endfor; ?>
            <?php if ($page_num < $total_pages): ?><a href="<?php echo pagina_url($page_num + 1, $busca); ?>">&raquo;</a><?php endif; ?>
        </nav>
        <?php endif; ?>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
