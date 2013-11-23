<!-- Divisao -->
<div id="faixa-banner" class="clearfix">
	<div id="margin">
		<div class="title-anuncio">Planos</div>
		<div class="navegacao"><a href="<?=site_url('home');?>">Home</a> >> Planos</div>
	</div>
	
</div>	
<!-- Fim destaque - Banner -->

<!-- Inicio do conteudo anuncio -->
<div id="content-anuncio" class="clearfix">
	<div id="margin">
		
		<div id="title-plano">Planos de Anúncio</div>
		
		<div id="line-planos">
			<?
				if($planos){ foreach($planos as $plano){
					
					$video 		= ($plano['video'] == 1) ? 'ativo' : 'inativo';
					$destaque 	= ($plano['destaque'] == 1) ? 'ativo' : 'inativo';
					$newsletter	= ($plano['newsletter'] == 1) ? 'ativo' : 'inativo';
			?>
			
			<div id="box-plano">
				<div id="title"><?=$plano['name'];?></div>
				<div id="icone"><img src="<?=site_url('resources/frontend/images/'.$plano['icone']);?>" border="0" /></div>
				<div id="informacoes">
					<div id="text-preco">
						<? if($plano['price'] == '0.00'){ echo 'Grátis'; }else{ echo 'R$ '.money($plano['price']); } ?>
					</div>
					<div id="detalhes-line-ativo">Dias - <?=$plano['period'];?></div>
					<div id="detalhes-line-ativo">Imagens - <?=$plano['num_pics'];?></div>
					<div id="detalhes-line-<?=$video;?>">Vídeo</div>
					<div id="detalhes-line-<?=$destaque;?>">Destaque</div>
					<div id="detalhes-line-<?=$newsletter;?>">Newsletter mensal</div>
				</div>
			</div>
			<? } } ?>
		</div>
	</div>
</div>