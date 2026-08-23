<?php
/**
 * CRÉDITOS DE IMAGENS — atribuição de fotos reais buscadas via Openverse
 * (api.openverse.org), usada a partir de 2026-08-23 no lugar de imagens
 * geradas por IA para as capas dos posts.
 *
 * Cada entrada é indexada pelo slug do post e traz o mínimo exigido pela
 * licença Creative Commons de origem: autor, licença e link para a fonte
 * original. Mantenha este arquivo atualizado sempre que uma nova imagem
 * for baixada via Openverse pelo skill gerar-posts.
 */

$image_credits = [
    'ibc-br-recua-junho-2026-desaceleracao-economia' => [
        'title' => '001 Car factory assembly line - Opel factory in Gliwice, Poland',
        'creator' => 'Marek Ślusarczyk (Tupungato)',
        'license' => 'CC BY 3.0',
        'source_name' => 'Wikimedia Commons',
        'source_url' => 'https://commons.wikimedia.org/w/index.php?curid=116381354',
    ],
    'busca-credito-cresce-baixa-renda-serasa-2026' => [
        'title' => 'Free business person counting money',
        'creator' => 'Desconhecido (rawpixel)',
        'license' => 'CC0 1.0',
        'source_name' => 'rawpixel',
        'source_url' => 'https://www.rawpixel.com/image/5926379/photo-image-public-domain-laptop-money',
    ],
    'o-que-e-piramide-financeira-como-identificar' => [
        'title' => 'Free magnifying glass newspaper photo',
        'creator' => 'Desconhecido (rawpixel)',
        'license' => 'CC0 1.0',
        'source_name' => 'rawpixel',
        'source_url' => 'https://www.rawpixel.com/image/5904368/photo-image-public-domain-black-newspaper',
    ],
    'iof-o-que-e-como-funciona-emprestimos-cartao' => [
        'title' => 'Business professional engages in online shopping from home workspace while using credit card',
        'creator' => 'Shixart1985',
        'license' => 'CC BY 2.0',
        'source_name' => 'Wikimedia Commons',
        'source_url' => 'https://commons.wikimedia.org/w/index.php?curid=196345341',
    ],
    'divida-prescrita-quanto-tempo-sai-nome' => [
        'title' => 'Free hourglass clock black white',
        'creator' => 'Desconhecido (rawpixel)',
        'license' => 'CC0 1.0',
        'source_name' => 'rawpixel',
        'source_url' => 'https://www.rawpixel.com/image/5924603/photo-image-background-public-domain-glass',
    ],
    'desenrola-2-0-inadimplencia-dividas-renegociadas-10' => [
        'title' => 'Business agreement handshake at coffee shop',
        'creator' => 'rawpixel.com',
        'license' => 'CC0 1.0',
        'source_name' => 'Wikimedia Commons',
        'source_url' => 'https://commons.wikimedia.org/w/index.php?curid=67537455',
    ],
    'reincidencia-inadimplencia-pior-julho-historia-spc' => [
        'title' => 'Free public domain CC0 photo (calculadora)',
        'creator' => 'Desconhecido (rawpixel)',
        'license' => 'CC0 1.0',
        'source_name' => 'rawpixel',
        'source_url' => 'https://www.rawpixel.com/image/5946427/free-public-domain-cc0-photo',
    ],
    'o-que-e-cet-custo-efetivo-total-emprestimos' => [
        'title' => 'Free hand holding pen signing',
        'creator' => 'Desconhecido (rawpixel)',
        'license' => 'CC0 1.0',
        'source_name' => 'rawpixel',
        'source_url' => 'https://www.rawpixel.com/image/5903963/photo-image-background-public-domain-hand',
    ],
    'decimo-terceiro-salario-como-calcular-quando-pago' => [
        'title' => '20 Brazilian Real banknote featuring a Golden Lion Tamarin monkey',
        'creator' => 'Oleg Yunakov',
        'license' => 'CC BY-SA 4.0',
        'source_name' => 'Wikimedia Commons',
        'source_url' => 'https://commons.wikimedia.org/w/index.php?curid=193031378',
    ],
    'nas-nucleo-atendimento-superendividado-procon' => [
        'title' => 'Two people discussing business table',
        'creator' => 'Desconhecido (rawpixel)',
        'license' => 'CC0 1.0',
        'source_name' => 'rawpixel',
        'source_url' => 'https://www.rawpixel.com/image/3336872/free-photo-image-desk-meeting-men',
    ],
];

/**
 * Retorna o HTML de atribuição para o post informado, ou string vazia
 * se não houver crédito registrado (ex: imagens antigas geradas por IA).
 */
function image_credit_html($slug)
{
    global $image_credits;
    if (empty($image_credits[$slug])) {
        return '';
    }
    $c = $image_credits[$slug];
    return '<p class="image-credit">Foto: <a href="' . htmlspecialchars($c['source_url']) . '" target="_blank" rel="noopener">'
        . htmlspecialchars($c['creator']) . '</a>, ' . htmlspecialchars($c['license'])
        . ' (via ' . htmlspecialchars($c['source_name']) . ')</p>';
}
