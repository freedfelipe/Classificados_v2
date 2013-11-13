<!-- Divisao -->
<div id="faixa-banner" class="clearfix">
	<div id="margin">
		<div class="title-anuncio">ADICIONAR NOVO ANÚNCIO</div>
		<div class="navegacao"><a href="<?=site_url('/');?>">Home</a> >> <a href="<?=site_url('anuncio/cadastrar');?>">Novo Anúncio</a> >> Passo 1</div>
		
		<div class="aba-hover">1o Passo</div>
		<div class="aba-simple">2o Passo</div>
		<div class="aba-simple">3o Passo</div>
	</div>
	
</div>	
<!-- Fim destaque - Banner -->

<!-- Inicio do conteudo anuncio -->
<div id="content-anuncio" class="clearfix">
	<div id="margin">
		
		<div id="title-plano">Escolha seu Plano</div>
		<div id="sub-title-plano">Escolha um dos nossos planos de anúncio.</div>
		
		<form name="planos" method="post" action="<?=site_url($_SERVER['REQUEST_URI']);?>" accept-charset="utf-8">
			
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
							R$ <?=money($plano['price']);?>
						</div>
						<div id="detalhes-line-ativo">Dias - <?=$plano['period'];?></div>
						<div id="detalhes-line-ativo">Imagens - <?=$plano['num_pics'];?></div>
						<div id="detalhes-line-<?=$video;?>">Vídeo</div>
						<div id="detalhes-line-<?=$destaque;?>">Destaque</div>
						<div id="detalhes-line-<?=$newsletter;?>">Newsletter mensal</div>
					</div>
					<div id="escolha">
						<div id="texto">Escolha</div>
						<div id="radio">
							<input type="radio" name="plano" value="<?=$plano['id'];?>" id="r<?=$plano['id'];?>">
							<label for="r<?=$plano['id'];?>"><span></span></label>
						</div>
					</div>
				</div>
				<? } } ?>
			</div>
			
			<div id="line-btns">
				<input type="submit" name="proximo" id="proximo" value="Proximo >>">
				<input type="submit" name="anterior" id="anterior" value="Cancelar">
			</div>
		</form>
	</div>
</div>