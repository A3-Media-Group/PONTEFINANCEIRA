<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Calculadora de FGTS na Rescisão | Ponte Financeira';
$page_description = 'Calcule o saldo do FGTS disponível na sua rescisão: multa de 40% (sem justa causa), 20% (comum acordo) e o que fica retido em cada tipo de desligamento.';
$page_url = SITE_URL . '/calculadoras/fgts.php';

include __DIR__ . '/../includes/header.php';
?>

<section class="page-header" style="padding-bottom:40px">
    <div class="container">
        <p class="breadcrumbs" style="color:#C6D2DC">
            <a href="/" style="color:#C6D2DC">Início</a><span>/</span><a href="/calculadoras.php" style="color:#C6D2DC">Calculadoras</a><span>/</span>FGTS
        </p>
        <span class="eyebrow">Simulador gratuito</span>
        <h1>Calculadora de FGTS na Rescisão</h1>
        <p>Veja quanto do seu FGTS fica disponível para saque de acordo com o motivo do desligamento.</p>
    </div>
</section>

<section class="section" style="padding-top:48px">
    <div class="container">
        <?php include __DIR__ . '/../includes/widget-fgts.php'; ?>
    </div>
</section>

<section class="section" style="padding-top:0">
    <div class="container">
        <div class="article-cta" style="max-width:100%;padding:0">
            <div class="box">
                <div>
                    <h3>Também vai calcular a rescisão completa?</h3>
                    <p>Some ao FGTS os valores de saldo de salário, férias, 13º e aviso prévio.</p>
                </div>
                <a href="/calculadoras/rescisao.php" class="btn btn-light">Calcular Rescisão</a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
