<?php
/* Esqueleto da página: head, faixa antifraude, header, conteúdo, footer, scripts. */
$static_url = 'assets';
$PREVIEW = $PREVIEW ?? true;
$page_title = $page_title ?? 'Logos Connect';
$page_desc = $page_desc ?? '';
$page_slug = $page_slug ?? 'index.html';
$canonical = 'https://logosconnect.com.br/' . ($page_slug === 'index.html' ? '' : str_replace('.html', '/', $page_slug));
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $page_title; ?></title>
	<meta name="description" content="<?php echo $page_desc; ?>">
	<?php echo $PREVIEW ? '<meta name="robots" content="noindex, nofollow">' : '<meta name="robots" content="index, follow">'; ?>
	<link rel="canonical" href="<?php echo $canonical; ?>">
	<link rel="icon" href="<?php echo $static_url; ?>/img/isologo.png" sizes="192x192">
	<link rel="apple-touch-icon" href="<?php echo $static_url; ?>/img/isologo.png">
	<meta property="og:title" content="<?php echo $page_title; ?>">
	<meta property="og:description" content="<?php echo $page_desc; ?>">
	<meta property="og:type" content="website">
	<meta property="og:locale" content="pt_BR">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Onest:wght@300..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $static_url; ?>/css/plugins.min.css">
	<link rel="stylesheet" href="<?php echo $static_url; ?>/css/site.css">
	<link rel="stylesheet" href="<?php echo $static_url; ?>/css/logos.css">
	<!-- Google Tag Manager (produção): GTM-K36DP57V — reativar ao publicar no domínio -->
</head>
<body class="<?php echo $PREVIEW ? 'has-preview' : ''; ?>">
	<?php include __DIR__ . '/navbar.php'; ?>

	<?php echo $page_content; ?>

	<?php include __DIR__ . '/footer.php'; ?>
	<?php if ($PREVIEW): ?><div class="preview-aviso">Versão de apresentação · proposta do novo site logosconnect.com.br · campos com ✎ dependem de confirmação da Logos</div><?php endif; ?>
	<a class="whats-flutuante" href="<?php echo WHATS_URL; ?>" target="_blank" rel="noopener" aria-label="Falar no WhatsApp" data-origem="flutuante"><?php echo ICO_WHATS; ?></a>

	<?php include __DIR__ . '/symbols.php'; ?>

	<script src="<?php echo $static_url; ?>/js/libs/jquery-3.7.1.min.js"></script>
	<script src="<?php echo $static_url; ?>/js/libs/gsap-latest-beta.min.js"></script>
	<script src="<?php echo $static_url; ?>/js/libs/ScrollTrigger.min.js"></script>
	<script src="<?php echo $static_url; ?>/js/libs/Lenis.min.js"></script>
	<script src="<?php echo $static_url; ?>/js/libs/SplitText.min.js"></script>
	<script src="<?php echo $static_url; ?>/js/libs/swiper.min.js"></script>
	<script src="<?php echo $static_url; ?>/js/libs/jquery.nice-select.min.js"></script>
	<script src="<?php echo $static_url; ?>/js/libs/jquery.toc.min.js"></script>
	<script src="<?php echo $static_url; ?>/js/animation.js"></script>
	<script src="<?php echo $static_url; ?>/js/grid-reveal.js"></script>
	<script src="<?php echo $static_url; ?>/js/main.js"></script>
	<script src="<?php echo $static_url; ?>/js/logos.js"></script>
	<script>
	/* Efeitos (Three.js) carregam depois do conteúdo e só quando fazem sentido: sem "economia de dados" e sem reduced-motion. */
	(function(){var c=navigator.connection;if((c&&c.saveData)||matchMedia("(prefers-reduced-motion: reduce)").matches)return;
	function go(){var s=document.createElement("script");s.src="<?php echo $static_url; ?>/js/logos-fx.js";s.async=true;document.body.appendChild(s);}
	window.addEventListener("load",function(){("requestIdleCallback"in window)?requestIdleCallback(go,{timeout:2500}):setTimeout(go,600);});})();
	</script>
</body>
</html>
