<div id="margin">
	<div class="navegacao">Você está: <a href="<?=site_url();?>">Home</a></div>
	<div class="title-content">Todos <font size="5">(1.000) Resultados</font></div>
	
	<div class="widget-left">
		
		<!-- Filtros -->
		<? $this->load->view('frontend/common/filter'); ?>
		
		<!-- Publicidade -->
		<div class="info-publicidade">Publicidade</div>
		<div class="publicidade-widget">300x250</div>
		<!-- Publicidade -->
		<div class="info-publicidade">Publicidade</div>
		<div class="publicidade-widget">300x250</div>
		
		<!-- Parceiros -->
		<div class="parceiros">
			<div id="title">Parceiros</div>
			
			<? if($partners){ foreach($partners as $k=>$v){?>
			<div id="banner">
				<a href="<?=$v['link'];?>">
					<img src="<?=site_url('resources/upload/parceiros/'.$v['file']);?>" />
				</a>
			</div>
			<? } } ?>
			
			<div id="info">
				<font size="4">Quer ser um parceiro do</font><br />
				<b><font size="6">Meu Carro Turbo?</font></b><br /><br />
				<font size="4">Veja como é fácil - <a href="<?=site_url('parceiros/cadastrar');?>">clique aqui!</a></font>
			</div>
		</div>
	</div>
	
	<div class="principal">
		<div class="paginacao">
			
			<div id="right">
				<div id="texto">Página</div>
				<a href="#"><div id="pages">1</div></a>
				<a href="#"><div id="pages">2</div></a>
				<a href="#"><div id="pages">3</div></a>
				<a href="#"><div id="pages">4</div></a>
				<a href="#"><div id="pages">></div></a>
			</div>
		</div>
		
		<!-- Anuncios -->
		<div class="line_anuncio">
			<a href="#"><div id="foto"><div id="fotodestaque"></div><img src="anuncio/foto1.jpg" width="150"/></div></a>
			<div id="cabecalho">
				<a href="#"><div id="titulo">Subaru Impreza STI</div></a>
				<a href="#"><div id="preco">R$ 80.000,00</div></a>
			</div>
			<div id="detalhes">
				<div id="categoria">Categoria: </div><a href="#"><div id="aspirado">Aspirados</div></a>
				<a href="#"><div id="user">Nome do user</div></a>
			</div>
			<div id="vermais">
				<div id="regiao"> <a href="#">Cidade</a> | <a href="#">Estado</a></div>
				<a href="#"><div id="detalhes">Ver Detalhes</div></a>
			</div>
		</div>
		
		<div class="line_anuncio">
			<a href="#"><div id="foto"><div id="fotodestaque"></div><img src="anuncio/sem-foto.jpg" width="150"/></div></a>
			<div id="cabecalho">
				<a href="#"><div id="titulo">Subaru Impreza STI</div></a>
				<a href="#"><div id="preco">R$ 80.000,00</div></a>
			</div>
			<div id="detalhes">
				<div id="categoria">Categoria: </div><a href="#"><div id="rebaixado">Rebaixado</div></a>
				<a href="#"><div id="user">Nome do user</div></a>
			</div>
			<div id="vermais">
				<div id="regiao"> <a href="#">Cidade</a> | <a href="#">Estado</a></div>
				<a href="#"><div id="detalhes">Ver Detalhes</div></a>
			</div>
		</div>
		
		<div class="line_anuncio">
			<a href="#"><div id="foto"><div id="fotodestaque"></div><img src="anuncio/sem-foto.jpg" width="150"/></div></a>
			<div id="cabecalho">
				<a href="#"><div id="titulo">Subaru Impreza STI</div></a>
				<a href="#"><div id="preco">R$ 80.000,00</div></a>
			</div>
			<div id="detalhes">
				<div id="categoria">Categoria: </div><a href="#"><div id="stock">Stock</div></a>
				<a href="#"><div id="user">Nome do user</div></a>
			</div>
			<div id="vermais">
				<div id="regiao"> <a href="#">Cidade</a> | <a href="#">Estado</a></div>
				<a href="#"><div id="detalhes">Ver Detalhes</div></a>
			</div>
		</div>
		
		<div class="line_anuncio">
			<a href="#"><div id="foto"><div id="fotodestaque"></div><img src="anuncio/sem-foto.jpg" width="150"/></div></a>
			<div id="cabecalho">
				<a href="#"><div id="titulo">Subaru Impreza STI</div></a>
				<a href="#"><div id="preco">R$ 80.000,00</div></a>
			</div>
			<div id="detalhes">
				<div id="categoria">Categoria: </div><a href="#"><div id="turbo">Turbo</div></a>
				<a href="#"><div id="user">Nome do user</div></a>
			</div>
			<div id="vermais">
				<div id="regiao"> <a href="#">Cidade</a> | <a href="#">Estado</a></div>
				<a href="#"><div id="detalhes">Ver Detalhes</div></a>
			</div>
		</div>
		
		<!-- Anúncio meio -->
		<div class="line_anuncio">
			<div class="info-publicidade-meio">Publicidade</div>
			<div class="publicidade-meio">468 x 60</div>
		</div>
		
		<div class="line_anuncio">
			<a href="#"><div id="foto"><img src="anuncio/sem-foto.jpg" width="150"/></div></a>
			<div id="cabecalho">
				<a href="#"><div id="titulo">Subaru Impreza STI</div></a>
				<a href="#"><div id="preco">R$ 80.000,00</div></a>
			</div>
			<div id="detalhes">
				<div id="categoria">Categoria: </div><a href="#"><div id="acessorio">Acessorio</div></a>
				<a href="#"><div id="user">Nome do user</div></a>
			</div>
			<div id="vermais">
				<div id="regiao"> <a href="#">Cidade</a> | <a href="#">Estado</a></div>
				<a href="#"><div id="detalhes">Ver Detalhes</div></a>
			</div>
		</div>
		
		<div class="line_anuncio">
			<a href="#"><div id="foto"><img src="anuncio/sem-foto.jpg" width="150"/></div></a>
			<div id="cabecalho">
				<a href="#"><div id="titulo">Subaru Impreza STI</div></a>
				<a href="#"><div id="preco">R$ 80.000,00</div></a>
			</div>
			<div id="detalhes">
				<div id="categoria">Categoria: </div><a href="#"><div id="mecanica">Mecânica</div></a>
				<a href="#"><div id="user">Nome do user</div></a>
			</div>
			<div id="vermais">
				<div id="regiao"> <a href="#">Cidade</a> | <a href="#">Estado</a></div>
				<a href="#"><div id="detalhes">Ver Detalhes</div></a>
			</div>
		</div>
		
		<div class="line_anuncio">
			<a href="#"><div id="foto"><img src="anuncio/sem-foto.jpg" width="150"/></div></a>
			<div id="cabecalho">
				<a href="#"><div id="titulo">Subaru Impreza STI</div></a>
				<a href="#"><div id="preco">R$ 80.000,00</div></a>
			</div>
			<div id="detalhes">
				<div id="categoria">Categoria: </div><a href="#"><div id="rodas">Rodas</div></a>
				<a href="#"><div id="user">Nome do user</div></a>
			</div>
			<div id="vermais">
				<div id="regiao"> <a href="#">Cidade</a> | <a href="#">Estado</a></div>
				<a href="#"><div id="detalhes">Ver Detalhes</div></a>
			</div>
		</div>
		
		<!-- Anúncio meio -->
		<div class="line_anuncio">
			<div class="info-publicidade-meio">Publicidade</div>
			<div class="publicidade-meio">468 x 60</div>
		</div>
		
		<div class="line_anuncio">
			<a href="#"><div id="foto"><img src="anuncio/sem-foto.jpg" width="150"/></div></a>
			<div id="cabecalho">
				<a href="#"><div id="titulo">Subaru Impreza STI</div></a>
				<a href="#"><div id="preco">R$ 80.000,00</div></a>
			</div>
			<div id="detalhes">
				<div id="categoria">Categoria: </div><a href="#"><div id="aspirado">Aspirados</div></a>
				<a href="#"><div id="user">Nome do user</div></a>
			</div>
			<div id="vermais">
				<div id="regiao"> <a href="#">Cidade</a> | <a href="#">Estado</a></div>
				<a href="#"><div id="detalhes">Ver Detalhes</div></a>
			</div>
		</div>
		
		<div class="line_anuncio">
			<a href="#"><div id="foto"><img src="anuncio/sem-foto.jpg" width="150"/></div></a>
			<div id="cabecalho">
				<a href="#"><div id="titulo">Subaru Impreza STI</div></a>
				<a href="#"><div id="preco">R$ 80.000,00</div></a>
			</div>
			<div id="detalhes">
				<div id="categoria">Categoria: </div><a href="#"><div id="aspirado">Aspirados</div></a>
				<a href="#"><div id="user">Nome do user</div></a>
			</div>
			<div id="vermais">
				<div id="regiao"> <a href="#">Cidade</a> | <a href="#">Estado</a></div>
				<a href="#"><div id="detalhes">Ver Detalhes</div></a>
			</div>
		</div>
		
		<div class="line_anuncio">
			<a href="#"><div id="foto"><img src="anuncio/sem-foto.jpg" width="150"/></div></a>
			<div id="cabecalho">
				<a href="#"><div id="titulo">Subaru Impreza STI</div></a>
				<a href="#"><div id="preco">R$ 80.000,00</div></a>
			</div>
			<div id="detalhes">
				<div id="categoria">Categoria: </div><a href="#"><div id="aspirado">Aspirados</div></a>
				<a href="#"><div id="user">Nome do user</div></a>
			</div>
			<div id="vermais">
				<div id="regiao"> <a href="#">Cidade</a> | <a href="#">Estado</a></div>
				<a href="#"><div id="detalhes">Ver Detalhes</div></a>
			</div>
		</div>
		
		<!-- Paginacao final -->
		<div class="paginacao">
			
			<div id="right">
				<div id="texto">Página</div>
				<a href="#"><div id="pages">1</div></a>
				<a href="#"><div id="pages">2</div></a>
				<a href="#"><div id="pages">3</div></a>
				<a href="#"><div id="pages">4</div></a>
				<a href="#"><div id="pages">></div></a>
			</div>
		</div>
		
	</div>
	
</div>
</div>