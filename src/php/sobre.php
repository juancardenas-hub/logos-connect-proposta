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
					<div class="flex items-center gap-2.5" data-subtitle><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon.svg" alt=""><p class="text-sm sm:text-base font-semibold leading-[1.1]! text-verde-escuro uppercase">Sobre a Logos Connect</p></div>
					<h1 class="text-4xl sm:text-[40px] md:text-5xl lg:text-[52px] xl:text-[58px] font-bold leading-[1.1]! text-title_black mt-4 md:mt-5" data-title>Desde 1998 conectando empresas e famílias ao crédito certo.</h1>
					<p class="text-base sm:text-lg text-paragraph_black mt-4" data-excerpt>Começamos como Logos Fomento, em Salvador, quando crédito imobiliário ainda era coisa de agência bancária. Hoje somos a Logos Connect: correspondente bancário multibanco, com atendimento em todo o Brasil e o mesmo compromisso de sempre, o de defender o interesse de quem confia o seu imóvel a nós.</p>
					<div class="mt-8 pt-6 border-t border-border flex flex-wrap gap-x-6 gap-y-3 text-sm font-semibold" data-button>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('clock', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">Fundada em 14 de outubro de 1998</span></span>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('pin', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">Hangar Business Park, Salvador</span></span>
						<span class="flex items-center gap-2 text-verde-escuro"><?php echo ico('bank', 'w-4.5 h-4.5'); ?><span class="text-paragraph_black">CNPJ 02.794.809/0001-68</span></span>
					</div>
				</div>
				<div class="md:max-w-125 w-full grid grid-cols-2 gap-4 relative z-1" data-thumbnail>
					<div class="col-span-2"><img class="rounded-2xl w-full object-cover aspect-[2/1]" src="<?php echo $static_url; ?>/img/tpl/equipe-docs.webp" width="1640" height="1258" alt="" fetchpriority="high"></div>
					<div class="bg-secondary p-5 sm:p-6 rounded-2xl"><h3 class="text-primary font-bold leading-[1.1] text-4xl"><span class="counter" data-target="28">0</span></h3><p class="mt-2 text-white font-semibold">anos de mercado</p></div>
					<div class="bg-grafite p-5 sm:p-6 rounded-2xl"><h3 class="text-primary font-bold leading-[1.1] text-4xl">1,19%</h3><p class="mt-2 text-white font-semibold">taxa inicial ao mês (CGI)</p></div>
					<div class="bg-white border border-border p-5 sm:p-6 rounded-2xl"><h3 class="text-title_black font-bold text-2xl">240 meses</h3><p class="mt-2 text-title_black font-semibold">de prazo máximo</p></div>
					<div class="bg-white border border-border p-5 sm:p-6 rounded-2xl"><h3 class="text-title_black font-bold text-2xl">3 a 5 min</h3><p class="mt-2 text-title_black font-semibold">para responder no WhatsApp</p></div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-spacing-lg-md" id="como-trabalhamos">
		<div class="container">
			<div class="flex items-start justify-between gap-10 flex-col lg:flex-row">
				<div class="lg:max-w-125 w-full">
					<div class="flex items-center gap-2.5"><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon.svg" alt=""><span class="text-base lg:text-lg font-semibold leading-[1.1]! text-verde-escuro uppercase">Como trabalhamos</span></div>
					<h2 class="text-3xl md:text-4xl lg:text-[40px] font-bold leading-tight text-title_black mt-4">O que é um correspondente bancário, e por que isso é bom para você</h2>
					<p class="mt-4 text-base sm:text-lg text-paragraph_black">Correspondente bancário é a empresa autorizada a intermediar operações de crédito em nome de instituições financeiras, conforme a Resolução CMN 4.935/2021. Não emprestamos dinheiro: analisamos o seu caso, montamos a proposta e a apresentamos às instituições com as quais temos contrato.</p>
					<p class="mt-3 text-base sm:text-lg text-paragraph_black">Como trabalhamos com vários bancos parceiros, não temos produto próprio para defender. Comparamos, explicamos a diferença entre as propostas e recomendamos a que faz mais sentido para o seu caixa, e não para a nossa comissão.</p>
				</div>
				<div class="lg:max-w-140 w-full grid gap-4">
					<div class="bg-background border border-border p-6 rounded-2xl"><h3 class="text-title_black text-lg font-semibold">Como somos remunerados</h3><p class="mt-2 text-paragraph_black">Pela instituição financeira, somente quando a operação é concluída. O cliente não paga nada à Logos.</p></div>
					<div class="bg-background border border-border p-6 rounded-2xl"><h3 class="text-title_black text-lg font-semibold">O que fazemos</h3><p class="mt-2 text-paragraph_black">Pré-análise, documentação, negociação com os bancos, comparação de propostas, acompanhamento de avaliação, cartório e liberação.</p></div>
					<div class="bg-secondary p-6 rounded-2xl"><h3 class="text-primary text-lg font-semibold">O que não fazemos</h3><p class="mt-2 text-paragraph_white">Não cobramos taxa de análise, cadastro ou liberação. Não pedimos depósito. Não enviamos seus dados a nenhum banco sem a sua autorização.</p></div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-spacing-md-lg bg-background" id="equipe">
		<div class="container">
			<?php echo section_title('Equipe', 'Quem atende você', 'Atendimento humano, em horário comercial, pela mesma pessoa do início ao fim do processo.', false, true); ?>
			<div class="grid gap-5 max-w-80 mx-auto">
				<?php foreach ([['AB', 'Ademilson Bevenutto', 'À frente da Logos desde 1998']] as $p): ?>
				<div class="bg-white border border-border rounded-2xl p-6 text-center">
					<div class="w-24 h-24 mx-auto rounded-full bg-verde-claro flex items-center justify-center text-verde-escuro text-2xl font-bold"><?php echo $p[0]; ?></div>
					<h3 class="text-title_black text-lg font-semibold mt-4"><?php echo $p[1]; ?></h3>
					<p class="mt-1 text-sm text-paragraph_black"><?php echo $p[2]; ?></p>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section-spacing-md-lg" id="seguranca">
		<div class="container">
			<?php echo section_title('Segurança', 'Como saber que está falando com a Logos Connect', 'Golpes de "empréstimo com taxa antecipada" usam nomes de empresas reais. Confira sempre.', false, true); ?>
			<div class="grid lg:grid-cols-2 gap-5">
				<div class="bg-white border-l-4 border-[#E20000] border border-border rounded-2xl p-6 sm:p-8">
					<h3 class="text-[#C40000] text-xl font-semibold">Nunca fazemos isso</h3>
					<ul class="flex flex-col gap-3 mt-4 text-paragraph_black">
						<?php foreach (['Pedir pagamento antecipado, "taxa de liberação", "seguro do contrato" ou depósito de qualquer valor.', 'Pedir Pix ou transferência para conta de pessoa física.', 'Prometer aprovação garantida ou liberação "em 24 horas" sem análise.', 'Entrar em contato por números que não sejam os oficiais ao lado.'] as $li): ?>
						<li class="flex items-start gap-3"><span class="w-5 h-5 rounded-full bg-[#FFE5E5] text-[#C40000] flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">✕</span><span><?php echo $li; ?></span></li>
						<?php endforeach; ?>
					</ul>
					<p class="mt-5 font-semibold text-title_black">Se receber algo assim em nosso nome, suspenda o contato e nos avise pelos canais oficiais.</p>
				</div>
				<div class="bg-secondary rounded-2xl p-6 sm:p-8">
					<h3 class="text-primary text-xl font-semibold">Canais oficiais</h3>
					<ul class="flex flex-col gap-3 mt-4 text-paragraph_white">
						<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-primary shrink-0"><use href="#roundedCheck"></use></svg><span>WhatsApp: <a class="text-white underline underline-offset-4" href="<?php echo WHATS_URL; ?>" target="_blank" rel="noopener">(71) 99962-2679</a></span></li>
						<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-primary shrink-0"><use href="#roundedCheck"></use></svg><span>E-mail: <a class="text-white underline underline-offset-4" href="mailto:ademilson@logosconnect.com.br">ademilson@logosconnect.com.br</a> (domínio @logosconnect.com.br)</span></li>
						<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-primary shrink-0"><use href="#roundedCheck"></use></svg><span>Site: logosconnect.com.br</span></li>
						<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-primary shrink-0"><use href="#roundedCheck"></use></svg><span>Instagram: <a class="text-white underline underline-offset-4" href="https://www.instagram.com/logosconnect07/" target="_blank" rel="noopener">@logosconnect07</a></span></li>
						<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-primary shrink-0"><use href="#roundedCheck"></use></svg><span>Endereço: Av. Luís Viana Filho, 13223, Hangar Business Park, Hangar 4, Sala 118, Salvador, BA</span></li>
						<li class="flex items-start gap-3"><svg class="w-5 h-5 fill-current mt-0.5 text-primary shrink-0"><use href="#roundedCheck"></use></svg><span>CNPJ 02.794.809/0001-68, ativo desde 1998</span></li>
					</ul>
					<p class="mt-5 text-sm text-paragraph_white border-t border-white/10 pt-4">Todo pagamento de um contrato de crédito é feito diretamente à instituição financeira ou ao cartório, nunca à Logos ou a terceiros.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section-spacing-md-lg bg-background" id="contato-secao">
		<div class="container">
			<div class="flex items-start justify-between gap-10 flex-col lg:flex-row">
				<div class="lg:max-w-120 w-full">
					<div class="flex items-center gap-2.5"><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon.svg" alt=""><span class="text-base lg:text-lg font-semibold leading-[1.1]! text-verde-escuro uppercase">Contato</span></div>
					<h2 class="text-3xl md:text-4xl lg:text-[40px] font-bold leading-tight text-title_black mt-4">Fale com a gente</h2>
					<p class="mt-4 text-paragraph_black"><strong class="text-title_black">Horário:</strong> segunda a sexta, das 8h às 17h.<br><strong class="text-title_black">WhatsApp:</strong> (71) 99962-2679<br><strong class="text-title_black">E-mail:</strong> ademilson@logosconnect.com.br</p>
					<p class="mt-3 text-paragraph_black"><strong class="text-title_black">Escritório:</strong> Av. Luís Viana Filho, 13223 — Hangar Business Park, Hangar 4, Sala 118, São Cristóvão, Salvador — BA, CEP 41500-300</p>
					<div class="mt-6 rounded-2xl overflow-hidden border border-border">
						<iframe title="Mapa do escritório da Logos Connect" src="https://www.google.com/maps?q=Hangar+Business+Park,+Av.+Luís+Viana+Filho,+13223,+Salvador+-+BA&output=embed" width="100%" height="260" style="border:0;display:block" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="lg:max-w-150 w-full">
					<?php echo form_curto('Contato', 'c',
						campo_select('c-assunto', 'assunto', 'Assunto', ['Crédito com garantia de imóvel (empresa)', 'Crédito com garantia de imóvel (pessoa física)', 'Financiamento imobiliário', 'Crédito com garantia de veículo', 'Quero ser parceiro / indicar clientes', 'Outro'], true) .
						'<div class="campo sm:col-span-2"><label for="c-msg">Mensagem</label><textarea id="c-msg" name="mensagem" rows="4"></textarea></div>'
					); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="section-spacing-md" id="parceiros-indicacao">
		<div class="container-lg">
			<div class="p-6 sm:p-10 xl:p-14 bg-secondary rounded-2xl md:rounded-3xl relative z-1 overflow-hidden">
				<img class="w-full h-full absolute top-0 left-0 -z-1 select-none object-cover opacity-70" src="<?php echo $static_url; ?>/img/tpl/roi-bg-shape.webp" alt="">
				<div class="flex items-center justify-between gap-6 md:gap-10 flex-col md:flex-row">
					<div class="md:max-w-150 w-full">
						<div class="flex items-center gap-2.5"><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon-primary.svg" alt=""><span class="text-base font-semibold leading-[1.1]! text-primary uppercase">Para parceiros</span></div>
						<h2 class="text-3xl md:text-4xl font-bold text-white leading-tight! mt-4">Contadores, corretores e consultores: indique e acompanhe</h2>
						<p class="mt-4 text-paragraph_white">Se você atende empresários que precisam de crédito, a Logos analisa os casos indicados com a mesma atenção e mantém você informado do andamento.</p>
					</div>
					<div class="flex flex-col gap-3">
						<?php echo btn_whats('Quero ser parceiro', 'parceiros'); ?>
						<p class="text-sm text-paragraph_white">Já é parceiro? Fale direto com o Ademilson pelo WhatsApp.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-spacing-md-lg bg-background" id="privacidade">
		<div class="container">
			<div class="max-w-190">
				<div class="flex items-center gap-2.5"><img class="rotate" src="<?php echo $static_url; ?>/img/title-icon.svg" alt=""><span class="text-base lg:text-lg font-semibold leading-[1.1]! text-verde-escuro uppercase">Privacidade e LGPD</span></div>
				<h2 class="text-3xl md:text-4xl font-bold leading-tight text-title_black mt-4">Como tratamos os seus dados</h2>
				<p class="mt-4 text-paragraph_black">Os dados informados nos formulários deste site (nome, contato, informações da empresa e do imóvel) são usados exclusivamente para a análise do seu pedido de crédito e para o contato do nosso especialista, com base no seu consentimento e na execução das etapas preliminares do contrato (Lei 13.709/2018, art. 7º, I e V).</p>
				<p class="mt-3 text-paragraph_black">Não enviamos seus dados a nenhuma instituição financeira sem a sua autorização expressa, e não compartilhamos com terceiros para outras finalidades. Você pode pedir acesso, correção ou exclusão dos seus dados a qualquer momento pelo e-mail <a class="underline" href="mailto:ademilson@logosconnect.com.br">ademilson@logosconnect.com.br</a>.</p>
				<p class="mt-3 text-sm text-paragraph_black">Encarregado pelo tratamento de dados (DPO): Ademilson Bevenutto — <a class="underline" href="mailto:ademilson@logosconnect.com.br">ademilson@logosconnect.com.br</a>.</p>
			</div>
		</div>
	</section>
</main>
<?php
$content = ob_get_clean();
render_page('sobre.html', 'Sobre a Logos Connect — correspondente bancário desde 1998 em Salvador', 'Quem somos, como trabalhamos, como somos remunerados e como identificar um contato oficial da Logos Connect. Escritório no Hangar Business Park, Salvador. CNPJ 02.794.809/0001-68.', $content);
