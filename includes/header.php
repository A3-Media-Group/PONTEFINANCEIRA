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
if (!isset($page_robots))       $page_robots = 'index, follow';
if (!isset($body_class))        $body_class = '';
if (!isset($page_prev))         $page_prev = null; // URL da página anterior (paginação)
if (!isset($page_next))         $page_next = null; // URL da próxima página (paginação)
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
<link rel="canonical" href="<?php echo htmlspecialchars($page_url); ?>">
<?php if ($page_prev): ?><link rel="prev" href="<?php echo htmlspecialchars($page_prev); ?>"><?php endif; ?>
<?php if ($page_next): ?><link rel="next" href="<?php echo htmlspecialchars($page_next); ?>"><?php endif; ?>
<meta name="robots" content="<?php echo htmlspecialchars($page_robots); ?>">
<meta name="theme-color" content="#0B1520">

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
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700;9..144,800;9..144,900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<?php $css_v = @filemtime(__DIR__ . '/../assets/css/style.css') ?: '1'; ?>
<link rel="stylesheet" href="/assets/css/style.css?v=<?php echo $css_v; ?>">

<?php if (!empty($schema_json)): ?>
<script type="application/ld+json"><?php echo $schema_json; ?></script>
<?php endif; ?>

<!-- Organization schema (todas as páginas) -->
<script type="application/ld+json">
<?php
$organization_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => SITE_NAME,
    'url' => SITE_URL,
    'logo' => SITE_URL . '/assets/img/logo.png',
    'email' => SITE_EMAIL,
    'description' => SITE_DEFAULT_DESCRIPTION,
];
$social_links = array_values(array_filter($GLOBALS['social_links'] ?? []));
if ($social_links) $organization_schema['sameAs'] = $social_links;
echo json_encode($organization_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>
</script>

<?php if (!empty($breadcrumb_json)): ?>
<script type="application/ld+json"><?php echo $breadcrumb_json; ?></script>
<?php endif; ?>

<?php if (!empty($faq_json)): ?>
<script type="application/ld+json"><?php echo $faq_json; ?></script>
<?php endif; ?>
</head>
<body class="<?php echo htmlspecialchars($body_class); ?>">

<a href="#conteudo" class="skip-link">Pular para o conteúdo</a>

<header class="site-header">
    <div class="container header-inner">
        <a href="/" class="logo">
            <img src="/assets/img/logo.png" alt="Ponte Financeira" class="logo-img" width="46" height="39">
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
