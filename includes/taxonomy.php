<?php
/**
 * TAXONOMIA — categorias e tags
 * ------------------------------------------------
 * Transforma as categorias/tags dos posts (hoje só etiquetas soltas)
 * em entidades de verdade, com slug e descrição própria, para gerar
 * páginas /categoria/[slug] e /tag/[slug] indexáveis.
 */

/**
 * Converte um rótulo ("Score de Crédito") em slug de URL ("score-de-credito").
 */
function slugify($text)
{
    $text = trim($text);
    $map = [
        'á'=>'a','à'=>'a','ã'=>'a','â'=>'a','ä'=>'a',
        'é'=>'e','è'=>'e','ê'=>'e','ë'=>'e',
        'í'=>'i','ì'=>'i','î'=>'i','ï'=>'i',
        'ó'=>'o','ò'=>'o','õ'=>'o','ô'=>'o','ö'=>'o',
        'ú'=>'u','ù'=>'u','û'=>'u','ü'=>'u',
        'ç'=>'c','ñ'=>'n',
        'Á'=>'a','À'=>'a','Ã'=>'a','Â'=>'a','Ä'=>'a',
        'É'=>'e','È'=>'e','Ê'=>'e','Ë'=>'e',
        'Í'=>'i','Ì'=>'i','Î'=>'i','Ï'=>'i',
        'Ó'=>'o','Ò'=>'o','Õ'=>'o','Ô'=>'o','Ö'=>'o',
        'Ú'=>'u','Ù'=>'u','Û'=>'u','Ü'=>'u',
        'Ç'=>'c','Ñ'=>'n',
    ];
    $text = strtr($text, $map);
    $text = mb_strtolower($text);
    $text = preg_replace('/[^a-z0-9]+/', '-', $text);
    return trim($text, '-');
}

/**
 * Descrições introdutórias por categoria (H1/intro/meta description das
 * páginas /categoria/[slug]). Categorias novas caem no texto genérico
 * de fallback — edite aqui para personalizar.
 */
function category_description($category_name)
{
    $map = [
        'Educação' => 'Guias práticos de educação financeira: como investir, montar reserva de emergência, entender juros compostos e tomar decisões com números, não com achismo.',
        'Notícias' => 'Cobertura de notícias de economia e finanças pessoais que afetam seu bolso — Selic, tarifas, benefícios trabalhistas e mudanças regulatórias, explicadas sem jargão.',
        'Finanças' => 'Análises e explicações sobre mercado financeiro, investimentos e indicadores econômicos, traduzidas para o dia a dia de quem não é especialista.',
        'Orçamento' => 'Métodos e planilhas para organizar o orçamento doméstico, fazer o dinheiro render até o fim do mês e blindar o sustento sob pressão.',
        'Renegociação' => 'Como negociar dívidas com bancos e credores de igual para igual, entender programas como o Desenrola e conseguir descontos reais.',
        'Score de Crédito' => 'Como consultar, entender e recuperar seu score de crédito — do Cadastro Positivo à reconstrução da reputação financeira depois de quitar dívidas.',
        'Cartão de Crédito' => 'Comparativos e guias sobre cartão de crédito: como escolher, entender taxas e usar o crédito rotativo a seu favor, não contra você.',
    ];
    return $map[$category_name] ?? ('Artigos da Ponte Financeira sobre ' . mb_strtolower($category_name) . ', explicados de forma direta e sem promessas milagrosas.');
}

/**
 * Retorna a lista de categorias únicas presentes em $posts, com slug e contagem.
 * [ ['name' => 'Educação', 'slug' => 'educacao', 'count' => 12], ... ]
 */
function get_all_categories($posts)
{
    $out = [];
    foreach ($posts as $post) {
        foreach ($post['category'] as $cat) {
            $slug = slugify($cat);
            if (!isset($out[$slug])) {
                $out[$slug] = ['name' => $cat, 'slug' => $slug, 'count' => 0];
            }
            $out[$slug]['count']++;
        }
    }
    uasort($out, function ($a, $b) { return $b['count'] <=> $a['count']; });
    return array_values($out);
}

/**
 * Retorna os posts de uma categoria pelo slug.
 */
function get_posts_by_category_slug($posts, $slug)
{
    return array_values(array_filter($posts, function ($p) use ($slug) {
        foreach ($p['category'] as $cat) {
            if (slugify($cat) === $slug) return true;
        }
        return false;
    }));
}

/**
 * Nome "bonito" da categoria a partir do slug (primeiro post encontrado).
 */
function category_name_from_slug($posts, $slug)
{
    foreach ($posts as $post) {
        foreach ($post['category'] as $cat) {
            if (slugify($cat) === $slug) return $cat;
        }
    }
    return null;
}

/**
 * Retorna a lista de tags únicas presentes em $posts, com slug e contagem.
 */
function get_all_tags($posts)
{
    $out = [];
    foreach ($posts as $post) {
        if (empty($post['tags'])) continue;
        foreach (explode(',', $post['tags']) as $tag) {
            $tag = trim($tag);
            if ($tag === '') continue;
            $slug = slugify($tag);
            if (!isset($out[$slug])) {
                $out[$slug] = ['name' => $tag, 'slug' => $slug, 'count' => 0];
            }
            $out[$slug]['count']++;
        }
    }
    uasort($out, function ($a, $b) { return $b['count'] <=> $a['count']; });
    return array_values($out);
}

function get_posts_by_tag_slug($posts, $slug)
{
    return array_values(array_filter($posts, function ($p) use ($slug) {
        if (empty($p['tags'])) return false;
        foreach (explode(',', $p['tags']) as $tag) {
            if (slugify(trim($tag)) === $slug) return true;
        }
        return false;
    }));
}

function tag_name_from_slug($posts, $slug)
{
    foreach ($posts as $post) {
        if (empty($post['tags'])) continue;
        foreach (explode(',', $post['tags']) as $tag) {
            $tag = trim($tag);
            if (slugify($tag) === $slug) return $tag;
        }
    }
    return null;
}
