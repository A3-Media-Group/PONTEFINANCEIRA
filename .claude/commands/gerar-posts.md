---
description: Pesquisa pautas atuais, gera 3 artigos com fontes confiáveis, imagem via Gemini, e publica
allowed-tools: WebSearch, WebFetch, Read, Edit, Write, Bash(git *)
---

Gere 3 novos artigos completos para o blog da Ponte Financeira, seguindo este processo:

## 1. PESQUISA DE PAUTAS (obrigatório usar WebSearch)
Pesquise notícias e temas de finanças pessoais, economia brasileira, crédito e 
investimentos dos ÚLTIMOS 7 DIAS. Use fontes confiáveis apenas:
- Banco Central do Brasil (bcb.gov.br)
- CVM (gov.br/cvm)
- B3 (b3.com.br)
- InfoMoney, Valor Econômico, G1 Economia, Estadão Economia, Serasa
Descarte qualquer informação de fonte não confiável ou que não consiga verificar 
em pelo menos uma dessas fontes. Escolha 3 temas que ainda não foram cobertos em 
includes/posts-data.php (leia o arquivo primeiro para não duplicar assunto).

## 2. PESQUISA DE PALAVRA-CHAVE
Para cada tema, defina uma palavra-chave principal (o que uma pessoa real buscaria 
no Google sobre isso) e 2-3 palavras-chave secundárias relacionadas.

## 3. REDAÇÃO (800-1200 palavras por artigo)
- Título com a palavra-chave principal, natural (sem forçar)
- Primeiro parágrafo já contém a palavra-chave principal
- Estrutura com H2/H3, parágrafos curtos, listas quando fizer sentido
- Tom direto, sem jargão excessivo — mesmo estilo dos artigos já existentes 
  (como-comecar-a-investir, seguranca-compras-online)
- Inclua 2-3 links internos para artigos ou páginas relacionadas já existentes no site
  (leia includes/posts-data.php e as páginas de calculadoras.php/simuladores-financeiros.php 
  para escolher links relevantes)
- Termine com uma seção "## Fontes" citando de onde veio a informação (nome da fonte 
  + link), e um CTA linkando para /calculadoras.php ou /simuladores-financeiros.php

## 4. IMAGEM DE CAPA (moderna, sem texto/logo, obrigatório)
Gere via API do Gemini (Imagen), usando a variável GEMINI_API_KEY.

NUNCA inclua texto, palavras, números legíveis ou logotipos na imagem — a arte deve 
comunicar o tema só pela composição visual. O objetivo é uma peça editorial moderna 
e marcante, não uma foto-estoque genérica.

Antes de montar o prompt, pense num CONCEITO VISUAL ÚNICO para o tema específico do 
artigo — não use os clichês batidos (aperto de mão, calculadora numa mesa branca, 
pilha de moedas genérica, gráfico de linha solto no vazio). Busque uma metáfora visual 
mais inteligente e específica pro assunto exato. Exemplos de raciocínio (adapte, não copie):
- Artigo sobre reserva de emergência → um guarda-chuva de estrutura dourada abrindo 
  sobre uma cidade miniatura à noite
- Artigo sobre dívidas/renegociação → correntes de metal se transformando em uma ponte 
  de luz
- Artigo sobre Selic/juros → engrenagens de relógio entrelaçadas com feixes de luz verde
- Artigo sobre investimentos → sementes de luz dourada brotando de um solo geométrico escuro

Monte o prompt final seguindo esta estrutura:

"Ilustração editorial digital premium, [conceito visual único pensado para este tema 
específico, descrito em detalhe: objeto principal, ação, ambiente], estilo de arte 
conceitual moderna com elementos 3D sutis e iluminação cinematográfica, paleta de cores 
dominada por azul petróleo escuro (#0E2438) e verde esmeralda (#1E7F5C), com acentos 
pontuais em dourado (#C9A227), contraste de luz forte criando profundidade e drama 
visual, composição assimétrica com espaço negativo generoso em um dos lados para 
sobreposição futura de texto, textura sutil de grão fino, acabamento estilo capa de 
revista econômica premium (referência: The Economist, Bloomberg Businessweek, Fast 
Company), altíssima resolução e nitidez, proporção 16:9, sem texto, sem números, 
sem logotipos, sem marcas d'água"

Regras obrigatórias:
- Sempre um conceito visual específico e não-genérico, pensado pro tema exato do artigo
- Sempre as 3 cores da marca (azul petróleo, verde esmeralda, dourado como acento)
- Sempre luz dramática/cinematográfica e boa profundidade — nunca imagem "chapada" e 
  sem contraste
- Sempre espaço negativo em algum canto (útil se um dia quisermos sobrepor título por 
  cima via CSS, mesmo que hoje não sobreponhamos)
- Proibir explicitamente texto e logos no prompt, mesmo que o modelo às vezes erre

## 5. METADADOS SEO
- excerpt (meta description): até 160 caracteres, contendo a palavra-chave principal
- slug: baseado na palavra-chave principal, sem acento, com hífens
- categoria(s): coerente com as já existentes no site
- tags: separadas por vírgula, incluindo as palavras-chave secundárias

## 6. PUBLICAÇÃO
Adicione cada artigo como novo item no array $posts em includes/posts-data.php 
('full' => true, todos os campos preenchidos). Não apague nem altere posts existentes.
Rode git add, git commit (mensagem listando os 3 títulos) e git push.

## 7. RESUMO FINAL
Me liste os 3 títulos, a palavra-chave principal de cada um, as fontes usadas, 
e confirme que o push foi feito.
