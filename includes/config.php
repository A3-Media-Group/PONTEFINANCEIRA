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
