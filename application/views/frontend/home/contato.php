<div id="faixa-banner" class="clearfix">
	<div id="margin">
		<div class="title-anuncio">Contato</div>
		<div class="navegacao"><a href="<?=site_url();?>">Home</a> >> Contato</div>
	</div>
</div>

<div id="content-contato" class="clearfix">
	<div id="margin">
		<div id="linha">
			<form class="form_submit_contato" action="<?=site_url('contato/ajax/enviar-contato');?>" method="post">
				<div id="box-contato">
					<div id="line-box-line">
						<div id="text-contato">Nome:</div>
						<div id="form-login"><input type="text" name="nome" id="form"></div>
					</div>
					<div id="line-box-line">
						<div id="text-contato">Email:</div>
						<div id="form-login"><input type="text" name="email" id="form"></div>
					</div>
					<div id="line-box-line">
						<div id="text-contato">Mensagem:</div>
						<div id="form-login"><textarea name="mensagem" id="text-area"></textarea></div>
					</div>
					<div id="line-box-line">
						<div id="btn-contato">
							<input type="reset" name="limpar" id="login_botao" value="Limpar">
							<input type="submit" name="entrar" id="login_botao" class="enviar_contato" value="Enviar">
						</div>
					</div>
				</div>
			</form>
			
			<div id="sobre-wad">
				<strong>Meu Carro Turbo</strong> e um produto da empresa <strong>Wad Tecnologia</strong>.<br /><br />
				A Empresa desenvolveu o classificados devido a necessidade de um classificados especifico
				com todas as funcionalidades, filtros, e um moderno layout para o publico.
			</div>
		</div>
	</div>
</div>