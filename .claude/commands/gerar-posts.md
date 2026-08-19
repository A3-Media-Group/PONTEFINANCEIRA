---
description: Pesquisa pautas atuais, gera 3 artigos com fontes confiáveis, imagem via Pollinations.ai, e publica
allowed-tools: WebSearch, WebFetch, Read, Edit, Write, Bash(git *), Bash(curl *)
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

## 4. IMAGEM DE CAPA (via Pollinations.ai, sem API key, fotografia editorial realista)
Gere a imagem fazendo uma requisição HTTP GET para:
https://image.pollinations.ai/prompt/{PROMPT_CODIFICADO_EM_URL}?width=1200&height=675&nologo=true&model=flux

Onde {PROMPT_CODIFICADO_EM_URL} é o prompt abaixo, com espaços/acentos codificados 
corretamente para URL (URL-encode). Não precisa de nenhuma chave de API nem variável 
de ambiente — é uma chamada HTTP simples.

DIRETRIZ: a imagem deve parecer fotografia editorial de revista de negócios premium 
(Forbes, Bloomberg Businessweek, Exame) — elegante, séria, realista. NUNCA cartoon, 
flat design fofo ou clip art. NUNCA texto, números ou logotipos.

Leia o artigo e identifique uma cena concreta e específica do tema (evite abstração; 
evite clichês como aperto de mão genérico, calculadora numa mesa branca vazia, 
cofrinho de porquinho).

Monte o prompt neste formato:

"professional editorial photography for business magazine cover, [cena real e 
específica em inglês, com objeto/ambiente/ângulo concretos], shot on 50mm lens, 
shallow depth of field, dramatic natural side lighting, subtle film grain, color 
palette dominated by deep petrol blue (#0E2438) and emerald green (#1E7F5C) with 
small golden accents (#C9A227), asymmetric composition, rule of thirds, generous 
negative space on one side, sophisticated serious atmosphere, hyper-realistic, 
sharp focus, high resolution, no text, no numbers, no logos, no watermark, no cartoon"

(Escreva o prompt em inglês — modelos de geração de imagem geralmente entendem 
melhor e dão resultado mais preciso em inglês, mesmo que o artigo seja em português)

Baixe a imagem retornada (curl ou equivalente) e salve em /assets/img/post-[slug].jpg.

Se a imagem vier com aparência cartoon/infantil ou genérica demais, ajuste o prompt 
(adicione mais detalhes concretos da cena) e tente novamente (máximo 2 tentativas).

Se a requisição falhar ou der timeout (pode acontecer, é um serviço gratuito com 
limite de uso), aguarde 15 segundos e tente novamente antes de desistir.

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
