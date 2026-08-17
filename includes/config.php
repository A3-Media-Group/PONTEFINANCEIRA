<?php
/**
 * CONFIGURAÇÃO GLOBAL DO SITE — Ponte Financeira
 * ------------------------------------------------
 * Edite os valores abaixo para alterar informações que aparecem
 * em várias páginas do site (nome, e-mail, textos padrão de SEO etc).
 */

define('SITE_NAME', 'Ponte Financeira');
define('SITE_URL', 'https://www.pontefinanceira.com.br');
define('SITE_TAGLINE', 'Estratégia realista e números claros para sua liberdade financeira.');
define('SITE_EMAIL', 'contato@pontefinanceira.com.br');
define('SITE_DEFAULT_DESCRIPTION', 'Aprenda a organizar finanças e sair das dívidas com guias práticos. Baixe uma planilha de orçamento gratuita e use nosso simulador de juros para retomar o controle financeiro de forma simples e direta.');
define('SITE_DEFAULT_IMAGE', SITE_URL . '/assets/img/og-default.jpg');
define('SITE_LOCALE', 'pt_BR');
define('SITE_PUBLISHER', 'Ponte Financeira');

/**
 * Adiciona um parâmetro de cache-busting (?v=timestamp) a um caminho de asset
 * (imagem, CSS etc.), baseado na data de modificação do arquivo. Assim, quando
 * uma imagem de capa é regenerada, o navegador busca a versão nova em vez de
 * usar a antiga do cache.
 */
function asset_v($relative_path)
{
    $file = __DIR__ . '/..' . $relative_path;
    $v = @filemtime($file) ?: '1';
    return $relative_path . '?v=' . $v;
}

/**
 * Redes sociais do portal, usadas no sameAs do schema.org/Organization.
 * DECISÃO EDITORIAL PENDENTE: preencha com as URLs reais quando existirem
 * perfis oficiais (Instagram, LinkedIn, YouTube etc). Deixe '' para omitir
 * — o header já ignora entradas vazias automaticamente.
 */
$GLOBALS['social_links'] = [
    // 'https://www.instagram.com/pontefinanceira',
    // 'https://www.linkedin.com/company/pontefinanceira',
];

/**
 * Gera (sob demanda, uma única vez) uma versão WebP de uma imagem JPG/PNG
 * e devolve o caminho relativo dela. Se o servidor não tiver suporte a
 * WebP no GD (função imagewebp indisponível), devolve null e quem chamou
 * deve usar o arquivo original como único <source>.
 *
 * O arquivo .webp gerado fica ao lado do original e é reaproveitado nas
 * próximas visitas — só é regravado se o original for mais novo.
 */
function webp_path($relative_path)
{
    if (!function_exists('imagewebp')) return null;

    $ext = strtolower(pathinfo($relative_path, PATHINFO_EXTENSION));
    if (!in_array($ext, ['jpg', 'jpeg', 'png'], true)) return null;

    $src_file = __DIR__ . '/..' . $relative_path;
    if (!is_file($src_file)) return null;

    $webp_relative = preg_replace('/\.(jpe?g|png)$/i', '.webp', $relative_path);
    $webp_file = __DIR__ . '/..' . $webp_relative;

    $src_time = @filemtime($src_file);
    $webp_time = @filemtime($webp_file);
    if ($webp_time !== false && $webp_time >= $src_time) {
        return $webp_relative; // já existe e está atualizado
    }

    $image = ($ext === 'png') ? @imagecreatefrompng($src_file) : @imagecreatefromjpeg($src_file);
    if (!$image) return null;

    if ($ext === 'png') {
        imagepalettetotruecolor($image);
        imagealphablending($image, true);
        imagesavealpha($image, true);
    }

    $ok = @imagewebp($image, $webp_file, 82);
    imagedestroy($image);

    return $ok ? $webp_relative : null;
}

/**
 * Imprime uma tag <picture> com fonte WebP (quando disponível no servidor)
 * e fallback para o arquivo original, já com cache-busting, dimensões
 * intrínsecas (evita layout shift) e lazy loading nativo.
 */
function picture_tag($relative_path, $alt, $width = 640, $height = 400, $class = '', $eager = false)
{
    $webp = webp_path($relative_path);
    $loading = $eager ? 'eager' : 'lazy';
    $fetchpriority = $eager ? ' fetchpriority="high"' : '';
    $alt_esc = htmlspecialchars($alt, ENT_QUOTES);
    $class_attr = $class ? ' class="' . htmlspecialchars($class, ENT_QUOTES) . '"' : '';

    $html = '<picture>';
    if ($webp) {
        $html .= '<source srcset="' . htmlspecialchars(asset_v($webp), ENT_QUOTES) . '" type="image/webp">';
    }
    $html .= '<img src="' . htmlspecialchars(asset_v($relative_path), ENT_QUOTES) . '" alt="' . $alt_esc . '"'
        . ' width="' . (int)$width . '" height="' . (int)$height . '"'
        . $class_attr
        . ' loading="' . $loading . '" decoding="async"' . $fetchpriority . '>';
    $html .= '</picture>';
    return $html;
}

/**
 * Gera o JSON-LD de BreadcrumbList a partir de uma lista [ [nome, url], ... ].
 * Use antes do include do header.php: $breadcrumb_json = breadcrumb_schema([...]);
 */
function breadcrumb_schema($items)
{
    $list = [];
    foreach ($items as $i => $item) {
        $list[] = [
            '@type' => 'ListItem',
            'position' => $i + 1,
            'name' => $item[0],
            'item' => $item[1],
        ];
    }
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $list,
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

/**
 * CTA de fim de artigo contextualizado por categoria — troca o box
 * genérico "Simule sua dívida" por uma chamada relevante ao assunto.
 * Retorna ['title' => ..., 'text' => ..., 'href' => ..., 'label' => ...]
 */
function contextual_cta($categories)
{
    $by_category = [
        'Orçamento' => [
            'title' => 'Organize seu orçamento com a planilha grátis',
            'text' => 'Baixe a planilha de orçamento pessoal e veja para onde seu dinheiro está indo todo mês.',
            'href' => '/arquivos-gratuitos.php',
            'label' => 'Baixar Planilha Grátis',
        ],
        'Renegociação' => [
            'title' => 'Simule sua renegociação antes de fechar acordo',
            'text' => 'Compare propostas de acordo e veja qual parcela realmente cabe no seu orçamento mensal.',
            'href' => '/simuladores-financeiros.php',
            'label' => 'Simular Renegociação',
        ],
        'Score de Crédito' => [
            'title' => 'Organize suas dívidas para recuperar o score',
            'text' => 'Calcule o impacto de quitar cada pendência e priorize o que mais pesa na sua pontuação.',
            'href' => '/calculadoras.php',
            'label' => 'Ver Calculadoras',
        ],
        'Cartão de Crédito' => [
            'title' => 'Compare o custo real antes de parcelar',
            'text' => 'Simule juros e CET antes de decidir entre parcelamento, cartão ou crédito pessoal.',
            'href' => '/simuladores-financeiros.php',
            'label' => 'Simular Juros e Parcelas',
        ],
        'Educação' => [
            'title' => 'Veja o impacto real dos juros compostos',
            'text' => 'Simule quanto seu dinheiro pode render (ou uma dívida pode crescer) ao longo do tempo.',
            'href' => '/simuladores-financeiros.php',
            'label' => 'Acessar Simuladores',
        ],
        'Finanças' => [
            'title' => 'Simule cenários antes de decidir',
            'text' => 'Calcule juros compostos, metas de investimento e o impacto de cada decisão no seu bolso.',
            'href' => '/simuladores-financeiros.php',
            'label' => 'Acessar Simuladores',
        ],
    ];
    foreach ($categories as $cat) {
        if (isset($by_category[$cat])) return $by_category[$cat];
    }
    return [
        'title' => 'Simule sua dívida agora',
        'text' => 'Calcule juros, parcelas e o real impacto de uma renegociação — de graça.',
        'href' => '/calculadoras.php',
        'label' => 'Acessar Calculadoras',
    ];
}

/**
 * Renderiza o breadcrumb visível (mesma lista usada no breadcrumb_schema).
 * O último item não vira link (é a página atual).
 */
function breadcrumb_html($items, $light = false)
{
    $html = '<p class="breadcrumbs' . ($light ? ' breadcrumbs-light' : '') . '">';
    $last = count($items) - 1;
    foreach ($items as $i => $item) {
        if ($i > 0) $html .= '<span>/</span>';
        if ($i < $last) {
            $html .= '<a href="' . htmlspecialchars($item[1]) . '">' . htmlspecialchars($item[0]) . '</a>';
        } else {
            $html .= htmlspecialchars($item[0]);
        }
    }
    $html .= '</p>';
    return $html;
}

/**
 * Pills de categoria (no máximo 2 por card), já como links para
 * /categoria/[slug] — usado nos cards de artigo e no cabeçalho do artigo.
 */
function category_pills($categories, $max = 2)
{
    require_once __DIR__ . '/taxonomy.php';
    $html = '';
    foreach (array_slice($categories, 0, $max) as $cat) {
        $html .= '<a class="post-cat" href="/categoria/' . htmlspecialchars(slugify($cat), ENT_QUOTES) . '">' . htmlspecialchars($cat) . '</a>';
    }
    return $html;
}

/**
 * Card de artigo (thumb + pills + título + resumo + meta), usado em toda
 * listagem (home, /financas-pessoais.php, categoria, tag, autor, relacionados).
 *
 * IMPORTANTE: o card NÃO é um único <a> envolvendo tudo — os pills de
 * categoria (category_pills) já são links, e HTML não permite <a> dentro
 * de <a> (o navegador "conserta" isso quebrando a árvore do DOM, jogando
 * o título/resumo pra fora do card visualmente). Por isso a estrutura é
 * uma <div> com dois links independentes (imagem e título) + os pills
 * como <a> separados, com um "stretched link" via CSS para a área em
 * volta do título continuar clicável.
 */
function post_card_html($post)
{
    $href = '/artigo/' . urlencode($post['slug']);
    $href_esc = htmlspecialchars($href, ENT_QUOTES);
    $html = '<div class="post-card">';
    $html .= '<a class="post-card-thumb-link" href="' . $href_esc . '" tabindex="-1" aria-hidden="true">';
    $html .= '<div class="thumb">' . picture_tag($post['image'], $post['title'], 640, 400) . '</div>';
    $html .= '</a>';
    $html .= '<div class="post-card-body">';
    $html .= '<div class="post-cats">' . category_pills($post['category']) . '</div>';
    $html .= '<h3><a class="post-card-title-link" href="' . $href_esc . '">' . htmlspecialchars($post['title']) . '</a></h3>';
    $html .= '<p>' . htmlspecialchars($post['excerpt']) . '</p>';
    $html .= '<div class="post-meta"><span>' . date('d/m/Y', strtotime($post['date'])) . '</span><span>&middot;</span><span>' . htmlspecialchars($post['read_time']) . ' de leitura</span></div>';
    $html .= '</div></div>';
    return $html;
}

// Menu principal (usado no header e no footer)
$GLOBALS['main_menu'] = [
    'Início'      => '/',
    'Artigos'     => '/financas-pessoais.php',
    'Calculadoras'=> '/calculadoras.php',
    'Simuladores' => '/simuladores-financeiros.php',
    'Download'    => '/arquivos-gratuitos.php',
    'Sobre Nós'   => '/sobre.php',
    'Contato'     => '/contato.php',
];
