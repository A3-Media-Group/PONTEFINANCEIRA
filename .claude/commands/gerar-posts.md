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

## 4. IMAGEM DE CAPA
Gere via API do Gemini (variável GEMINI_API_KEY), representando o tema, na paleta do 
site (#0E2438 azul-tinta, #1E7F5C verde, #C9A227 dourado). Salve em /assets/img/ com 
nome baseado no slug. Escreva um alt text descritivo incluindo a palavra-chave principal.

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
