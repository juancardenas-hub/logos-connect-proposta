#!/usr/bin/env bash
# Gera as páginas HTML (PHP → HTML) e compila o CSS (Tailwind v4 + componentes do layout).
# Uso: bash src/build.sh          (versão de apresentação: noindex + faixa amarela)
#      PREVIEW=0 bash src/build.sh (versão de produção)
set -e
ROOT="$(cd "$(dirname "$0")/.." && pwd)"
cd "$ROOT"
PREVIEW_FLAG="${PREVIEW:-1}"
for f in src/php/*.php; do
  slug="$(basename "$f" .php).html"
  php -d display_errors=1 -r "define('PREVIEW', $PREVIEW_FLAG === '1' ? true : false); include '$f';" > "$slug"
  echo "ok $slug ($(wc -c < "$slug") bytes)"
done
python3 src/trim_symbols.py
# Tailwind: só as classes usadas nas páginas + tema Logos + componentes do layout
TW_BIN="${TW_BIN:-/home/claude/twbuild/node_modules/.bin/tailwindcss}"
"$TW_BIN" -i src/css/input.css -o assets/css/site.css --minify 2>&1 | tail -2
echo "css $(wc -c < assets/css/site.css) bytes"
# Efeitos: bundle Three.js + fx.js (esbuild)
ESB="${ESB:-/home/claude/twbuild/node_modules/.bin/esbuild}"
NODE_PATH=/home/claude/twbuild/node_modules "$ESB" src/js/fx.js --bundle --minify --format=iife --target=es2018 --outfile=assets/js/logos-fx.js --log-level=warning
echo "fx $(wc -c < assets/js/logos-fx.js) bytes"
