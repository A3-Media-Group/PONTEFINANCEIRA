<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Termos de Uso | Ponte Financeira';
$page_description = 'Condições de uso do site Ponte Financeira: caráter educacional do conteúdo, ausência de consultoria financeira registrada e responsabilidades do usuário.';
$page_url = SITE_URL . '/termos-de-uso.php';
$page_robots = 'index, follow';
$breadcrumb_json = breadcrumb_schema([
    ['Início', SITE_URL . '/'],
    ['Termos de Uso', $page_url],
]);

include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <span class="eyebrow">Condições de uso</span>
        <h1>Termos de Uso</h1>
        <p>As regras que regem o uso do site Ponte Financeira e do conteúdo educacional que publicamos.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="article-body">
            <p><strong>Última atualização:</strong> <?php echo date('d/m/Y'); ?></p>

            <p>Ao acessar e utilizar o site <?php echo SITE_URL; ?> ("Ponte Financeira", "o site", "nós"), você concorda com os termos e condições descritos abaixo. Se você não concorda com algum destes termos, recomendamos que não utilize o site.</p>

            <h2>1. Natureza do Conteúdo</h2>
            <p>Todo o conteúdo publicado na Ponte Financeira — artigos, guias, calculadoras, simuladores e planilhas — tem caráter <strong>exclusivamente educacional e informativo</strong>. Nosso objetivo é ajudar o leitor a entender conceitos de finanças pessoais, crédito, dívidas e investimentos de forma acessível.</p>

            <h2>2. Não Somos Consultoria Financeira Registrada</h2>
            <p>A Ponte Financeira <strong>não é uma instituição financeira, corretora, consultoria de investimentos ou assessoria financeira registrada</strong> junto a órgãos reguladores como a Comissão de Valores Mobiliários (CVM) ou o Banco Central do Brasil. Não realizamos empréstimos, não intermediamos operações de crédito e não recomendamos a compra, venda ou manutenção de ativos financeiros específicos.</p>
            <p>O conteúdo publicado não deve ser interpretado como recomendação individualizada de investimento, aconselhamento jurídico, contábil ou tributário. Antes de tomar decisões financeiras relevantes, recomendamos consultar um profissional devidamente habilitado e registrado nos órgãos competentes.</p>

            <h2>3. Ausência de Garantia de Resultados</h2>
            <p>As calculadoras, simuladores e exemplos numéricos disponíveis no site servem para fins ilustrativos e educacionais. Eles não constituem garantia de resultados futuros, rentabilidade, aprovação de crédito ou sucesso em negociações de dívidas. Rentabilidades passadas não garantem rentabilidades futuras, e cenários simulados podem não refletir com exatidão sua situação financeira real.</p>

            <h2>4. Uso por Conta e Risco do Usuário</h2>
            <p>O uso das informações, ferramentas e conteúdos disponíveis neste site é feito por conta e risco exclusivo do usuário. A Ponte Financeira não se responsabiliza por decisões financeiras tomadas com base no conteúdo publicado, nem por eventuais perdas, danos ou prejuízos, diretos ou indiretos, decorrentes do uso do site.</p>

            <h2>5. Links Para Sites de Terceiros</h2>
            <p>O site pode conter links para páginas externas, incluindo instituições financeiras, órgãos governamentais, parceiros e anunciantes (incluindo anúncios veiculados através do Google AdSense). Esses links são fornecidos apenas para conveniência do usuário. Não temos controle sobre o conteúdo, as políticas de privacidade ou as práticas desses sites de terceiros, e não nos responsabilizamos por eles. O acesso a sites externos é feito por conta e risco do usuário.</p>

            <h2>6. Propriedade Intelectual</h2>
            <p>Todo o conteúdo original publicado na Ponte Financeira — textos, layout, identidade visual e ferramentas — é protegido por direitos autorais. A reprodução total ou parcial sem autorização prévia, exceto para uso pessoal e não comercial com a devida citação da fonte, não é permitida.</p>

            <h2>7. Alterações Nestes Termos</h2>
            <p>Podemos atualizar estes Termos de Uso periodicamente para refletir mudanças em nossas práticas, ferramentas ou na legislação aplicável. O uso continuado do site após qualquer alteração implica na aceitação dos novos termos. A data da última atualização está indicada no topo deste documento.</p>

            <h2>8. Legislação Aplicável</h2>
            <p>Estes Termos de Uso são regidos pelas leis da República Federativa do Brasil. Eventuais disputas relacionadas ao uso deste site serão submetidas ao foro competente conforme a legislação brasileira.</p>

            <h2>9. Contato</h2>
            <p>Para dúvidas sobre estes Termos de Uso, entre em contato pelo e-mail <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a> ou através do nosso <a href="/contato.php">formulário de contato</a>.</p>

            <div class="callout">
                <p><strong>Resumo rápido:</strong> somos um portal educacional, não uma consultoria financeira registrada. Nosso conteúdo não garante resultados e não substitui orientação profissional. O uso do site e de links externos é por sua conta e risco. Veja também nossa <a href="/politica-privacidade.php">Política de Privacidade</a>.</p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
