---
description: Regenera a imagem de capa de todos os artigos existentes usando o padrão visual atual
allowed-tools: Read, Edit, Write, Bash(git *)
---

Regenere a imagem de capa de TODOS os artigos que já existem em includes/posts-data.php, 
seguindo este processo:

1. Leia includes/posts-data.php e liste todos os posts (tanto os 'full' => true quanto 
   os resumidos).

2. Para CADA post, gere uma nova imagem de capa seguindo exatamente o padrão descrito 
   na seção "## 4. IMAGEM DE CAPA" do arquivo .claude/commands/gerar-posts.md (mesmo 
   estilo, mesmas cores da marca, mesma regra de conceito visual único por tema, sem 
   texto/logo). Use a variável GEMINI_API_KEY.

3. Para cada imagem gerada, extraia o conceito visual a partir do título e do 
   excerpt/conteúdo real daquele post específico — nunca reaproveite o mesmo conceito 
   entre posts diferentes.

4. Salve cada imagem em /assets/img/ com nome baseado no slug do post (ex: 
   post-[slug].jpg), substituindo a imagem antiga do mesmo nome se já existir.

5. Confirme que o campo 'image' de cada post no array $posts já aponta pro caminho 
   correto (deve continuar apontando, já que o nome do arquivo é baseado no slug).

6. Processe em lotes de 5 posts por vez, e a cada lote concluído, faça um commit 
   separado (mensagem tipo "Regenera imagens de capa: lote 1/10") e push — assim, 
   se algo travar no meio, o progresso já feito não se perde.

7. Ao final de tudo, me dê um resumo: quantas imagens foram geradas com sucesso, 
   quantas falharam (se alguma) e o motivo, e confirme que todos os commits foram 
   enviados ao GitHub.

IMPORTANTE: Antes de começar o processo completo, gere a imagem de só 1 post primeiro, 
me mostre e espere minha aprovação antes de continuar para os outros 46.
