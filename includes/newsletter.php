<?php
/**
 * Bloco de captura de e-mail (newsletter), com a planilha gratuita como isca.
 * Uso: render_newsletter_block('artigo:slug-do-post') ou render_newsletter_block('home')
 */
function render_newsletter_block($source, $variant = 'box')
{
    $current_path = strtok($_SERVER['REQUEST_URI'], '?');
    $status = $_GET['inscrito'] ?? '';
    $class = $variant === 'inline' ? 'newsletter-box newsletter-box--inline' : 'newsletter-box';
    ?>
    <div class="<?php echo $class; ?>">
        <div class="newsletter-copy">
            <span class="eyebrow" style="color:#C9B27E">Planilha grátis</span>
            <h3>Leve a planilha de orçamento pessoal de graça</h3>
            <p>Deixe seu e-mail e receba a planilha gratuita, além de novos artigos e simuladores direto na sua caixa de entrada — sem spam.</p>
        </div>
        <?php if ($status === '1'): ?>
            <p class="newsletter-success">Recebemos seu e-mail! Confira sua caixa de entrada em instantes.</p>
        <?php else: ?>
            <form class="newsletter-form" method="post" action="/newsletter-subscribe.php">
                <input type="text" name="website" value="" style="position:absolute;left:-9999px" tabindex="-1" autocomplete="off">
                <input type="hidden" name="redirect" value="<?php echo htmlspecialchars($current_path); ?>">
                <input type="hidden" name="source" value="<?php echo htmlspecialchars($source); ?>">
                <label for="newsletter-email-<?php echo htmlspecialchars(md5($source)); ?>" class="sr-only">Seu e-mail</label>
                <input type="email" id="newsletter-email-<?php echo htmlspecialchars(md5($source)); ?>" name="email" placeholder="seu@email.com" required>
                <button type="submit" class="btn btn-primary">Quero a planilha grátis</button>
            </form>
            <?php if ($status === 'erro'): ?>
                <p class="newsletter-error">E-mail inválido — confira e tente de novo.</p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <?php
}
