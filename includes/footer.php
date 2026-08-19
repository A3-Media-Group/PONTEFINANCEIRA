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
        <div class="container footer-legal-links">
            <a href="/politica-privacidade.php">Política de Privacidade</a>
            <span>&middot;</span>
            <a href="/termos-de-uso.php">Termos de Uso</a>
        </div>
    </div>
</footer>

<div id="cookieBanner" class="cookie-banner" hidden>
    <div class="cookie-banner-inner">
        <p>Usamos cookies para melhorar sua experiência e exibir anúncios. Ao continuar navegando, você concorda com nossa <a href="/politica-privacidade.php">Política de Privacidade</a>.</p>
        <button type="button" id="cookieBannerAccept" class="btn btn-primary">Entendi</button>
    </div>
</div>

<script src="/assets/js/main.js"></script>
<script>
(function () {
    var STORAGE_KEY = 'pf_cookie_consent';
    try {
        if (localStorage.getItem(STORAGE_KEY) === 'accepted') return;
    } catch (e) {
        return; // localStorage indisponível (ex.: modo privado restrito) — não exibe o banner
    }
    var banner = document.getElementById('cookieBanner');
    var acceptBtn = document.getElementById('cookieBannerAccept');
    if (!banner || !acceptBtn) return;
    banner.hidden = false;
    acceptBtn.addEventListener('click', function () {
        try { localStorage.setItem(STORAGE_KEY, 'accepted'); } catch (e) {}
        banner.hidden = true;
    });
})();
</script>
</body>
</html>
