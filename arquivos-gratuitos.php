<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Planilhas e Arquivos Gratuitos para Organizar suas Finanças | Ponte Financeira';
$page_description = 'Baixe gratuitamente planilhas de orçamento pessoal, priorização de dívidas, controle de dividendos e carteira de investimentos.';
$page_url = SITE_URL . '/arquivos-gratuitos.php';

include __DIR__ . '/includes/header.php';

$downloads = [
    ['Planilha de Orçamento Pessoal', 'Organize receitas e despesas mensais em um único lugar.'],
    ['Planilha de Priorização de Dívidas', 'Descubra qual dívida quitar primeiro para economizar mais em juros.'],
    ['Planilha de Controle de Dividendos', 'Acompanhe os proventos recebidos por seus investimentos ao longo do ano.'],
    ['Planilha de Carteira de Investimentos', 'Visualize a composição e o desempenho da sua carteira em um só painel.'],
];
?>

<section class="page-header">
    <div class="container">
        <span class="eyebrow">Downloads</span>
        <h1>Arquivos gratuitos para organizar sua vida financeira</h1>
        <p>Planilhas prontas para usar — sem custo, sem letras miúdas.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="download-grid">
            <?php foreach ($downloads as $d): ?>
            <div class="download-card">
                <div class="file-icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M9 13h6M9 17h6"/></svg>
                </div>
                <div>
                    <h3><?php echo htmlspecialchars($d[0]); ?></h3>
                    <p><?php echo htmlspecialchars($d[1]); ?></p>
                </div>
                <a href="#form-download" class="btn btn-ghost" style="margin-left:auto;flex-shrink:0">Baixar</a>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="feature" id="form-download" style="margin-bottom:64px">
            <div>
                <span class="eyebrow">Liberar acesso</span>
                <h2>Receba os arquivos por e-mail</h2>
                <p>Preencha seus dados para desbloquear o download imediato de todas as planilhas gratuitas.</p>
                <form class="contact-form" style="padding:0;border:none;background:none" method="post" action="#">
                    <div class="form-group">
                        <label for="dl-nome">Nome</label>
                        <input type="text" id="dl-nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="dl-email">E-mail</label>
                        <input type="email" id="dl-email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Quero baixar grátis</button>
                    <p class="form-note">Seus dados são usados apenas para liberar o acesso e não serão compartilhados.</p>
                </form>
            </div>
            <img src="/assets/img/downloads.jpg" alt="Planilha de orçamento pessoal aberta em um laptop" loading="lazy" width="560" height="420">
        </div>

        <div class="section-head" style="margin: 0 auto 32px; text-align:center; max-width:640px">
            <span class="eyebrow" style="justify-content:center">Dúvidas</span>
            <h2>Perguntas frequentes</h2>
        </div>
        <div class="faq">
            <details class="faq-item" open>
                <summary>Como acessar os arquivos?</summary>
                <p>Preencha o nome e e-mail no formulário acima para liberar o download.</p>
            </details>
            <details class="faq-item">
                <summary>Os arquivos são gratuitos?</summary>
                <p>Sim, todos os arquivos disponíveis aqui podem ser baixados sem custo algum.</p>
            </details>
            <details class="faq-item">
                <summary>Posso compartilhar os arquivos com amigos?</summary>
                <p>Claro! Fique à vontade para enviar os arquivos para quem quiser — o importante é que eles sejam úteis.</p>
            </details>
            <details class="faq-item">
                <summary>É seguro fornecer meus dados?</summary>
                <p>Sim, seus dados são usados apenas para liberar o acesso e não serão compartilhados com terceiros.</p>
            </details>
            <details class="faq-item">
                <summary>O que fazer se não recebi o download?</summary>
                <p>Verifique sua caixa de spam ou <a href="/contato.php">entre em contato</a> para que possamos ajudar.</p>
            </details>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
