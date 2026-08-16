</main>

<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <a href="/" class="logo">
                <img src="/assets/img/logo.png" alt="Ponte Financeira" class="logo-img logo-img-footer" width="56" height="47">
            </a>
            <p><?php echo SITE_TAGLINE; ?></p>
            <p class="footer-disclaimer">Portal de educação financeira independente.<br>Não realizamos empréstimos.</p>
        </div>

        <div class="footer-col">
            <h3>Portal</h3>
            <ul>
                <?php foreach ($GLOBALS['main_menu'] as $label => $href): ?>
                    <li><a href="<?php echo $href; ?>"><?php echo strtoupper($label); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Fale Conosco</h3>
            <ul>
                <li><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></li>
                <li><a href="/contato.php">Formulário de contato</a></li>
            </ul>
            <p class="footer-fineprint">Educação financeira independente e sem jargões.</p>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <span>&copy; <?php echo date('Y'); ?> Ponte Financeira — Educação financeira independente e sem jargões.</span>
            <span class="footer-motto">ESTRATÉGIA · CLAREZA · LIBERDADE</span>
        </div>
    </div>
</footer>

<script src="/assets/js/main.js"></script>
</body>
</html>
