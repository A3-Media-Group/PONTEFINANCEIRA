<?php
/**
 * BASE DE DADOS DOS ARTIGOS — Ponte Financeira
 * ------------------------------------------------
 * Cada artigo é um item deste array. Para publicar um post novo,
 * copie um bloco, ajuste os campos e salve. Não é necessário mexer
 * em mais nenhum arquivo — a listagem (financas-pessoais.php) e a
 * página do artigo (artigo.php) leem tudo daqui automaticamente.
 *
 * Campos:
 *  slug      -> parte final da URL (sem espaços, sem acento)
 *  title     -> título do artigo (H1 + <title>)
 *  category  -> array com uma ou mais categorias
 *  date      -> data de publicação (AAAA-MM-DD)
 *  read_time -> tempo estimado de leitura, ex: "4 min"
 *  excerpt   -> resumo/meta description (até ~160 caracteres é o ideal p/ SEO)
 *  image     -> caminho da imagem de capa (opcional)
 *  full      -> true = artigo com conteúdo completo migrado
 *               false = conteúdo resumido (ver README.md, seção "Próximos passos")
 *  content   -> corpo do artigo em HTML (use <h2>, <p>, <ul> etc.)
 */

$posts = [

    // =========================================================
    // ÚLTIMOS 2 POSTS — conteúdo completo migrado do site original
    // =========================================================

    [
        'slug' => 'como-comecar-a-investir',
        'title' => 'Como Começar a Investir: Guia Completo para Iniciantes em 2026',
        'category' => ['Educação'],
        'date' => '2026-08-03',
        'read_time' => '4 min',
        'excerpt' => 'Descubra como começar a investir do zero, criar sua reserva de emergência, conhecer os principais tipos de investimentos e dar os primeiros passos rumo à independência financeira.',
        'image' => '/assets/img/post-investir.jpg',
        'full' => true,
        'content' => '
<p>Investir é uma das formas mais eficientes de construir patrimônio, proteger seu dinheiro da inflação e alcançar objetivos financeiros de curto, médio e longo prazo. Porém, muitas pessoas deixam de investir por acreditarem que é necessário ter muito dinheiro ou conhecimento avançado.</p>
<p>A boa notícia é que isso não é verdade. Atualmente, existem investimentos acessíveis que permitem começar com valores baixos, além de diversas plataformas que simplificam todo o processo. O próprio Tesouro Direto permite aplicações com valores reduzidos, ampliando o acesso aos investimentos para milhões de brasileiros.</p>

<h2>Por Que Você Deve Começar a Investir?</h2>
<p>Deixar dinheiro parado na conta corrente significa perder poder de compra ao longo do tempo devido à inflação. Ao investir, você faz seu dinheiro trabalhar para você, podendo:</p>
<ul>
    <li>Construir uma reserva financeira;</li>
    <li>Realizar objetivos pessoais;</li>
    <li>Proteger patrimônio da inflação;</li>
    <li>Planejar a aposentadoria;</li>
    <li>Buscar independência financeira no longo prazo.</li>
</ul>
<p>A CVM destaca que o investimento consciente e a educação financeira são fundamentais para que investidores compreendam seus direitos, deveres e os riscos envolvidos em cada aplicação.</p>

<h2>Passo 1: Organize Suas Finanças</h2>
<p>Antes de investir, é importante conhecer sua realidade financeira. Faça um levantamento de:</p>
<ul>
    <li>Receitas mensais;</li>
    <li>Gastos fixos;</li>
    <li>Gastos variáveis;</li>
    <li>Dívidas existentes;</li>
    <li>Capacidade de poupança.</li>
</ul>
<p>O Banco Central ressalta que a educação financeira contribui para melhores decisões relacionadas a gastos, poupança e uso consciente do crédito.</p>

<h2>Passo 2: Monte Sua Reserva de Emergência</h2>
<p>Este é o passo mais importante para quem está começando. A reserva de emergência tem o objetivo de proteger você contra imprevistos como desemprego, problemas de saúde, reparos emergenciais e redução temporária de renda.</p>
<p>Especialistas recomendam que essa reserva seja mantida em aplicações com segurança e liquidez, permitindo acesso rápido ao dinheiro quando necessário.</p>
<p><strong>Exemplos de ativos utilizados para reserva de emergência</strong> <em>(apenas exemplos educacionais, sem caráter de recomendação):</em></p>
<ul>
    <li>Tesouro Selic;</li>
    <li>CDB com liquidez diária;</li>
    <li>Contas remuneradas de instituições autorizadas.</li>
</ul>
<p>O Tesouro Direto é considerado uma das alternativas mais acessíveis e seguras do mercado brasileiro, com possibilidade de resgate e acompanhamento pelo Portal do Investidor.</p>

<h2>Passo 3: Defina Seus Objetivos</h2>
<p>Todo investimento precisa ter um objetivo. Pergunte-se:</p>
<p><strong>Curto Prazo (até 2 anos):</strong> viagem, troca de veículo, reforma.</p>
<p><strong>Médio Prazo (2 a 5 anos):</strong> entrada de imóvel, especialização profissional, expansão de negócios.</p>
<p><strong>Longo Prazo (acima de 5 anos):</strong> aposentadoria, independência financeira, construção de patrimônio.</p>
<p>Segundo a B3, investimentos devem ser escolhidos considerando objetivos, prazo e perfil do investidor.</p>

<h2>Passo 4: Conheça os Principais Tipos de Investimentos</h2>
<h3>Renda Fixa</h3>
<p>São investimentos com regras de rentabilidade previamente definidas ou vinculadas a indicadores conhecidos. Exemplos: Tesouro Direto, CDB, LCI, LCA e Debêntures. A B3 destaca que a renda fixa é geralmente a porta de entrada para novos investidores devido à previsibilidade e menor volatilidade quando comparada à renda variável.</p>
<h3>Renda Variável</h3>
<p>Possui maior potencial de retorno, mas também maiores oscilações. Exemplos: Ações, ETFs, Fundos Imobiliários (FIIs) e BDRs. <strong>Importante:</strong> investimentos em renda variável podem sofrer quedas significativas de preço e exigem visão de longo prazo.</p>

<h2>Passo 5: Abra Conta em uma Corretora</h2>
<p>Para investir, normalmente é necessário possuir conta em uma corretora ou instituição habilitada. O processo costuma envolver cadastro, validação de identidade, questionário de perfil de investidor, transferência dos recursos e escolha dos investimentos. O questionário de suitability é uma exigência regulatória para identificar a adequação dos produtos ao perfil do investidor.</p>

<h2>Erros Mais Comuns de Quem Está Começando</h2>
<ul>
    <li>Investir sem reserva de emergência;</li>
    <li>Seguir dicas de redes sociais sem estudar;</li>
    <li>Buscar ganhos rápidos;</li>
    <li>Concentrar todo dinheiro em um único ativo;</li>
    <li>Ignorar taxas e impostos;</li>
    <li>Investir sem definir objetivos.</li>
</ul>

<h2>Quanto Dinheiro Preciso para Começar?</h2>
<p>Um dos maiores mitos sobre investimentos é acreditar que apenas pessoas ricas conseguem investir. Hoje já é possível começar com valores baixos em diversas modalidades de investimento. O mais importante não é o valor inicial, mas a consistência dos aportes ao longo do tempo.</p>

<h2>Conclusão</h2>
<p>Começar a investir não precisa ser complicado. O caminho costuma seguir uma sequência simples: organizar as finanças, criar uma reserva de emergência, definir objetivos, conhecer seu perfil de investidor e iniciar gradualmente em investimentos adequados ao seu perfil.</p>
<p>Lembre-se: investir é uma jornada de longo prazo. Quanto antes você começar, maior tende a ser o impacto dos juros compostos na construção do seu patrimônio.</p>

<div class="callout">
    <p><strong>Aviso importante:</strong> este conteúdo possui caráter exclusivamente educacional e informativo. Os ativos mencionados são apenas exemplos de investimentos disponíveis no mercado e não constituem recomendação de compra, venda ou manutenção de qualquer ativo financeiro. Antes de investir, avalie seu perfil de risco e, se necessário, procure orientação profissional habilitada.</p>
</div>

<h2>Utilize Nossa Calculadora Financeira</h2>
<p>Quer descobrir quanto seu dinheiro pode render ao longo do tempo? Acesse agora nossa <a href="/calculadoras.php">calculadora financeira</a> e simule cenários de investimentos, juros compostos, objetivos de patrimônio e aportes mensais.</p>
',
        'tags' => 'investimentos, como investir, investimentos para iniciantes, tesouro direto, renda fixa, ações, juros compostos, educação financeira, independência financeira, planejamento financeiro, reserva de emergência, finanças pessoais',
    ],

    [
        'slug' => 'seguranca-compras-online',
        'title' => 'Segurança nas Compras Online: IA contra Fraudes Digitais',
        'category' => ['Notícias'],
        'date' => '2026-08-03',
        'read_time' => '1 min',
        'excerpt' => 'Nos últimos anos, as compras online se tornaram essenciais, mas o aumento das fraudes digitais levanta preocupações sobre a segurança nas transações. Descubra como Visa e Mastercard estão utilizando inteligência artificial para proteger os consumidores.',
        'image' => '/assets/img/post-compras-online.jpg',
        'full' => true,
        'content' => '
<h2>O Papel da Inteligência Artificial</h2>
<p>A IA vem revolucionando a forma como as empresas lidam com a segurança nas transações online. Através de análises avançadas de dados e algoritmos aprimorados, ela consegue identificar comportamentos suspeitos e padrões de compra que podem indicar fraudes. Isso permite que Visa e Mastercard, por exemplo, bloqueiem transações comprometidas antes mesmo que o consumidor tenha consciência do problema.</p>

<h2>Protocolos de Segurança em Desenvolvimento</h2>
<p>Recentemente, Visa e Mastercard anunciaram a criação de novos protocolos de segurança baseados em IA para fortalecer ainda mais a proteção contra golpes no comércio eletrônico. Esses protocolos utilizam técnicas de aprendizado de máquina para criar perfis detalhados de usuários e transações, permitindo uma verificação mais precisa e rápida das compras. Isso não apenas aumenta a confiança do consumidor, como também diminui as taxas de aprovação negadas por questões de segurança.</p>

<h2>Benefícios para o Consumidor</h2>
<p>Os consumidores se beneficiam enormemente dessas inovações. Com sistemas de IA em vigor, as compras online se tornam consideravelmente mais seguras, reduzindo o risco de fraudes. Além disso, os protocolos avançados garantem que os usuários possam fazer suas compras com mais tranquilidade, sabendo que suas informações financeiras estão sendo protegidas por tecnologia de ponta.</p>

<h2>Conclusão</h2>
<p>À medida que as compras online continuam a crescer, a segurança se torna uma preocupação cada vez mais importante. As iniciativas de Visa e Mastercard de adotar a IA em seus protocolos de segurança são passos cruciais para proteger os consumidores e garantir que suas experiências de compra sejam positivas e seguras. Com essas tecnologias em desenvolvimento, o futuro das compras online parece mais seguro do que nunca.</p>
',
        'tags' => 'segurança digital, fraudes online, inteligência artificial, visa, mastercard, compras online, cartão de crédito',
    ],

];

/**
 * =========================================================
 * DEMAIS ARTIGOS DO SITE ORIGINAL (resumo migrado)
 * =========================================================
 * Estes 45 artigos foram inventariados a partir do site atual
 * (título, categoria, data e resumo reais). O corpo abaixo foi
 * escrito a partir desse resumo original. Para trazer o texto
 * integral de qualquer um deles, veja o README.md > "Próximos passos".
 */
$posts_resumo = [
    ['taxa-selic', 'Taxa Selic: Expectativa de Corte e Política Monetária', ['Finanças','Notícias'], '2026-08-03', '5 min',
        'A taxa Selic, fixada em 12,75%, é vital para a política monetária brasileira. Analistas preveem um possível corte na Selic em reuniões futuras do Copom, visando estimular o crescimento econômico em meio a desafios.'],
    ['nova-lei-vale-alimentacao-refeicao-2026', 'Nova Lei do Vale-Alimentação e Refeição em 2026: O Que Muda?', ['Orçamento','Notícias'], '2026-07-29', '1 min',
        'Entenda as novas regras do vale-alimentação (VA) e refeição (VR) em 2026. Saiba como funciona a interoperabilidade e os limites de taxas para os comércios.'],
    ['vale-refeicao', 'Vale-Refeição Acabando Antes do Dia 15? Entenda a Crise do Benefício em 2026', ['Notícias'], '2026-07-29', '1 min',
        'Um levantamento recente realizado pela Pluxee (antiga Sodexo) revelou um dado preocupante para o bolso dos trabalhadores brasileiros em 2026: o saldo do vale-refeição dura, em média, apenas 9 dias úteis.'],
    ['desenrola-brasil-2026', 'Desenrola Brasil 2026 Prorrogado: O Que Muda e Como Aproveitar o Novo Prazo', ['Notícias'], '2026-07-29', '2 min',
        'Detalhamos tudo o que você precisa saber sobre a extensão do Desenrola Brasil 2026, os resultados do programa até agora e como você pode se planejar para renegociar suas pendências financeiras de vez.'],
    ['metodo-bola-de-neve', 'O Método Bola de Neve para Quitar Dívidas', ['Educação'], '2026-07-28', '3 min',
        'Se você está lutando contra múltiplas dívidas, a resposta para o sucesso financeiro pode não estar em planilhas complexas ou na matemática pura, mas sim na psicologia humana: o Método Bola de Neve.'],
    ['fundo-de-garantia', 'Fundo de Garantia: Proteção ao Trabalhador Brasileiro', ['Notícias'], '2026-07-28', '5 min',
        'O Fundo de Garantia do Tempo de Serviço (FGTS) é uma reserva financeira essencial para a proteção do trabalhador brasileiro, criada em 1966. Ele oferece segurança social em casos como dispensa sem justa causa, compra da casa própria e emergências.'],
    ['estresse-financeiro', 'Dinheiro Lidera Preocupações no Brasil: Como Quebrar o Ciclo do Estresse Financeiro', ['Score de Crédito','Finanças'], '2026-07-27', '2 min',
        'Uma nova pesquisa revela que o dinheiro preocupa mais os brasileiros do que saúde e família. Entenda os impactos na saúde mental, o estresse financeiro e os principais vilões do orçamento — e como começar a virar esse jogo.'],
    ['desenrola-20', 'Ainda Dá Tempo de Sair do Vermelho: Prazo para Aderir ao Desenrola 2.0 Termina em 3 de Agosto', ['Renegociação'], '2026-07-27', '3 min',
        'O prazo do Novo Desenrola 2.0 acaba no dia 3 de agosto. Saiba quem tem direito, como usar o seu FGTS para quitar débitos e o passo a passo para limpar o nome com até 90% de desconto.'],
    ['melhores-cartoes-credito-2026', 'Os Melhores Cartões de Crédito 2026: Alta Renda, Ultra e VIP', ['Cartão de Crédito'], '2026-07-26', '3 min',
        'Descubra quais são os melhores cartões de crédito 2026 no Brasil para alta renda e intermediários. Compare benefícios, milhas e salas VIP, entre outros diferenciais.'],
    ['bolsa-de-valores-assimetria', 'A Bolsa de Valores Brasileira é a Maior Oportunidade de Assimetria Hoje? O que diz a Verde Asset', ['Finanças'], '2026-07-26', '2 min',
        'Se você está acompanhando o noticiário financeiro, provavelmente notou um misto de pessimismo com a economia e otimismo cauteloso com ações específicas.'],
    ['transformacao-financas-gestao-corporativa', 'Transformação em Finanças e Gestão Corporativa', ['Educação'], '2026-07-25', '3 min',
        'O mercado de finanças e gestão corporativa está passando por uma rápida transformação, impulsionada pela volatilidade das taxas de juros, avanços em inteligência artificial e a crescente importância dos critérios ESG.'],
    ['indice-bovespa', 'Índice Bovespa: O Termômetro do Mercado Brasileiro', ['Finanças'], '2026-07-25', '8 min',
        'O Índice Bovespa, ou Ibovespa, é o principal indicador do mercado de ações brasileiro, criado em 1968 pela B3. Ele reflete a variação média das cotações das ações e é essencial para investidores e analistas.'],
    ['tarifas-de-comercio', 'Tarifas de Comércio e Política Econômica nos EUA', ['Notícias'], '2026-07-24', '9 min',
        'Nos últimos anos, as tarifas de comércio se tornaram um foco central na política econômica dos Estados Unidos. Entenda os impactos da imposição de tarifas elevadas sobre o cenário econômico global.'],
    ['motorista-de-aplicativo', 'Crédito para Motorista de Aplicativo: Como Funciona o Programa do Banco do Brasil e Como Aproveitar', ['Score de Crédito'], '2026-07-24', '4 min',
        'A vida de um motorista de aplicativo é repleta de desafios financeiros, especialmente em relação ao acesso a crédito justo. Veja como as mudanças no cenário podem facilitar a comprovação de renda e a obtenção de empréstimos.'],
    ['perigo-cartao-credito-banco-central', 'O Perigo Invisível do Cartão de Crédito: Por Que as Dívidas sem Garantia Assustam o Banco Central', ['Notícias'], '2026-07-24', '5 min',
        'Durante a Expert XP 2026, o presidente do Banco Central, Gabriel Galípolo, destacou o crescente problema de crédito no Brasil, especialmente nas operações sem garantia.'],
    ['rescisao-contrato-de-trabalho', 'Rescisão Contrato de Trabalho: Seus Direitos', ['Educação'], '2026-07-23', '2 min',
        'Entenda seus direitos na rescisão de contrato de trabalho sem justa causa. Utilize nossa calculadora de rescisão para descobrir o valor que você tem a receber ao ser desligado do emprego.'],
    ['fgts-calculadora', 'Tudo o Que Você Precisa Saber Sobre FGTS e uma Super Calculadora Para Gerenciar Seu Fundo de Garantia', ['Educação'], '2026-07-23', '5 min',
        'Descubra tudo sobre o FGTS e como nossa calculadora pode ajudar você a gerenciar seu Fundo de Garantia do Tempo de Serviço de forma fácil e precisa.'],
    ['novas-tarifas-casa-branca', 'Novas Tarifas da Casa Branca e Seu Impacto Comercial', ['Notícias'], '2026-07-23', '8 min',
        'Recentemente, a Casa Branca anunciou novas tarifas que podem impactar significativamente as relações comerciais internacionais, em um contexto de proteção às indústrias locais.'],
    ['programa-brasil-soberano-3', 'Programa Brasil Soberano 3: Desenvolvimento Sustentável', ['Notícias'], '2026-07-23', '8 min',
        'O Programa Brasil Soberano 3 é uma iniciativa do governo que visa enfrentar desafios econômicos, promovendo o desenvolvimento sustentável com um fundo de R$ 135 bilhões.'],
    ['entenda-o-tarifaco', 'Entenda o Tarifaço e Suas Consequências', ['Notícias'], '2026-07-23', '5 min',
        'O tarifaço, que se refere ao aumento das tarifas de importação e taxas, impacta diretamente o comércio exterior e a competitividade das empresas brasileiras.'],
    ['preco-do-petroleo', 'Flutuações do Preço do Petróleo: Alta Recente', ['Notícias'], '2026-07-23', '5 min',
        'O preço do petróleo tem flutuado significativamente, alcançando US$ 94 por barril, refletindo a forte demanda em economias em desenvolvimento.'],
    ['instabilidade-mercado-financeiro', 'Instabilidade do Mercado Financeiro e Desafios', ['Notícias'], '2026-07-23', '2 min',
        'A instabilidade do mercado financeiro gera desafios significativos para a precificação de emissões bancárias. Entenda como fatores econômicos e políticos impactam a confiança dos investidores.'],
    ['cursos-gratuitos-b3', 'Cursos Gratuitos da B3: Educação Financeira no Brasil e Bolsa de Valores', ['Educação'], '2026-07-22', '5 min',
        'Descubra os cursos gratuitos oferecidos pela B3, a bolsa de valores oficial do Brasil. Aprenda sobre investimentos e finanças para aprimorar suas habilidades.'],
    ['situacao-financeira-amapa', 'Situação Financeira do Amapá: Desafios e Fragilidades', ['Notícias'], '2026-07-22', '5 min',
        'A situação financeira do Amapá vem se deteriorando, com a reavaliação da nota de crédito revelando fragilidade financeira e elevando custos de financiamentos.'],
    ['estoques-petroleo-eua', 'Importância dos Estoques de Petróleo nos EUA', ['Notícias'], '2026-07-22', '2 min',
        'Os estoques de petróleo nos Estados Unidos desempenham um papel crucial na formação dos preços do petróleo globalmente, refletindo as dinâmicas de oferta e demanda.'],
    ['cartao-credito-gestao-despesas', 'Cartão de Crédito: Gestão de Despesas no Dia a Dia', ['Cartão de Crédito'], '2026-07-22', '9 min',
        'O cartão de crédito é uma ferramenta essencial para os brasileiros, facilitando a gestão de despesas como alimentação, transporte, compras e serviços pessoais.'],
    ['tarifa-25-eua', 'Impacto da Tarifa de 25% nos EUA: Análise e Previsões', ['Finanças'], '2026-07-22', '2 min',
        'A recente implementação da tarifa de 25% nos Estados Unidos gera discussões entre investidores e analistas sobre os efeitos de longo prazo no mercado financeiro.'],
    ['fundos-imobiliarios-crescimento', 'Fundos Imobiliários: Crescimento em Junho', ['Finanças'], '2026-07-21', '2 min',
        'O mercado de fundos imobiliários (FIIs) demonstrou resiliência, com 41 mil novos investidores, totalizando 3,25 milhões de cotistas na B3.'],
    ['recursos-esquecidos-banco-central', 'Consultar Recursos Esquecidos - Banco Central', ['Finanças'], '2026-07-21', '1 min',
        'O sistema do Banco Central permite consultar gratuitamente se há recursos esquecidos em instituições financeiras. Descubra como solicitar o resgate desses valores.'],
    ['distribuicao-fgts-2026', 'Distribuição FGTS: R$ 13,2 Bilhões para 2026', ['Finanças'], '2026-07-21', '5 min',
        'O governo confirmou a distribuição do lucro do FGTS no valor de R$ 13,2 bilhões para os trabalhadores em 2026. Veja pontos cruciais para planejar o uso desse dinheiro.'],
    ['educacao-financeira-lei-aprovada', 'Educação Financeira: Projeto de Lei 2.979/2023 Aprovado', ['Educação'], '2026-07-20', '3 min',
        'O Senado Federal aprovou o projeto de lei nº 2.979/2023, tornando a educação financeira obrigatória nos currículos do ensino fundamental e médio.'],
    ['desenrola-brasil', 'Desenrola Brasil: Renegocie Dívidas e Limpe Seu Nome', ['Score de Crédito'], '2026-07-20', '5 min',
        'Descubra como o programa Desenrola Brasil pode ajudar você a renegociar suas dívidas com descontos imperdíveis e limpar seu nome.'],
    ['dinheiro-durar-ate-fim-do-mes', 'Como Fazer o Dinheiro Durar Até o Final do Mês', ['Educação'], '2026-07-20', '4 min',
        'Aprenda estratégias eficazes para fazer o seu dinheiro durar até o final do mês, especialmente se sua renda é baseada em um salário mínimo.'],
    ['desafio-financeiro-maternidade', 'Desafio Financeiro na Maternidade: Como se Preparar', ['Educação'], '2026-07-18', '5 min',
        'Dicas financeiras para mães enfrentando o desafio financeiro da maternidade: como se preparar para a chegada do bebê e gerenciar as finanças com eficácia.'],
    ['escolher-melhor-cartao-credito', 'Como Escolher o Melhor Cartão de Crédito para Você', ['Cartão de Crédito'], '2026-07-18', '8 min',
        'Aprenda a analisar e escolher o melhor cartão de crédito para suas necessidades, comparando opções e encontrando o cartão ideal para o seu estilo de vida.'],
    ['pix-taxas-cartao', 'Impacto da Criação do Pix nas Taxas de Cartão', ['Cartão de Crédito'], '2026-07-18', '2 min',
        'Entenda como a criação do Pix está transformando o cenário financeiro e impactando as taxas do cartão de crédito, com suas vantagens e desvantagens.'],
    ['saude-mental-financeira', 'Saúde Mental e Saúde Financeira: A Conexão Importante', ['Finanças'], '2026-07-17', '5 min',
        'Descubra como a saúde mental está diretamente ligada à saúde financeira, e aprenda a cuidar de ambas para uma vida mais equilibrada.'],
    ['ia-investimentos', 'IA no Aprendizado e Investimentos Financeiros', ['Finanças'], '2026-07-17', '5 min',
        'Descubra como a inteligência artificial está revolucionando o aprendizado e oferecendo suporte essencial para investimentos financeiros.'],
    ['cashback-imposto-renda', 'Receita Federal e o Pagamento do Cashback do Imposto de Renda: O Que Você Precisa Saber', ['Notícias'], '2026-07-17', '8 min',
        'Entenda como funciona o cashback do Imposto de Renda pago pela Receita Federal e o que isso significa para o seu planejamento financeiro.'],
    ['financiamento-ou-consorcio', 'Financiamento ou Consórcio: Qual Escolher?', ['Educação'], '2026-07-14', '8 min',
        'Descubra se o financiamento ou o consórcio é a melhor opção para adquirir seu carro ou imóvel, entendendo a diferença entre taxa de administração e CET.'],
    ['educacao-financeira-nas-ferias', 'Como Ensinar Educação Financeira nas Férias: 5 Atividades para Salvar Seu Filho das Dívidas', ['Educação'], '2026-07-14', '10 min',
        'Para ensinar educação financeira nas férias, utilize jogos de tabuleiro, um sistema de recompensas por tarefas extras e envolva as crianças nas compras — o foco é associar esforço, escolha e recompensa de forma lúdica.'],
    ['dividas-caixa-serasa', 'Dívidas da Caixa no Serasa: Como Conseguir 90% de Desconto Passo a Passo', ['Renegociação'], '2026-07-13', '2 min',
        'A Caixa liberou descontos de até 90% em dívidas atrasadas pelo Serasa Limpa Nome. Veja o passo a passo para consultar seu CPF, simular o acordo e limpar seu nome.'],
    ['recuperar-score-credito', 'O Caminho Exato para Recuperar Seu Score de Crédito', ['Score de Crédito'], '2026-07-12', '2 min',
        'Descubra como o Cadastro Positivo e o pagamento estratégico de pendências podem acelerar a reconstrução da sua reputação financeira.'],
    ['orcamento-de-sobrevivencia', 'Orçamento de Sobrevivência: Como Organizar Gastos Sob Pressão', ['Orçamento'], '2026-07-12', '2 min',
        'Aprenda a montar uma estrutura de custos focada em blindar o seu sustento enquanto planeja o pagamento das suas dívidas.'],
    ['negociar-dividas-bancos', 'Como Negociar Dívidas com Bancos Sem Aceitar a Primeira Proposta', ['Renegociação'], '2026-07-12', '2 min',
        'Entenda os bastidores das assessorias de cobrança e aprenda a contrapropor valores que realmente cabem no seu orçamento mensal.'],
];

// Converte os artigos resumidos para o mesmo formato dos artigos completos
foreach ($posts_resumo as $p) {
    $posts[] = [
        'slug' => $p[0],
        'title' => $p[1],
        'category' => $p[2],
        'date' => $p[3],
        'read_time' => $p[4],
        'excerpt' => $p[5],
        'image' => '/assets/img/post-default.jpg',
        'full' => false,
        'content' => '<p>' . $p[5] . '</p><p>Estamos atualizando este artigo com o conteúdo completo. Enquanto isso, confira nossos <a href="/calculadoras.php">simuladores gratuitos</a> ou veja outros <a href="/financas-pessoais.php">artigos relacionados</a>.</p>',
        'tags' => '',
    ];
}
unset($posts_resumo, $p);

// Ordena por data, mais recente primeiro
usort($posts, function ($a, $b) {
    return strtotime($b['date']) <=> strtotime($a['date']);
});

/**
 * Busca um post pelo slug. Retorna null se não encontrar.
 */
function get_post_by_slug($slug)
{
    global $posts;
    foreach ($posts as $post) {
        if ($post['slug'] === $slug) {
            return $post;
        }
    }
    return null;
}
