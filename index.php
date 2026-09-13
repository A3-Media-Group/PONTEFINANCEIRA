<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/posts-data.php';
require_once __DIR__ . '/includes/newsletter.php';

$page_title = 'Organizar Finanças e Sair das Dívidas | Ponte Financeira';
$page_description = SITE_DEFAULT_DESCRIPTION;
$page_url = SITE_URL . '/';
$page_type = 'website';
$body_class = 'home-editorial';

$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    'name' => SITE_NAME,
    'url' => SITE_URL,
    'potentialAction' => [
        '@type' => 'SearchAction',
        'target' => SITE_URL . '/financas-pessoais.php?busca={search_term_string}',
        'query-input' => 'required name=search_term_string',
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include __DIR__ . '/includes/header.php';

// Destaque + três recentes + três leituras adicionais, sem repetição.
$continue_posts = array_slice($posts, 4, 3);
?>

<section class="editorial-hero">
    <div class="container editorial-hero-grid">
        <div class="editorial-intro">
            <span class="eyebrow"><span class="status-dot" aria-hidden="true"></span> Educação financeira para a vida real</span>
            <h1>Seu dinheiro.<br>Suas escolhas.<br><em>Um novo caminho.</em></h1>
            <p class="lede">Organize suas finanças, entenda suas dívidas e dê o próximo passo com mais confiança. Informação clara, sem complicação.</p>
            <div class="hero-actions"><a href="/financas-pessoais.php" class="btn btn-primary">Comece pelos artigos <span aria-hidden="true">↗</span></a><a href="/simuladores-financeiros.php" class="text-link">Explorar simuladores <span aria-hidden="true">→</span></a></div>
            <div class="hero-note"><span aria-hidden="true">◎</span> Conteúdo independente. Ferramentas gratuitas.</div>
        </div>
        <?php if (!empty($posts)): $featured = $posts[0]; ?>
        <article class="cover-story">
            <a href="/artigo/<?php echo htmlspecialchars($featured['slug']); ?>" class="cover-image" tabindex="-1" aria-hidden="true"><?php echo picture_tag($featured['image'], '', 640, 400, '', true); ?></a>
            <div class="cover-story-body"><span class="cover-label">EM DESTAQUE <span aria-hidden="true">↗</span></span>
            <div class="post-cats"><?php echo category_pills($featured['category']); ?></div>
            <h2><a href="/artigo/<?php echo htmlspecialchars($featured['slug']); ?>"><?php echo htmlspecialchars($featured['title']); ?></a></h2>
            <div class="cover-meta"><span><?php echo htmlspecialchars($featured['read_time']); ?> de leitura</span><span><?php echo date('d/m/Y', strtotime($featured['date'])); ?></span></div></div>
        </article>
        <?php endif; ?>
    </div>
</section>
<nav class="topic-strip" aria-label="Explorar por assunto"><div class="container topic-strip-inner"><span>O QUE VOCÊ QUER ENTENDER?</span><?php foreach (get_all_categories($posts) as $category): ?><a href="/categoria/<?php echo htmlspecialchars($category['slug']); ?>"><?php echo htmlspecialchars($category['name']); ?> <span aria-hidden="true">↗</span></a><?php endforeach; ?></div></nav>
<section class="section latest-section"><div class="container">
    <div class="editorial-section-head"><div><span class="eyebrow">Informação que faz diferença</span><h2>Novas leituras, melhores decisões.</h2></div><a href="/financas-pessoais.php" class="text-link">Todos os artigos <span aria-hidden="true">↗</span></a></div>
    <div class="post-grid"><?php foreach (array_slice($posts, 1, 3) as $post): echo post_card_html($post); endforeach; ?></div>
</div></section>
<section class="section tools-section"><div class="container"><div class="tools-panel">
    <div class="tools-intro"><span class="eyebrow">Do conhecimento à prática</span><h2>Menos achismo.<br>Mais clareza<br><em>nos números.</em></h2><p>Ferramentas gratuitas para colocar seus planos no papel e comparar possibilidades.</p><a href="/calculadoras.php" class="btn btn-lime">Ver calculadoras <span aria-hidden="true">↗</span></a></div>
    <div class="tool-link-list">
        <a href="/simuladores-financeiros.php"><span class="tool-number">01</span><span><strong>Simuladores financeiros</strong><small>Juros compostos, metas e financiamento</small></span><span aria-hidden="true">↗</span></a>
        <a href="/calculadoras/rescisao.php"><span class="tool-number">02</span><span><strong>Rescisão trabalhista</strong><small>Entenda os valores da sua rescisão</small></span><span aria-hidden="true">↗</span></a>
        <a href="/calculadoras/fgts.php"><span class="tool-number">03</span><span><strong>FGTS na rescisão</strong><small>Estime o saldo e a multa rescisória</small></span><span aria-hidden="true">↗</span></a>
        <a href="/arquivos-gratuitos.php"><span class="tool-number">04</span><span><strong>Planilhas e materiais</strong><small>Organize seu orçamento no seu ritmo</small></span><span aria-hidden="true">↗</span></a>
    </div>
</div></div></section>
<?php if (!empty($continue_posts)): ?>
<section class="section section-tinted" style="padding-top:56px">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Continue aprendendo</span>
            <h2>Mais artigos para organizar sua vida financeira</h2>
        </div>
        <div class="post-grid">
            <?php foreach ($continue_posts as $post): echo post_card_html($post); endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="section" style="padding-top:56px">
    <div class="container">
        <?php render_newsletter_block('home'); ?>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
