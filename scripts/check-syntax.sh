#!/usr/bin/env bash
#
# check-syntax.sh — Verifica sintaxe PHP de todos os arquivos .php staged
# antes de permitir um commit.
#
# Por quê: um apóstrofo não escapado (ex: "D'Antiochia") dentro de uma
# string PHP de aspas simples já quebrou a sintaxe do posts-data.php e
# derrubaria o site inteiro se tivesse ido para produção sem essa checagem.
#
# Este script é usado tanto pelo git hook local (.git/hooks/pre-commit)
# quanto pode ser rodado manualmente a qualquer momento:
#   bash scripts/check-syntax.sh          (checa apenas os .php staged)
#   bash scripts/check-syntax.sh --all    (checa todos os .php do repositório)
#
# Instalação do hook (necessário 1x por clone do repositório, pois
# .git/hooks/ não é versionado pelo Git):
#   cp scripts/check-syntax.sh .git/hooks/pre-commit
#   chmod +x .git/hooks/pre-commit
#
# (No Windows/Git Bash, o chmod +x já é suficiente; o Git para Windows
# executa hooks sem extensão via sh automaticamente.)

set -u

# Localiza o binário do PHP. Tenta o PATH primeiro; se não encontrar
# (comum logo após instalar via winget, antes de abrir um terminal novo),
# cai para o caminho padrão de instalação do winget nesta máquina.
PHP_BIN="$(command -v php 2>/dev/null || true)"
if [ -z "$PHP_BIN" ]; then
    FALLBACK="/c/Users/a3med/AppData/Local/Microsoft/WinGet/Packages/PHP.PHP.8.4_Microsoft.Winget.Source_8wekyb3d8bbwe/php.exe"
    if [ -x "$FALLBACK" ]; then
        PHP_BIN="$FALLBACK"
    fi
fi

if [ -z "$PHP_BIN" ]; then
    echo "AVISO: comando 'php' não encontrado no PATH e nenhum fallback conhecido funcionou."
    echo "Instale o PHP (winget install PHP.PHP.8.4) para habilitar a checagem de sintaxe."
    echo "Commit permitido sem verificação (não foi possível checar)."
    exit 0
fi

# Por padrão, verifica apenas os arquivos .php staged para este commit
# (é o que o hook de pre-commit precisa). Passe --all para checar todos
# os .php do repositório (útil para uma varredura manual completa):
#   bash scripts/check-syntax.sh --all
if [ "${1:-}" = "--all" ]; then
    FILES="$(find . -name '*.php' -not -path './vendor/*' -not -path './node_modules/*')"
else
    FILES="$(git diff --cached --name-only --diff-filter=ACM 2>/dev/null | grep '\.php$' || true)"
fi

if [ -z "$FILES" ]; then
    # Nada staged (ou nada .php staged) — não há o que checar neste commit.
    exit 0
fi

ERRORS=0
while IFS= read -r file; do
    [ -f "$file" ] || continue
    OUTPUT="$("$PHP_BIN" -l "$file" 2>&1)"
    if [ $? -ne 0 ]; then
        echo "❌ Erro de sintaxe PHP em: $file"
        echo "$OUTPUT"
        echo ""
        ERRORS=1
    fi
done <<< "$FILES"

if [ "$ERRORS" -eq 1 ]; then
    echo "----------------------------------------------------------------"
    echo "Commit bloqueado: corrija os erros de sintaxe acima antes de continuar."
    echo "----------------------------------------------------------------"
    exit 1
fi

echo "✅ php -l: nenhum erro de sintaxe encontrado nos arquivos .php do commit."
exit 0
