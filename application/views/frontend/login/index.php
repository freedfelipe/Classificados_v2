<div id="faixa-banner" class="clearfix">
	<div id="margin">
		<div class="title-anuncio">Login</div>
		<div class="navegacao"><a href="<?=site_url();?>">Home</a> >> Login</div>
	</div>
</div>
<!-- Inicio do conteudo login -->
<div id="content-login" class="clearfix">
	<div id="margin">
		<div id="title-login"><b>Login</b> de Acesso</div>
		<div id="linha">
			<form action="<?=site_url($_SERVER['REQUEST_URI']);?>" method="post">
				<div id="box-login">
					<div id="line-box-line">
						<div id="icon-login-page"></div>
					</div>
					<div id="line-box-line">
						<div id="text-login">Login:</div>
						<div id="form-login"><input type="text" name="email" id="login"></div>
					</div>
					<div id="line-box-line">
						<div id="text-login">Senha:</div>
						<div id="form-login"><input type="password" name="password" id="login"></div>
					</div>
					<div id="line-box-adicional">
						<a href="#">Esqueceu o login?</a>
					</div>
					<div id="line-box-line">
						<div id="line-face">
							<a href="#"><div id="btn-facebook"></div></a>
						</div>
					</div>
					<div id="line-box-line">
						<div id="btn-login">
						<input type="reset" name="limpar" id="login_botao" value="Limpar">
						<input type="submit" name="entrar" id="login_botao" value="Entrar">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>