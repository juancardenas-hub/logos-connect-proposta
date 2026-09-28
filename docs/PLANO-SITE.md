# Logos Connect — Plano do novo site (v2)

Proposta de reformulação de logosconnect.com.br. Este documento é a especificação para
implementar o site no WordPress + Elementor (Hostinger) via Novamira, a partir da versão
estática publicada no GitHub Pages para aprovação.

Data: 26/09/2026 · Preparado por DualWin Consultoria / HeadXperience para Logos Connect.

---

## 1. Objetivo do site

1. Ser o destino das campanhas Google Ads e Meta Ads (links Indiky não servem como
   destino de anúncio; o Google exige página no domínio da empresa com as informações de
   crédito visíveis).
2. Converter visitante empresarial em **lead qualificado** por meio de uma pré-análise curta
   (sem CPF, sem documentos), e não em "mensagem no WhatsApp" genérica.
3. Fechar a lacuna de confiança: 28 anos, CNPJ, endereço físico, parceiros, política
   antifraude, equipe identificada, depoimentos reais.

Carro-chefe: **crédito com garantia de imóvel para empresas (CGI PJ)**. Financiamento
imobiliário e garantia de veículo têm páginas próprias, mas a home aponta para o CGI.

## 2. Mapa do site

| URL (produção) | Arquivo da proposta | Papel |
|---|---|---|
| `/` | `index.html` | Home — CGI PJ em primeiro plano, três soluções, prova, pré-análise |
| `/credito-garantia-imovel-empresas/` | `cgi-empresas.html` | Landing principal das campanhas de CGI |
| `/financiamento-imobiliario/` | `financiamento-imobiliario.html` | Landing de financiamento (PF e PJ) |
| `/credito-garantia-veiculo/` | `credito-veiculo.html` | Landing de garantia de veículo |
| `/sobre/` | `sobre.html` | Sobre, equipe, segurança/antifraude, contato, parceiros, LGPD |

Páginas que **deixam de existir**: one-page atual (todas as âncoras `#sobre`, `#solucoes`,
`#contato` viram redirecionamentos 301 para as novas URLs).

## 3. Sistema visual (mantém logo e cores; layout base SecureVest adaptado)

A versão de apresentação usa o layout comprado **SecureVest** (Tailwind v4) recolorido com a
paleta da Logos. No Elementor, replicar a mesma linguagem: header escuro fixo com faixa
antifraude, hero em fundo claro com cartão numérico, contêineres escuros arredondados,
cards com borda fina, passos numerados grandes, FAQ em acordeão, CTA escuro antes do footer.

**Cores**

| Token | Hex | Uso |
|---|---|---|
| `--verde` | `#98AE0F` | Cor principal: botões primários, destaques, ícones |
| `--verde-escuro` | `#707D20` | Texto sobre fundo claro, eyebrows, links |
| `--verde-900` | `#3B440F` | Cards escuros |
| `--secondary` | `#212909` | Header, footer, contêineres e cards escuros |
| `--verde-claro` | `#E9EFC4` | Fundo de ícones, hover do menu, seleção |
| `--amarelo` | `#FFDB00` | Pontuação: eyebrow em fundo escuro, números, faixa de preview |
| `--vermelho` | `#E20000` | Somente alertas antifraude |
| `--grafite` | `#2A2C2B` | Títulos, botão escuro, faixa antifraude, footer |
| `--texto` | `#3F413F` | Corpo de texto |
| `--texto-suave` | `#6B6D6A` | Texto secundário |
| `--linha` | `#E3E4DD` | Bordas |
| `--fundo` | `#F6F6F1` | Seções alternadas |

**Tipografia:** Onest (Google Fonts, variável 300–900) — 400 corpo, 600 labels/menus,
700 títulos. Escala: H1 36–60 px, H2 30–48 px, H3 20–24 px, corpo 16–18 px, eyebrow 16–18 px
caixa alta com o ícone-estrela girando ao lado.

**Componentes:** botões pill (`button-primary` verde com texto grafite, `button-autline-dark`,
`button-autline-white`, WhatsApp verde #25D366); cards com borda 1 px e raio 16 px; passos numerados com etiqueta "quem faz" e
"prazo"; tabela de comparação; lista de checks; FAQ em acordeão; selo tracejado âmbar
"✎ a confirmar" para campos pendentes (remover na versão final).

**Logos:** `logo.png` (fundo claro), `logo-branco.png` (footer), `isologo.png` (favicon e
marca d'água no cartão de comparação). Parceiros em `assets/img/parceiros/` (17 marcas,
em escala de cinza, cor no hover).

## 4. Componentes globais

1. **Faixa antifraude** (topo, todas as páginas): "A Logos Connect nunca pede pagamento
   antecipado…" com link para `/sobre/#seguranca`.
2. **Header sticky**: logo, 4 itens de menu, botão "Falar com especialista" (WhatsApp).
3. **Botão WhatsApp flutuante** (canto inferior direito).
4. **Footer**: descrição, soluções, contato, endereço + CNPJ, e bloco legal com
   (a) papel de correspondente bancário — Resolução CMN 4.935/2021, (b) exemplo
   representativo de crédito (exigência Google Ads para serviços financeiros),
   (c) link para política de privacidade.
5. **Pré-análise em 6 passos** (home e CGI): finalidade → valor → imóvel/cidade →
   valor do imóvel/situação → titular/porte → contato + consentimento LGPD. Sem CPF.
   Ao concluir: resumo + botão que abre o WhatsApp com a mensagem pronta.
   No WordPress: implementar com MetForm (multi-step) gravando o lead e disparando o
   mesmo evento `triagem_concluida` no dataLayer.
6. **Formulários curtos** (financiamento, veículo, contato): 6–8 campos → WhatsApp / e-mail.

## 5. Estrutura de cada página (seção → objetivo)

### Home
1. Hero: H1 "Crédito com garantia de imóvel para a sua empresa, com quem faz isso há 28
   anos." + cartão ilustrativo de comparação de propostas + 4 selos de confiança.
2. Para quem é: capital de giro · reorganizar dívidas · expansão.
3. Soluções: CGI PJ (destaque) · Financiamento · Veículo.
4. Como funciona: 6 passos com quem faz e prazo.
5. Por que a Logos (seção escura): história 1998, remuneração pelo banco, 5 checks, números.
6. Parceiros (17 logos).
7. Depoimentos (3 espaços reservados para depoimentos reais autorizados).
8. Pré-análise (6 passos).
9. FAQ curto (5) + link para FAQ completo.
10. CTA final.

### CGI para empresas (landing das campanhas)
1. Hero: promessa com taxa/prazo/LTV (a confirmar) + tabela "custo do dinheiro" comparando
   rotativo, cheque especial, sem garantia e CGI.
2. Para que serve: 6 usos (giro, dívidas, expansão, imóvel comercial, troca de contrato,
   sócio garantindo a empresa). Âncoras `#giro`, `#dividas`, `#expansao` para os anúncios.
3. Quem pode + bloco "O que costuma reduzir o valor aprovado" (avaliação, LTV real, IOF PJ).
4. Pré-análise (6 passos).
5. Como funciona (6 passos, prazos).
6. O que você recebe: tabela de comparação (CET, indexador, prazo, parcela, custos, líquido).
7. Custos e transparência: avaliação, cartório, IOF, taxa da Logos = R$ 0.
8. Especialista: quem cuida do caso (foto, nome, cargo).
9. FAQ (9 perguntas, inclusive "como sei que não é golpe?").
10. Parceiros · CTA final.

### Financiamento imobiliário
Hero + cartão comparativo · modalidades (residencial, comercial, portabilidade,
construção) · como funciona (6 passos) · formulário de análise · FAQ (7, reaproveitado do
site atual) · parceiros · CTA.

### Crédito com garantia de veículo
Hero + "quando faz sentido / quando o imóvel é melhor" · como funciona (4 passos) ·
requisitos + transparência · formulário · FAQ (4) · CTA.

### Sobre
Hero com história e números · como trabalhamos (correspondente bancário, remuneração) ·
equipe · segurança/antifraude (canais oficiais) · contato + mapa · parceiros/indicação ·
privacidade e LGPD.

## 6. Campos que a Logos precisa confirmar (marcados com ✎ no site)

- [ ] Taxa mínima, prazo máximo e LTV máximo do CGI (hero, cards, FAQ, rodapé legal)
- [ ] Faixa de crédito (mínimo/máximo) e valor mínimo do imóvel
- [ ] Prazos por etapa (documentação, propostas, avaliação, cartório, liberação)
- [ ] Política para empresa com restrição no nome
- [ ] Alíquotas de IOF vigentes (PJ) e custo médio da avaliação
- [ ] Faixas de juros de mercado usadas na tabela comparativa (fonte)
- [ ] Lista atual de parceiros ativos e autorização de uso das marcas
- [ ] Números: volume em crédito estruturado, operações concluídas, clientes atendidos
- [ ] 3 depoimentos reais com autorização (nome, empresa, cidade)
- [ ] Foto, cargo e minibio do Ademilson e da equipe
- [ ] Perfil oficial do Instagram (@logosconnect07?) — o atual @logosfomentos está inativo
- [ ] Condições de financiamento (% máximo, prazo máximo, limite do FGTS) e de veículo
  (taxa, prazo, ano mínimo, FIPE mínima, tipos aceitos)
- [ ] Exemplo representativo de crédito para o rodapé (obrigatório para anunciar no Google)
- [ ] Condições de parceria/indicação e link da plataforma de parceiros
- [ ] Encarregado de dados (DPO) e validação jurídica da política de privacidade

## 7. Medição (GTM-K36DP57V)

Eventos enviados ao `dataLayer` pelo site:

| Evento | Quando | Parâmetros |
|---|---|---|
| `clique_whatsapp` | clique em qualquer link de WhatsApp | `origem` (header, hero, footer, flutuante, triagem, cta-final…) |
| `triagem_inicio` | primeiro clique em "Continuar" | — |
| `triagem_passo` | cada passo validado | `passo` (1–6) |
| `triagem_concluida` | resultado exibido | `finalidade`, `valor`, `situacao`, `titular` |
| `form_enviado` | formulários curtos | `assunto` |

Conversão principal para Google/Meta: `triagem_concluida` (lead qualificado). Secundária:
`clique_whatsapp`. Enviar de volta às plataformas os desfechos comerciais (lead elegível,
proposta aceita, contrato) via CRM quando disponível.

## 8. Checklist técnico do WordPress (antes de ligar as campanhas)

- [ ] Remover `noindex` (Configurações → Leitura, e Yoast).
- [ ] Instalar cache/otimização (LiteSpeed Cache ou WP Rocket) e converter imagens para WebP.
  Meta: LCP mobile < 2,5 s (hoje 10,8 s).
- [ ] Sitemap XML via Yoast e envio ao Search Console; `robots.txt` com a linha `Sitemap:`.
- [ ] Meta description em todas as páginas (já definidas nos arquivos HTML).
- [ ] Redirecionamentos 301 das âncoras antigas para as novas URLs.
- [ ] Corrigir link do Instagram no footer e remover "Logos Formento" do copyright.
- [ ] GTM já instalado (GTM-K36DP57V); configurar gatilhos para os eventos acima.
- [ ] Verificação de anunciante de serviços financeiros no Google Ads (usa CNPJ e o site
  com as informações de crédito no rodapé).
- [ ] Bloco legal do rodapé com exemplo representativo preenchido.

## 9. Fonte dos arquivos

- `src/php/*.php` — uma página por arquivo (copy e estrutura); `src/php/Base/` — header,
  footer, helpers (pré-análise, FAQ, passos, CTA, parceiros).
- `src/css/input.css` — tema Logos (@theme) + componentes do layout; compila para
  `assets/css/site.css`. `assets/css/logos.css` — ajustes próprios.
- `assets/js/logos.js` — pré-análise, formulários e eventos; os demais JS são do layout.
- `src/js/fx.js` — camada de efeitos (Three.js: campo de partículas e linhas nos heros e blocos
  escuros; GSAP: linhas de progresso nos passos, tilt leve nos cards, varredura de luz). Compila
  para `assets/js/logos-fx.js` (esbuild) e carrega depois do conteúdo, só sem "economia de
  dados" e sem `prefers-reduced-motion`. No Elementor: adicionar via HTML widget/Code Snippet.
- Títulos: peso 600, H1 30–48 px, H2 25–38 px (override em `logos.css`).
- `bash src/build.sh` gera tudo; `PREVIEW=0` para a versão de produção.

## 10. Ordem de execução no Novamira (Elementor)

1. Salvar o design system (`novamira/save-design`) com os tokens da seção 3 e ativar.
2. Configurar Site Settings do Elementor: cores globais, tipografia Mulish, botões.
3. Construir header e footer como templates de tema (Elementor Pro) — inclui faixa
   antifraude, botão flutuante e bloco legal.
4. Criar as 5 páginas, nesta ordem: CGI empresas → Home → Financiamento → Veículo → Sobre.
   Copiar a copy dos arquivos HTML, seção por seção (fonte única: `src/paginas.py`).
5. Montar a pré-análise em MetForm (multi-step, 6 passos) e os 3 formulários curtos;
   gravar leads e disparar eventos no dataLayer.
6. Aplicar `novamira/check-design` em cada página antes de publicar.
7. Substituir os selos "✎ a confirmar" pelos valores confirmados pela Logos.
8. Rodar o checklist técnico da seção 8 e publicar.
