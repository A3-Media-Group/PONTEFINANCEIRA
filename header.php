<?php
/**
 * HEADER — inclua no topo de cada página assim:
 *
 *   $page_title = 'Título da página | Ponte Financeira';
 *   $page_description = 'Descrição de até 160 caracteres para o Google.';
 *   $page_url = SITE_URL . '/pagina.php';
 *   $page_image = SITE_DEFAULT_IMAGE; // opcional
 *   $page_type = 'website'; // ou 'article'
 *   include __DIR__ . '/includes/header.php';
 */

if (!isset($page_title))        $page_title = SITE_NAME . ' | ' . SITE_TAGLINE;
if (!isset($page_description))  $page_description = SITE_DEFAULT_DESCRIPTION;
if (!isset($page_url))          $page_url = SITE_URL . strtok($_SERVER['REQUEST_URI'], '?');
if (!isset($page_image))        $page_image = SITE_DEFAULT_IMAGE;
if (!isset($page_type))         $page_type = 'website';
if (!isset($body_class))        $body_class = '';
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
<link rel="canonical" href="<?php echo htmlspecialchars($page_url); ?>">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#0E2438">

<!-- Open Graph -->
<meta property="og:type" content="<?php echo htmlspecialchars($page_type); ?>">
<meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($page_url); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($page_image); ?>">
<meta property="og:locale" content="pt_BR">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta name="twitter:image" content="<?php echo htmlspecialchars($page_image); ?>">

<!-- Favicon (troque pelos seus arquivos em /assets/img/) -->
<link rel="icon" type="image/png" href="/assets/img/favicon.png">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="/assets/css/style.css">

<?php if (!empty($schema_json)): ?>
<script type="application/ld+json"><?php echo $schema_json; ?></script>
<?php endif; ?>

<!-- Organization schema (todas as páginas) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "<?php echo SITE_NAME; ?>",
  "url": "<?php echo SITE_URL; ?>",
  "logo": "<?php echo SITE_URL; ?>/assets/img/logo.png",
  "email": "<?php echo SITE_EMAIL; ?>",
  "description": "<?php echo SITE_DEFAULT_DESCRIPTION; ?>"
}
</script>
</head>
<body class="<?php echo htmlspecialchars($body_class); ?>">

<a href="#conteudo" class="skip-link">Pular para o conteúdo</a>

<header class="site-header">
    <div class="container header-inner">
        <a href="/" class="logo">
            <span class="logo-mark" aria-hidden="true">
                <svg viewBox="0 0 40 28" width="34" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 24C2 24 10 8 20 8C30 8 38 24 38 24" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                    <circle cx="4" cy="25" r="2.5" fill="currentColor"/>
                    <circle cx="36" cy="25" r="2.5" fill="currentColor"/>
                </svg>
            </span>
            <span class="logo-text">Ponte<strong>Financeira</strong></span>
        </a>

        <button class="nav-toggle" id="navToggle" aria-expanded="false" aria-controls="siteNav" aria-label="Abrir menu">
            <span></span><span></span><span></span>
        </button>

        <nav class="site-nav" id="siteNav">
            <ul>
                <?php foreach ($GLOBALS['main_menu'] as $label => $href): ?>
                    <li><a href="<?php echo $href; ?>" class="<?php echo (($_SERVER['REQUEST_URI'] === $href) || ($href !== '/' && strpos($_SERVER['REQUEST_URI'], $href) === 0)) ? 'active' : ''; ?>"><?php echo $label; ?></a></li>
                <?php endforeach; ?>
            </ul>
            <a href="/simuladores-financeiros.php" class="btn btn-primary nav-cta">Simular Dívida Grátis</a>
        </nav>
    </div>
</header>

<main id="conteudo">
