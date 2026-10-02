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
					<div class="flex items-center gap-2.5" data-subtitle><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon.svg" alt=""><p class="text-sm sm:text-base font-semibold leading-[1.1]! text-verde-escuro uppercase">Crédito com garantia de imóvel · pessoa jurídica</p></div>
					<h1 class="text-4xl sm:text-[40px] md:text-5xl lg:text-[52px] xl:text-[58px] font-bold leading-[1.1]! text-title_black mt-4 md:mt-5" data-title>Use o imóvel da empresa ou do sócio para fortalecer o caixa. Sem vender, sem sair dele.</h1>
					<p class="text-base sm:text-lg text-paragraph_black mt-4" data-excerpt>Taxas de 1,19% a 1,59% a.m., prazo de até 240 meses e liberação de até 60% do valor do imóvel. Uma análise, vários bancos parceiros, um especialista até o fim.</p>
					<div class="mt-6 sm:mt-8 lg:mt-10 flex items-center gap-3 flex-wrap" data-button>
						<?php echo btn_arrow('Fazer pré-análise gratuita', '#pre-analise'); ?>
						<?php echo btn_whats('Falar com especialista', 'hero-cgi', 'button-autline-dark text-title_black! hover:text-white!'); ?>
					</div>
					<div class="mt-8 pt-6 border-t border-border flex flex-wrap gap-x-6 gap-y-3 text-sm font-semibold" data-button>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('shield', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">Consultoria sem custo</span></span>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('doc', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">Sem pagamento antecipado</span></span>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('clock', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">Resposta em 1 dia útil</span></span>
					</div>
				</div>
				<div class="md:max-w-125 w-full relative z-1" data-thumbnail>
					<div class="bg-white rounded-2xl border border-border shadow-[0px_20px_60px_0px_rgba(28,30,29,0.10)] p-5 sm:p-6">
						<div class="flex items-center justify-between gap-3"><p class="font-semibold text-title_black">Custo do dinheiro para empresas</p><span class="text-[11px] font-semibold uppercase tracking-wide px-2.5 py-1 rounded-full bg-verde-claro text-verde-escuro">Referência</span></div>
						<div class="overflow-x-auto mt-3"><table class="tabela tabela--mini">
							<thead><tr><th>Linha de crédito</th><th>Ao mês</th><th>Ao ano</th></tr></thead>
							<tbody>
								<tr><td>Cartão rotativo</td><td>acima de 14%</td><td>300% a 430%</td></tr>
								<tr><td>Cheque especial</td><td>7,5% a 9%</td><td>135% a 160%</td></tr>
								<tr><td>Empréstimo sem garantia</td><td>4,2% a 6,8%</td><td>64% a 88%</td></tr>
								<tr class="destaque"><td>Garantia de imóvel</td><td>0,99% a 1,80% + IPCA</td><td>14% a 24% + IPCA</td></tr>
							</tbody></table></div>
						<p class="text-xs text-paragraph_black mt-3">Faixas de referência do mercado, apenas para comparação. Não são ofertas.</p>
					</div>
					<div class="absolute -top-6 -right-4 -z-1 w-[55%] bg-primary aspect-square rounded-full opacity-90" data-circle></div>
				</div>
			</div>
		</div>
	</section>

	<!-- Usos -->
	<section class="section-spacing-md-lg" id="usos">
		<div class="container">
			<?php echo section_title('Para que serve', 'Um crédito, várias formas de usar', 'Da reorganização do caixa à compra de um galpão: o mesmo contrato, com prazo longo e parcela que cabe no fluxo.'); ?>
			<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5" data-sttr-wrapper>
				<?php foreach ([
					['giro', 'cash', 'Capital de giro', 'Estoque, folha, fornecedores, sazonalidade. Uma parcela longa que cabe no fluxo de caixa, no lugar de linhas curtas e caras.'],
					['dividas', 'swap', 'Reorganizar dívidas', 'Quitamos diretamente o cheque especial, o rotativo e os empréstimos caros. Você fica com uma única parcela e o caixa respira.'],
					['expansao', 'trend', 'Expansão', 'Nova unidade, reforma, equipamentos ou frota, com prazo compatível com o retorno do investimento.'],
					['imovel-comercial', 'building', 'Compra de imóvel comercial', 'Aquisição de sala, galpão ou terreno usando outro imóvel como garantia, quando o financiamento tradicional não fecha.'],
					['troca', 'compare', 'Troca de contrato antigo', 'Contrato de garantia de imóvel antigo, com taxa alta ou saldo baixo? Pode ser transferido para outra instituição, liberando a diferença em dinheiro.'],
					['socio', 'user', 'Sócio garantindo a empresa', 'O imóvel pessoal do sócio garante o crédito do CNPJ. A empresa recebe o valor; o sócio continua no imóvel.'],
				] as $c): ?>
				<div id="<?php echo $c[0]; ?>" class="bg-background border border-border p-6 sm:p-7 rounded-2xl" data-sttr-card data-tilt="4">
					<span class="w-12 h-12 rounded-xl bg-verde-claro text-verde-escuro flex items-center justify-center"><?php echo ico($c[1]); ?></span>
					<h3 class="text-title_black text-lg md:text-xl font-semibold mt-5"><?php echo $c[2]; ?></h3>
					<p class="pt-3 text-paragraph_black text-base"><?php echo $c[3]; ?></p>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Quem pode (container escuro) -->
	<section class="section-spacing-md" id="quem-pode">
		<div class="container-lg">
			<div class="p-6 sm:p-10 xl:p-16 bg-secondary rounded-2xl md:rounded-3xl relative z-1 overflow-hidden" data-grid-reveal data-cols="8" data-rows="8" data-cols-sm="5" data-rows-sm="12" data-cols-lg="8" data-rows-lg="8" data-animation="horizontal" data-bg-color="white" data-trigger="top 70%" data-stagger="0.006" data-duration="0.8" data-play-once="true">
				<img class="w-full absolute bottom-0 select-none left-0 -z-1 opacity-70" src="<?php echo $static_url; ?>/img/tpl/dark-bg-shape.webp" alt="">
				<?php echo fx_canvas('dark', 70); ?>
				<div class="flex justify-between gap-10 flex-col lg:flex-row">
					<div class="lg:max-w-130 w-full">
						<div class="flex items-center gap-2.5"><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon-primary.svg" alt=""><p class="text-base sm:text-lg font-semibold leading-[1.1]! text-primary uppercase">Quem pode</p></div>
						<h2 class="text-3xl md:text-4xl lg:text-[40px] font-bold leading-tight text-title_white mt-4">Requisitos, sem letra miúda</h2>
						<ul class="flex flex-col gap-4 mt-8 text-paragraph_white">
							<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-1 text-primary shrink-0"><use href="#roundedCheck"></use></svg><span class="flex-1"><strong class="text-white">Empresa com CNPJ ativo</strong> (ME, EPP, Ltda., S/A) ou sócio garantidor com imóvel pessoal.</span></li>
							<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-1 text-primary shrink-0"><use href="#roundedCheck"></use></svg><span class="flex-1"><strong class="text-white">Imóvel urbano com matrícula regular:</strong> casa, apartamento, sala, loja, galpão ou terreno. Outros tipos de imóvel: consulte.</span></li>
							<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-1 text-primary shrink-0"><use href="#roundedCheck"></use></svg><span class="flex-1"><strong class="text-white">Imóvel quitado ou com saldo devedor:</strong> financiado também pode ser avaliado, conforme o saldo.</span></li>
							<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-1 text-primary shrink-0"><use href="#roundedCheck"></use></svg><span class="flex-1"><strong class="text-white">Valor mínimo de imóvel:</strong> R$ 100 mil. Crédito a partir de R$ 50 mil.</span></li>
							<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-1 text-primary shrink-0"><use href="#roundedCheck"></use></svg><span class="flex-1"><strong class="text-white">Empresa com restrição no nome</strong> também pode ser analisada: a garantia real reduz a exigência das instituições.</span></li>
						</ul>
					</div>
					<div class="lg:max-w-135 w-full p-5 sm:p-7 rounded-2xl bg-white/10 border border-white/10 backdrop-blur-[34px]">
						<h3 class="text-white text-xl font-semibold">O que costuma reduzir o valor aprovado</h3>
						<p class="mt-3 text-paragraph_white">Preferimos avisar antes: o avaliador do banco costuma atribuir ao imóvel um valor abaixo do que o proprietário espera, e o percentual liberado é calculado sobre o valor avaliado. Na prática, a liberação costuma ficar abaixo do teto de 60% do valor de mercado.</p>
						<p class="mt-3 text-paragraph_white">Por isso, a nossa pré-análise já parte de uma estimativa conservadora. Se o valor fechar acima dela, ótimo. Se não, você não terá planejado o caixa com um número que não existia.</p>
						<p class="mt-4 text-sm text-paragraph_white border-t border-white/10 pt-4"><strong class="text-white">Para pessoa jurídica</strong>, o IOF segue as alíquotas vigentes para empresas. Mostramos esse impacto no valor líquido antes da assinatura.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Pré-análise -->
	<section class="section-spacing-md-lg bg-white" id="pre-analise-secao">
		<div class="container">
			<?php echo section_title('Pré-análise gratuita', 'Seis perguntas. Nenhum documento. Resposta em um dia útil.', 'Não pedimos CPF, extrato ou matrícula nesta etapa. Só o suficiente para saber se o caso tem viabilidade e em quais instituições.', false, true); ?>
			<?php echo triagem(); ?>
		</div>
	</section>

	<!-- Como funciona -->
	<section class="section-spacing-md-lg bg-background relative z-1 overflow-hidden" id="como-funciona">
		<div class="container">
			<?php echo section_title('Como funciona', 'Do primeiro contato ao dinheiro na conta', 'Dizemos desde o início o que depende de nós, o que depende do banco e o que depende do cartório.'); ?>
			<?php echo passos([
				['titulo' => 'Pré-análise sem documentos', 'texto' => 'Você responde seis perguntas. Em até um dia útil, um especialista diz se o caso tem viabilidade e em quais instituições.', 'tags' => [['Logos', 1], ['1 dia útil', 0]]],
				['titulo' => 'Documentação e proposta', 'texto' => 'Reunimos a documentação da empresa, dos sócios e do imóvel e montamos a proposta que será defendida nas mesas de crédito.', 'tags' => [['Logos + você', 1]]],
				['titulo' => 'Comparação de propostas', 'texto' => 'Recebemos as condições das instituições e apresentamos lado a lado: taxa, CET, prazo, parcela e valor líquido que entra na conta.', 'tags' => [['Logos', 1]]],
				['titulo' => 'Avaliação do imóvel', 'texto' => 'O banco envia um avaliador. É aqui que o valor pode ser ajustado; por isso trabalhamos com uma estimativa realista desde o começo.', 'tags' => [['Banco', 0]]],
				['titulo' => 'Contrato e registro em cartório', 'texto' => 'Assinatura do contrato e registro da alienação fiduciária na matrícula do imóvel. Acompanhamos o cartório até a conclusão.', 'tags' => [['Banco + cartório', 0]]],
				['titulo' => 'Liberação do crédito', 'texto' => 'Com o registro concluído, o valor é liberado na conta da empresa ou usado para quitar as dívidas combinadas.', 'tags' => [['Banco', 0]]],
			]); ?>
			<p class="text-sm text-paragraph_black mt-6">Prazo total médio de cerca de 20 dias, variando conforme instituição, cartório e documentação.</p>
		</div>
	</section>

	<!-- O que você recebe -->
	<section class="section-spacing-md-lg" id="comparacao">
		<div class="container">
			<?php echo section_title('O que você recebe', 'As propostas lado a lado, no mesmo formato', 'Cada instituição apresenta a oferta de um jeito. Nós traduzimos tudo para uma única tabela, com o número que importa: quanto entra na conta e quanto sai por mês.'); ?>
			<div class="overflow-x-auto rounded-2xl border border-border bg-white">
				<table class="tabela">
					<thead><tr><th>Instituição</th><th>Taxa</th><th>Indexador</th><th>Prazo</th><th>Parcela inicial</th><th>Custos (avaliação, cartório, IOF)</th><th>Valor líquido na conta</th><th>CET a.a.</th></tr></thead>
					<tbody>
						<tr><td>Banco A</td><td>1,29% a.m.</td><td>IPCA</td><td>180 meses</td><td>R$ 4.410</td><td>R$ 9.800</td><td>R$ 290.200</td><td>19,6%</td></tr>
						<tr class="destaque"><td>Banco B (recomendado)</td><td>1,12% a.m.</td><td>IPCA</td><td>240 meses</td><td>R$ 3.680</td><td>R$ 9.100</td><td>R$ 290.900</td><td>17,4%</td></tr>
						<tr><td>Banco C</td><td>1,35% a.m.</td><td>pré-fixado</td><td>120 meses</td><td>R$ 5.020</td><td>R$ 10.200</td><td>R$ 289.800</td><td>20,3%</td></tr>
					</tbody>
				</table>
			</div>
			<p class="text-sm text-paragraph_black mt-4">Exemplo ilustrativo para crédito de R$ 300 mil; valores fictícios. As condições reais são definidas por cada instituição após análise de crédito e avaliação do imóvel.</p>
		</div>
	</section>

	<!-- Custos -->
	<section class="section-spacing-md-lg bg-background" id="custos">
		<div class="container">
			<div class="flex items-start justify-between gap-10 flex-col lg:flex-row">
				<div class="lg:max-w-120 w-full">
					<div class="flex items-center gap-2.5"><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon.svg" alt=""><span class="text-base lg:text-lg font-semibold leading-[1.1]! text-verde-escuro uppercase">Custos e transparência</span></div>
					<h2 class="text-3xl md:text-4xl lg:text-[40px] font-bold leading-tight text-title_black mt-4">O que custa, e o que não custa</h2>
					<p class="mt-4 text-base sm:text-lg text-paragraph_black">A consultoria da Logos Connect <strong class="text-title_black">não tem custo para o cliente</strong>: somos remunerados pela instituição financeira quando a operação é concluída. Também não existe taxa de análise, de cadastro ou de liberação.</p>
					<p class="mt-3 text-base sm:text-lg text-paragraph_black">Os custos do contrato são os mesmos em qualquer correspondente ou banco, e você conhece todos antes de assinar.</p>
				</div>
				<div class="lg:max-w-150 w-full grid sm:grid-cols-2 gap-4">
					<div class="bg-white border border-border p-6 rounded-2xl"><h3 class="text-title_black text-lg font-semibold">Avaliação do imóvel</h3><p class="mt-2 text-paragraph_black">Laudo feito por engenheiro credenciado pela instituição. O valor varia conforme banco e cidade e pode ser incluído na operação.</p></div>
					<div class="bg-white border border-border p-6 rounded-2xl"><h3 class="text-title_black text-lg font-semibold">Registro em cartório</h3><p class="mt-2 text-paragraph_black">Registro da alienação fiduciária na matrícula. Tabela do cartório do estado do imóvel.</p></div>
					<div class="bg-white border border-border p-6 rounded-2xl"><h3 class="text-title_black text-lg font-semibold">IOF</h3><p class="mt-2 text-paragraph_black">Imposto federal sobre a operação. Calculado conforme as alíquotas vigentes e incluído na operação.</p></div>
					<div class="bg-secondary p-6 rounded-2xl"><h3 class="text-primary text-lg font-semibold">Taxa da Logos</h3><p class="mt-2 text-white text-2xl font-bold">R$ 0</p><p class="mt-1 text-paragraph_white text-sm">Nunca, em nenhuma etapa. Se alguém pedir pagamento em nosso nome, é golpe.</p></div>
				</div>
			</div>
		</div>
	</section>

	<!-- Especialista -->
	<section class="section-spacing-md" id="especialista">
		<div class="container">
			<div class="max-w-215 mx-auto bg-white border border-border rounded-2xl p-6 sm:p-8 flex items-center gap-6 flex-col sm:flex-row">
				<div class="w-28 h-28 rounded-full bg-verde-claro border-2 border-dashed border-[#C99A00] flex items-center justify-center text-verde-escuro text-3xl font-bold shrink-0">AB</div>
				<div>
					<div class="flex items-center gap-2.5"><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon.svg" alt=""><span class="text-sm font-semibold leading-[1.1]! text-verde-escuro uppercase">Quem cuida do seu caso</span></div>
					<h3 class="text-title_black text-2xl font-semibold mt-3">Ademilson Bevenutto</h3>
					<p class="mt-2 text-paragraph_black">À frente da Logos desde 1998. Analisa pessoalmente cada caso, escolhe as instituições, negocia as condições e acompanha cartório e liberação.</p>
					<div class="mt-5"><?php echo btn_whats('Falar com o Ademilson', 'especialista', 'button-primary btn-whats'); ?></div>
				</div>
			</div>
		</div>
	</section>

	<!-- FAQ -->
	<section class="section-spacing-md-lg bg-background" id="faq">
		<div class="container">
			<?php echo section_title('Dúvidas frequentes', 'Perguntas sobre crédito com garantia de imóvel', '', false, true); ?>
			<?php echo faq([
				['O imóvel continua sendo meu? Posso continuar usando?', 'Sim. O imóvel fica em alienação fiduciária como garantia, mas continua no seu nome e no seu uso: morar, alugar, operar a empresa nele. Ao quitar o contrato, a garantia é baixada na matrícula.'],
				['O imóvel pode ser de um sócio ou de um familiar?', 'Sim. O sócio entra como garantidor e o crédito é concedido para a empresa. Imóvel de familiar também é aceito por algumas instituições, com a anuência do proprietário e do cônjuge, quando houver.'],
				['Imóvel financiado serve como garantia?', 'Depende do saldo devedor e da instituição. Desde a Lei 14.711/2023 (Marco Legal das Garantias), a parte já paga do imóvel pode garantir um novo crédito. Também é possível transferir o financiamento atual para outro banco e liberar a diferença.'],
				['Quanto consigo com um imóvel de R$ 1 milhão?', 'O teto é de 60% do valor <em>avaliado</em> pelo banco, ou seja, até R$ 600 mil se a avaliação confirmar R$ 1 milhão. Como a avaliação tende a ficar abaixo do valor de mercado, o valor final costuma ser menor. Na pré-análise, damos uma estimativa realista para o seu imóvel.'],
				['Empresa com restrição no nome consegue?', 'A garantia real reduz muito o risco para a instituição, então a restrição não encerra a análise. Cada banco tem uma política; enviamos o caso só para os que aceitam o seu perfil.'],
				['Quais documentos vão ser pedidos?', 'Na pré-análise, nenhum. Depois: contrato social e faturamento da empresa, documentos e comprovante de renda dos sócios, matrícula atualizada e IPTU do imóvel. A lista exata depende da instituição e é enviada pelo especialista.'],
				['A taxa é fixa ou varia?', 'A maioria das operações é indexada ao IPCA (taxa + inflação). Algumas instituições oferecem taxa pré-fixada, geralmente mais alta. Mostramos as duas opções, quando disponíveis, com o CET de cada uma.'],
				['E se eu não conseguir pagar?', 'O contrato prevê renegociação e a lei garante prazos e notificações antes de qualquer medida sobre o imóvel. Por isso trabalhamos com uma parcela que cabe no caixa, e não com o máximo que o banco aprovaria. Falamos sobre isso abertamente na análise.'],
				['Como sei que não é golpe?', 'A Logos Connect existe desde 1998 (CNPJ 02.794.809/0001-68), tem escritório físico em Salvador e nunca pede pagamento antecipado. Todo pagamento do contrato é feito diretamente à instituição financeira ou ao cartório, nunca à Logos ou a terceiros. <a class="underline" href="sobre.html#seguranca">Veja como nos identificar.</a>'],
			]); ?>
		</div>
	</section>

	<?php echo parceiros_bloco('Instituições com as quais operamos', 'bg-white'); ?>

	<?php echo cta_final('Quanto o seu imóvel pode liberar para a empresa?', 'Faça a pré-análise gratuita. Em um dia útil, um especialista diz se o caso tem viabilidade, em quais instituições e com que estimativa realista.'); ?>
</main>
<?php
$content = ob_get_clean();
render_page('cgi-empresas.html', 'Crédito com garantia de imóvel para empresas | Logos Connect', 'Capital de giro, reorganização de dívidas e expansão com garantia de imóvel da empresa ou do sócio. Comparação de propostas entre bancos parceiros. Consultoria sem custo, desde 1998.', $content);
