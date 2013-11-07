<? if($form){ ?>
<div id="faixa-banner" class="clearfix">
	<div id="margin">
		<div class="title-anuncio">Recuperar</div>
		<div class="navegacao"><a href="<?=site_url();?>">Home</a> >> Recuperar</div>
	</div>
</div>

<div id="content-login" class="clearfix">
	<div id="margin">
		<div id="title-login"><b>Recuperar</b> Acesso</div>
		<div id="linha">
			<form action="<?=site_url($_SERVER['REQUEST_URI']);?>" method="post">
				<div id="box-login">
					<div id="line-box-line">
						<div id="icon-login-page"></div>
					</div>
					<div id="line-box-line">
						<div id="text-login">Email:</div>
						<div id="form-login"><input type="text" name="email" id="login" value="<?=set_value('email', $this->input->post('email')); ?>"></div>
					</div>
					<div id="line-box-line">
						<div id="text-login">Senha:</div>
						<div id="form-login"><input type="password" name="password" id="login"></div>
					</div>
					<div id="line-box-line">
						<div id="text-login">Confirmar Senha:</div>
						<div id="form-login"><input type="password" name="confirm_password" id="login"></div>
					</div>
					<div id="line-box-line">
						<div id="btn-login">
						<input type="reset" name="limpar" id="login_botao" value="Limpar">
						<input type="submit" name="entrar" id="login_botao" value="Enviar">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<? } ?>