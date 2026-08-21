<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Calculadoras Financeiras: FGTS, Rescisão e Hora Extra | Ponte Financeira';
$page_description = 'Calcule FGTS, rescisão trabalhista, hora extra e simule sua liberdade financeira com as calculadoras gratuitas da Ponte Financeira.';
$page_url = SITE_URL . '/calculadoras.php';
$page_image = SITE_URL . '/assets/img/og-calculadoras.jpg';
$breadcrumb_json = breadcrumb_schema([
    ['Início', SITE_URL . '/'],
    ['Calculadoras', $page_url],
]);

include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <span class="eyebrow">Simuladores práticos</span>
        <h1>Ferramentas para calcular FGTS, rescisão, hora extra e muito mais</h1>
        <p>Calculadoras financeiras e trabalhistas — ferramentas práticas para facilitar seus cálculos, sem cadastro e sem custo.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="tool-grid">
            <div class="tool-card">
                <div class="icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 4v5M16 4v5"/></svg>
                </div>
                <h3>Calculadora FGTS</h3>
                <p>Calcule seu saldo e saques do FGTS com facilidade, incluindo saque-aniversário e rescisão.</p>
                <a href="/calculadoras/fgts.php" class="btn btn-ghost">Calcular FGTS</a>
            </div>
            <div class="tool-card">
                <div class="icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                </div>
                <h3>Rescisão Trabalhista</h3>
                <p>Simule valores de rescisão de forma rápida e segura, com ou sem justa causa.</p>
                <a href="/calculadoras/rescisao.php" class="btn btn-ghost">Calcular Rescisão</a>
            </div>
            <div class="tool-card">
                <div class="icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                </div>
                <h3>Calculadora Hora Extra</h3>
                <p>Confira quanto você deve receber por horas extras trabalhadas, com adicional de 50% ou 100%.</p>
                <a href="/calculadoras/horas-extras.php" class="btn btn-ghost">Calcular Hora Extra</a>
            </div>
            <div class="tool-card">
                <div class="icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8"/><path d="M14 7h7v7"/></svg>
                </div>
                <h3>Simulador de Juros Compostos</h3>
                <p>Veja o impacto real dos juros compostos em uma dívida ou em um investimento ao longo do tempo.</p>
                <a href="/simuladores-financeiros.php" class="btn btn-ghost">Simular Juros</a>
            </div>
            <div class="tool-card">
                <div class="icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 8h8M8 12h8M8 16h5"/></svg>
                </div>
                <h3>Planilha de Orçamento</h3>
                <p>Organize receitas e despesas mensais em uma estrutura simples de orçamento.</p>
                <a href="/arquivos-gratuitos.php" class="btn btn-ghost">Baixar Planilha</a>
            </div>
            <div class="tool-card">
                <div class="icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21C7 17 3 13.5 3 9.5A5.5 5.5 0 0 1 12 6a5.5 5.5 0 0 1 9 3.5C21 13.5 17 17 12 21z"/></svg>
                </div>
                <h3>Simulador de Renegociação</h3>
                <p>Compare propostas de acordo e veja qual realmente cabe no seu orçamento mensal.</p>
                <a href="/simuladores-financeiros.php" class="btn btn-ghost">Simular Acordo</a>
            </div>
        </div>

        <p class="form-note" style="text-align:center;margin-top:32px">
            Todas as calculadoras acima já estão ativas e funcionando — sem cadastro e sem custo.
        </p>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
