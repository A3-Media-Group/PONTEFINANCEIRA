<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Ponte Financeira: Nossa Missão em Educação Financeira';
$page_description = 'Conheça a missão da Ponte Financeira: um portal independente de educação financeira dedicado a equilibrar o jogo entre você e seus credores.';
$page_url = SITE_URL . '/sobre.php';

include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <span class="eyebrow">Quem somos</span>
        <h1>Clareza para sua reconstrução financeira</h1>
        <p>Acreditamos que sair das dívidas exige estratégia e números realistas. A Ponte Financeira é um portal independente dedicado a equilibrar o jogo entre você e seus credores.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="about-grid">
            <div class="about-card">
                <span class="eyebrow">Nossa missão</span>
                <h2>Equilíbrio na mesa de negociação</h2>
                <p>O sistema financeiro fala uma língua complexa que muitas vezes intimida quem precisa de ajuda. Nosso papel é traduzir juros, prazos e regras para que você recupere o controle da sua vida financeira sem intermediários abusivos.</p>
                <p>Através de simuladores gratuitos e guias práticos baseados em dados reais, oferecemos o caminho para a renegociação justa. Não prometemos milagres, mas sim planejamento pé no chão e clareza matemática para limpar seu nome.</p>
            </div>
            <div class="about-card">
                <span class="eyebrow">Independência editorial</span>
                <h2>Educação financeira totalmente independente</h2>
                <p>A Ponte Financeira é um portal estritamente educativo. Não concedemos empréstimos, não cobramos taxas e não representamos instituições financeiras. Nosso único compromisso é com a transparência e com a verdade dos seus números.</p>
            </div>
        </div>

        <div class="pillars">
            <div class="pillar"><span class="num">01</span><h3>Gestão de Dívidas</h3><p>Estratégias práticas para organizar parcelas e priorizar o que realmente importa.</p></div>
            <div class="pillar"><span class="num">02</span><h3>Renegociação</h3><p>Como negociar juros abusivos diretamente com credores, de forma segura.</p></div>
            <div class="pillar"><span class="num">03</span><h3>Score de Crédito</h3><p>Passo a passo seguro para recuperar sua pontuação de forma legítima.</p></div>
            <div class="pillar"><span class="num">04</span><h3>Orçamento</h3><p>Planilhas e métodos simples para manter o controle mensal.</p></div>
        </div>
    </div>
</section>

<section class="section" style="padding-top:0">
    <div class="container">
        <div class="article-cta" style="max-width:100%;padding:0">
            <div class="box">
                <div>
                    <h3>Pronto para dar o primeiro passo?</h3>
                    <p>Simule sua dívida gratuitamente e veja o quanto pode economizar.</p>
                </div>
                <a href="/calculadoras.php" class="btn btn-light">Simular Dívida Grátis</a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
