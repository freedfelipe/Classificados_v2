<div id="faixa-banner" class="clearfix">
	<div id="margin">
		<div class="title-anuncio">Contato</div>
		<div class="navegacao"><a href="<?=site_url();?>">Home</a> >> Contato</div>
	</div>
</div>

<div id="content-login" class="clearfix">
	<div id="margin">
		<div id="linha">
			<form class="form_submit_contato" action="<?=site_url('contato/ajax/enviar-contato');?>" method="post">
				<div id="box-login">
					<div id="line-box-line">
						<div id="text-login">Nome:</div>
						<div id="form-login"><input type="text" name="nome" id="login"></div>
					</div>
					<div id="line-box-line">
						<div id="text-login">Email:</div>
						<div id="form-login"><input type="text" name="email" id="login"></div>
					</div>
					<div id="line-box-line">
						<div id="text-login">Mensagem:</div>
						<div id="form-login"><textarea name="mensagem" id="login"></textarea></div>
					</div>
					<div id="line-box-line">
						<div id="btn-login">
							<input type="reset" name="limpar" id="login_botao" value="Limpar">
							<input type="submit" name="entrar" id="login_botao" class="enviar_contato" value="Enviar">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>