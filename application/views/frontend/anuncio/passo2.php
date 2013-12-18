<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?=site_url('resources/frontend/js/gmaps.js');?>"></script>
<script type="text/javascript" src="<?=site_url('resources/frontend/js/cep.js');?>"></script>
<!--<script>
	$(function(){
		wscep({map: 'map1',auto:true});
		wsmap('08615-000','555','map2');
	})
</script>-->

<!-- Divisao -->
	<div id="faixa-banner" class="clearfix">
		<div id="margin">
			<div class="title-anuncio">ADICIONAR NOVO ANÚNCIO >> Passo 2</div>
			<div class="navegacao"><a href="<?=site_url('home');?>">Home</a> >> Novo Anúncio >> Passo 2</div>
			
			<div class="aba-simple">1o Passo</div>
			<div class="aba-hover">2o Passo</div>
			<div class="aba-simple">3o Passo</div>
		</div>
		
	</div>	
	<!-- Fim destaque - Banner -->
	<!-- Inicio do conteudo anuncio -->
	<div id="content-anuncio" class="clearfix">
		<div id="margin">
			
			<div id="informacoes-planos">
				Por favor, preencha os campos abaixo para postar seu anúncio.
				Os campos obrigatórios sao indicados por um <font color="#990000">*</font>.
				Voce terá a oportunidade de rever o seu anúncio antes de ser publicado.
			</div>
			<form class="submit_form_2" id="anuncio" name="anuncio" action="<?=site_url('anuncio/ajax/salva-passo-2');?>" method="POST">
			
			<div id="linha-planos-2">
				
				<div id="texto-form">Categoria<font color="#990000">*</font></div>
				<div id="formulario-line">
					<div id="radio-categorias">
						
						<? if($categorias){ $count = 1; foreach($categorias as $categoria){ ?>
						
						<div id="linha">
							<input type="radio" name="categoria" value="<?=$categoria['id'];?>" id="r<?=$count;?>">
							<label for="r<?=$count;?>"><?=$categoria['name'];?><span></span></label>
						</div>
						
						<? ++$count;} } ?>
					</div>
				</div>
				<div id="texto-form">Voce escolheu: </div>
				<div id="voce-escolheu">
					<div class="borda-escolheu">
						<div id="aspirados">Aspirados</div>
						<div id="rebaixados">Rebaixados</div>
						<div id="stock">Stock</div>
						<div id="turbo">Turbo</div>
						<div id="acessorios"><div class="pecas">Peças</div> Acessórios</div>
						<div id="mecanica"><div class="pecas">Peças</div> Mecânica</div>
						<div id="rodas">Rodas</div>
					</div>
				</div>
			</div>
			
			<!-- Anuncio de carros -->
			<div id="anuncio_carro">
				<div id="linha-planos-2">
					<div id="title"><b>Dados</b> do Veículo</div>
					<div id="form-linha">
						<div id="texto-form">Fabricante<font color="#990000">*</font></div>
						<div id="formulario-line">
							<?=form_dropdown('brand_id', construct_select($brand), set_value('brand_id', $this->input->post('brand_id'), $this->input->post('brand_id')), 'id="brand_id"'); ?>
						</div>
						<div id="texto-form">Modelo<font color="#990000">*</font></div>
						<div id="formulario-line">
							<select name="model_id" id="model_id" >
								<option value="-1">Selecione uma Marca</option>
							</select>
						</div>
					</div>
					<div id="form-linha">
						<div id="texto-form">Ano<font color="#990000">*</font></div>
						<div id="formulario-line">
							<?=form_dropdown('ano', ano(), set_value('ano', $this->input->post('ano'), $this->input->post('ano')), 'id="ano"'); ?>
						</div>
						<div id="texto-form">Placa</div>
						<div id="formulario-line">
							<input type="text" name="placa" id="placa" value="">
						</div>
					</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Opcionais</b> do Veículo</div>
					
					<? if($opcionais){ foreach($opcionais as $opcional){ ?>
					
					<div id="opcionais">
						<div id="linha">
							<input type="checkbox" name="opcional_id[]" value="<?=$opcional['id'];?>" id="c<?=$opcional['id'];?>">
							<label for="c<?=$opcional['id'];?>"><span></span></label>
							<div id="texto"><?=$opcional['name'];?></div>		
						</div>
					</div>
					<? } } ?>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Descriçao</b> do Veículo</div>
					<div id="texto-form">Descriçao</div>
						<div id="formulario-line">
							<textarea class="descricao-veiculo" id="descricao" name="descricao" rows="5" cols="30"></textarea>
						</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Preço</b> do Veículo</div>
					<div id="texto-form">Preço<font color="#990000">*</font></div>
					<div id="formulario-line">
						<input type="text" name="preco" id="preco" class="price preco-veiculo">
					</div>
					<div id="line-preco">
						<input type="checkbox" name="preconegociavel" value="1" id="c17">
						<label for="c17"><span></span></label>
						<div id="texto">Preço Negociável?</div>						
					</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Imagens</b> do Veículo</div>
					
					<progress value="0" max="100"></progress><span id="porcentagem">0%</span>
					
					<div id="resposta"></div>
					
					<div id="line-fotos">
						<ul class="field-content">
							<li class="select-six">
								
								<? if(isset($plano['num_pics']) and $plano['num_pics'] > 0){ for($foto = 1; $foto <= $plano['num_pics']; $foto++){ ?>
								<div class="upload-file-container">
									<span>
										<input type="file" id="fileupload" name="file_<?=$foto;?>" rel="<?=$foto;?>"/>
									</span>
								</div>
								<? } } ?>
							</li>
						</ul>
					</div>
				</div>
				
				<? if(isset($plano['video']) and $plano['video'] == 1){ ?>
				<div id="linha-planos-2">
					<div id="title"><b>Vídeo</b> do Veículo</div>
					<div id="texto-form1">Link do Vídeo (youtube)</div>
					<div id="formulario-line">
						<input type="text" name="video" id="video">
					</div>
				</div>
				<? } ?>
			</div>
			<!-- Fim Anuncio de carros -->
			
			<!-- Anuncio de acessorios -->
			<div id="anuncio_acessorios">
				<div id="linha-planos-2">
					<div id="title"><b>Dados</b> da Peça - <b>Acessório</b></div>
					<div id="form-linha">
						<div id="texto-form">Nome Peça<font color="#990000">*</font></div>
						<div id="formulario-line">
							<input type="text" name="nome" id="placa" class="nome-acessorio" value="">
						</div>
					</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Preço</b> da Peça - <b>Acessório</b></div>
					<div id="texto-form">Preço<font color="#990000">*</font></div>
					<div id="formulario-line">
						<input type="text" name="preco" id="preco" class="price preco-acessorio">
					</div>
					<div id="line-preco">
							<input type="checkbox" name="preconegociavel" value="preconegociavel" id="c18">
							<label for="c18"><span></span></label>
							<div id="texto">Preço Negociável?</div>						
					</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Descrição</b> da Peça - <b>Acessório</b></div>
					<div id="texto-form">Descrição</div>
						<div id="formulario-line">
							<textarea id="descricao" class="descricao-acessorio" name="descricao" rows="5" cols="30"></textarea>
						</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Imagens</b> da Peça - <b>Acessório</b></div>
					
					<progress value="0" max="100"></progress><span id="porcentagem">0%</span>
					
					<div id="resposta"></div>
					
					<div id="line-fotos">
						<ul class="field-content">
							<li class="select-six">
								
								<? if(isset($plano['num_pics']) and $plano['num_pics'] > 0){ for($foto = 1; $foto <= $plano['num_pics']; $foto++){ ?>
								<div class="upload-file-container">
									<span>
										<input type="file" id="fileupload" name="file_<?=$foto;?>" rel="<?=$foto;?>"/>
									</span>
								</div>
								<? } } ?>
							</li>
						</ul>
					</div>
				</div>
				
				<? if(isset($plano['video']) and $plano['video'] == 1){ ?>
				<div id="linha-planos-2">
					<div id="title"><b>Vídeo</b> da Peça - <b>Acessório</b></div>
					<div id="texto-form1">Link do Vídeo (youtube)</div>
					<div id="formulario-line">
						<input type="text" name="video" id="video">
					</div>
				</div>
				<? } ?>
				
			</div>
			<!-- Fim Anuncio de acessorios -->
			
			<!-- Anuncio de mecanica -->
			<div id="anuncio_mecanica">
				<div id="linha-planos-2">
					<div id="title"><b>Dados</b> da Peça - <b>Mecânica</b></div>
					<div id="form-linha">
						<div id="texto-form">Nome Peça<font color="#990000">*</font></div>
						<div id="formulario-line">
							<input type="text" name="nome" id="placa" class="nome-mecanica" value="">
						</div>
					</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Preço</b> da Peça - <b>Mecânica</b></div>
					<div id="texto-form">Preço<font color="#990000">*</font></div>
					<div id="formulario-line">
						<input type="text" name="preco" id="preco" class="price preco-mecanica">
					</div>
					<div id="line-preco">
							<input type="checkbox" name="preconegociavel" value="preconegociavel" id="c18">
							<label for="c18"><span></span></label>
							<div id="texto">Preço Negociável?</div>						
					</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Descrição</b> da Peça - <b>Mecânica</b></div>
					<div id="texto-form">Descrição</div>
					<div id="formulario-line">
						<textarea id="descricao" class="descricao-mecanica" name="descricao" rows="5" cols="30"></textarea>
					</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Imagens</b> da Peça - <b>Mecânica</b></div>
					
					<progress value="0" max="100"></progress><span id="porcentagem">0%</span>
					
					<div id="resposta"></div>
					
					<div id="line-fotos">
						<ul class="field-content">
							<li class="select-six">
								
								<? if(isset($plano['num_pics']) and $plano['num_pics'] > 0){ for($foto = 1; $foto <= $plano['num_pics']; $foto++){ ?>
								<div class="upload-file-container">
									<span>
										<input type="file" id="fileupload" name="file_<?=$foto;?>" rel="<?=$foto;?>"/>
									</span>
								</div>
								<? } } ?>
							</li>
						</ul>
					</div>
				</div>
				
				<? if(isset($plano['video']) and $plano['video'] == 1){ ?>
				<div id="linha-planos-2">
					<div id="title"><b>Vídeo</b> da Peça - <b>Mecânica</b></div>
					<div id="texto-form1">Link do Vídeo (youtube)</div>
					<div id="formulario-line">
						<input type="text" name="video" id="video">
					</div>
				</div>
				<? } ?>
				
			</div>
			<!-- Fim Anuncio de mecanica -->
			
			<!-- Anuncio de rodas -->
			<div id="anuncio_rodas">
				<div id="linha-planos-2">
					<div id="title"><b>Dados</b> da Roda</div>
					<div id="form-linha">
						<div id="texto-form">Nome Roda<font color="#990000">*</font></div>
						<div id="formulario-line">
							<input type="text" name="nome" id="placa" class="nome-roda">
						</div>
					</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Preço</b> da Roda</div>
					<div id="texto-form">Preço<font color="#990000">*</font></div>
					<div id="formulario-line">
						<input type="text" name="preco" id="preco" class="price preco-roda">
					</div>
					<div id="line-preco">
						<input type="checkbox" name="preconegociavel" value="preconegociavel" id="c18">
						<label for="c18"><span></span></label>
						<div id="texto">Preço Negociável?</div>						
					</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Descrição</b> da Roda</div>
					<div id="texto-form">Descrição</div>
					<div id="formulario-line">
						<textarea id="descricao" class="descricao-roda" name="descricao" rows="5" cols="30"></textarea>
					</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Imagens</b> da Roda</div>
					
					<progress value="0" max="100"></progress><span id="porcentagem">0%</span>
					
					<div id="resposta"></div>
					
					<div id="line-fotos">
						<ul class="field-content">
							<li class="select-six">
								
								<? if(isset($plano['num_pics']) and $plano['num_pics'] > 0){ for($foto = 1; $foto <= $plano['num_pics']; $foto++){ ?>
								<div class="upload-file-container">
									<span>
										<input type="file" id="fileupload" name="file_<?=$foto;?>" rel="<?=$foto;?>"/>
									</span>
								</div>
								<? } } ?>
							</li>
						</ul>
					</div>
				</div>
				
				<? if(isset($plano['video']) and $plano['video'] == 1){ ?>
				<div id="linha-planos-2">
					<div id="title"><b>Vídeo</b> da Roda</div>
					<div id="texto-form1">Link do Vídeo (youtube)</div>
					<div id="formulario-line">
						<input type="text" name="video" id="video">
					</div>
				</div>
				<? } ?>
				
			</div>
			<!-- Fim Anuncio de Rodas -->
			
			<!-- Restante do anuncio -->
			<div id="anuncio_diverso">
				<div id="linha-planos-2">
					<div id="title"><b>Detalhes</b> do Vendedor</div>
					
					<div id="linha-user">
						<div id="texto-form-user">E-mail<font color="#990000">*</font></div>
						<div id="formulario-line-user">
							<input type="text" name="email" id="nome-user" value="<?=$this->session->userdata('user_email');?>">
						</div>
						
						<div id="texto-form-user">E-mail 2</div>
						<div id="formulario-line-user">
							<input type="text" name="email2" id="nome-user" value="">
						</div>
					</div>
					
					<div id="linha-tel">
						<div id="texto-form-user">Telefone1<font color="#990000">*</font></div>
						<div id="formulario-line-tel">
							<input type="text" name="telefone1" id="nome-tel">
						</div>
						
						<div id="texto-form-user">Telefone2</div>
						<div id="formulario-line-tel">
							<input type="text" name="telefone2" id="nome-tel">
						</div>
					</div>
					
					<div id="linha-regiao">
						<div id="texto-form-user">CEP<font color="#990000">*</font></div>
						<div id="formulario-line-cep">
							<input type="text" name="cep" id="cep-regiao" class="cep">
						</div>
						
						<div id="texto-form-user">Estado<font color="#990000">*</font></div>
						<div id="formulario-line-estado">
							<input type="text" name="uf" id="estado-regiao" class="uf">
						</div>
						
						<div id="texto-form-user">Cidade<font color="#990000">*</font></div>
						<div id="formulario-line-cidade">
							<input type="text" name="cidade" id="cidade-regiao" class="cidade">
						</div>
						
						<div id="texto-form-user">Bairro<font color="#990000">*</font></div>
						<div id="formulario-line-bairro">
							<input type="text" name="bairro" id="bairro-regiao" class="bairro">
						</div>
						
						<div id="texto-form-user">Rua<font color="#990000">*</font></div>
						<div id="formulario-line-rua">
							<input type="text" name="rua" id="rua-regiao" class="rua">
						</div>
					</div>
				</div>
				<div id="title-maps"><b>Mapa</b> de Localização</div>
				<div id="linha-mapa">
					<div id="map2">
					</div>
				</div>
				
				<div id="informacoes-planos">
					<b>TERMOS DE USO</b> <br /><br />
					Ao publicar o seu anúncio aqui, voce concorda que está em conformidade com nossas diretrizes listadas abaixo.<br /><br />
					Reservamo-nos o direito de modificar quaisquer anúncios em violaçao de nossa ordem orientaçoes para evitar abusos e
					manter o conteúdo adequado para nosso público em geral. Isto inclui as pessoas de todas as idades, raças, religioes e
					nacionalidades. Portanto, todos os anúncios que estao em violaçao das nossas diretrizes estao sujeitos a serem retirados
					imediatamente e sem aviso prévio.
				</div>
				
				<div id="seguranca-planos">
					Ao clicar no botao Próximo abaixo, voce <b>concorda</b> com nossos termos e condiçoes. <br /><br />
					Seu endereço IP foi registrado para fins de segurança: <b>189.54.8.227</b>
				</div>
				
				<div id="line-btns">
					<input type="submit" name="proximo" id="proximo" class="proximo2" value="Proximo >>">
					<input type="submit" name="anterior" id="anterior" value="<< Anterior">
					
				</div>
				
				</form>
			</div>
			<!-- Fim restante do anuncio -->
			
			
			
		</div>
	</div>