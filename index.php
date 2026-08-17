<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/posts-data.php';
require_once __DIR__ . '/includes/newsletter.php';

$page_title = 'Organizar Finanças e Sair das Dívidas | Ponte Financeira';
$page_description = SITE_DEFAULT_DESCRIPTION;
$page_url = SITE_URL . '/';
$page_type = 'website';

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

$latest_posts = array_slice($posts, 0, 3);
// "Continue aprendendo": próximos artigos por recência, de categorias
// diferentes dos "Artigos recentes" quando possível (evita repetir tema).
// NOTA: sem dados de analytics (GA4) plugados ainda não dá pra montar um
// "Mais lidos" real por pageviews — ver relatório final.
$latest_slugs = array_column($latest_posts, 'slug');
$continue_posts = array_values(array_filter($posts, function ($p) use ($latest_slugs) {
    return !in_array($p['slug'], $latest_slugs, true);
}));
$continue_posts = array_slice($continue_posts, 0, 3);
?>

<section class="hero">
    <div class="container hero-inner">
        <div>
            <span class="eyebrow">Ponte Financeira</span>
            <h1>Estratégia realista para <em>quitar suas dívidas</em></h1>
            <p class="lede">Aprenda a negociar com bancos de igual para igual. Sem promessas milagrosas — apenas cálculos exatos e planejamento pé no chão para limpar seu nome.</p>
            <div class="hero-actions">
                <a href="/simuladores-financeiros.php" class="btn btn-primary">Simular Dívida Grátis</a>
                <a href="/financas-pessoais.php" class="btn btn-ghost" style="color:#fff;border-color:rgba(255,255,255,.35)">Ver Artigos</a>
            </div>
        </div>
        <div class="bridge-graphic" aria-hidden="true">
            <svg viewBox="0 0 480 320" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="arcGrad" x1="0" y1="0" x2="1" y2="0">
                        <stop offset="0" stop-color="#C9A227"/>
                        <stop offset="1" stop-color="#7FD8AE"/>
                    </linearGradient>
                </defs>
                <path d="M20 260 C 120 60, 360 60, 460 260" stroke="url(#arcGrad)" stroke-width="4" fill="none" stroke-linecap="round"/>
                <path d="M20 260 C 120 130, 360 130, 460 260" stroke="rgba(255,255,255,.25)" stroke-width="2" fill="none" stroke-linecap="round"/>
                <circle cx="20" cy="260" r="9" fill="#0E2438" stroke="#7FD8AE" stroke-width="3"/>
                <text x="0" y="290" fill="#C6D2DC" font-size="15" font-family="Inter, sans-serif">Dívida</text>
                <circle cx="460" cy="260" r="9" fill="#0E2438" stroke="#C9A227" stroke-width="3"/>
                <text x="418" y="290" fill="#C6D2DC" font-size="15" font-family="Inter, sans-serif">Liberdade</text>
            </svg>
        </div>
    </div>
    <div class="bridge-divider">
        <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 60 L0 30 Q600 -10 1200 30 L1200 60 Z" fill="#F6F7F4"/>
        </svg>
    </div>
</section>

<section class="section" style="padding-top:56px">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Como ajudamos</span>
            <h2>Quatro pilares para sua estabilidade</h2>
            <p class="lede" style="margin-top:8px">Encontre orientações claras e ferramentas práticas para cada etapa da sua jornada de recuperação financeira.</p>
        </div>
        <div class="pillars">
            <div class="pillar">
                <span class="num">01</span>
                <h3>Gestão de Dívidas</h3>
                <p>Estratégias práticas para organizar parcelas e priorizar o que realmente importa no seu orçamento diário.</p>
            </div>
            <div class="pillar">
                <span class="num">02</span>
                <h3>Renegociação</h3>
                <p>Como negociar juros abusivos diretamente com credores, de forma segura e sem intermediários.</p>
            </div>
            <div class="pillar">
                <span class="num">03</span>
                <h3>Score de Crédito</h3>
                <p>Passo a passo seguro para recuperar sua pontuação de forma legítima e voltar a ter crédito saudável.</p>
            </div>
            <div class="pillar">
                <span class="num">04</span>
                <h3>Orçamento</h3>
                <p>Planilhas e métodos simples para manter o controle mensal sem precisar de sacrifícios extremos.</p>
            </div>
        </div>
    </div>
</section>

<section class="section" style="padding-top:24px">
    <div class="container">
        <div class="feature">
            <div>
                <span class="eyebrow">Ferramentas gratuitas</span>
                <h2>Simuladores de juros e parcelas</h2>
                <p>Calcule o impacto real dos juros compostos antes de aceitar qualquer acordo. Nossa planilha de planejamento financeiro ajuda a visualizar o saldo devedor real e planejar parcelas que cabem no seu bolso.</p>
                <a href="/simuladores-financeiros.php" class="btn btn-primary">Acessar Simuladores</a>
            </div>
            <?php echo picture_tag('/assets/img/simuladores.jpg', 'Simuladores financeiros da Ponte Financeira: juros compostos, investimentos e planejamento', 560, 420); ?>
        </div>
    </div>
</section>

<section class="section" style="padding-top:24px">
    <div class="container">
        <div class="section-head" style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;max-width:100%">
            <div>
                <span class="eyebrow">Blog</span>
                <h2>Artigos recentes</h2>
            </div>
            <a href="/financas-pessoais.php" class="btn btn-ghost">Ver todos os artigos</a>
        </div>
        <div class="post-grid">
            <?php foreach ($latest_posts as $post): ?>
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

<?php if (!empty($continue_posts)): ?>
<section class="section section-tinted" style="padding-top:56px">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">Continue aprendendo</span>
            <h2>Mais artigos para organizar sua vida financeira</h2>
        </div>
        <div class="post-grid">
            <?php foreach ($continue_posts as $post): ?>
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
<?php endif; ?>

<section class="section" style="padding-top:56px">
    <div class="container">
        <?php render_newsletter_block('home'); ?>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
