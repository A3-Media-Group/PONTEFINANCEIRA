<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Calculadora de Horas Extras com DSR | Ponte Financeira';
$page_description = 'Calcule quanto suas horas extras valem, já com o reflexo no Descanso Semanal Remunerado (DSR). Simulador gratuito e sem cadastro.';
$page_url = SITE_URL . '/calculadoras/horas-extras.php';
$page_image = SITE_URL . '/assets/img/og-calc-horas-extras.jpg';
$breadcrumb_json = breadcrumb_schema([
    ['Início', SITE_URL . '/'],
    ['Calculadoras', SITE_URL . '/calculadoras.php'],
    ['Horas Extras', $page_url],
]);

include __DIR__ . '/../includes/header.php';
?>

<section class="page-header" style="padding-bottom:40px">
    <div class="container">
        <p class="breadcrumbs" style="color:#A9A499">
            <a href="/" style="color:#A9A499">Início</a><span>/</span><a href="/calculadoras.php" style="color:#A9A499">Calculadoras</a><span>/</span>Horas Extras
        </p>
        <span class="eyebrow">Simulador gratuito</span>
        <h1>Calculadora de Horas Extras com DSR</h1>
        <p>Descubra o valor real das suas horas extras, incluindo o reflexo no descanso semanal remunerado.</p>
    </div>
</section>

<section class="section" style="padding-top:48px">
    <div class="container">
        <?php include __DIR__ . '/../includes/widget-horas-extras.php'; ?>
    </div>
</section>

<section class="section" style="padding-top:0">
    <div class="container">
        <div class="article-cta" style="max-width:100%;padding:0">
            <div class="box">
                <div>
                    <h3>Quer organizar toda a sua renda extra?</h3>
                    <p>Veja outras calculadoras e planilhas gratuitas para colocar suas finanças em ordem.</p>
                </div>
                <a href="/calculadoras.php" class="btn btn-light">Ver todas as calculadoras</a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
