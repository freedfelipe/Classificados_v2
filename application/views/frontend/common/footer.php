<footer class="clearfix">
	<div id="margin">
		<div class="box-ajuda">
			<div id="titulo">
				<b>Precisa</b> de ajuda?
			</div>
			<div id="links"><a href="#">Como criar uma conta</a></div> 
			<div id="links"><a href="#">Como inserir um anúncio</a></div> 
			<div id="links"><a href="#">Como excluir um anúncio</a></div> 
			<div id="links"><a href="#">Como editar um anúncio</a></div> 
		</div>
		<div class="box-informacoes">
			<div id="titulo">
				<b>Informações</b>
			</div>
			<div id="colunas">
				<div id="links"><a href="<?=site_url('planos');?>">Planos</a></div> 
				<div id="links"><a href="<?=site_url('publicidade');?>">Publicidade</a></div> 
				<div id="links"><a href="<?=site_url('parceiros');?>">Parceiros</a></div> 
				<div id="links"><a href="<?=site_url('quem-somos');?>">Quem Somos</a></div> 
			</div>
			<div id="colunas">
				<div id="links"><a href="<?=site_url('contato');?>">Sugestão</a></div> 
				<div id="links"><a href="<?=site_url('contato');?>">Reclamação</a></div> 
				<div id="links"><a href="<?=site_url('contato');?>">Contato</a></div> 
			</div>
		</div>
		<div class="box-redes_sociais">
			<div id="titulo">
				<b>Ache</b> nós aqui!
			</div>
			<div id="icons-social">
				<a href="#" target="_blank"><img src="<?=site_url('resources/frontend/images/icon-facebook.png');?>" /></a>
				<a href="#" target="_blank"><img src="<?=site_url('resources/frontend/images/icon-twitter.png');?>" /></a>
				<a href="#" target="_blank"><img src="<?=site_url('resources/frontend/images/icon-youtube.png');?>" /></a>
				<a href="#" target="_blank"><img src="<?=site_url('resources/frontend/images/icon-vimeo.png');?>" /></a>
				<a href="#" target="_blank"><img src="<?=site_url('resources/frontend/images/icon-mail.png');?>" /></a>
			</div>
			<div id="titulo-news"><b>Newsletter</b></div>
			<div id="form">
				<form action="#" method="get">
					<input type="text" name="newslwtter" id="newsletter">
					<input type="submit" name="ok" id="newsletter_botao" value="Ok">
				</form>
			</div>
		</div>
	</div>
</footer><!-- end #footer -->
<footer id="footer-bottom" class="clearfix">
	<div id="margin">
		<div id="left">&copy; <?=date('Y');?>  <?=$this->parameter_model->get('company_name');?> |<font size="2">O seu classificados turbinado</font></div>
		<a href="http://www.wadtecnologia.com.br/" target="_blank"><div id="right">WAD TECNOLOGIA</div></a>
	</div><!-- end  -->
</footer><!-- end #footer2 -->
</body>
</html>
