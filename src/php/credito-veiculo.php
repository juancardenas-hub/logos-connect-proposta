<?php
require_once __DIR__ . '/Base/helpers.php';
$static_url = 'assets';
ob_start();
?>
<main id="main-content">

	<section class="py-12 md:py-16 lg:py-20 xl:py-24 bg-hero relative z-1 overflow-hidden" data-digital-hero-banner>
		<img class="hidden lg:block absolute top-[4%] left-0 -z-1 opacity-70" src="<?php echo $static_url; ?>/img/tpl/hero-bg-shape.webp" alt="">
		<?php echo fx_canvas('light'); ?>
		<div class="container">
			<div class="flex items-center justify-between gap-10 flex-col md:flex-row">
				<div class="md:max-w-137.5 w-full">
					<div class="flex items-center gap-2.5" data-subtitle><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon.svg" alt=""><p class="text-sm sm:text-base font-semibold leading-[1.1]! text-verde-escuro uppercase">Crédito com garantia de veículo · pessoa física e jurídica</p></div>
					<h1 class="text-4xl sm:text-[40px] md:text-5xl lg:text-[52px] xl:text-[58px] font-bold leading-[1.1]! text-title_black mt-4 md:mt-5" data-title>Crédito mais rápido e mais barato, com o carro como garantia. Ele continua na sua garagem.</h1>
					<p class="text-base sm:text-lg text-paragraph_black mt-4" data-excerpt>Para valores menores ou quando o prazo é curto, o veículo quitado resolve: taxas a partir de <span class="confirmar">1,49% a.m.</span>, liberação em <span class="confirmar">até 7 dias úteis</span> e até <span class="confirmar">90%</span> do valor da tabela FIPE.</p>
					<div class="mt-6 sm:mt-8 lg:mt-10 flex items-center gap-3 flex-wrap" data-button>
						<?php echo btn_arrow('Pedir análise gratuita', '#simular'); ?>
						<?php echo btn_whats('Falar com especialista', 'hero-veic', 'button-autline-dark text-title_black! hover:text-white!'); ?>
					</div>
					<div class="mt-8 pt-6 border-t border-border flex flex-wrap gap-x-6 gap-y-3 text-sm font-semibold" data-button>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('car', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">Carro, utilitário ou caminhão <span class="confirmar">confirmar tipos</span></span></span>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('clock', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">Prazo de até <span class="confirmar">60 meses</span></span></span>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('shield', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">Sem pagamento antecipado</span></span>
					</div>
				</div>
				<div class="md:max-w-125 w-full grid gap-4 relative z-1" data-thumbnail>
					<div class="bg-white border border-border rounded-2xl p-6 shadow-[0px_20px_60px_0px_rgba(28,30,29,0.10)]">
						<h3 class="text-title_black text-lg font-semibold">Quando faz sentido</h3>
						<ul class="flex flex-col gap-3 mt-4 text-paragraph_black">
							<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-verde-escuro shrink-0"><use href="#primaryRoundedCheck"></use></svg><span>Precisa de <strong class="text-title_black">R$ 10 mil a R$ 150 mil</strong> <span class="confirmar">faixa</span> com rapidez</span></li>
							<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-verde-escuro shrink-0"><use href="#primaryRoundedCheck"></use></svg><span>Não tem imóvel para dar em garantia ou não quer envolver o imóvel</span></li>
							<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-verde-escuro shrink-0"><use href="#primaryRoundedCheck"></use></svg><span>Quer sair do cheque especial ou do rotativo com uma parcela menor</span></li>
						</ul>
					</div>
					<div class="bg-secondary rounded-2xl p-6"><h3 class="text-primary text-lg font-semibold">Quando o imóvel é melhor</h3><p class="mt-2 text-paragraph_white">Para valores maiores, prazos longos ou taxas menores, o crédito com garantia de imóvel costuma compensar mais. <a class="text-white underline underline-offset-4" href="cgi-empresas.html">Compare as duas linhas</a></p></div>
					<div class="absolute -top-6 -right-4 -z-1 w-[50%] bg-primary aspect-square rounded-full opacity-90" data-circle></div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-spacing-lg-md" id="como-funciona">
		<div class="container">
			<?php echo section_title('Como funciona', 'Simples, em poucos dias', 'Menos documentação e aprovação mais rápida que a do crédito com imóvel.'); ?>
			<?php echo passos([
				['titulo' => 'Análise gratuita', 'texto' => 'Modelo, ano e situação do veículo, valor desejado e perfil. Dizemos em quais instituições o caso cabe.', 'tags' => [['Logos', 1], ['1 dia útil', 0]]],
				['titulo' => 'Aprovação e proposta', 'texto' => 'Documentos do veículo e do solicitante. Comparamos as propostas: taxa, prazo, parcela e valor líquido.', 'tags' => [['Logos', 1], ['<span class="confirmar">1 a 3 dias</span>', 0]]],
				['titulo' => 'Vistoria e contrato', 'texto' => 'Vistoria do veículo (presencial ou por fotos, conforme a instituição) e assinatura digital do contrato.', 'tags' => [['Banco', 0], ['<span class="confirmar">1 a 3 dias</span>', 0]]],
				['titulo' => 'Liberação', 'texto' => 'Registro da garantia no Detran (gravame) e crédito na conta. O carro continua com você durante todo o contrato.', 'tags' => [['Banco + Detran', 0], ['<span class="confirmar">1 a 2 dias</span>', 0]]],
			]); ?>
		</div>
	</section>

	<section class="section-spacing-md-lg bg-background" id="requisitos">
		<div class="container">
			<div class="flex items-start justify-between gap-10 flex-col lg:flex-row">
				<div class="lg:max-w-120 w-full">
					<div class="flex items-center gap-2.5"><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon.svg" alt=""><span class="text-base lg:text-lg font-semibold leading-[1.1]! text-verde-escuro uppercase">Requisitos</span></div>
					<h2 class="text-3xl md:text-4xl lg:text-[40px] font-bold leading-tight text-title_black mt-4">O que o veículo precisa ter</h2>
					<ul class="flex flex-col gap-3.5 mt-8 text-paragraph_black">
						<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-verde-escuro shrink-0"><use href="#primaryRoundedCheck"></use></svg><span>Quitado e em nome do solicitante (ou da empresa).</span></li>
						<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-verde-escuro shrink-0"><use href="#primaryRoundedCheck"></use></svg><span>Ano de fabricação a partir de <span class="confirmar">20__</span>, conforme a instituição.</span></li>
						<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-verde-escuro shrink-0"><use href="#primaryRoundedCheck"></use></svg><span>Sem restrições, multas em aberto ou sinistro registrado.</span></li>
						<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-verde-escuro shrink-0"><use href="#primaryRoundedCheck"></use></svg><span>Valor mínimo de tabela FIPE de <span class="confirmar">R$ __ mil</span>.</span></li>
					</ul>
				</div>
				<div class="lg:max-w-135 w-full bg-white border border-border rounded-2xl p-6 sm:p-8">
					<h3 class="text-title_black text-xl font-semibold">Transparência</h3>
					<p class="mt-3 text-paragraph_black">O valor aprovado é um percentual do valor da tabela FIPE, não do preço que você pagou. A parcela inclui o seguro exigido pela instituição, quando houver. Apresentamos o valor líquido e o CET antes da assinatura, sem surpresa.</p>
					<p class="mt-3 text-paragraph_black">A consultoria da Logos não tem custo. Somos remunerados pela instituição quando o contrato é assinado.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section-spacing-md-lg" id="simular">
		<div class="container">
			<div class="flex items-start justify-between gap-10 flex-col lg:flex-row">
				<div class="lg:max-w-110 w-full">
					<div class="flex items-center gap-2.5"><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon.svg" alt=""><span class="text-base lg:text-lg font-semibold leading-[1.1]! text-verde-escuro uppercase">Análise gratuita</span></div>
					<h2 class="text-3xl md:text-4xl lg:text-[40px] font-bold leading-tight text-title_black mt-4">Conte sobre o veículo e o valor que precisa</h2>
					<p class="mt-4 text-base sm:text-lg text-paragraph_black">Sem compromisso. Um especialista responde em horário comercial.</p>
				</div>
				<div class="lg:max-w-160 w-full">
					<?php echo form_curto('Crédito com garantia de veículo', 'v',
						campo_text('v-veiculo', 'veiculo', 'Veículo (modelo e ano)', 'Ex.: Toyota Corolla 2021') .
						campo_select('v-valor', 'valor', 'Valor desejado', ['Até R$ 20 mil', 'R$ 20 mil a R$ 50 mil', 'R$ 50 mil a R$ 100 mil', 'Acima de R$ 100 mil']) .
						campo_select('v-quem', 'solicitante', 'Solicitante', ['Pessoa física', 'Pessoa jurídica (CNPJ)']) .
						campo_text('v-cidade', 'cidade', 'Cidade', 'Ex.: Salvador, BA')
					); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="section-spacing-md-lg bg-background" id="faq">
		<div class="container">
			<?php echo section_title('Dúvidas frequentes', 'Perguntas sobre garantia de veículo', '', false, true); ?>
			<?php echo faq([
				['Eu continuo usando o carro?', 'Sim. O veículo fica com você durante todo o contrato. A garantia é registrada como gravame no documento e é baixada quando o contrato é quitado.'],
				['Carro ainda financiado serve?', 'Em geral, não: o veículo precisa estar quitado e sem gravame. Em alguns casos, é possível quitar o financiamento atual com o novo crédito. <span class="confirmar">Logos confirma</span>'],
				['Qual a diferença para o crédito com garantia de imóvel?', 'O veículo aprova mais rápido e exige menos documentação, mas tem taxa maior, prazo menor e valor limitado pela tabela FIPE. Para valores altos ou prazos longos, o imóvel costuma sair mais barato.'],
				['A Logos cobra alguma coisa?', 'Não. Consultoria gratuita, sem taxa de análise ou de liberação. Somos remunerados pela instituição financeira.'],
			]); ?>
		</div>
	</section>

	<?php echo cta_final('Precisa de crédito rápido, sem vender o carro?', 'Análise gratuita em um dia útil. O veículo continua com você.', 'Pedir análise gratuita', '#simular'); ?>
</main>
<?php
$content = ob_get_clean();
render_page('credito-veiculo.html', 'Crédito com garantia de veículo | Logos Connect', 'Crédito rápido usando carro ou utilitário quitado como garantia, com taxa menor que o empréstimo pessoal. O veículo continua com você. Consultoria gratuita.', $content);
