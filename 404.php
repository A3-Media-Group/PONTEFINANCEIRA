<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title = 'Página não encontrada | ' . SITE_NAME;
$page_description = 'A página que você procura não existe ou foi movida.';
$page_url = SITE_URL . '/404.php';
include __DIR__ . '/includes/header.php';
?>
<section class="section" style="text-align:center;padding:120px 0">
    <div class="container">
        <span class="eyebrow" style="justify-content:center">Erro 404</span>
        <h1>Essa ponte ainda não foi construída</h1>
        <p class="lede" style="margin:0 auto 24px">A página que você procura não existe ou foi movida. Que tal voltar para o início ou dar uma olhada nos nossos artigos?</p>
        <div class="hero-actions" style="justify-content:center">
            <a href="/" class="btn btn-primary">Voltar ao início</a>
            <a href="/financas-pessoais.php" class="btn btn-ghost">Ver artigos</a>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
