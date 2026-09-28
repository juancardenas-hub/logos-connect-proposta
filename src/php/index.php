<?php
require_once __DIR__ . '/Base/helpers.php';
$static_url = 'assets';
ob_start();
?>
<main id="main-content">

	<!-- Hero -->
	<section class="py-12 md:py-16 lg:py-20 xl:py-24 bg-hero relative z-1 overflow-hidden" data-digital-hero-banner>
		<img class="hidden lg:block absolute top-[4%] left-0 -z-1 opacity-70" src="<?php echo $static_url; ?>/img/tpl/hero-bg-shape.webp" alt="">
		<?php echo fx_canvas('light'); ?>
		<div class="container">
			<div class="flex items-center justify-between gap-10 flex-col md:flex-row">
				<div class="md:max-w-137.5 w-full">
					<div class="flex items-center gap-2.5" data-subtitle>
						<img class="rotate" src="<?php echo $static_url; ?>/img/title-icon.svg" alt="">
						<p class="text-sm sm:text-base font-semibold leading-[1.1]! text-verde-escuro uppercase">Correspondente bancário · desde 1998</p>
					</div>
					<h1 class="text-4xl sm:text-[40px] md:text-5xl lg:text-[52px] xl:text-[60px] font-bold leading-[1.1]! text-title_black mt-4 md:mt-5" data-title>Crédito com garantia de imóvel para a sua empresa, com quem faz isso há 28 anos.</h1>
					<p class="text-base sm:text-lg text-paragraph_black mt-4" data-excerpt>Analisamos o seu caso, comparamos as propostas de mais de 15 instituições parceiras e acompanhamos o processo até o dinheiro entrar na conta. Sem custo de consultoria e sem pagamento antecipado.</p>
					<div class="mt-6 sm:mt-8 lg:mt-10 flex items-center gap-3 flex-wrap" data-button>
						<?php echo btn_arrow('Fazer pré-análise gratuita', '#pre-analise'); ?>
						<?php echo btn_whats('Falar no WhatsApp', 'hero', 'button-autline-dark text-title_black! hover:text-white!'); ?>
					</div>
					<div class="mt-8 pt-6 border-t border-border flex flex-wrap gap-x-6 gap-y-3 text-sm font-semibold text-paragraph_black" data-button>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('clock', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">28 anos de mercado</span></span>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('bank', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">15+ instituições parceiras</span></span>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('pin', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">Escritório em Salvador</span></span>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('shield', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">Nunca pedimos dinheiro antecipado</span></span>
					</div>
				</div>
				<div class="max-w-120 lg:max-w-140 w-full pb-12 px-3 pt-3 relative z-1">
					<img class="w-full rounded-3xl shadow-[0px_20px_60px_0px_rgba(28,30,29,0.12)]" src="<?php echo $static_url; ?>/img/tpl/hero-cgi.webp" width="1233" height="1056" alt="Imóvel como garantia de crédito para empresas" data-thumbnail fetchpriority="high">
					<div class="absolute top-0 right-[6%] -z-1 w-[60%] bg-primary aspect-square rounded-full" data-circle></div>
					<div class="absolute bottom-0 max-[380px]:right-1/2 transform max-[380px]:translate-x-1/2 right-0 lg:right-auto lg:left-[48%] z-1 p-4 lg:p-6 bg-secondary rounded-xl lg:rounded-2xl shadow-[0px_4px_24px_0px_rgba(0,0,0,0.1)]" data-scale-up>
						<div class="flex"><div class="text-3xl md:text-4xl lg:text-[40px] xl:text-5xl text-white font-bold leading-none! counter" data-target="28" data-fx-glow>0</div><div class="text-3xl md:text-4xl lg:text-[40px] xl:text-5xl text-primary font-bold leading-none!">+</div></div>
						<div class="mt-2 lg:mt-4 flex flex-col gap-1.75"><p class="text-sm text-white font-semibold">anos de mercado</p><svg width="136" height="5" viewBox="0 0 136 5" fill="none"><path d="M0.75 3.75601C18.75 1.256 77.75 -0.743972 135.25 2.25601" stroke="#98AE0F" stroke-width="1.5" stroke-linecap="round"/></svg></div>
					</div>
					<div class="absolute top-[8%] -left-2 lg:-left-[10%] z-1 bg-white rounded-2xl p-4 shadow-[0px_4px_24px_0px_rgba(0,0,0,0.1)] max-w-52 hidden md:block" data-scale-up>
						<p class="text-xs font-semibold uppercase tracking-wide text-verde-escuro">Comparação de propostas</p>
						<table class="tabela tabela--mini mt-2"><tbody>
							<tr><td>Banco A</td><td>1,29%</td><td>R$ 4.410</td></tr>
							<tr class="destaque"><td>Banco B ✓</td><td>1,12%</td><td>R$ 3.680</td></tr>
							<tr><td>Banco C</td><td>1,35%</td><td>R$ 5.020</td></tr>
						</tbody></table>
						<p class="text-[10px] text-paragraph_black mt-2">Exemplo ilustrativo · R$ 300 mil</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Marquee -->
	<div class="py-5 bg-primary overflow-hidden">
		<div class="marquee-slider flex gap-9 will-change-transform">
			<?php foreach (['Capital de giro', 'Reorganização de dívidas', 'Expansão e equipamentos', 'Financiamento imobiliário', 'Garantia de veículo', 'Atendimento em todo o Brasil', 'Consultoria sem custo'] as $t): ?>
			<div class="whitespace-nowrap"><img class="rotate w-4.5 h-4.5 min-w-4.5 min-h-4.5" src="<?php echo $static_url; ?>/img/star-dark.svg" alt=""></div>
			<div class="whitespace-nowrap text-base sm:text-lg leading-none! font-semibold text-title_black"><?php echo $t; ?></div>
			<?php endforeach; ?>
		</div>
	</div>

	<!-- Para quem é (container escuro) -->
	<section class="section-spacing-lg-md" id="para-quem">
		<div class="container-lg">
			<div class="pt-10 pb-4 px-4 sm:p-10 xl:p-16 2xl:p-20 bg-secondary rounded-2xl md:rounded-3xl relative z-1 overflow-hidden" data-grid-reveal data-cols="8" data-rows="8" data-cols-sm="5" data-rows-sm="12" data-cols-lg="8" data-rows-lg="8" data-animation="horizontal" data-bg-color="white" data-trigger="top 70%" data-stagger="0.006" data-duration="0.8" data-play-once="true">
				<img class="w-full absolute bottom-0 select-none left-0 -z-1 opacity-70" src="<?php echo $static_url; ?>/img/tpl/dark-bg-shape.webp" alt="">
				<?php echo fx_canvas('dark', 70); ?>
				<div class="flex xl:items-start justify-between gap-10 flex-col lg:flex-row relative">
					<div class="max-w-175 lg:max-w-135 w-full lg:self-start" data-sticky data-sticky-start="top 10%" data-sticky-end="bottom 0%" data-sticky-min-width="1025" data-sticky-max-width="1280">
						<div class="flex items-center gap-2.5"><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon-primary.svg" alt=""><p class="text-base sm:text-lg font-semibold leading-[1.1]! text-primary uppercase">Para quem é</p></div>
						<h2 class="text-3xl md:text-4xl lg:text-[40px] xl:text-5xl font-bold leading-tight text-title_white mt-4">O imóvel parado pode resolver o problema que está no caixa</h2>
						<p class="mt-4 text-base sm:text-lg text-paragraph_white">Empresas usam o próprio imóvel, ou o imóvel do sócio, para trocar juros altos por uma parcela longa que cabe no fluxo de caixa. O imóvel continua seu.</p>
						<ul class="flex flex-col gap-4 mt-9 text-paragraph_white">
							<li class="text-base flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-1 text-primary"><use href="#tmnlList-01"></use></svg><span class="flex-1"><strong class="text-white">Taxas a partir de <span class="confirmar">1,08% a.m. + IPCA</span></strong>, contra 7% a 14% ao mês de cheque especial e rotativo.</span></li>
							<li class="text-base flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-1 text-primary"><use href="#tmnlList-02"></use></svg><span class="flex-1"><strong class="text-white">Prazo de até <span class="confirmar">240 meses</span></strong> e liberação de até <span class="confirmar">60%</span> do valor avaliado do imóvel.</span></li>
							<li class="text-base flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-1 text-primary"><use href="#tmnlList-03"></use></svg><span class="flex-1"><strong class="text-white">Um especialista do começo ao fim:</strong> a mesma pessoa analisa, negocia com os bancos e acompanha cartório e liberação.</span></li>
						</ul>
					</div>
					<div class="lg:max-w-165 w-full grid sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2 gap-4 sm:gap-6 max-xl:flex-1">
						<?php foreach ([
							['cash', 'Capital de giro', 'Fôlego para estoque, folha e fornecedores sem depender de cheque especial ou antecipação de recebíveis.', 'cgi-empresas.html#giro'],
							['swap', 'Reorganizar dívidas caras', 'Uma só parcela, mais longa e mais barata, no lugar de rotativo, cheque especial e empréstimos sem garantia.', 'cgi-empresas.html#dividas'],
							['trend', 'Expansão e investimento', 'Equipamentos, frota, reforma, nova unidade ou compra de imóvel comercial com prazo compatível com o retorno.', 'cgi-empresas.html#expansao'],
							['user', 'Sócio garantindo a empresa', 'O imóvel pessoal do sócio garante o crédito do CNPJ. A empresa recebe o valor; o sócio continua no imóvel.', 'cgi-empresas.html#quem-pode'],
						] as $c): ?>
						<a href="<?php echo $c[3]; ?>" class="p-5 sm:p-6 lg:p-8 rounded-2xl bg-white/10 border border-white/10 backdrop-blur-[34px] block duration-300 hover:bg-white/15 group" data-tilt="5">
							<span class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center"><?php echo ico($c[0], 'w-6 h-6'); ?></span>
							<h3 class="mt-6 md:mt-8 text-lg md:text-xl font-semibold text-white"><?php echo $c[1]; ?></h3>
							<p class="mt-3 text-base text-paragraph_white"><?php echo $c[2]; ?></p>
							<span class="mt-5 inline-flex items-center gap-2 text-primary text-sm font-semibold">Ver como funciona <svg class="w-2.5 h-2.5 fill-current"><use href="#buttonArrow"></use></svg></span>
						</a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Soluções -->
	<section class="section-spacing-md-lg" id="solucoes">
		<div class="container">
			<?php echo section_title('Soluções', 'Três linhas de crédito, uma consultoria', 'Comparamos as condições das instituições parceiras e recomendamos a que faz mais sentido para o seu caixa, não para a nossa comissão.'); ?>
			<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6" data-sttr-wrapper>
				<div class="bg-secondary p-6 sm:p-8 rounded-2xl flex flex-col gap-5 relative overflow-hidden" data-sttr-card data-tilt="4" data-fx-sweep>
					<img class="absolute inset-0 w-full h-full object-cover -z-0 opacity-60" src="<?php echo $static_url; ?>/img/tpl/benefits-bg-shape.webp" alt="">
					<div class="relative">
						<span class="text-[11px] font-semibold uppercase tracking-wide px-2.5 py-1 rounded-full bg-primary text-title_black">Carro-chefe</span>
						<span class="w-12 h-12 rounded-xl bg-white/10 text-primary flex items-center justify-center mt-5"><?php echo ico('home'); ?></span>
						<h3 class="text-white text-xl md:text-2xl font-semibold mt-5">Crédito com garantia de imóvel para empresas</h3>
						<p class="pt-3 text-white/80 text-base">Até <span class="confirmar">60%</span> do valor do imóvel, prazo de até <span class="confirmar">240 meses</span>, taxas a partir de <span class="confirmar">1,08% a.m. + IPCA</span>. Imóvel residencial ou comercial, da empresa ou do sócio.</p>
						<div class="mt-6"><?php echo btn_arrow('Conhecer a linha', 'cgi-empresas.html'); ?></div>
					</div>
				</div>
				<div class="bg-background border border-border p-6 sm:p-8 rounded-2xl flex flex-col gap-5" data-sttr-card data-tilt="4">
					<span class="w-12 h-12 rounded-xl bg-verde-claro text-verde-escuro flex items-center justify-center"><?php echo ico('bank'); ?></span>
					<div class="flex-1">
						<h3 class="text-title_black text-xl md:text-2xl font-semibold">Financiamento imobiliário</h3>
						<p class="pt-3 text-paragraph_black text-base">Compra de imóvel residencial ou comercial, novo ou usado, com a instituição que oferece a melhor condição para o seu perfil. Pessoa física ou jurídica.</p>
					</div>
					<div><?php echo btn_arrow('Conhecer a linha', 'financiamento-imobiliario.html', 'button-autline-dark text-title_black! hover:text-white!'); ?></div>
				</div>
				<div class="bg-background border border-border p-6 sm:p-8 rounded-2xl flex flex-col gap-5" data-sttr-card data-tilt="4">
					<span class="w-12 h-12 rounded-xl bg-verde-claro text-verde-escuro flex items-center justify-center"><?php echo ico('car'); ?></span>
					<div class="flex-1">
						<h3 class="text-title_black text-xl md:text-2xl font-semibold">Crédito com garantia de veículo</h3>
						<p class="pt-3 text-paragraph_black text-base">Crédito mais rápido, com taxa menor que a do empréstimo pessoal, usando carro ou utilitário quitado como garantia. O veículo continua com você.</p>
					</div>
					<div><?php echo btn_arrow('Conhecer a linha', 'credito-veiculo.html', 'button-autline-dark text-title_black! hover:text-white!'); ?></div>
				</div>
			</div>
		</div>
	</section>

	<!-- Como funciona -->
	<section class="section-spacing-md-lg bg-white relative z-1 overflow-hidden" id="como-funciona">
		<img src="<?php echo $static_url; ?>/img/tpl/tracking-bg-shape.webp" alt="" class="absolute top-0 left-0 -z-1 w-full h-full object-cover opacity-50">
		<div class="container">
			<?php echo section_title('Como funciona', 'Do primeiro contato ao dinheiro na conta', 'Dizemos desde o início o que depende de nós, o que depende do banco e o que depende do cartório. Sem surpresa no meio do caminho.'); ?>
			<?php echo passos([
				['titulo' => 'Pré-análise sem documentos', 'texto' => 'Você responde seis perguntas. Em até um dia útil, um especialista diz se o caso tem viabilidade e em quais instituições.', 'tags' => [['Logos', 1], ['1 dia útil', 0]]],
				['titulo' => 'Documentação e proposta', 'texto' => 'Reunimos a documentação da empresa, dos sócios e do imóvel e montamos a proposta que será defendida nas mesas de crédito.', 'tags' => [['Logos + você', 1], ['<span class="confirmar">3 a 7 dias</span>', 0]]],
				['titulo' => 'Comparação de propostas', 'texto' => 'Recebemos as condições das instituições e apresentamos lado a lado: taxa, CET, prazo, parcela e valor líquido que entra na conta.', 'tags' => [['Logos', 1], ['<span class="confirmar">5 a 10 dias</span>', 0]]],
				['titulo' => 'Avaliação do imóvel', 'texto' => 'O banco envia um avaliador. É aqui que o valor pode ser ajustado; por isso trabalhamos com uma estimativa realista desde o começo.', 'tags' => [['Banco', 0], ['<span class="confirmar">5 a 10 dias</span>', 0]]],
				['titulo' => 'Contrato e registro em cartório', 'texto' => 'Assinatura do contrato e registro da alienação fiduciária na matrícula do imóvel. Acompanhamos o cartório até a conclusão.', 'tags' => [['Banco + cartório', 0], ['<span class="confirmar">10 a 20 dias</span>', 0]]],
				['titulo' => 'Liberação do crédito', 'texto' => 'Com o registro concluído, o valor é liberado na conta da empresa ou usado para quitar as dívidas combinadas.', 'tags' => [['Banco', 0], ['<span class="confirmar">1 a 3 dias</span>', 0]]],
			]); ?>
			<p class="text-sm text-paragraph_black mt-6">Prazo total estimado de <span class="confirmar">30 a 45 dias úteis</span>, variando conforme instituição, cartório e documentação. Prazos exatos são confirmados pela Logos no início do processo.</p>
		</div>
	</section>

	<!-- Por que a Logos -->
	<section class="section-spacing-md-lg bg-background" id="por-que">
		<div class="container">
			<div class="flex items-center justify-between gap-10 flex-col lg:flex-row">
				<div class="lg:max-w-135 w-full">
					<div class="flex items-center gap-2.5"><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon.svg" alt=""><span class="text-base lg:text-lg font-semibold leading-[1.1]! text-verde-escuro uppercase">Por que a Logos</span></div>
					<h2 class="text-3xl md:text-4xl lg:text-[40px] xl:text-5xl font-bold leading-tight text-title_black mt-4">Em crédito com garantia, o que pesa não é só a taxa. É em quem você confia o seu imóvel.</h2>
					<p class="mt-4 text-base sm:text-lg text-paragraph_black">A Logos Connect nasceu em 1998, em Salvador, quando ainda se chamava Logos Fomento. São 28 anos atravessando ciclos de juros altos e baixos, sempre no mesmo endereço e com a mesma equipe à frente.</p>
					<p class="mt-3 text-base sm:text-lg text-paragraph_black">Não somos um banco e não temos produto próprio para empurrar. Somos remunerados pelas instituições parceiras quando a operação é concluída; por isso, o nosso interesse é o mesmo que o seu: a proposta certa, aprovada.</p>
					<ul class="flex flex-col gap-3.5 mt-8 text-paragraph_black">
						<?php foreach ([
							['Multibanco de verdade.', 'Uma análise, enviada só às instituições adequadas ao seu perfil. Você compara e decide.'],
							['Expectativa realista.', 'Explicamos antes o que a avaliação do imóvel costuma cortar e quanto pesa o IOF, para o valor líquido não ser surpresa.'],
							['Zero custo de consultoria.', 'Nenhuma taxa da Logos, nenhum pagamento antecipado, em nenhuma etapa.'],
							['Empresa real, endereço real.', 'CNPJ ativo desde 1998, escritório no Hangar Business Park e atendimento humano em horário comercial.'],
						] as $li): ?>
						<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-verde-escuro shrink-0"><use href="#primaryRoundedCheck"></use></svg><span class="flex-1"><strong class="text-title_black"><?php echo $li[0]; ?></strong> <?php echo $li[1]; ?></span></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="lg:max-w-125 w-full grid grid-cols-2 gap-4 sm:gap-5">
					<div class="col-span-2"><img class="rounded-2xl w-full object-cover aspect-835/310" src="<?php echo $static_url; ?>/img/tpl/escritorio-1.webp" width="846" height="310" alt="" loading="lazy"></div>
					<div class="bg-secondary p-5 sm:p-7 rounded-2xl"><h3 class="text-primary font-bold leading-[1.1] text-4xl md:text-5xl"><span class="counter" data-target="28">0</span></h3><p class="mt-3 text-white text-base md:text-lg font-semibold">anos de mercado</p><p class="mt-1 text-white/70 text-sm">CNPJ ativo desde 14/10/1998</p></div>
					<div class="bg-grafite p-5 sm:p-7 rounded-2xl"><h3 class="text-primary font-bold leading-[1.1] text-4xl md:text-5xl"><span class="counter" data-target="15">0</span>+</h3><p class="mt-3 text-white text-base md:text-lg font-semibold">instituições parceiras</p><p class="mt-1 text-white/70 text-sm">bancos e fintechs de crédito</p></div>
					<div class="bg-white border border-border p-5 sm:p-7 rounded-2xl"><h3 class="text-title_black font-bold leading-[1.1] text-2xl md:text-3xl"><span class="confirmar">R$ ___</span></h3><p class="mt-3 text-title_black text-base font-semibold">em crédito estruturado</p></div>
					<div class="bg-white border border-border p-5 sm:p-7 rounded-2xl"><h3 class="text-title_black font-bold leading-[1.1] text-2xl md:text-3xl"><span class="confirmar">___</span></h3><p class="mt-3 text-title_black text-base font-semibold">operações concluídas</p></div>
				</div>
			</div>
		</div>
	</section>

	<?php echo parceiros_bloco('Instituições com as quais operamos', 'bg-white'); ?>

	<!-- Depoimentos -->
	<section class="section-spacing-md bg-background" id="depoimentos">
		<div class="container">
			<?php echo section_title('Quem já passou por aqui', 'O que dizem os clientes', 'Depoimentos reais, com autorização de cada cliente. Espaços reservados para a Logos preencher.', false, true); ?>
			<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5" data-sttr-wrapper>
				<?php foreach (['empresário que usou CGI para capital de giro', 'cliente que reorganizou dívidas', 'financiamento imobiliário'] as $i => $d): ?>
				<div class="bg-white rounded-2xl border-2 border-dashed border-[#C99A00] p-6 sm:p-8" data-sttr-card>
					<svg class="w-8 h-8 text-primary fill-current" viewBox="0 0 24 24"><path d="M7.2 17.4c-1.9 0-3.4-1.5-3.4-3.4 0-3.6 2.4-6.7 5.9-8.1l.7 1.5c-2 .8-3.5 2.5-3.9 4.4.3-.1.6-.1.9-.1 1.9 0 3.3 1.5 3.3 3.3s-1.6 2.4-3.5 2.4zm9.6 0c-1.9 0-3.4-1.5-3.4-3.4 0-3.6 2.4-6.7 5.9-8.1l.7 1.5c-2 .8-3.5 2.5-3.9 4.4.3-.1.6-.1.9-.1 1.9 0 3.3 1.5 3.3 3.3s-1.6 2.4-3.5 2.4z"/></svg>
					<p class="mt-5 text-lg font-semibold text-title_black leading-snug"><span class="confirmar">Depoimento <?php echo $i + 1; ?> — <?php echo $d; ?></span></p>
					<div class="mt-6 pt-4 border-t border-border"><p class="font-semibold text-title_black">Nome do cliente</p><p class="text-sm text-paragraph_black">Empresa · cidade · ano</p></div>
				</div>
				<?php endforeach; ?>
			</div>
			<p class="text-center text-sm text-paragraph_black mt-6">Sugestão: coletar avaliações no Google (perfil da empresa) e incorporar aqui a nota e os comentários reais.</p>
		</div>
	</section>

	<!-- Pré-análise -->
	<section class="section-spacing-lg-md relative z-1 overflow-hidden bg-white" id="pre-analise-secao">
		<div class="container">
			<?php echo section_title('Pré-análise gratuita', 'Descubra em 2 minutos se o seu caso tem viabilidade', 'Seis perguntas, sem CPF e sem documentos. Um especialista responde em horário comercial.', false, true); ?>
			<?php echo triagem(); ?>
		</div>
	</section>

	<!-- FAQ -->
	<section class="section-spacing-md-lg bg-background" id="faq">
		<div class="container">
			<?php echo section_title('Dúvidas frequentes', 'O que os empresários perguntam antes de começar', '', false, true); ?>
			<?php echo faq([
				['O imóvel continua sendo meu?', 'Sim. O imóvel fica em alienação fiduciária como garantia do contrato, mas continua no seu nome, no seu uso, e você pode morar, alugar ou operar nele normalmente. Ao quitar o contrato, a garantia é baixada na matrícula.'],
				['A Logos cobra alguma coisa?', 'Não. A consultoria é gratuita para o cliente. Somos remunerados pela instituição financeira quando a operação é concluída. Os únicos custos são os do próprio contrato: avaliação do imóvel, registro em cartório e IOF, sempre informados antes da assinatura.'],
				['Posso usar o imóvel do sócio para a empresa?', 'Sim. É comum: o sócio entra como garantidor com o imóvel pessoal e o crédito é concedido para o CNPJ. Também analisamos imóveis de familiares, dependendo da instituição.'],
				['Imóvel ainda financiado serve?', 'Pode servir, dependendo do saldo devedor e da instituição. Desde o Marco Legal das Garantias (Lei 14.711/2023), é possível usar a parte já paga do imóvel como garantia de um novo crédito. Avaliamos caso a caso.'],
				['Quanto tempo leva?', 'Em geral, de <span class="confirmar">30 a 45 dias úteis</span> entre a pré-análise e a liberação. A etapa mais longa costuma ser o cartório. Informamos o prazo estimado do seu caso logo na primeira conversa.'],
			]); ?>
			<p class="text-center mt-8"><a class="text-verde-escuro font-semibold underline underline-offset-4" href="cgi-empresas.html#faq">Ver todas as perguntas sobre crédito com garantia de imóvel</a></p>
		</div>
	</section>

	<?php echo cta_final('Pronto para ver quanto o imóvel pode liberar para a sua empresa?', 'Pré-análise gratuita, sem compromisso e sem pedir documentos. Resposta de um especialista em horário comercial.'); ?>
</main>
<?php
$content = ob_get_clean();
render_page('index.html', 'Logos Connect — Crédito com garantia de imóvel para empresas | Desde 1998', 'Correspondente bancário multibanco desde 1998. Crédito com garantia de imóvel para empresas, financiamento imobiliário e crédito com garantia de veículo. Sem pagamento antecipado.', $content);
