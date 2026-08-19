<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Política de Privacidade | Ponte Financeira';
$page_description = 'Saiba quais dados a Ponte Financeira coleta, como usamos cookies e o Google AdSense, e como exercer seus direitos como titular de dados sob a LGPD.';
$page_url = SITE_URL . '/politica-privacidade.php';
$page_robots = 'index, follow';
$breadcrumb_json = breadcrumb_schema([
    ['Início', SITE_URL . '/'],
    ['Política de Privacidade', $page_url],
]);

include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <span class="eyebrow">Transparência</span>
        <h1>Política de Privacidade</h1>
        <p>Como a Ponte Financeira coleta, usa e protege seus dados pessoais — em conformidade com a Lei Geral de Proteção de Dados (Lei nº 13.709/2018).</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="article-body">
            <p><strong>Última atualização:</strong> <?php echo date('d/m/Y'); ?></p>

            <p>Esta Política de Privacidade explica como a Ponte Financeira ("nós", "nosso portal") coleta, utiliza, armazena e protege as informações dos visitantes e usuários do site <?php echo SITE_URL; ?>. Ao navegar por este site, você concorda com as práticas descritas abaixo.</p>

            <h2>1. Quais Dados Coletamos</h2>
            <p>Coletamos apenas os dados necessários para operar o site e melhorar sua experiência:</p>
            <ul>
                <li><strong>Formulário de contato:</strong> nome, e-mail e o conteúdo da mensagem enviada voluntariamente através da página <a href="/contato.php">Contato</a>. Esses dados são usados exclusivamente para responder à sua solicitação.</li>
                <li><strong>Newsletter:</strong> caso você se inscreva para receber nossos conteúdos por e-mail, armazenamos o endereço de e-mail informado para o envio das comunicações. Você pode cancelar a inscrição a qualquer momento através do link presente em cada e-mail enviado.</li>
                <li><strong>Cookies e dados de navegação:</strong> como a maioria dos sites, utilizamos cookies e tecnologias semelhantes para entender como os visitantes usam o portal, lembrar preferências e exibir publicidade — detalhado na seção 2 abaixo.</li>
                <li><strong>Dados de acesso:</strong> informações técnicas coletadas automaticamente pelo servidor, como endereço IP, tipo de navegador e páginas visitadas, usadas para fins de segurança e análise de tráfego.</li>
            </ul>
            <p>Não coletamos dados sensíveis (como informações de saúde, origem racial ou convicções religiosas) e não solicitamos documentos, senhas ou dados bancários através deste site.</p>

            <h2>2. Cookies e Publicidade (Google AdSense)</h2>
            <p>Este site exibe anúncios através do <strong>Google AdSense</strong>. Para isso, o Google e seus parceiros publicitários podem usar cookies e identificadores semelhantes para veicular anúncios com base nas suas visitas anteriores a este e a outros sites.</p>
            <ul>
                <li>Terceiros, incluindo o Google, podem colocar e ler cookies no navegador do usuário, ou usar web beacons, para coletar informações como resultado da veiculação de anúncios neste site;</li>
                <li>Esses cookies podem ser usados para exibir anúncios personalizados com base no seu histórico de navegação e interesses;</li>
                <li>Também podemos usar cookies próprios (first-party) para lembrar preferências, como a confirmação do aviso de cookies exibido na primeira visita.</li>
            </ul>
            <p>Você pode se opor à veiculação de anúncios personalizados a qualquer momento nas configurações de anúncios do Google, disponíveis em <a href="https://adssettings.google.com" target="_blank" rel="noopener">adssettings.google.com</a>. Também é possível desativar cookies de terceiros diretamente nas configurações do seu navegador, embora isso possa afetar a exibição de alguns conteúdos e anúncios.</p>
            <p>Para mais informações sobre como o Google utiliza dados de sites parceiros, consulte a <a href="https://policies.google.com/technologies/partner-sites" target="_blank" rel="noopener">política de dados do Google para parceiros e sites</a>.</p>

            <h2>3. Como Usamos os Dados Coletados</h2>
            <p>Utilizamos os dados coletados para:</p>
            <ul>
                <li>Responder a mensagens enviadas pelo formulário de contato;</li>
                <li>Enviar conteúdos e novidades para assinantes da newsletter, quando aplicável;</li>
                <li>Entender como os visitantes utilizam o site, para melhorar a navegação e o conteúdo oferecido;</li>
                <li>Exibir anúncios relevantes através do Google AdSense;</li>
                <li>Cumprir obrigações legais e proteger a segurança do site contra abusos.</li>
            </ul>
            <p>Não vendemos nem compartilhamos seus dados pessoais com terceiros para fins diferentes dos descritos nesta política, exceto quando exigido por lei ou ordem judicial.</p>

            <h2>4. Seus Direitos Sob a LGPD</h2>
            <p>De acordo com a Lei Geral de Proteção de Dados (Lei nº 13.709/2018), você, como titular dos dados, tem direito a:</p>
            <ul>
                <li>Confirmar a existência de tratamento dos seus dados pessoais;</li>
                <li>Acessar os dados que temos sobre você;</li>
                <li>Corrigir dados incompletos, inexatos ou desatualizados;</li>
                <li>Solicitar a anonimização, bloqueio ou eliminação de dados desnecessários ou tratados em desconformidade com a lei;</li>
                <li>Solicitar a portabilidade dos seus dados a outro fornecedor de serviço;</li>
                <li>Revogar o consentimento dado anteriormente, quando aplicável (por exemplo, cancelando a inscrição na newsletter);</li>
                <li>Obter informações sobre com quem compartilhamos seus dados.</li>
            </ul>
            <p>Para exercer qualquer um desses direitos, entre em contato conosco pelo e-mail <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>. Responderemos à sua solicitação dentro do prazo previsto em lei.</p>

            <h2>5. Retenção e Segurança dos Dados</h2>
            <p>Mantemos os dados pessoais coletados apenas pelo tempo necessário para cumprir as finalidades descritas nesta política, ou conforme exigido por obrigações legais. Adotamos medidas técnicas e organizacionais razoáveis para proteger seus dados contra acesso não autorizado, perda ou uso indevido, ainda que nenhum sistema seja completamente livre de riscos.</p>

            <h2>6. Alterações a Esta Política</h2>
            <p>Esta Política de Privacidade pode ser atualizada periodicamente para refletir mudanças em nossas práticas ou na legislação aplicável. Recomendamos revisar esta página de tempos em tempos. A data da última atualização está indicada no topo deste documento.</p>

            <h2>7. Contato</h2>
            <p>Para dúvidas, solicitações relacionadas aos seus dados pessoais ou qualquer outra questão sobre esta Política de Privacidade, entre em contato pelo e-mail <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a> ou através do nosso <a href="/contato.php">formulário de contato</a>.</p>

            <div class="callout">
                <p><strong>Resumo rápido:</strong> coletamos apenas os dados que você nos fornece voluntariamente (contato e newsletter) e dados de navegação usados para anúncios via Google AdSense. Você pode desativar anúncios personalizados em <a href="https://adssettings.google.com" target="_blank" rel="noopener">adssettings.google.com</a> e exercer seus direitos LGPD escrevendo para <?php echo SITE_EMAIL; ?>.</p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
