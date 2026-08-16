# Ponte Financeira — Projeto do site (PHP/HTML)

Site reconstruído para importar na ferramenta **"Site PHP/HTML personalizado"** da Hostinger,
com foco em SEO, velocidade e numa estrutura fácil de manter (inclusive comigo, o Claude,
gerando e publicando novos posts para você).

## 1. Como importar na Hostinger

1. No hPanel, abra o site que você criou com a opção **"Site PHP/HTML personalizado"**.
2. Envie **todo o conteúdo desta pasta** (não a pasta em si, o conteúdo dela) para a raiz
   `public_html` via **Gerenciador de Arquivos** ou **FTP**:
   - Pelo Gerenciador de Arquivos: compacte tudo em `.zip`, faça upload e escolha "Extrair" na raiz.
   - Por FTP: envie mantendo a mesma estrutura de pastas (`includes/`, `assets/`, etc.).
3. Confirme que o domínio `pontefinanceira.com.br` aponta para essa hospedagem (já está,
   pois é o mesmo site).
4. Acesse `https://www.pontefinanceira.com.br` e confira se tudo carregou.
5. Em **Hostinger → E-mails**, confirme que existe uma caixa `contato@pontefinanceira.com.br`
   (ou configure o SMTP) para o formulário de contato funcionar com `mail()`.

Não é necessário banco de dados — o site é 100% arquivos PHP/HTML/CSS.

## 2. Estrutura do projeto

```
/
├── index.php                 → Página inicial
├── financas-pessoais.php     → Listagem paginada de artigos (blog)
├── artigo.php                → Template único que renderiza QUALQUER post (URL amigável /artigo/slug)
├── calculadoras.php          → Página de simuladores/calculadoras
├── arquivos-gratuitos.php    → Downloads + FAQ
├── sobre.php                 → Sobre Nós
├── contato.php                → Contato (com formulário funcional)
├── 404.php                   → Página de erro personalizada
├── sitemap.php               → Sitemap XML gerado automaticamente
├── robots.txt
├── .htaccess                 → HTTPS/www forçado, cache, 404
├── includes/
│   ├── config.php            → Nome do site, e-mail, menu — edite aqui uma vez só
│   ├── posts-data.php        → ⭐ TODOS os artigos do blog vivem aqui
│   ├── header.php            → <head> + menu (SEO meta tags dinâmicas)
│   └── footer.php            → Rodapé
└── assets/
    ├── css/style.css         → Todo o visual do site
    ├── js/main.js            → Menu mobile
    └── img/                  → Imagens (placeholders incluídos — troque pelas reais)
```

## 3. O que já está pronto

- **Todas as páginas do site original** foram recriadas: Início, Artigos, Calculadoras,
  Download, Sobre Nós e Contato — com o mesmo conteúdo e tom de voz do site atual.
- **Os 2 últimos posts publicados** ("Como Começar a Investir..." e "Segurança nas Compras
  Online...") foram migrados **na íntegra**, com o corpo completo do artigo.
- **Inventariei os outros 45 artigos** do blog (todas as 8 páginas de paginação) com título,
  categoria, data e resumo reais — eles já aparecem certinho na listagem `/financas-pessoais.php`
  e têm página própria (`/artigo/slug-do-post`, URL amigável) funcionando, com SEO completo (title, meta
  description, Open Graph, dados estruturados Article). O que falta neles é o **corpo integral**
  do texto (ver "Próximos passos" abaixo).
- **SEO técnico**: title e meta description únicos por página, canonical, Open Graph/Twitter
  Card, dados estruturados JSON-LD (Organization, WebSite, Article), sitemap.xml dinâmico,
  robots.txt, URLs limpas, imagens com `alt`, HTML semântico (h1 único por página, hierarquia
  de headings), site 100% responsivo, `.htaccess` com HTTPS/www forçado e cache de estáticos.
- **Formulário de contato** funcional via `mail()` nativo do PHP, com proteção anti-spam
  (honeypot).

## 4. Próximos passos (o que fazer comigo depois)

Este projeto foi pensado para você me pedir, quando quiser:

- **"Escreva o artigo completo de [título]"** → eu abro `includes/posts-data.php`, escrevo o
  corpo em HTML e marco `'full' => true`. Não mexe em mais nada.
- **"Crie um post novo sobre [assunto]"** → eu adiciono um novo item no array `$posts` com
  título, categoria, data, resumo e conteúdo — ele já aparece automaticamente na home, na
  listagem e no sitemap.
- **"Troque a imagem do post X"** → basta enviar a imagem; eu salvo em `/assets/img/` e
  atualizo o campo `image` do post.
- **"Ajuste o texto da página Sobre/Contato"** → eu edito o arquivo `.php` correspondente.
- **"Ative a calculadora de FGTS/Rescisão"** → me diga se você já tem os scripts/fórmulas
  ou se quer que eu monte a lógica de cálculo em HTML/JS dentro de `calculadoras.php`.

Basicamente: **um arquivo por tipo de mudança**. Isso é o que torna o projeto fácil de eu
continuar operando com você — sem precisar mexer no builder da Hostinger de novo.

## 5. Itens que pedem sua atenção antes (ou logo após) o import

- As imagens em `/assets/img/` são **placeholders gerados automaticamente** (com o motivo
  visual "ponte"). Troque por fotos/imagens reais do seu banco de imagens ou peça para eu
  gerar novas artes.
- O `logo.png` é um placeholder simples — se você tiver a logo oficial em PNG/SVG, envie
  que eu troco.
- ✅ As calculadoras já estão **ativas e funcionando**: Horas Extras (`/calculadoras/horas-extras.php`),
  Rescisão Trabalhista (`/calculadoras/rescisao.php`), FGTS na Rescisão (`/calculadoras/fgts.php`)
  e os Simuladores Financeiros — Juros Compostos, Meta de Poupança, Investimentos e
  Financiamento (`/simuladores-financeiros.php`). O código de cada uma vive em
  `includes/widget-*.php` — se quiser ajustar uma fórmula, é só pedir.
- O formulário de contato usa `mail()` do PHP. Se preferir um serviço mais confiável
  (SMTP autenticado, evita cair em spam), me avise que eu adapto para SMTP da própria
  Hostinger ou um serviço como Resend/Brevo.
