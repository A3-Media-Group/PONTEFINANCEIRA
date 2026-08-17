<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/posts-data.php';
require_once __DIR__ . '/includes/taxonomy.php';
require_once __DIR__ . '/includes/authors.php';

header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";

/**
 * lastmod de uma página estática = data de modificação do próprio arquivo
 * .php, sem precisar atualizar isso manualmente a cada deploy.
 */
function static_lastmod($file)
{
    $t = @filemtime(__DIR__ . '/' . $file);
    return $t ? date('Y-m-d', $t) : date('Y-m-d');
}
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url><loc><?php echo SITE_URL; ?>/</loc><lastmod><?php echo static_lastmod('index.php'); ?></lastmod><changefreq>weekly</changefreq><priority>1.0</priority></url>
    <url><loc><?php echo SITE_URL; ?>/financas-pessoais.php</loc><lastmod><?php echo static_lastmod('financas-pessoais.php'); ?></lastmod><changefreq>daily</changefreq><priority>0.9</priority></url>
    <url><loc><?php echo SITE_URL; ?>/calculadoras.php</loc><lastmod><?php echo static_lastmod('calculadoras.php'); ?></lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc><?php echo SITE_URL; ?>/simuladores-financeiros.php</loc><lastmod><?php echo static_lastmod('simuladores-financeiros.php'); ?></lastmod><changefreq>monthly</changefreq><priority>0.8</priority></url>
    <url><loc><?php echo SITE_URL; ?>/calculadoras/horas-extras.php</loc><lastmod><?php echo static_lastmod('calculadoras/horas-extras.php'); ?></lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc><?php echo SITE_URL; ?>/calculadoras/rescisao.php</loc><lastmod><?php echo static_lastmod('calculadoras/rescisao.php'); ?></lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc><?php echo SITE_URL; ?>/calculadoras/fgts.php</loc><lastmod><?php echo static_lastmod('calculadoras/fgts.php'); ?></lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc><?php echo SITE_URL; ?>/arquivos-gratuitos.php</loc><lastmod><?php echo static_lastmod('arquivos-gratuitos.php'); ?></lastmod><changefreq>monthly</changefreq><priority>0.6</priority></url>
    <url><loc><?php echo SITE_URL; ?>/sobre.php</loc><lastmod><?php echo static_lastmod('sobre.php'); ?></lastmod><changefreq>yearly</changefreq><priority>0.4</priority></url>
    <url><loc><?php echo SITE_URL; ?>/contato.php</loc><lastmod><?php echo static_lastmod('contato.php'); ?></lastmod><changefreq>yearly</changefreq><priority>0.4</priority></url>
    <?php foreach ($posts as $post): ?>
    <url>
        <loc><?php echo SITE_URL; ?>/artigo/<?php echo urlencode($post['slug']); ?></loc>
        <lastmod><?php echo !empty($post['updated']) ? $post['updated'] : $post['date']; ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    <?php endforeach; ?>
    <?php foreach (get_all_categories($posts) as $cat): ?>
    <url>
        <loc><?php echo SITE_URL; ?>/categoria/<?php echo $cat['slug']; ?></loc>
        <changefreq>weekly</changefreq>
        <priority>0.5</priority>
    </url>
    <?php endforeach; ?>
    <?php foreach (get_all_tags($posts) as $tag): ?>
    <url>
        <loc><?php echo SITE_URL; ?>/tag/<?php echo $tag['slug']; ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.3</priority>
    </url>
    <?php endforeach; ?>
    <?php foreach ($GLOBALS['authors'] as $author): ?>
    <url>
        <loc><?php echo SITE_URL; ?>/autor/<?php echo $author['slug']; ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.3</priority>
    </url>
    <?php endforeach; ?>
</urlset>
