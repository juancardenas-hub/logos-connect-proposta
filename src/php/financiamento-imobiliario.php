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
					<div class="flex items-center gap-2.5" data-subtitle><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon.svg" alt=""><p class="text-sm sm:text-base font-semibold leading-[1.1]! text-verde-escuro uppercase">Financiamento imobiliário · pessoa física e jurídica</p></div>
					<h1 class="text-4xl sm:text-[40px] md:text-5xl lg:text-[52px] xl:text-[58px] font-bold leading-[1.1]! text-title_black mt-4 md:mt-5" data-title>O imóvel certo, com o financiamento certo. Comparado, não escolhido no primeiro banco.</h1>
					<p class="text-base sm:text-lg text-paragraph_black mt-4" data-excerpt>Residencial ou comercial, novo ou usado. Analisamos o seu perfil, comparamos as condições das instituições parceiras e cuidamos do processo até as chaves.</p>
					<div class="mt-6 sm:mt-8 lg:mt-10 flex items-center gap-3 flex-wrap" data-button>
						<?php echo btn_arrow('Pedir análise gratuita', '#simular'); ?>
						<?php echo btn_whats('Falar com especialista', 'hero-fin', 'button-autline-dark text-title_black! hover:text-white!'); ?>
					</div>
					<div class="mt-8 pt-6 border-t border-border flex flex-wrap gap-x-6 gap-y-3 text-sm font-semibold" data-button>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('bank', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">Até 90% do valor do imóvel</span></span>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('clock', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">Prazo de até 420 meses</span></span>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('shield', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">Uso do FGTS quando permitido</span></span>
					</div>
				</div>
				<div class="md:max-w-125 w-full relative z-1" data-thumbnail>
					<img class="w-full rounded-3xl shadow-[0px_20px_60px_0px_rgba(28,30,29,0.12)] object-cover aspect-4/3" src="<?php echo $static_url; ?>/img/tpl/reuniao-2.webp" width="1200" height="1056" alt="Atendimento para financiamento imobiliário" fetchpriority="high">
					<div class="absolute -top-6 -right-4 -z-1 w-[55%] bg-primary aspect-square rounded-full opacity-90" data-circle></div>
					<div class="absolute -bottom-8 -left-4 bg-white rounded-2xl p-4 shadow-[0px_4px_24px_0px_rgba(0,0,0,0.1)] max-w-60 hidden md:block" data-scale-up>
						<p class="text-xs font-semibold uppercase tracking-wide text-verde-escuro">Como comparamos</p>
						<table class="tabela tabela--mini mt-2"><tbody>
							<tr><td>Banco A</td><td>11,5% + TR</td><td>R$ 4.930</td></tr>
							<tr class="destaque"><td>Banco B ✓</td><td>10,9% + TR</td><td>R$ 4.780</td></tr>
							<tr><td>Banco C</td><td>12,2% + TR</td><td>R$ 4.410</td></tr>
						</tbody></table>
						<p class="text-[10px] text-paragraph_black mt-2">Ilustrativo · imóvel de R$ 600 mil, 20% de entrada, 360 meses</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-spacing-lg-md" id="tipos">
		<div class="container">
			<?php echo section_title('Modalidades', 'Para cada situação, uma linha diferente'); ?>
			<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5" data-sttr-wrapper>
				<?php foreach ([
					['home', 'Imóvel residencial', 'Casa ou apartamento, novo ou usado, para morar ou investir. Com ou sem uso do FGTS.'],
					['building', 'Imóvel comercial', 'Sala, loja, galpão ou prédio para a sua empresa, em nome da pessoa física ou do CNPJ.'],
					['swap', 'Portabilidade', 'Já tem financiamento com taxa alta? Transferimos o saldo para uma instituição com condição melhor.'],
					['doc', 'Construção e terreno', 'Compra de terreno e financiamento da obra, conforme as regras de cada instituição.'],
				] as $c): ?>
				<div class="bg-background border border-border p-6 rounded-2xl" data-sttr-card data-tilt="4">
					<span class="w-12 h-12 rounded-xl bg-verde-claro text-verde-escuro flex items-center justify-center"><?php echo ico($c[0]); ?></span>
					<h3 class="text-title_black text-lg md:text-xl font-semibold mt-5"><?php echo $c[1]; ?></h3>
					<p class="pt-3 text-paragraph_black text-base"><?php echo $c[2]; ?></p>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section-spacing-md-lg bg-background" id="como-funciona">
		<div class="container">
			<?php echo section_title('Como funciona', 'Do pedido de análise às chaves', 'Conferimos cada etapa para evitar retrabalho, inclusive a documentação do vendedor.'); ?>
			<?php echo passos([
				['titulo' => 'Análise de perfil', 'texto' => 'Renda, entrada disponível, uso de FGTS e tipo de imóvel. Dizemos quanto você pode financiar e em quais bancos.', 'tags' => [['Logos', 1], ['1 dia útil', 0]]],
				['titulo' => 'Aprovação de crédito', 'texto' => 'Enviamos a documentação às instituições escolhidas e comparamos as aprovações: taxa, sistema de amortização e parcela.', 'tags' => [['Logos', 1]]],
				['titulo' => 'Avaliação do imóvel', 'texto' => 'O banco avalia o imóvel escolhido. Orientamos o vendedor sobre a documentação necessária.', 'tags' => [['Banco', 0]]],
				['titulo' => 'Contrato e ITBI', 'texto' => 'Emissão do contrato, pagamento do ITBI e assinatura. Conferimos cada etapa para evitar retrabalho.', 'tags' => [['Banco + prefeitura', 0]]],
				['titulo' => 'Registro em cartório', 'texto' => 'Registro do contrato na matrícula do imóvel. Acompanhamos até a conclusão.', 'tags' => [['Cartório', 0]]],
				['titulo' => 'Liberação e chaves', 'texto' => 'O banco paga o vendedor e o imóvel é seu.', 'tags' => [['Banco', 0]]],
			]); ?>
		</div>
	</section>

	<section class="section-spacing-md-lg" id="simular">
		<div class="container">
			<div class="flex items-start justify-between gap-10 flex-col lg:flex-row">
				<div class="lg:max-w-110 w-full">
					<div class="flex items-center gap-2.5"><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon.svg" alt=""><span class="text-base lg:text-lg font-semibold leading-[1.1]! text-verde-escuro uppercase">Análise gratuita</span></div>
					<h2 class="text-3xl md:text-4xl lg:text-[40px] font-bold leading-tight text-title_black mt-4">Conte o que você procura e a gente diz o que é possível</h2>
					<p class="mt-4 text-base sm:text-lg text-paragraph_black">Sem compromisso e sem documentos nesta etapa. Um especialista responde em horário comercial.</p>
					<ul class="flex flex-col gap-3.5 mt-8 text-paragraph_black">
						<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-verde-escuro shrink-0"><use href="#primaryRoundedCheck"></use></svg><span>Consultoria sem custo: somos remunerados pela instituição financeira.</span></li>
						<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-verde-escuro shrink-0"><use href="#primaryRoundedCheck"></use></svg><span>Nunca pedimos pagamento antecipado.</span></li>
						<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-verde-escuro shrink-0"><use href="#primaryRoundedCheck"></use></svg><span>Seus dados não são enviados a nenhum banco sem a sua autorização.</span></li>
					</ul>
				</div>
				<div class="lg:max-w-160 w-full">
					<?php echo form_curto('Financiamento imobiliário', 'f',
						campo_select('f-tipo', 'tipo', 'Tipo de imóvel', ['Residencial', 'Comercial', 'Terreno / construção', 'Portabilidade de financiamento atual']) .
						campo_select('f-valor', 'valor', 'Valor aproximado do imóvel', ['Até R$ 300 mil', 'R$ 300 mil a R$ 600 mil', 'R$ 600 mil a R$ 1,5 milhão', 'Acima de R$ 1,5 milhão']) .
						campo_select('f-entrada', 'entrada', 'Entrada disponível', ['Até 10%', '10% a 20%', '20% a 30%', 'Mais de 30%']) .
						campo_select('f-quem', 'comprador', 'Comprador', ['Pessoa física', 'Pessoa jurídica (CNPJ)']) .
						campo_text('f-cidade', 'cidade', 'Cidade do imóvel', 'Ex.: Salvador, BA', true)
					); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="section-spacing-md-lg bg-background" id="faq">
		<div class="container">
			<?php echo section_title('Dúvidas frequentes', 'Perguntas sobre financiamento imobiliário', '', false, true); ?>
			<?php echo faq([
				['É possível financiar 100% do imóvel, sem entrada?', 'Não. O limite costuma ser de 80% do valor do imóvel; em algumas situações, alguns bancos chegam a 90%. A diferença é a entrada. Exemplo: para um imóvel de R$ 200 mil, a entrada é de pelo menos R$ 40 mil e o financiamento, de R$ 160 mil.'],
				['Em quanto tempo posso pagar?', 'A maioria das instituições financia em até 30 anos; algumas chegam a 35 anos. O prazo também depende da idade do comprador mais velho na composição de renda.'],
				['Posso usar o FGTS como entrada?', 'Sim, se você tem pelo menos três anos de trabalho com carteira assinada (somados), não usou o FGTS nos últimos dois anos e o imóvel atende às regras vigentes do programa. O uso é opcional. O saldo pode ser consultado no aplicativo FGTS.'],
				['Posso compor renda com outra pessoa?', 'Sim. Cada banco tem regras próprias sobre a quantidade de pessoas e o grau de parentesco. Orientamos a melhor composição para o seu caso.'],
				['O financiamento tem seguro?', 'Dois, obrigatórios: o DFI (danos físicos ao imóvel) e o MIP (morte e invalidez permanente). Eles protegem o imóvel e a família e já entram no cálculo da parcela que apresentamos.'],
				['Quais documentos são necessários?', 'Em geral: documentos de identificação e comprovante de renda dos compradores (holerite, extrato ou imposto de renda, conforme o banco), comprovante de residência, documentos do vendedor e matrícula do imóvel. A lista exata é enviada pelo especialista.'],
				['A Logos cobra pela consultoria?', 'Não. Somos remunerados pela instituição financeira quando o contrato é assinado. Você paga apenas os custos do próprio financiamento: ITBI, cartório e avaliação, informados antes da assinatura.'],
			]); ?>
		</div>
	</section>

	<?php echo parceiros_bloco('Instituições com as quais operamos', 'bg-white'); ?>
	<?php echo cta_final('Quer saber quanto você pode financiar?', 'Análise gratuita e comparada entre as instituições parceiras. Resposta de um especialista em horário comercial.', 'Pedir análise gratuita', '#simular'); ?>
</main>
<?php
$content = ob_get_clean();
render_page('financiamento-imobiliario.html', 'Financiamento imobiliário com a melhor condição | Logos Connect', 'Financiamento de imóvel residencial ou comercial, para pessoa física ou jurídica, comparado entre as principais instituições. Consultoria gratuita desde 1998.', $content);
