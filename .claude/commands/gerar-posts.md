---
description: Pesquisa pautas atuais, gera 5 artigos com fontes confiáveis, imagem via Pollinations.ai, e publica
allowed-tools: WebSearch, WebFetch, Read, Edit, Write, Bash(git *), Bash(curl *)
---

Gere 5 novos artigos completos para o blog da Ponte Financeira, seguindo este processo:

## 1. PESQUISA DE PAUTAS — MIX DE 5 ARTIGOS (todos com base em SEO)
Gere 5 artigos no total, seguindo esta distribuição fixa:

Fontes confiáveis autorizadas para pesquisa e citação:

**Brasil — Órgãos oficiais e dados**
- Banco Central do Brasil (bcb.gov.br)
- CVM (gov.br/cvm)
- IBGE (ibge.gov.br) — dados de inflação (IPCA) e indicadores econômicos
- Receita Federal (gov.br/receitafederal) — imposto de renda, MEI, Simples Nacional
- Procon / Senacon (gov.br/consumidor) — direitos do consumidor

**Brasil — Mercado e crédito**
- B3 (b3.com.br)
- Serasa
- SPC Brasil (spcbrasil.org.br)
- Reclame Aqui (reclameaqui.com.br) — apenas para citar estatísticas/tendências de 
  reclamação, nunca reproduzir reclamações individuais

**Brasil — Imprensa financeira**
- InfoMoney
- Valor Econômico
- G1 Economia
- Estadão Economia

**Internacional — Contexto global (usar quando o tema tocar em economia 
internacional: tarifas, dólar, juros dos EUA, cenário global)**
- Federal Reserve (federalreserve.gov) — fonte primária para decisões de juros dos EUA
- FMI / IMF (imf.org) — perspectiva econômica global
- Reuters (reuters.com) — agência de notícias internacional

Ao escolher fontes internacionais, sempre traga o dado de volta para o impacto prático 
no leitor brasileiro (ex: "o que a decisão do Fed significa para o dólar e seus 
investimentos aqui no Brasil"), nunca deixe o artigo genérico/global demais — o 
público-alvo é brasileiro.

Descarte qualquer informação de fonte não confiável ou que não consiga verificar em 
pelo menos uma dessas fontes.

**2 artigos — Modelo atual (notícias/pautas recentes)**
Pesquise via WebSearch notícias e temas de finanças pessoais, economia brasileira, 
crédito e investimentos dos ÚLTIMOS 7 DIAS, usando apenas as fontes confiáveis 
autorizadas listadas acima. Escolha 2 temas atuais e relevantes.

**2 artigos — Foco em SEO/volume de busca (maior potencial de tráfego)**
Escolha 2 temas priorizando dúvidas recorrentes e de alto volume de busca no Brasil — 
perguntas práticas que as pessoas pesquisam constantemente no Google (não precisam ser 
notícia da semana), como: "como calcular X", "quanto rende Y", "como sair de Z", 
"diferença entre A e B". Para esses 2, pense como pesquisa de palavra-chave: prefira 
temas com intenção de busca clara e alta probabilidade de busca recorrente ao longo 
do ano, não só um pico passageiro. Qualquer dado ou estatística citada no corpo do 
artigo (mesmo que o tema em si seja evergreen) precisa vir de uma das fontes confiáveis 
autorizadas listadas acima.

**1 artigo — Foco no público endividado (a essência da marca)**
Escolha 1 tema diretamente relevante para quem está endividado ou em dificuldade 
financeira: renegociação de dívidas, programas tipo Desenrola, limpar nome no Serasa/
SPC, recuperar score de crédito, orçamento de sobrevivência sob pressão, como negociar 
com bancos, ou similar. Esse artigo deve ser o mais prático e acionável dos 5 — o 
leitor precisa sair sabendo exatamente o próximo passo a dar. Dados sobre inadimplência, 
negativados, programas de renegociação etc. devem vir de uma das fontes confiáveis 
autorizadas listadas acima (Serasa e SPC Brasil costumam ser as mais relevantes aqui).

Para TODOS os 5 artigos, independente da categoria: leia includes/posts-data.php 
primeiro para não duplicar assunto já coberto, e aplique a pesquisa de palavra-chave 
(seção 2 abaixo) normalmente — ou seja, todos precisam ter boa otimização de SEO, 
mudando apenas o CRITÉRIO DE ESCOLHA do tema, não o rigor da otimização.

Ao final, na sua resposta, identifique claramente qual dos 5 artigos pertence a cada 
categoria (2 atuais / 2 SEO / 1 endividados).

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

## 4. IMAGEM DE CAPA (via Pollinations.ai, modelo flux-realism, sem API key)
Gere a imagem fazendo uma requisição HTTP GET para:
https://image.pollinations.ai/prompt/{PROMPT_CODIFICADO_EM_URL}?width=1200&height=675&nologo=true&model=flux-realism&enhance=true

Onde {PROMPT_CODIFICADO_EM_URL} é o prompt em inglês (URL-encoded). Modelo 
"flux-realism" é otimizado para fotografia realista — não usar o modelo "flux" 
genérico, que produz resultados mais simples/abstratos.

DIRETRIZ CRÍTICA: antes de montar o prompt, releia o parágrafo de abertura e os 
primeiros 2 subtítulos (H2) do artigo que você acabou de escrever. Extraia DESSE 
CONTEÚDO ESPECÍFICO (não do título genérico) uma cena concreta e literal que 
representa o argumento central do artigo — não uma metáfora vaga. O prompt precisa 
"fazer sentido" com o assunto real tratado, não só com a categoria geral (ex: um 
artigo sobre "Selic e financiamento imobiliário" pede uma cena de comprador de imóvel 
olhando documentos/chaves — não uma cena genérica de "gráfico subindo").

Monte o prompt neste formato:
"professional editorial photography for business magazine cover, [cena real e 
específica extraída do conteúdo do artigo, com objeto/pessoa/ambiente/ação concretos 
e literais ao assunto tratado], shot on 50mm lens, shallow depth of field, dramatic 
natural side lighting, subtle film grain, color palette dominated by deep petrol blue 
(#0E2438) and emerald green (#1E7F5C) with small golden accents (#C9A227), asymmetric 
composition, rule of thirds, generous negative space on one side, sophisticated 
serious atmosphere, hyper-realistic, sharp focus, high resolution, no text, no 
numbers, no logos, no watermark, no cartoon, no abstract shapes"

Depois de gerar, ANTES de salvar, faça uma auto-checagem: "essa cena descrita no 
prompt realmente ilustra o argumento específico deste artigo, ou é genérica o 
suficiente pra servir em qualquer post de finanças?" Se for genérica demais, reescreva 
o prompt com mais detalhes específicos do conteúdo real e gere de novo (máximo 2 
tentativas).

Baixe a imagem retornada e salve em /assets/img/post-[slug].jpg.

Se a requisição falhar ou der timeout, aguarde 15 segundos e tente novamente antes 
de desistir.

## 5. METADADOS SEO
- excerpt (meta description): até 160 caracteres, contendo a palavra-chave principal
- slug: baseado na palavra-chave principal, sem acento, com hífens
- categoria(s): coerente com as já existentes no site
- tags: separadas por vírgula, incluindo as palavras-chave secundárias

## 6. PUBLICAÇÃO
Adicione cada artigo como novo item no array $posts em includes/posts-data.php 
('full' => true, todos os campos preenchidos). Não apague nem altere posts existentes.

Antes de fazer commit, rode `php -l` em todos os arquivos .php alterados (pelo menos
includes/posts-data.php). Se houver erro de sintaxe, corrija antes de continuar — preste
atenção especial a apóstrofos não escapados dentro de strings de aspas simples (ex: nomes
próprios como "D'Antiochia" precisam virar "D\'Antiochia"). Nunca faça push com erro de
sintaxe conhecido. Há também um hook de pre-commit instalado (scripts/check-syntax.sh)
que bloqueia automaticamente commits com erro de sintaxe PHP.

Rode git add, git commit (mensagem listando os 5 títulos) e git push.

## 7. RESUMO FINAL
Me liste os 5 títulos, identificando a categoria de cada um (atual / SEO / 
endividados), a palavra-chave principal de cada um, as fontes usadas, e confirme 
que o push foi feito.
