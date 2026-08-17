<?php
/**
 * AUTORES — Ponte Financeira
 * ------------------------------------------------
 * Registro de autores/revisores usado no bloco de autoria dos artigos
 * (E-E-A-T) e na página /autor/[slug].
 *
 * DECISÃO EDITORIAL PENDENTE: os dados abaixo (nome, credencial, bio,
 * foto) são um placeholder genérico de "equipe editorial" para não
 * publicar uma identidade fictícia. Troque pelo autor/revisor real
 * (nome, credencial verificável — ex: CFP, CNPI, formação em Economia
 * — e foto) assim que definido. Veja o relatório final para detalhes.
 */

$GLOBALS['authors'] = [
    'equipe-ponte-financeira' => [
        'slug' => 'equipe-ponte-financeira',
        'name' => 'Equipe Ponte Financeira',
        'role' => 'Redação e curadoria de conteúdo',
        'bio' => 'A equipe editorial da Ponte Financeira pesquisa e revisa cada artigo com base em fontes oficiais — Banco Central, CVM, B3, Serasa — para traduzir temas financeiros complexos em orientação prática, sem jargão e sem promessas milagrosas.',
        'photo' => null, // /assets/img/autor-*.jpg quando definido
        'credentials' => 'Conteúdo revisado com base em fontes oficiais (BCB, CVM, B3, Serasa) — ver seção "Fontes" de cada artigo.',
    ],
];

/**
 * Retorna os dados de um autor pelo slug, com fallback para o autor padrão.
 */
function get_author($slug)
{
    $authors = $GLOBALS['authors'];
    return $authors[$slug] ?? $authors['equipe-ponte-financeira'];
}
