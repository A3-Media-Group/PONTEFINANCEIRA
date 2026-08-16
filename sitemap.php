<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/posts-data.php';

header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url><loc><?php echo SITE_URL; ?>/</loc><changefreq>weekly</changefreq><priority>1.0</priority></url>
    <url><loc><?php echo SITE_URL; ?>/financas-pessoais.php</loc><changefreq>daily</changefreq><priority>0.9</priority></url>
    <url><loc><?php echo SITE_URL; ?>/calculadoras.php</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc><?php echo SITE_URL; ?>/simuladores-financeiros.php</loc><changefreq>monthly</changefreq><priority>0.8</priority></url>
    <url><loc><?php echo SITE_URL; ?>/calculadoras/horas-extras.php</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc><?php echo SITE_URL; ?>/calculadoras/rescisao.php</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc><?php echo SITE_URL; ?>/calculadoras/fgts.php</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc><?php echo SITE_URL; ?>/arquivos-gratuitos.php</loc><changefreq>monthly</changefreq><priority>0.6</priority></url>
    <url><loc><?php echo SITE_URL; ?>/sobre.php</loc><changefreq>yearly</changefreq><priority>0.4</priority></url>
    <url><loc><?php echo SITE_URL; ?>/contato.php</loc><changefreq>yearly</changefreq><priority>0.4</priority></url>
    <?php foreach ($posts as $post): ?>
    <url>
        <loc><?php echo SITE_URL; ?>/artigo.php?slug=<?php echo urlencode($post['slug']); ?></loc>
        <lastmod><?php echo $post['date']; ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    <?php endforeach; ?>
</urlset>
