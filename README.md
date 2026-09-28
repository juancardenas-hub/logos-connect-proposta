# Logos Connect — proposta do novo site (v2)

Versão estática para apresentação e aprovação. A implementação final é no WordPress +
Elementor (Hostinger), seguindo `docs/PLANO-SITE.md`.

## Páginas

- `index.html` — Home
- `cgi-empresas.html` — Crédito com garantia de imóvel para empresas (landing das campanhas)
- `financiamento-imobiliario.html` — Financiamento imobiliário
- `credito-veiculo.html` — Crédito com garantia de veículo
- `sobre.html` — Sobre, segurança, contato, LGPD

## Como editar

Layout base: template SecureVest (Tailwind v4), recolorido com a paleta da Logos.

- Copy e estrutura: `src/php/<pagina>.php`; blocos compartilhados em `src/php/Base/`.
- Tema e CSS: `src/css/input.css` (compila para `assets/css/site.css`) e `assets/css/logos.css`.
- Comportamento próprio (pré-análise, formulários, eventos): `assets/js/logos.js`.

Depois de editar:

```bash
bash src/build.sh            # versão de apresentação (noindex + faixa amarela)
PREVIEW=0 bash src/build.sh  # versão de produção
```

Requer PHP 8 e o Tailwind CLI v4 (`npm i @tailwindcss/cli tailwindcss`; ajuste `TW_BIN` se
necessário). Os arquivos `.html` da raiz são gerados; não edite diretamente.

## Campos pendentes

Tudo que aparece com o selo **✎** depende de confirmação da Logos Connect (taxas, prazos,
parceiros, depoimentos, fotos). A lista completa está em `docs/PLANO-SITE.md`, seção 6.
