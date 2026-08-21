<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Calculadora de Rescisão Trabalhista (CLT) | Ponte Financeira';
$page_description = 'Simule os valores da sua rescisão de contrato de trabalho conforme a CLT: saldo de salário, férias, 13º, aviso prévio e mais. Grátis e sem cadastro.';
$page_url = SITE_URL . '/calculadoras/rescisao.php';
$page_image = SITE_URL . '/assets/img/og-calc-rescisao.jpg';
$breadcrumb_json = breadcrumb_schema([
    ['Início', SITE_URL . '/'],
    ['Calculadoras', SITE_URL . '/calculadoras.php'],
    ['Rescisão Trabalhista', $page_url],
]);

include __DIR__ . '/../includes/header.php';
?>

<section class="page-header" style="padding-bottom:40px">
    <div class="container">
        <p class="breadcrumbs" style="color:#A9A499">
            <a href="/" style="color:#A9A499">Início</a><span>/</span><a href="/calculadoras.php" style="color:#A9A499">Calculadoras</a><span>/</span>Rescisão Trabalhista
        </p>
        <span class="eyebrow">Simulador gratuito</span>
        <h1>Calculadora de Rescisão Trabalhista</h1>
        <p>Simule os valores da sua rescisão de contrato de trabalho conforme a CLT.</p>
    </div>
</section>

<section class="section" style="padding-top:48px">
    <div class="container">
        <?php include __DIR__ . '/../includes/widget-rescisao.php'; ?>
    </div>
</section>

<section class="section" style="padding-top:0">
    <div class="container">
        <div class="article-cta" style="max-width:100%;padding:0">
            <div class="box">
                <div>
                    <h3>Vai receber o FGTS junto com a rescisão?</h3>
                    <p>Use também a nossa calculadora de FGTS para ver o saque disponível.</p>
                </div>
                <a href="/calculadoras/fgts.php" class="btn btn-light">Calcular FGTS</a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
