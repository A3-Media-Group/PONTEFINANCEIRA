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

    [
        'slug' => 'tesouro-selic-ou-poupanca-2026',
        'title' => 'Poupança ou Tesouro Selic: Qual Rende Mais com a Selic em 14%?',
        'category' => ['Educação', 'Finanças'],
        'date' => '2026-08-16',
        'read_time' => '5 min',
        'excerpt' => 'Com a Selic em 14% ao ano, veja se poupança ou Tesouro Selic rende mais e qual escolher para sua reserva de emergência em 2026.',
        'image' => '/assets/img/post-tesouro-selic-poupanca.jpg',
        'full' => true,
        'content' => '
<p>Com o Copom reduzindo a Selic para 14% ao ano em agosto de 2026, quem tem dinheiro parado começou a se perguntar: poupança ou Tesouro Selic, o que rende mais agora? A resposta impacta diretamente sua reserva de emergência e o planejamento financeiro do restante do ano.</p>

<h2>O Que Mudou com o Corte da Selic para 14%</h2>
<p>Na reunião de 4 e 5 de agosto de 2026, o Comitê de Política Monetária (Copom) decidiu, por unanimidade, reduzir a taxa básica de juros em 0,25 ponto percentual, levando a Selic de 14,25% para 14,00% ao ano — a quarta queda consecutiva no ano. Segundo o Banco Central, a decisão considerou a inflação em desaceleração, ainda que os riscos para os preços continuem mais altos que o normal.</p>
<p>De acordo com o boletim Focus de 10 de agosto de 2026, o mercado financeiro projeta a Selic encerrando o ano em 13,75%, com a próxima decisão do Copom marcada para 15 e 16 de setembro.</p>

<h2>Como Funciona o Rendimento da Poupança</h2>
<p>A regra da poupança não muda com pequenas oscilações da Selic, mas o patamar da taxa básica define o cálculo. Sempre que a Selic está acima de 8,5% ao ano — como é o caso agora, a 14% — a poupança rende 0,5% ao mês mais a Taxa Referencial (TR), o que equivale a cerca de 6,17% ao ano sem contar a TR.</p>
<p>Ou seja, mesmo com a Selic em dois dígitos, a poupança segue travada nesse teto. É justamente essa trava que abre espaço de vantagem para o Tesouro Selic.</p>

<h2>Como Funciona o Tesouro Selic</h2>
<p>O Tesouro Selic é um título público pós-fixado que acompanha de perto a variação da taxa básica de juros. Diferentemente da poupança, ele não tem teto: quanto maior a Selic, maior a rentabilidade bruta do título, hoje próxima dos 14% ao ano.</p>
<p>O investimento é considerado um dos mais seguros do país, garantido pelo Tesouro Nacional, e pode ser resgatado a qualquer momento — o que o torna, ao lado da poupança, uma das opções mais usadas para reserva de emergência.</p>

<h3>Impostos e Taxas: A Diferença Que Pesa no Bolso</h3>
<ul>
    <li><strong>Poupança:</strong> isenta de Imposto de Renda e de qualquer taxa de administração;</li>
    <li><strong>Tesouro Selic:</strong> sujeito à tabela regressiva do IR (de 22,5% a 15%, conforme o prazo da aplicação) e, em geral, a uma pequena taxa de custódia cobrada pela B3.</li>
</ul>
<p>Mesmo descontando o IR e a taxa de custódia, o Tesouro Selic costuma render mais que a poupança sempre que a Selic está acima de aproximadamente 8,5% ao ano — exatamente o cenário atual. Quanto maior a distância entre a Selic e esse patamar, maior tende a ser a vantagem do título público.</p>

<h2>Vale a Pena Trocar a Poupança pelo Tesouro Selic?</h2>
<p>Para quem já tem reserva de emergência guardada na poupança, migrar para o Tesouro Selic costuma valer a pena no cenário atual, especialmente para valores que ficarão parados por mais de alguns meses. A liquidez é parecida — em ambos os casos o resgate costuma cair na conta em poucos dias úteis —, mas a rentabilidade líquida tende a ser superior no título público.</p>
<p>Antes de decidir, vale simular os dois cenários considerando prazo, valor aplicado e alíquota de IR esperada. Nosso <a href="/simuladores-financeiros.php">simulador de juros compostos</a> ajuda a visualizar quanto cada alternativa pode render ao longo do tempo.</p>

<h2>E o CDB, Vale a Pena Comparar Também?</h2>
<p>Além do Tesouro Selic, vale observar CDBs com liquidez diária de bancos e corretoras, que também acompanham a Selic e, em alguns casos, oferecem um percentual do CDI acima de 100%. A lógica de comparação é a mesma: olhar a rentabilidade líquida (já descontado o IR) e verificar se a instituição tem cobertura do Fundo Garantidor de Créditos (FGC) até o limite de R$ 250 mil por CPF e instituição.</p>

<h2>Como Começar a Investir no Tesouro Selic</h2>
<p>O processo é simples: abra conta em uma corretora habilitada, transfira os recursos e compre o título diretamente pelo Tesouro Direto, com aplicações a partir de valores baixos. Quem está começando agora também pode conferir nosso guia completo sobre <a href="/artigo/como-comecar-a-investir">como começar a investir</a> para entender os passos anteriores, como montar a reserva de emergência e definir objetivos financeiros.</p>

<h2>Conclusão</h2>
<p>Com a Selic em 14% ao ano, o Tesouro Selic leva vantagem sobre a poupança na maioria dos cenários, principalmente para quem pode manter o dinheiro aplicado por alguns meses. A poupança ainda tem seu espaço — simplicidade e isenção de IR —, mas migrar parte da reserva para o título público costuma exigir bem menos esforço do que parece.</p>

<div class="callout">
    <p><strong>Aviso importante:</strong> este conteúdo tem caráter exclusivamente educacional. Rentabilidades passadas não garantem resultados futuros, e a escolha entre poupança, Tesouro Selic e CDB deve considerar seu perfil, prazo e objetivos financeiros.</p>
</div>

<h2>Fontes</h2>
<ul>
    <li>InfoMoney — <a href="https://www.infomoney.com.br/economia/corte-da-selic-decisao-copom-expectativas-082026/" target="_blank" rel="noopener">Inflação deve ajudar Copom a cortar Selic a 14%</a></li>
    <li>Banco Central do Brasil (BCB) — Comunicado do Copom, reunião de 4 e 5 de agosto de 2026</li>
    <li>InfoMoney — Boletim Focus, projeções de mercado de 10 de agosto de 2026</li>
</ul>

<p>Quer simular quanto seu dinheiro pode render com a Selic atual? Acesse nosso <a href="/simuladores-financeiros.php">simulador de juros compostos e investimentos</a> e compare cenários gratuitamente.</p>
',
        'tags' => 'poupança ou tesouro selic, rendimento da poupança 2026, tesouro selic como funciona, selic 14% investimentos, reserva de emergência',
    ],

    [
        'slug' => 'pix-parcelado-como-funciona',
        'title' => 'Pix Parcelado: Como Funciona a Nova Forma de Crédito do Banco Central',
        'category' => ['Notícias', 'Cartão de Crédito'],
        'date' => '2026-08-16',
        'read_time' => '4 min',
        'excerpt' => 'Entenda como funciona o Pix Parcelado, novidade do Banco Central que permite dividir pagamentos em prestações sem precisar de cartão de crédito.',
        'image' => '/assets/img/post-pix-parcelado.jpg',
        'full' => true,
        'content' => '
<p>O Pix parcelado começou a ganhar contornos mais claros em 2026, e a pergunta mais comum é simples: como funciona o Pix parcelado na prática? A modalidade, regulamentada pelo Banco Central, promete ampliar o acesso a crédito para milhões de brasileiros que não têm cartão — mas exige atenção a juros e taxas antes de usar.</p>

<h2>O Que É o Pix Parcelado</h2>
<p>O Pix parcelado permite que o pagador divida o valor de uma transferência em várias prestações, mesmo sem usar cartão de crédito. Na prática, funciona como um parcelamento: quem recebe o pagamento tem o valor integral creditado na hora, exatamente como em um Pix comum, enquanto quem paga assume as parcelas, geralmente acrescidas de juros.</p>
<p>Segundo o Banco Central, a expectativa é de que a ferramenta amplie o acesso a crédito para uma parcela relevante da população que hoje está fora do sistema tradicional de cartões — um público estimado em dezenas de milhões de pessoas.</p>

<h2>Como Funciona para Quem Paga e Quem Recebe</h2>
<ul>
    <li><strong>Quem recebe:</strong> o dinheiro cai na conta imediatamente, como em qualquer Pix — a instituição financeira do pagador assume o risco do parcelamento;</li>
    <li><strong>Quem paga:</strong> escolhe o número de parcelas no momento da transação e passa a pagar prestações mensais, com juros definidos pela instituição financeira;</li>
    <li><strong>Comércio:</strong> pode oferecer o Pix parcelado como alternativa ao cartão de crédito, inclusive para clientes que não possuem cartão.</li>
</ul>

<h2>Regras do Banco Central para 2026</h2>
<p>Para evitar armadilhas nas prestações, o Banco Central determinou que as instituições sejam obrigadas a informar de forma clara, antes da confirmação do pagamento:</p>
<ul>
    <li>A taxa de juros cobrada na operação;</li>
    <li>O Custo Efetivo Total (CET) do parcelamento;</li>
    <li>O número e o valor de cada parcela;</li>
    <li>Eventuais encargos adicionais em caso de atraso no pagamento.</li>
</ul>
<p>Essa exigência de transparência busca padronizar a modalidade como uma alternativa de crédito regulada, evitando que o Pix parcelado se torne uma nova fonte de endividamento sem informação clara ao consumidor.</p>

<h2>Pix Parcelado x Cartão de Crédito: Vale a Pena?</h2>
<p>Antes de escolher o Pix parcelado para uma compra, vale comparar o CET oferecido com o custo do cartão de crédito ou de outras linhas, como o crédito pessoal. Como o parcelamento é uma forma de crédito, os juros podem variar bastante entre instituições — e, assim como no cartão, atrasar uma parcela pode gerar multa, juros e negativação do CPF.</p>
<p>Para quem já usa bem o cartão de crédito e paga a fatura em dia, o Pix parcelado pode não trazer vantagem relevante. Já para quem não tem cartão ou prefere não usá-lo, a modalidade amplia as opções de parcelamento — mas exige o mesmo cuidado: parcelar apenas o que cabe no orçamento do mês.</p>
<p>Se você ainda está decidindo qual meio de pagamento faz mais sentido no dia a dia, nosso guia sobre <a href="/artigo/escolher-melhor-cartao-credito">como escolher o melhor cartão de crédito</a> ajuda a comparar taxas e benefícios antes de bater o martelo.</p>

<h2>O Pix Já Domina os Pagamentos no Brasil</h2>
<p>O avanço do Pix parcelado acontece em um momento em que o meio de pagamento já lidera as transações no país, respondendo por mais da metade de todas as operações de pagamento realizadas por aqui. Esse volume é parte do motivo pelo qual o Banco Central trata a nova modalidade com cautela regulatória: qualquer falha na comunicação de juros afetaria um número muito grande de pessoas de uma só vez.</p>
<p>Vale lembrar que o Pix parcelado é diferente do impacto que o Pix tradicional já teve nas taxas de cartão de crédito — tema que também já exploramos no artigo sobre o <a href="/artigo/pix-taxas-cartao">impacto da criação do Pix nas taxas de cartão</a>.</p>

<h2>Cuidados Antes de Usar o Pix Parcelado</h2>
<ul>
    <li>Compare sempre o CET informado antes de confirmar o parcelamento, não apenas o valor da parcela;</li>
    <li>Verifique se o valor total parcelado cabe no seu orçamento mensal, incluindo outras dívidas em aberto;</li>
    <li>Evite parcelar compras de baixo valor que poderiam ser pagas à vista sem comprometer o mês;</li>
    <li>Fique atento a golpes: desconfie de cobranças de parcelamento fora do aplicativo oficial do seu banco.</li>
</ul>

<h2>Conclusão</h2>
<p>O Pix parcelado chega como mais uma alternativa de crédito no Brasil, com potencial de incluir quem hoje não tem acesso a cartão. As regras do Banco Central para transparência de juros e CET são um avanço, mas a responsabilidade final de usar a modalidade com equilíbrio continua sendo do consumidor — comparar custos e respeitar o orçamento seguem sendo o caminho mais seguro.</p>

<div class="callout">
    <p><strong>Aviso importante:</strong> este conteúdo tem caráter exclusivamente educacional. Condições, prazos e disponibilidade do Pix parcelado podem variar entre instituições financeiras — confirme sempre diretamente no aplicativo do seu banco.</p>
</div>

<h2>Fontes</h2>
<ul>
    <li>InfoMoney — <a href="https://www.infomoney.com.br/minhas-financas/pix-parcelado-chega-para-competir-com-cartao-de-credito-veja-diferencas/" target="_blank" rel="noopener">Pix Parcelado chega para competir com cartão de crédito: veja diferenças</a></li>
    <li>InfoMoney — <a href="https://www.infomoney.com.br/minhas-financas/pix-parcelado-deve-ser-lancado-em-setembro-diz-banco-central/" target="_blank" rel="noopener">Pix parcelado deve ser lançado em setembro, diz Banco Central</a></li>
    <li>Banco Central do Brasil (BCB) — Diretrizes regulatórias do Pix Parcelado, 2026</li>
</ul>

<p>Quer organizar melhor o orçamento antes de parcelar qualquer compra? Use nossas <a href="/calculadoras.php">calculadoras gratuitas</a> para planejar gastos e evitar surpresas na fatura.</p>
',
        'tags' => 'pix parcelado como funciona, pix parcelado banco central, crédito pelo pix, cet pix parcelado, cartão de crédito',
    ],

    [
        'slug' => 'nome-sujo-como-consultar-2026',
        'title' => 'Nome Sujo em 2026: Como Consultar Grátis e Sair da Inadimplência',
        'category' => ['Score de Crédito', 'Renegociação'],
        'date' => '2026-08-16',
        'read_time' => '5 min',
        'excerpt' => 'Veja como saber se seu nome está sujo, consultar de graça no Serasa e SPC e os passos para negociar dívidas e sair da inadimplência em 2026.',
        'image' => '/assets/img/post-nome-sujo-inadimplencia.jpg',
        'full' => true,
        'content' => '
<p>Saber como consultar se o nome está sujo é o primeiro passo para quem quer organizar as finanças em 2026 — ano em que o Brasil bateu recorde de inadimplência. Segundo levantamento da Serasa, o país chegou a 81,7 milhões de inadimplentes, um crescimento de 38,1% em dez anos.</p>

<h2>Quantos Brasileiros Estão com o Nome Sujo em 2026</h2>
<p>De acordo com o Mapa da Inadimplência da Serasa, o Brasil somava, no início de 2026, mais de 332 milhões de dívidas em atraso — volume 43% maior do que o registrado em 2016. O valor médio da dívida por CPF também subiu, passando de R$ 5.880,02 para R$ 6.598,13 (valores corrigidos pela inflação) ao longo da última década.</p>
<p>O levantamento também mostra uma mudança no perfil de quem está negativado: a inadimplência cresce com mais força entre pessoas acima de 60 anos, grupo que historicamente tinha menor participação nas listas de devedores.</p>

<h2>Como Saber se Seu Nome Está Sujo</h2>
<p>Existem formas gratuitas e oficiais de consultar pendências no seu CPF:</p>
<ul>
    <li><strong>Serasa Consumidor:</strong> consulta gratuita pelo site ou aplicativo, mostrando as dívidas registradas pelas empresas credoras;</li>
    <li><strong>SPC Brasil:</strong> consulta disponível no site oficial, com cadastro simples e gratuito;</li>
    <li><strong>Registrato, do Banco Central:</strong> mostra o relacionamento do seu CPF com bancos e financeiras, incluindo operações de crédito em aberto;</li>
    <li><strong>Cadastro Positivo:</strong> além das dívidas em atraso, permite acompanhar seu histórico de pagamentos, o que influencia diretamente o score de crédito.</li>
</ul>
<p>Vale reforçar: essas consultas são gratuitas e não afetam o seu score. Desconfie de qualquer serviço que cobre para "descobrir" se o nome está sujo.</p>

<h2>Por Que a Inadimplência Está Subindo</h2>
<p>Mesmo com a Selic em trajetória de queda em 2026, o crédito para o consumidor segue caro e seletivo, o que dificulta a quitação de dívidas antigas e empurra parte da população para novos atrasos. Executivos de grandes bancos brasileiros afirmam não enxergar, no curto prazo, sinais claros de reversão da inadimplência recorde no crédito ao consumidor.</p>

<h2>Passo a Passo Para Sair do Vermelho</h2>
<h3>1. Liste Todas as Suas Dívidas</h3>
<p>Use as consultas gratuitas acima para mapear cada pendência: valor original, valor atualizado, credor e data de vencimento.</p>
<h3>2. Priorize por Urgência e Custo</h3>
<p>Dívidas com juros mais altos, como cartão de crédito e cheque especial, tendem a crescer mais rápido e merecem prioridade. Nosso guia sobre o <a href="/artigo/metodo-bola-de-neve">Método Bola de Neve para quitar dívidas</a> explica uma forma prática de organizar essa ordem de pagamento.</p>
<h3>3. Negocie Diretamente ou Via Programas Oficiais</h3>
<p>Programas como o <a href="/artigo/desenrola-brasil-2026">Desenrola Brasil</a> e mutirões de negociação oferecidos por bancos e varejistas costumam trazer descontos relevantes para quem paga à vista ou em poucas parcelas. Antes de aceitar a primeira proposta, veja também nossas dicas sobre <a href="/artigo/negociar-dividas-bancos">como negociar dívidas com bancos sem aceitar a primeira oferta</a>.</p>
<h3>4. Reconstrua o Score Depois de Pagar</h3>
<p>Quitar a dívida é o primeiro passo, mas o score de crédito leva tempo para se recuperar. Veja nosso conteúdo sobre <a href="/artigo/recuperar-score-credito">como recuperar seu score de crédito</a> para entender o papel do Cadastro Positivo nesse processo.</p>

<h2>Como o Nome Sujo Afeta Seu Score de Crédito</h2>
<p>Ter dívidas em atraso derruba diretamente o score de crédito, dificultando desde a aprovação de um cartão até condições melhores em um financiamento. Mas o inverso também é verdadeiro: quitar pendências e manter contas em dia — inclusive as recorrentes, como luz e telefone, dentro do Cadastro Positivo — ajuda o score a subir de forma consistente ao longo dos meses.</p>
<p>Por isso, negociar uma dívida não deve ser visto como o fim do processo, e sim como o início da reconstrução do histórico financeiro.</p>

<h2>Como Não Cair de Novo na Inadimplência</h2>
<p>Depois de limpar o nome, o maior risco é voltar a se endividar sem uma reserva mínima ou um orçamento organizado. Monte um planejamento mensal considerando receitas fixas, gastos essenciais e uma margem para imprevistos — e, se possível, comece a guardar mesmo pequenos valores todo mês, mesmo que a longo prazo pareçam pouco relevantes.</p>
<p>Vale também revisar assinaturas e gastos recorrentes que passaram despercebidos, renegociar contratos como internet e plano de celular, e evitar novos parcelamentos até que o orçamento esteja de fato equilibrado. Pequenos ajustes recorrentes costumam pesar mais no fim do mês do que um corte pontual em um gasto maior.</p>

<h2>Perguntas Frequentes</h2>
<h3>Consultar o CPF pelo Serasa ou SPC deixa meu nome mais sujo?</h3>
<p>Não. A consulta é apenas informativa e não gera nenhum registro de dívida nem altera o score.</p>
<h3>Depois de pagar, o nome sai da lista de negativados na hora?</h3>
<p>Normalmente a baixa é feita em até cinco dias úteis após o pagamento ser confirmado ao credor, mas o prazo pode variar conforme a instituição.</p>

<div class="callout">
    <p><strong>Aviso importante:</strong> este conteúdo tem caráter educativo. Antes de negociar dívidas ou aderir a qualquer programa, confirme as condições diretamente com a instituição credora ou pelos canais oficiais.</p>
</div>

<h2>Fontes</h2>
<ul>
    <li>Serasa — <a href="https://www.serasa.com.br/imprensa/10-anos-do-mapa-de-inadimplencia/" target="_blank" rel="noopener">10 anos do Mapa da Inadimplência</a></li>
    <li>InfoMoney — <a href="https://www.infomoney.com.br/economia/inadimplencia-no-brasil-da-salto-em-10-anos-e-atinge-quase-metade-da-populacao-adulta/" target="_blank" rel="noopener">Inadimplência no Brasil dá salto em 10 anos e atinge quase metade da população adulta</a></li>
    <li>InfoMoney — <a href="https://www.infomoney.com.br/mercados/executivos-de-bancoes-brasileiros-nao-veem-fim-para-inadimplencia-recorde-em-2026/" target="_blank" rel="noopener">Executivos de bancões brasileiros não veem fim para inadimplência recorde em 2026</a></li>
</ul>

<p>Quer organizar suas dívidas e planejar a quitação? Use nossas <a href="/calculadoras.php">calculadoras gratuitas</a> de rescisão, FGTS e orçamento para dar o próximo passo.</p>
',
        'tags' => 'como saber se meu nome está sujo, consultar nome sujo grátis, inadimplência no brasil 2026, negociar dívidas atrasadas, score de crédito',
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

// Imagens de capa ilustradas (uma por artigo, tema relevante ao assunto)
$posts_resumo_images = [
    'taxa-selic' => '/assets/img/post-taxa-selic.jpg',
    'nova-lei-vale-alimentacao-refeicao-2026' => '/assets/img/post-nova-lei-vale-alimentacao-refeicao-2026.jpg',
    'vale-refeicao' => '/assets/img/post-vale-refeicao.jpg',
    'desenrola-brasil-2026' => '/assets/img/post-desenrola-brasil-2026.jpg',
    'metodo-bola-de-neve' => '/assets/img/post-metodo-bola-de-neve.jpg',
    'fundo-de-garantia' => '/assets/img/post-fundo-de-garantia.jpg',
    'estresse-financeiro' => '/assets/img/post-estresse-financeiro.jpg',
    'desenrola-20' => '/assets/img/post-desenrola-20.jpg',
    'melhores-cartoes-credito-2026' => '/assets/img/post-melhores-cartoes-credito-2026.jpg',
    'bolsa-de-valores-assimetria' => '/assets/img/post-bolsa-de-valores-assimetria.jpg',
    'transformacao-financas-gestao-corporativa' => '/assets/img/post-transformacao-financas-gestao-corporativa.jpg',
    'indice-bovespa' => '/assets/img/post-indice-bovespa.jpg',
    'tarifas-de-comercio' => '/assets/img/post-tarifas-de-comercio.jpg',
    'motorista-de-aplicativo' => '/assets/img/post-motorista-de-aplicativo.jpg',
    'perigo-cartao-credito-banco-central' => '/assets/img/post-perigo-cartao-credito-banco-central.jpg',
    'rescisao-contrato-de-trabalho' => '/assets/img/post-rescisao-contrato-de-trabalho.jpg',
    'fgts-calculadora' => '/assets/img/post-fgts-calculadora.jpg',
    'novas-tarifas-casa-branca' => '/assets/img/post-novas-tarifas-casa-branca.jpg',
    'programa-brasil-soberano-3' => '/assets/img/post-programa-brasil-soberano-3.jpg',
    'entenda-o-tarifaco' => '/assets/img/post-entenda-o-tarifaco.jpg',
    'preco-do-petroleo' => '/assets/img/post-preco-do-petroleo.jpg',
    'instabilidade-mercado-financeiro' => '/assets/img/post-instabilidade-mercado-financeiro.jpg',
    'cursos-gratuitos-b3' => '/assets/img/post-cursos-gratuitos-b3.jpg',
    'situacao-financeira-amapa' => '/assets/img/post-situacao-financeira-amapa.jpg',
    'estoques-petroleo-eua' => '/assets/img/post-estoques-petroleo-eua.jpg',
    'cartao-credito-gestao-despesas' => '/assets/img/post-cartao-credito-gestao-despesas.jpg',
    'tarifa-25-eua' => '/assets/img/post-tarifa-25-eua.jpg',
    'fundos-imobiliarios-crescimento' => '/assets/img/post-fundos-imobiliarios-crescimento.jpg',
    'recursos-esquecidos-banco-central' => '/assets/img/post-recursos-esquecidos-banco-central.jpg',
    'distribuicao-fgts-2026' => '/assets/img/post-distribuicao-fgts-2026.jpg',
    'educacao-financeira-lei-aprovada' => '/assets/img/post-educacao-financeira-lei-aprovada.jpg',
    'desenrola-brasil' => '/assets/img/post-desenrola-brasil.jpg',
    'dinheiro-durar-ate-fim-do-mes' => '/assets/img/post-dinheiro-durar-ate-fim-do-mes.jpg',
    'desafio-financeiro-maternidade' => '/assets/img/post-desafio-financeiro-maternidade.jpg',
    'escolher-melhor-cartao-credito' => '/assets/img/post-escolher-melhor-cartao-credito.jpg',
    'pix-taxas-cartao' => '/assets/img/post-pix-taxas-cartao.jpg',
    'saude-mental-financeira' => '/assets/img/posts/saude-mental-financeira.svg',
    'ia-investimentos' => '/assets/img/posts/ia-investimentos.svg',
    'cashback-imposto-renda' => '/assets/img/posts/cashback-imposto-renda.svg',
    'financiamento-ou-consorcio' => '/assets/img/posts/financiamento-ou-consorcio.svg',
    'educacao-financeira-nas-ferias' => '/assets/img/posts/educacao-financeira-nas-ferias.svg',
    'dividas-caixa-serasa' => '/assets/img/posts/dividas-caixa-serasa.svg',
    'recuperar-score-credito' => '/assets/img/posts/recuperar-score-credito.svg',
    'orcamento-de-sobrevivencia' => '/assets/img/posts/orcamento-de-sobrevivencia.svg',
    'negociar-dividas-bancos' => '/assets/img/posts/negociar-dividas-bancos.svg',
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
        'image' => $posts_resumo_images[$p[0]] ?? '/assets/img/post-default.jpg',
        'full' => false,
        'content' => '<p>' . $p[5] . '</p><p>Estamos atualizando este artigo com o conteúdo completo. Enquanto isso, confira nossos <a href="/calculadoras.php">simuladores gratuitos</a> ou veja outros <a href="/financas-pessoais.php">artigos relacionados</a>.</p>',
        'tags' => '',
    ];
}
unset($posts_resumo, $posts_resumo_images, $p);

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
