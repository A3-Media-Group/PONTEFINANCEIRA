<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Entre em Contato com a Ponte Financeira';
$page_description = 'Utilize nossos canais oficiais para propor parcerias, sugerir pautas ou tirar dúvidas sobre nossos simuladores de dívidas e planilhas gratuitas.';
$page_url = SITE_URL . '/contato.php';

$sent = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Honeypot anti-spam: campo invisível que só bots preenchem
    if (!empty($_POST['website'])) {
        $sent = true; // finge sucesso para o bot, mas não envia nada
    } else {
        $nome = trim($_POST['nome'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $mensagem = trim($_POST['mensagem'] ?? '');

        if ($nome === '' || $mensagem === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'Por favor, preencha nome, um e-mail válido e sua mensagem.';
        } else {
            $to = SITE_EMAIL;
            $subject = 'Novo contato pelo site — ' . $nome;
            $body = "Nome: $nome\nE-mail: $email\n\nMensagem:\n$mensagem";
            $headers = 'From: nao-responder@pontefinanceira.com.br' . "\r\n" .
                       'Reply-To: ' . $email . "\r\n";

            // Requer que o e-mail/SMTP esteja configurado no painel da Hostinger.
            if (@mail($to, $subject, $body, $headers)) {
                $sent = true;
            } else {
                $error = 'Não foi possível enviar agora. Tente novamente em instantes ou escreva para ' . SITE_EMAIL . '.';
            }
        }
    }
}

include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <span class="eyebrow">Canais de comunicação</span>
        <h1>Conectando você à clareza financeira</h1>
        <p>Utilize nossos canais oficiais para propor parcerias comerciais, sugerir pautas de planejamento financeiro ou tirar dúvidas sobre nossos simuladores de dívidas e planilhas gratuitas.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="contact-wrap">
            <div class="contact-form">
                <?php if ($sent): ?>
                    <div class="form-success">Mensagem enviada com sucesso! Nossa equipe responde o mais rápido possível.</div>
                <?php endif; ?>
                <?php if ($error): ?>
                    <div class="form-success" style="background:#FBEAEA;border-color:#EFC2C2;color:#9B2C2C"><?php echo htmlspecialchars($error); ?></div>
                <?php endif; ?>

                <form method="post" action="/contato.php#form">
                    <input type="text" name="website" value="" style="position:absolute;left:-9999px" tabindex="-1" autocomplete="off">
                    <div class="form-group">
                        <label for="nome">Seu nome*</label>
                        <input type="text" id="nome" name="nome" required value="<?php echo htmlspecialchars($_POST['nome'] ?? ''); ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail para retorno*</label>
                        <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Como podemos ajudar?*</label>
                        <textarea id="mensagem" name="mensagem" required><?php echo htmlspecialchars($_POST['mensagem'] ?? ''); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    <p class="form-note">Valorizamos a transparência e a independência editorial. Nossa equipe analisa todas as mensagens e prioriza retornos comerciais e dúvidas técnicas sobre os simuladores.</p>
                </form>
            </div>

            <div class="contact-points">
                <div class="contact-point">
                    <div class="icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16v16H4z"/><path d="M4 6l8 7 8-7"/></svg></div>
                    <div>
                        <h3>Contato direto</h3>
                        <p><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></p>
                    </div>
                </div>
                <div class="contact-point">
                    <div class="icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21C7 17 3 13.5 3 9.5A5.5 5.5 0 0 1 12 6a5.5 5.5 0 0 1 9 3.5C21 13.5 17 17 12 21z"/></svg></div>
                    <div>
                        <h3>Independência</h3>
                        <p>Não somos uma instituição financeira ou banco. Atuamos exclusivamente na educação, simulação e orientação para renegociação de débitos.</p>
                    </div>
                </div>
                <div class="contact-point">
                    <div class="icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg></div>
                    <div>
                        <h3>Publicidade ética</h3>
                        <p>Apenas recomendamos parceiros de renegociação e fintechs de crédito devidamente regulamentados e autorizados pelo Banco Central do Brasil.</p>
                    </div>
                </div>
                <div class="contact-point">
                    <div class="icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 8h8M8 12h8M8 16h5"/></svg></div>
                    <div>
                        <h3>Apoio ao leitor</h3>
                        <p>Nossos simuladores de juros e planilhas de orçamento mensal são totalmente gratuitos, livres de taxas ocultas e focados na sua autonomia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
