<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/posts-data.php';

$per_page = 6;
$total = count($posts);
$total_pages = max(1, (int)ceil($total / $per_page));
$page_num = isset($_GET['pagina']) ? max(1, min($total_pages, (int)$_GET['pagina'])) : 1;
$start = ($page_num - 1) * $per_page;
$page_posts = array_slice($posts, $start, $per_page);

$page_title = 'Artigos sobre Finanças Pessoais e Orçamento | Ponte Financeira';
$page_description = 'Descubra artigos detalhados sobre finanças pessoais: dicas práticas para gerenciamento de orçamento, estratégias para lidar com dívidas e metodologias para melhorar sua saúde financeira.';
$page_url = SITE_URL . '/financas-pessoais.php' . ($page_num > 1 ? '?pagina=' . $page_num : '');

include __DIR__ . '/includes/header.php';

function pagina_url($n)
{
    return '/financas-pessoais.php' . ($n > 1 ? '?pagina=' . $n : '');
}
?>

<section class="page-header">
    <div class="container">
        <span class="eyebrow">Artigos</span>
        <h1>Finanças Pessoais: do orçamento de sobrevivência ao nome limpo</h1>
        <p>Deixe os jargões de lado. Acesse estratégias práticas para organizar seu orçamento sob pressão, negociar dívidas de igual para igual com os bancos e blindar o futuro financeiro da sua família.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="post-grid">
            <?php foreach ($page_posts as $post): ?>
                <a class="post-card" href="/artigo.php?slug=<?php echo urlencode($post['slug']); ?>">
                    <div class="thumb"><img src="<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" loading="lazy"></div>
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
            <?php if ($page_num > 1): ?><a href="<?php echo pagina_url($page_num - 1); ?>">&laquo;</a><?php endif; ?>
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <?php if ($i === $page_num): ?>
                    <span class="current"><?php echo $i; ?></span>
                <?php else: ?>
                    <a href="<?php echo pagina_url($i); ?>"><?php echo $i; ?></a>
                <?php endif; ?>
            <?php endfor; ?>
            <?php if ($page_num < $total_pages): ?><a href="<?php echo pagina_url($page_num + 1); ?>">&raquo;</a><?php endif; ?>
        </nav>
        <?php endif; ?>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
