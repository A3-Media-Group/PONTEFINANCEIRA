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
                <a href="/financas-pessoais.php" class="btn btn-light">Ver Artigos</a>
            </div>
        </div>
        <div class="bridge-graphic" aria-hidden="true">
            <svg viewBox="0 0 480 320" xmlns="http://www.w3.org/2000/svg">
                <!-- Traço técnico único (acento da marca), sem gradiente -->
                <path d="M20 260 C 120 60, 360 60, 460 260" stroke="#8A6D3B" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                <!-- Linha de referência secundária, monocromática (marfim translúcido) -->
                <path d="M20 260 C 120 112, 360 112, 460 260" stroke="rgba(245,241,234,.16)" stroke-width="1" fill="none" stroke-linecap="round"/>
                <!-- Marcadores de extremidade estilo desenho técnico, sem preenchimento colorido -->
                <line x1="20" y1="250" x2="20" y2="270" stroke="rgba(245,241,234,.4)" stroke-width="1"/>
                <line x1="460" y1="250" x2="460" y2="270" stroke="rgba(245,241,234,.4)" stroke-width="1"/>
                <text x="20" y="292" text-anchor="start" fill="rgba(245,241,234,.55)" font-size="11" letter-spacing="2" font-family="Inter, sans-serif">DÍVIDA</text>
                <text x="460" y="292" text-anchor="end" fill="rgba(245,241,234,.55)" font-size="11" letter-spacing="2" font-family="Inter, sans-serif">LIBERDADE</text>
            </svg>
        </div>
    </div>
    <div class="bridge-divider" aria-hidden="true"></div>
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
            <?php foreach ($latest_posts as $post): echo post_card_html($post); endforeach; ?>
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
