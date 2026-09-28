<?php
$nav = [
    ['cgi-empresas.html', 'Crédito para empresas'],
    ['financiamento-imobiliario.html', 'Financiamento imobiliário'],
    ['credito-veiculo.html', 'Garantia de veículo'],
    ['sobre.html', 'Sobre a Logos'],
];
?>
<header class="header-area bg-secondary fixed w-full top-0 left-0 right-0 z-999999 border-b border-white/10">
    <div class="faixa-antifraude"><span class="hidden sm:inline"><strong>Aviso de segurança:</strong> a Logos Connect nunca pede pagamento antecipado, taxa de liberação ou depósito para dar andamento ao seu crédito. Se alguém pedir em nosso nome, é golpe.</span><span class="sm:hidden"><strong>Atenção:</strong> nunca pedimos pagamento antecipado. Se alguém pedir em nosso nome, é golpe.</span> <a href="sobre.html#seguranca">Saiba como nos identificar</a></div>
    <div class="container lg:py-1.5">
        <div class="header-wrapper flex items-center justify-between gap-5 py-3 sm:py-4 lg:py-0">
            <a class="logo" href="index.html" aria-label="Logos Connect — início">
                <img src="<?php echo $static_url; ?>/img/logo-branco.png" width="508" height="144" alt="Logos Connect">
            </a>
            <nav class="main-menu" data-lenis-prevent aria-label="Principal">
                <ul>
                    <?php foreach ($nav as $n): ?>
                    <li><a href="<?php echo $n[0]; ?>" class="sub-menu-item<?php echo $n[0] === $page_slug ? ' active' : ''; ?>"<?php echo $n[0] === $page_slug ? ' aria-current="page"' : ''; ?>><?php echo $n[1]; ?></a></li>
                    <?php endforeach; ?>
                    <li class="block sm:hidden">
                        <a href="<?php echo WHATS_URL; ?>" target="_blank" rel="noopener" class="button-primary sm:block! text-center justify-center! w-full" data-origem="menu-mobile">Falar com especialista</a>
                    </li>
                </ul>
            </nav>
            <div class="flex items-center gap-5">
                <a href="<?php echo WHATS_URL; ?>" target="_blank" rel="noopener" class="button-primary hidden! sm:inline-flex!" data-origem="header">Falar com especialista</a>
                <button type="button" class="menuToggle" aria-label="Abrir menu">
                    <svg class="stroke-current text-white" width="40" viewBox="0 0 100 100">
                        <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                        <path class="line line2" d="M 20,50 H 80" />
                        <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>
