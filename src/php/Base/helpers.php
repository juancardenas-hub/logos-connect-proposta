<?php
/* Helpers compartilhados: constantes, ícones e blocos reutilizáveis. */
define('WHATS_NUM', '557199622679');
define('WHATS_URL', 'https://wa.me/' . WHATS_NUM . '?text=' . rawurlencode('Olá, Logos Connect! Vim pelo site e quero falar com um especialista.'));
define('ICO_WHATS', '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.5 14.4c-.3-.1-1.8-.9-2-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-.3-.1-1.3-.5-2.4-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.6l.4-.5.3-.5c.1-.2 0-.4 0-.5L9.2 6.9c-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.1.2 2.1 3.2 5.1 4.5.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.8-.7 2-1.4.2-.7.2-1.3.2-1.4-.1-.2-.3-.3-.7-.4zM12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.3 5L2 22l5.2-1.4c1.4.8 3.1 1.2 4.8 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2zm0 18.2c-1.5 0-3-.4-4.3-1.2l-.3-.2-3.1.8.8-3-.2-.3C4.1 15 3.7 13.5 3.7 12c0-4.6 3.7-8.3 8.3-8.3s8.3 3.7 8.3 8.3-3.7 8.2-8.3 8.2z"/></svg>');

$PARCEIROS = [
    ['btg-pactual', 'BTG Pactual'], ['santander', 'Santander'], ['banco-inter', 'Banco Inter'],
];

function ico($name, $class = 'w-6 h-6') {
    $paths = [
        'cash' => '<rect x="2" y="6" width="20" height="12" rx="2"/><circle cx="12" cy="12" r="3"/><path d="M6 12h.01M18 12h.01"/>',
        'swap' => '<path d="M16 3h5v5M4 20 21 3M21 16v5h-5M15 15l6 6M4 4l5 5"/>',
        'trend' => '<path d="M3 17l6-6 4 4 8-8"/><path d="M14 7h7v7"/>',
        'home' => '<path d="M3 11 12 3l9 8"/><path d="M5 10v10h14V10"/><path d="M10 20v-6h4v6"/>',
        'bank' => '<path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3"/>',
        'car' => '<path d="M5 17h14M3 12l2-5a2 2 0 0 1 2-1h10a2 2 0 0 1 2 1l2 5v5H3z"/><circle cx="7.5" cy="17" r="1.5"/><circle cx="16.5" cy="17" r="1.5"/>',
        'shield' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/>',
        'clock' => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
        'pin' => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
        'user' => '<circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/>',
        'compare' => '<path d="M4 6h16M4 12h10M4 18h7"/><circle cx="18" cy="17" r="3"/><path d="m20.5 19.5 2 2"/>',
        'doc' => '<path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><path d="M14 3v6h6M8 13h8M8 17h8"/>',
        'check' => '<path d="M5 12l5 5L20 7"/>',
        'eye' => '<path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/>',
        'people' => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><circle cx="17" cy="9" r="2.5"/><path d="M15.5 14.5A5 5 0 0 1 21.5 20"/>',
        'building' => '<rect x="4" y="3" width="16" height="18" rx="1"/><path d="M9 7h2M13 7h2M9 11h2M13 11h2M9 15h2M13 15h2M10 21v-3h4v3"/>',
    ];
    return '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths[$name] . '</svg>';
}

/* Canvas de partículas (Three.js) — dentro de um contêiner relative */
function fx_canvas($theme = 'light', $count = '') {
    return '<canvas class="fx-canvas" data-fx="field" data-fx-theme="' . $theme . '"' . ($count ? ' data-fx-count="' . $count . '"' : '') . ' aria-hidden="true"></canvas>';
}

/* Cabeçalho de seção (padrão do layout) */
function section_title($eyebrow, $title, $text = '', $dark = false, $center = false) {
    global $static_url;
    $icon = $dark ? 'title-icon-primary.svg' : 'title-icon.svg';
    $eyeColor = $dark ? 'text-primary' : 'text-verde-escuro';
    $titleColor = $dark ? 'text-title_white' : 'text-title_black';
    $pColor = $dark ? 'text-paragraph_white' : 'text-paragraph_black';
    if ($center) {
        return '<div class="max-w-190 mx-auto text-center mb-12 sm:mb-14 md:mb-16 lg:mb-18" data-section-title>
            <div class="flex items-center justify-center gap-2.5" data-subtitle><img class="rotate" src="' . $static_url . '/img/' . $icon . '" alt=""><span class="text-base lg:text-lg font-semibold leading-[1.1]! ' . $eyeColor . ' uppercase block">' . $eyebrow . '</span></div>
            <h2 class="text-3xl md:text-4xl lg:text-[40px] xl:text-5xl font-bold leading-tight ' . $titleColor . ' mt-4" data-content>' . $title . '</h2>' .
            ($text ? '<p class="mt-4 text-base sm:text-lg ' . $pColor . '" data-content>' . $text . '</p>' : '') . '</div>';
    }
    return '<div class="flex items-start justify-between gap-4 md:gap-10 mb-12 sm:mb-14 md:mb-16 lg:mb-18 flex-col md:flex-row max-w-125 md:max-w-full" data-section-title>
        <div class="md:max-w-170 w-full">
            <div class="flex items-center gap-2.5" data-subtitle><img class="rotate" src="' . $static_url . '/img/' . $icon . '" alt=""><span class="text-base lg:text-lg font-semibold leading-[1.1]! ' . $eyeColor . ' uppercase block">' . $eyebrow . '</span></div>
            <h2 class="text-3xl md:text-4xl lg:text-[40px] xl:text-5xl font-bold leading-tight ' . $titleColor . ' mt-4" data-content>' . $title . '</h2>
        </div>' . ($text ? '<p class="md:max-w-115 w-full text-base sm:text-lg ' . $pColor . '" data-content>' . $text . '</p>' : '') . '</div>';
}

function btn_whats($label = 'Falar no WhatsApp', $origem = 'geral', $class = 'button-primary') {
    return '<a class="' . $class . '" href="' . WHATS_URL . '" target="_blank" rel="noopener" data-origem="' . $origem . '"><span class="w-4 h-4 inline-block">' . ICO_WHATS . '</span>' . $label . '</a>';
}

function btn_arrow($label, $href, $class = 'button-primary') {
    return '<a class="' . $class . '" href="' . $href . '">' . $label . '<svg class="w-2.5 h-2.5 fill-current"><use href="#buttonArrow"></use></svg></a>';
}

function opcoes($nome, $itens) {
    $out = '<div class="opcoes">';
    foreach ($itens as $i => $par) {
        $id = "$nome-$i";
        $out .= '<div class="opcao"><input type="radio" name="' . $nome . '" id="' . $id . '" value="' . $par[0] . '"><label for="' . $id . '">' . $par[1] . '</label></div>';
    }
    return $out . '</div>';
}

/* Pré-análise em 6 passos (sem CPF, sem documentos) */
function triagem() {
    return '
<div class="triagem p-5 sm:p-8 lg:p-10 max-w-190 mx-auto" data-triagem id="pre-analise">
  <div class="flex justify-between items-center gap-3 mb-4 text-xs sm:text-sm font-semibold uppercase tracking-wide text-paragraph_black"><span data-contador>Passo 1 de 6</span><span>Menos de 2 minutos · sem CPF</span></div>
  <div class="triagem__barra mb-7"><span></span></div>
  <div class="triagem__corpo">
    <fieldset class="triagem__passo border-0 p-0 m-0">
      <legend class="text-xl sm:text-2xl font-bold text-title_black mb-1">Para que a sua empresa precisa do crédito?</legend>
      <p class="text-paragraph_black text-sm sm:text-base mb-5">Isso define quais instituições fazem sentido para o seu caso.</p>
      ' . opcoes('finalidade', [['giro', 'Capital de giro / fluxo de caixa'], ['dividas', 'Quitar dívidas mais caras'], ['expansao', 'Expandir, comprar equipamentos ou frota'], ['imovel', 'Comprar imóvel comercial ou terreno'], ['outro', 'Outro objetivo']]) . '
      <p class="erro">Escolha uma opção para continuar.</p>
    </fieldset>
    <fieldset class="triagem__passo border-0 p-0 m-0" hidden>
      <legend class="text-xl sm:text-2xl font-bold text-title_black mb-1">Quanto você precisa, aproximadamente?</legend>
      <p class="text-paragraph_black text-sm sm:text-base mb-5">Uma faixa já basta. O valor final depende da avaliação do imóvel.</p>
      ' . opcoes('valor', [['ate100', 'Até R$ 100 mil'], ['100-300', 'R$ 100 mil a R$ 300 mil'], ['300-1m', 'R$ 300 mil a R$ 1 milhão'], ['1m+', 'Acima de R$ 1 milhão']]) . '
      <p class="erro">Escolha uma faixa para continuar.</p>
    </fieldset>
    <fieldset class="triagem__passo border-0 p-0 m-0" hidden>
      <legend class="text-xl sm:text-2xl font-bold text-title_black mb-1">Qual imóvel pode ser dado em garantia?</legend>
      <p class="text-paragraph_black text-sm sm:text-base mb-5">O imóvel continua seu e você continua usando normalmente.</p>
      ' . opcoes('tipo_imovel', [['residencial', 'Casa ou apartamento'], ['comercial', 'Sala, loja, galpão ou prédio comercial'], ['terreno', 'Terreno urbano'], ['rural', 'Imóvel rural']]) . '
      <div class="campo mt-5"><label for="cidade">Cidade e estado do imóvel</label><input type="text" id="cidade" name="cidade" placeholder="Ex.: Salvador, BA" required></div>
      <p class="erro">Informe o tipo e a cidade do imóvel.</p>
    </fieldset>
    <fieldset class="triagem__passo border-0 p-0 m-0" hidden>
      <legend class="text-xl sm:text-2xl font-bold text-title_black mb-1">Quanto vale o imóvel e como está a situação dele?</legend>
      <p class="text-paragraph_black text-sm sm:text-base mb-5">Estimativa de mercado. Imóvel com financiamento em andamento também pode ser analisado.</p>
      ' . opcoes('valor_imovel', [['ate300', 'Até R$ 300 mil'], ['300-800', 'R$ 300 mil a R$ 800 mil'], ['800-2m', 'R$ 800 mil a R$ 2 milhões'], ['2m+', 'Acima de R$ 2 milhões']]) . '
      <div class="mt-5">' . opcoes('situacao', [['quitado', 'Quitado, sem dívida'], ['financiado', 'Ainda financiado (com saldo devedor)']]) . '</div>
      <p class="erro">Informe o valor e a situação do imóvel.</p>
    </fieldset>
    <fieldset class="triagem__passo border-0 p-0 m-0" hidden>
      <legend class="text-xl sm:text-2xl font-bold text-title_black mb-1">Em nome de quem está o imóvel?</legend>
      <p class="text-paragraph_black text-sm sm:text-base mb-5">O imóvel do sócio pode garantir crédito para a empresa.</p>
      ' . opcoes('titular', [['empresa', 'Da empresa (CNPJ)'], ['socio', 'De um sócio'], ['terceiro', 'De um familiar ou terceiro'], ['nao_sei', 'Ainda não sei']]) . '
      <div class="campo mt-5"><label for="porte">Faturamento anual aproximado da empresa</label>
        <select id="porte" name="porte" required><option value="">Selecione</option><option>Até R$ 360 mil (MEI/ME)</option><option>R$ 360 mil a R$ 4,8 milhões</option><option>R$ 4,8 milhões a R$ 30 milhões</option><option>Acima de R$ 30 milhões</option><option>Prefiro informar depois</option></select></div>
      <p class="erro">Informe o titular do imóvel e o porte da empresa.</p>
    </fieldset>
    <fieldset class="triagem__passo border-0 p-0 m-0" hidden>
      <legend class="text-xl sm:text-2xl font-bold text-title_black mb-1">Para quem enviamos a pré-análise?</legend>
      <p class="text-paragraph_black text-sm sm:text-base mb-5">Um especialista da Logos entra em contato em horário comercial. Nenhum documento é pedido nesta etapa.</p>
      <div class="grid sm:grid-cols-2 gap-4">
        <div class="campo"><label for="nome">Seu nome</label><input type="text" id="nome" name="nome" required autocomplete="name"></div>
        <div class="campo"><label for="empresa">Empresa</label><input type="text" id="empresa" name="empresa" required autocomplete="organization"></div>
        <div class="campo"><label for="whatsapp">WhatsApp</label><input type="tel" id="whatsapp" name="whatsapp" required autocomplete="tel" placeholder="(71) 9 9999-9999"></div>
        <div class="campo"><label for="email">E-mail</label><input type="email" id="email" name="email" required autocomplete="email"></div>
      </div>
      <label class="consent mt-5"><input type="checkbox" name="consent" required> Autorizo a Logos Connect a usar estes dados para analisar meu pedido de crédito e entrar em contato, conforme a <a class="underline" href="sobre.html#privacidade">Política de Privacidade</a>. Não compartilhamos seus dados com instituições financeiras sem a sua autorização.</label>
      <p class="erro">Preencha todos os campos e aceite a política de privacidade.</p>
    </fieldset>
    <div class="flex justify-between gap-3 mt-7">
      <button type="button" class="button-autline-dark text-title_black! hover:text-white!" data-voltar>Voltar</button>
      <button type="button" class="button-primary" data-avancar>Continuar</button>
    </div>
  </div>
  <div class="triagem__resultado text-center" hidden>
    <div class="flex items-center justify-center gap-2.5"><img class="rotate" src="assets/img/title-icon.svg" alt=""><span class="text-base font-semibold leading-[1.1]! text-verde-escuro uppercase">Pré-análise recebida</span></div>
    <h3 class="text-2xl sm:text-3xl font-bold text-title_black mt-4">Seu caso tem perfil para análise multibanco.</h3>
    <p class="text-paragraph_black mt-3">Envie o resumo abaixo pelo WhatsApp para falar agora com um especialista, ou aguarde nosso contato em horário comercial.</p>
    <div class="triagem__resumo bg-background rounded-xl p-5 my-6 text-sm sm:text-base"><dl></dl></div>
    <a class="button-primary btn-whats" href="#" target="_blank" rel="noopener" data-link-whats data-origem="triagem"><span class="w-4 h-4 inline-block">' . ICO_WHATS . '</span>Enviar pelo WhatsApp e falar com especialista</a>
    <p class="text-xs text-paragraph_black mt-6">Esta pré-análise não é uma proposta de crédito. As condições finais dependem da análise da instituição parceira e da avaliação do imóvel.</p>
  </div>
</div>';
}

/* Bloco de parceiros */
function parceiros_bloco($titulo = 'Instituições com as quais operamos', $fundo = 'bg-background') {
    global $PARCEIROS, $static_url;
    $logos = '';
    foreach ($PARCEIROS as $p) {
        $img = file_exists(__DIR__ . '/../../../assets/img/parceiros/' . $p[0] . '.webp')
            ? '<img src="' . $static_url . '/img/parceiros/' . $p[0] . '.webp" alt="' . $p[1] . '" loading="lazy" width="160" height="40">'
            : '<span class="text-xl font-bold text-paragraph_black">' . $p[1] . '</span>';
        $logos .= '<div class="bg-white border border-border rounded-xl p-4 flex items-center justify-center min-h-19">' . $img . '</div>';
    }
    return '
<section class="section-spacing-md ' . $fundo . '" id="parceiros">
  <div class="container">
    ' . section_title('Multibanco', $titulo, 'Uma única análise, enviada apenas às instituições que fazem sentido para o seu perfil. Você compara as propostas e escolhe.') . '
    <div class="parceiros-grid grid grid-cols-3 gap-3 sm:gap-4 max-w-200 mx-auto">' . $logos . '</div>
  </div>
</section>';
}

/* Formulário curto → WhatsApp */
function form_curto($assunto, $prefix, $campos_extra) {
    $out = '<form class="triagem p-5 sm:p-8 lg:p-10" data-form-whats data-assunto="' . $assunto . '">
      <div class="grid sm:grid-cols-2 gap-4">
        <div class="campo sm:col-span-2"><label for="' . $prefix . '-nome">Nome</label><input type="text" id="' . $prefix . '-nome" name="nome" required autocomplete="name"></div>
        <div class="campo"><label for="' . $prefix . '-whats">WhatsApp</label><input type="tel" id="' . $prefix . '-whats" name="whatsapp" required autocomplete="tel"></div>
        <div class="campo"><label for="' . $prefix . '-email">E-mail</label><input type="email" id="' . $prefix . '-email" name="email" required autocomplete="email"></div>' . $campos_extra . '
      </div>
      <label class="consent mt-5"><input type="checkbox" required> Autorizo o contato da Logos Connect conforme a <a class="underline" href="sobre.html#privacidade">Política de Privacidade</a>.</label>
      <div class="flex justify-end mt-6"><button type="submit" class="button-primary">Enviar pelo WhatsApp</button></div>
      <p class="form-ok mt-4 text-sm text-verde-escuro font-semibold" hidden>Mensagem montada. Se o WhatsApp não abriu, <a class="underline" href="' . WHATS_URL . '" target="_blank" rel="noopener">clique aqui</a>.</p>
    </form>';
    return $out;
}

function campo_select($id, $name, $label, $opts, $full = false) {
    $o = '<option value="">Selecione</option>';
    foreach ($opts as $x) $o .= '<option>' . $x . '</option>';
    return '<div class="campo' . ($full ? ' sm:col-span-2' : '') . '"><label for="' . $id . '">' . $label . '</label><select id="' . $id . '" name="' . $name . '" required>' . $o . '</select></div>';
}
function campo_text($id, $name, $label, $ph = '', $full = false) {
    return '<div class="campo' . ($full ? ' sm:col-span-2' : '') . '"><label for="' . $id . '">' . $label . '</label><input type="text" id="' . $id . '" name="' . $name . '" placeholder="' . $ph . '" required></div>';
}

/* Passos "como funciona" — cards numerados do layout */
function passos($itens) {
    $out = '<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6" data-sttr-wrapper>';
    $n = 1;
    foreach ($itens as $it) {
        $tags = '';
        foreach ($it['tags'] as $t) $tags .= '<span class="text-[11px] font-semibold uppercase tracking-wide px-2.5 py-1 rounded-full ' . ($t[1] ? 'bg-verde-claro text-verde-escuro' : 'bg-background border border-border text-paragraph_black') . '">' . $t[0] . '</span>';
        $out .= '<div data-sttr-card><div class="bg-background p-5 sm:p-6 lg:p-7 rounded-2xl border border-border relative h-full">
            <span class="text-[#E1E3D6] absolute top-3 right-4 text-5xl md:text-6xl lg:text-7xl leading-none! font-bold">' . sprintf('%02d', $n) . '</span>
            <h3 class="text-title_black text-lg md:text-xl font-semibold pr-16 pb-4 border-b border-border">' . $it['titulo'] . '</h3><span class="fx-linha" data-fx-linha></span>
            <p class="text-paragraph_black text-base mt-4">' . $it['texto'] . '</p>
            <div class="flex flex-wrap gap-2 mt-5">' . $tags . '</div></div></div>';
        $n++;
    }
    return $out . '</div>';
}

/* FAQ acordeão (padrão do layout) */
function faq($itens) {
    $out = '<div class="grid gap-4 faq-wrapper max-w-215 mx-auto">';
    foreach ($itens as $it) {
        $out .= '<div class="single-faq duration-300 p-4 sm:p-5 border border-border bg-white overflow-hidden rounded-xl sm:rounded-2xl">
            <div class="faq-head cursor-pointer duration-300 flex items-center justify-between gap-2">
                <button type="button" class="font-semibold text-base sm:text-lg text-left text-title_black cursor-pointer flex items-center gap-3">
                    <span class="w-9 h-9 rounded-full bg-primary flex items-center justify-center shrink-0 text-title_black"><svg class="w-3 h-4 fill-current"><use href="#questionMark"></use></svg></span>
                    <span class="flex-1">' . $it[0] . '</span></button>
                <svg class="fill-current duration-300 ease-in-out h-4.5 w-4 faq-icon shrink-0"><use href="#arrow-down"></use></svg>
            </div>
            <div class="faq-body hidden"><div class="mt-3.5 pl-12"><p class="text-paragraph_black">' . $it[1] . '</p></div></div></div>';
    }
    return $out . '</div>';
}

/* CTA final escuro (padrão do layout, antes do footer) */
function cta_final($titulo, $texto, $botao = 'Fazer pré-análise gratuita', $ancora = '#pre-analise') {
    global $static_url;
    return '
<section class="section-spacing-md">
  <div class="container-lg">
    <div class="p-6 sm:p-10 xl:p-16 bg-secondary rounded-2xl md:rounded-3xl relative z-1 overflow-hidden" data-fx-sweep>
      <img class="w-full h-full absolute top-0 left-0 -z-1 select-none object-cover opacity-70" src="' . $static_url . '/img/tpl/roi-bg-shape.webp" alt="">
      ' . fx_canvas('dark', 60) . '
      <div class="flex items-center justify-between gap-6 md:gap-10 flex-col md:flex-row">
        <div class="md:max-w-150 w-full">
          <h2 class="text-3xl md:text-4xl lg:text-[40px] xl:text-5xl font-bold text-white leading-tight!">' . $titulo . '</h2>
          <p class="mt-4 text-paragraph_white text-base sm:text-lg">' . $texto . '</p>
        </div>
        <div class="flex items-center gap-3 flex-wrap">
          ' . btn_arrow($botao, $ancora) . '
          ' . btn_whats('Falar no WhatsApp', 'cta-final', 'button-autline-white') . '
        </div>
      </div>
    </div>
  </div>
</section>';
}

/* Rodapé de cada página */
function render_page($slug, $title, $desc, $content) {
    $page_slug = $slug; $page_title = $title; $page_desc = $desc; $page_content = $content;
    $PREVIEW = defined('PREVIEW') ? PREVIEW : true;
    include __DIR__ . '/base.php';
}
