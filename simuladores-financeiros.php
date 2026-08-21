<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Simuladores Financeiros: Juros, Poupança e Financiamento | Ponte Financeira';
$page_description = 'Calcule seu futuro financeiro: simulador de juros compostos, meta de poupança, investimentos e financiamento (Tabela Price). Grátis e sem cadastro.';
$page_url = SITE_URL . '/simuladores-financeiros.php';
$breadcrumb_json = breadcrumb_schema([
    ['Início', SITE_URL . '/'],
    ['Simuladores Financeiros', $page_url],
]);

include __DIR__ . '/includes/header.php';
?>

<section class="page-header" style="padding-bottom:40px">
    <div class="container">
        <p class="breadcrumbs" style="color:#A9A499">
            <a href="/" style="color:#A9A499">Início</a><span>/</span>Simuladores Financeiros
        </p>
        <span class="eyebrow">Ferramentas gratuitas</span>
        <h1>Calcule seu futuro financeiro</h1>
        <p>Simule juros compostos, metas de poupança, investimentos e financiamentos antes de tomar qualquer decisão.</p>
    </div>
</section>

<section class="section" style="padding-top:48px">
    <div class="container">
        <?php include __DIR__ . '/includes/widget-simuladores.php'; ?>
    </div>
</section>

<section class="section" style="padding-top:0">
    <div class="container">
        <div class="article-cta" style="max-width:100%;padding:0">
            <div class="box">
                <div>
                    <h3>Está com dívidas em atraso?</h3>
                    <p>Veja nossas calculadoras trabalhistas e artigos sobre renegociação com bancos.</p>
                </div>
                <a href="/calculadoras.php" class="btn btn-light">Ver todas as calculadoras</a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
