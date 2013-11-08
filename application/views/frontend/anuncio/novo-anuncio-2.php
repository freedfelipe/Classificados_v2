<!-- Divisao -->
	<div id="faixa-banner" class="clearfix">
		<div id="margin">
			<div class="title-anuncio">ADICIONAR NOVO AN�NCIO</div>
			<div class="navegacao"><a href="index.html">Home</a> >> Novo An�ncio</div>
			
			<a href="novo-anuncio.html"><div class="aba-simple">1o Passo</div></a>
			<a href="novo-anuncio2.html"><div class="aba-hover">2o Passo</div></a>
			<a href="#"><div class="aba-simple">3o Passo</div></a>
		</div>
		
	</div>	
	<!-- Fim destaque - Banner -->
	
	
	
	<!-- Inicio do conteudo anuncio -->
	<div id="content-anuncio" class="clearfix">
		<div id="margin">
			
			<div id="informacoes-planos">
				Por favor, preencha os campos abaixo para postar seu an�ncio.
				Os campos obrigat�rios sao indicados por um <font color="#990000">*</font>.
				Voce ter� a oportunidade de rever o seu an�ncio antes de ser publicado.
			</div>
			<form name="planos" action="#" method="POST">
			
			<div id="linha-planos-2">
				
				<div id="texto-form">Categoria<font color="#990000">*</font></div>
				<div id="formulario-line">
					<div id="radio-categorias">
						<div id="linha">
							<input type="radio" name="categoria" value="basico" id="r1">
							<label for="r1">Aspirados<span></span></label>
						</div>
						<div id="linha">
							<input type="radio" name="categoria" value="basico" id="r2">
							<label for="r2">Rebaixados<span></span></label>
						</div>
						<div id="linha">
							<input type="radio" name="categoria" value="basico" id="r3">
							<label for="r3">Stock<span></span></label>
						</div>
						<div id="linha">
							<input type="radio" name="categoria" value="basico" id="r4">
							<label for="r4">Turbo<span></span></label>
						</div>
						<div id="linha">
							<input type="radio" name="categoria" value="basico" id="r5">
							<label for="r5">Pe�as Acess�rios<span></span></label>
						</div>
						<div id="linha">
							<input type="radio" name="categoria" value="basico" id="r6">
							<label for="r6">Pe�as Mec�nica<span></span></label>
						</div>
						<div id="linha">
							<input type="radio" name="categoria" value="basico" id="r7">
							<label for="r7">Rodas<span></span></label>
						</div>
					</div>
					
				</div>
				<div id="texto-form">Voce escolheu: </div>
				<div id="voce-escolheu">
					<div class="borda-escolheu">
						<div id="aspirados">Aspirados</div>
						<div id="rebaixados">Rebaixados</div>
						<div id="stock">Stock</div>
						<div id="turbo">Turbo</div>
						<div id="acessorios"><div class="pecas">Pe�as</div> Acess�rios</div>
						<div id="mecanica"><div class="pecas">Pe�as</div> Mec�nica</div>
						<div id="rodas">Rodas</div>
					</div>
					
					
				</div>
			</div>
			
			<!-- Anuncio de carros -->
			<div id="anuncio_carro">
				<div id="linha-planos-2">
					<div id="title"><b>Dados</b> do Ve�culo</div>
					<div id="form-linha">
						<div id="texto-form">Fabricante<font color="#990000">*</font></div>
						<div id="formulario-line">
							<select name="form-fabricante" id="form-categoria" >
								<option value="1">item 1</option>
								<option value="2">item 2</option>
								<option value="3">item 3</option>
								<option value="4">item 4</option>
								<option value="0">All</option>
							</select>
						</div>
						<div id="texto-form">Modelo<font color="#990000">*</font></div>
						<div id="formulario-line">
							<select name="form-modelo" id="form-categoria" >
								<option value="1">item 1</option>
								<option value="2">item 2</option>
								<option value="3">item 3</option>
								<option value="4">item 4</option>
								<option value="0">All</option>
							</select>
						</div>
					</div>
					<div id="form-linha">
						<div id="texto-form">Ano<font color="#990000">*</font></div>
						<div id="formulario-line">
							<select name="form-ano" id="form-categoria" >
								<option value="1">item 1</option>
								<option value="2">item 2</option>
								<option value="3">item 3</option>
								<option value="4">item 4</option>
								<option value="0">All</option>
							</select>
						</div>
						<div id="texto-form">Placa</div>
						<div id="formulario-line">
							<input type="text" name="Placa" id="placa">
						</div>
					</div>
					
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Opcionais</b> do Ve�culo</div>
					<div id="opcionais">
						<div id="linha">
							<input type="checkbox" name="vidroseletricos" value="vidroseletricos" id="c1">
							<label for="c1"><span></span></label>
							<div id="texto">Vidros El�tricos</div>						
						</div>
						<div id="linha">
							<input type="checkbox" name="travaseletricas" value="travaseletricas" id="c2">
							<label for="c2"><span></span></label>
							<div id="texto">Travas El�tricas</div>						
						</div>
						<div id="linha">
							<input type="checkbox" name="direcaohidraulica" value="direcaohidraulica" id="c3">
							<label for="c3"><span></span></label>
							<div id="texto">Dire�ao Hidr�ulica</div>						
						</div>
						<div id="linha">
							<input type="checkbox" name="abs" value="abs" id="c4">
							<label for="c4"><span></span></label>
							<div id="texto">ABS</div>						
						</div>
											
					</div>
					
					<div id="opcionais">
						<div id="linha">
							<input type="checkbox" name="airbag" value="airbag" id="c5">
							<label for="c5"><span></span></label>
							<div id="texto">Air-Bag</div>						
						</div>
						<div id="linha">
							<input type="checkbox" name="alarme" value="alarme" id="c6">
							<label for="c6"><span></span></label>
							<div id="texto">Alarme</div>						
						</div>
						<div id="linha">
							<input type="checkbox" name="arcondicionado" value="arcondicionado" id="c7">
							<label for="c7"><span></span></label>
							<div id="texto">Ar Condicionado</div>						
						</div>
						<div id="linha">
							<input type="checkbox" name="cdplayer" value="cdplayer" id="c8">
							<label for="c8"><span></span></label>
							<div id="texto">CD-Player</div>						
						</div>
											
					</div>
					
					<div id="opcionais">
						<div id="linha">
							<input type="checkbox" name="arquente" value="arquente" id="c9">
							<label for="c9"><span></span></label>
							<div id="texto">Ar Quente</div>						
						</div>
						<div id="linha">
							<input type="checkbox" name="bancosemcouro" value="bancosemcouro" id="c10">
							<label for="c10"><span></span></label>
							<div id="texto">Bancos em Couro</div>						
						</div>
						<div id="linha">
							<input type="checkbox" name="computadordebordo" value="computadordebordo" id="c11">
							<label for="c11"><span></span></label>
							<div id="texto">Computador de Bordo</div>						
						</div>
						<div id="linha">
							<input type="checkbox" name="retrovisoreseletricos" value="retrovisoreseletricos" id="c12">
							<label for="c12"><span></span></label>
							<div id="texto">Retrovisores El�tricos</div>						
						</div>
											
					</div>
					<div id="opcionais1">
						<div id="linha">
							<input type="checkbox" name="sensordechuva" value="sensordechuva" id="c13">
							<label for="c13"><span></span></label>
							<div id="texto">Sensor de Chuva</div>						
						</div>
						<div id="linha">
							<input type="checkbox" name="tetosolar" value="tetosolar" id="c14">
							<label for="c14"><span></span></label>
							<div id="texto">Teto Solar</div>						
						</div>
						<div id="linha">
							<input type="checkbox" name="tracao4x4" value="tracao4x4" id="c15">
							<label for="c15"><span></span></label>
							<div id="texto">Tra�ao 4x4</div>						
						</div>
						<div id="linha">
							<input type="checkbox" name="farolxenonio" value="farolxenonio" id="c16">
							<label for="c16"><span></span></label>
							<div id="texto">Farol Xen�nio</div>						
						</div>
											
					</div>
					
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Descri�ao</b> do Ve�culo</div>
					<div id="texto-form">Descri�ao</div>
						<div id="formulario-line">
							<textarea id="descricao" name="descricao" rows="5" cols="30"></textarea>
						</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Pre�o</b> do Ve�culo</div>
					<div id="texto-form">Pre�o<font color="#990000">*</font></div>
					<div id="formulario-line">
						<input type="text" name="preco" id="preco">
					</div>
					<div id="line-preco">
							<input type="checkbox" name="preconegociavel" value="preconegociavel" id="c17">
							<label for="c17"><span></span></label>
							<div id="texto">Pre�o Negoci�vel?</div>						
					</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Imagens</b> do Ve�culo</div>
					
					<div id="line-fotos">
						
					
					<ul class="field-content">
						<li class="select-six">
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
									</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
									
						</li>
					</ul>
					</div>
					
					
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>V�deo</b> do Ve�culo</div>
					<div id="texto-form1">Link do V�deo (youtube)</div>
					<div id="formulario-line">
						<input type="text" name="video" id="video">
					</div>
				</div>
			</div>
			<!-- Fim Anuncio de carros -->
			
			<!-- Anuncio de acessorios -->
			<div id="anuncio_acessorios">
				<div id="linha-planos-2">
					<div id="title"><b>Dados</b> da Pe�a - <b>Acess�rio</b></div>
					<div id="form-linha">
						<div id="texto-form">Nome Pe�a<font color="#990000">*</font></div>
						<div id="formulario-line">
							<input type="text" name="Placa" id="placa">
						</div>
						<div id="texto-form">Modelo<font color="#990000">*</font></div>
						<div id="formulario-line">
							<input type="text" name="Placa" id="placa">
						</div>
					</div>
					<div id="form-linha">
						<div id="texto-form">Ano<font color="#990000">*</font></div>
						<div id="formulario-line">
							<input type="text" name="Placa" id="placa">
						</div>
					</div>
					
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Pre�o</b> da Pe�a - <b>Acess�rio</b></div>
					<div id="texto-form">Pre�o<font color="#990000">*</font></div>
					<div id="formulario-line">
						<input type="text" name="preco" id="preco">
					</div>
					<div id="line-preco">
							<input type="checkbox" name="preconegociavel" value="preconegociavel" id="c18">
							<label for="c18"><span></span></label>
							<div id="texto">Pre�o Negoci�vel?</div>						
					</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Especifica�oes</b> da Pe�a - <b>Acess�rio</b></div>
					<div id="texto-form">Especifica�oes</div>
						<div id="formulario-line">
							<textarea id="especificacao-acessorios" name="especificacao-acessorios" rows="5" cols="30"></textarea>
						</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Caracteristicas</b> da Pe�a - <b>Acess�rio</b></div>
					<div id="texto-form">Caracteristicas</div>
						<div id="formulario-line">
							<textarea id="caracteristicas-acessorios" name="caracteristicas-acessorios" rows="5" cols="30"></textarea>
						</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Imagens</b> da Pe�a - <b>Acess�rio</b></div>
					
					<div id="line-fotos">
						
					
					<ul class="field-content">
						<li class="select-six">
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
									</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
									
						</li>
					</ul>
					</div>
					
					
				</div>
				
				
			</div>
			<!-- Fim Anuncio de acessorios -->
			
			
			<!-- Anuncio de necabica -->
			<div id="anuncio_mecanica">
				<div id="linha-planos-2">
					<div id="title"><b>Dados</b> da Pe�a - <b>Mec�nica</b></div>
					<div id="form-linha">
						<div id="texto-form">Nome Pe�a<font color="#990000">*</font></div>
						<div id="formulario-line">
							<input type="text" name="nome-mecanica" id="placa">
						</div>
						<div id="texto-form">Modelo<font color="#990000">*</font></div>
						<div id="formulario-line">
							<input type="text" name="modelo-mecanica" id="placa">
						</div>
					</div>
					<div id="form-linha">
						<div id="texto-form">Ano<font color="#990000">*</font></div>
						<div id="formulario-line">
							<input type="text" name="Ano-mecanica" id="placa">
						</div>
					</div>
					
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Pre�o</b> da Pe�a - <b>Mec�nica</b></div>
					<div id="texto-form">Pre�o<font color="#990000">*</font></div>
					<div id="formulario-line">
						<input type="text" name="preco" id="preco">
					</div>
					<div id="line-preco">
							<input type="checkbox" name="preconegociavel" value="preconegociavel" id="c18">
							<label for="c18"><span></span></label>
							<div id="texto">Pre�o Negoci�vel?</div>						
					</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Especifica�oes</b> da Pe�a - <b>Mec�nica</b></div>
					<div id="texto-form">Especifica�oes</div>
						<div id="formulario-line">
							<textarea id="especificacao-acessorios" name="especificacao-acessorios" rows="5" cols="30"></textarea>
						</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Caracteristicas</b> da Pe�a - <b>Mec�nica</b></div>
					<div id="texto-form">Caracteristicas</div>
						<div id="formulario-line">
							<textarea id="caracteristicas-acessorios" name="caracteristicas-acessorios" rows="5" cols="30"></textarea>
						</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Imagens</b> da Pe�a - <b>Mec�nica</b></div>
					
					<div id="line-fotos">
						
					
					<ul class="field-content">
						<li class="select-six">
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
									</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
									
						</li>
					</ul>
					</div>
					
					
				</div>
				
				
			</div>
			<!-- Fim Anuncio de mecanica -->
			
			<!-- Anuncio de rodas -->
			<div id="anuncio_rodas">
				<div id="linha-planos-2">
					<div id="title"><b>Dados</b> da Roda</div>
					<div id="form-linha">
						<div id="texto-form">Nome Roda<font color="#990000">*</font></div>
						<div id="formulario-line">
							<input type="text" name="nome-mecanica" id="placa">
						</div>
						<div id="texto-form">Modelo<font color="#990000">*</font></div>
						<div id="formulario-line">
							<input type="text" name="modelo-mecanica" id="placa">
						</div>
					</div>
					<div id="form-linha">
						<div id="texto-form">Ano<font color="#990000">*</font></div>
						<div id="formulario-line">
							<input type="text" name="Ano-mecanica" id="placa">
						</div>
					</div>
					
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Pre�o</b> da Roda</div>
					<div id="texto-form">Pre�o<font color="#990000">*</font></div>
					<div id="formulario-line">
						<input type="text" name="preco" id="preco">
					</div>
					<div id="line-preco">
							<input type="checkbox" name="preconegociavel" value="preconegociavel" id="c18">
							<label for="c18"><span></span></label>
							<div id="texto">Pre�o Negoci�vel?</div>						
					</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Especifica�oes</b> da Roda</div>
					<div id="texto-form">Especifica�oes</div>
						<div id="formulario-line">
							<textarea id="especificacao-acessorios" name="especificacao-acessorios" rows="5" cols="30"></textarea>
						</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Caracteristicas</b> da Roda</div>
					<div id="texto-form">Caracteristicas</div>
						<div id="formulario-line">
							<textarea id="caracteristicas-acessorios" name="caracteristicas-acessorios" rows="5" cols="30"></textarea>
						</div>
				</div>
				
				<div id="linha-planos-2">
					<div id="title"><b>Imagens</b> da Roda</div>
					
					<div id="line-fotos">
						
					
					<ul class="field-content">
						<li class="select-six">
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
									</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
							<div class="upload-file-container">
								<span>
									<input type="file" name="files[]" />
								</span>
							</div>
									
						</li>
					</ul>
					</div>
					
					
				</div>
				
				
			</div>
			<!-- Fim Anuncio de Rodas -->
			
			<!-- Restante do anuncio -->
			<div id="anuncio_diverso">
				<div id="linha-planos-2">
					<div id="title"><b>Detalhes</b> do Vendedor</div>
					
					<div id="linha-user">
					<div id="texto-form-user">Nome<font color="#990000">*</font></div>
					<div id="formulario-line-user">
						<input type="text" name="nome-user" id="nome-user">
					</div>
					
					<div id="texto-form-user">E-mail<font color="#990000">*</font></div>
					<div id="formulario-line-user">
						<input type="text" name="nome-email" id="nome-user">
					</div>
					
					<div id="texto-form-user">E-mail 2</div>
					<div id="formulario-line-user">
						<input type="text" name="nome-email2" id="nome-user">
					</div>
					</div>
					
					<div id="linha-tel">
					<div id="texto-form-user">Telefone1<font color="#990000">*</font></div>
					<div id="formulario-line-tel">
						<input type="text" name="nome-tel1" id="nome-tel">
					</div>
					
					<div id="texto-form-user">Telefone2</div>
					<div id="formulario-line-tel">
						<input type="text" name="nome-tel2" id="nome-tel">
					</div>
					
					<div id="texto-form-user">Telefone3</div>
					<div id="formulario-line-tel">
						<input type="text" name="nome-tel3" id="nome-tel">
					</div>
					</div>
					
					<div id="linha-regiao">
					<div id="texto-form-user">Estado<font color="#990000">*</font></div>
					<div id="formulario-line-regiao">
						<input type="text" name="nome-tel1" id="nome-regiao">
					</div>
					
					<div id="texto-form-user">Cidade<font color="#990000">*</font></div>
					<div id="formulario-line-regiao">
						<input type="text" name="nome-tel2" id="nome-regiao">
					</div>
					
					<div id="texto-form-user">CEP<font color="#990000">*</font></div>
					<div id="formulario-line-regiao">
						<input type="text" name="nome-tel3" id="nome-regiao">
					</div>
					</div>
					
					
				</div>
				
				<div id="informacoes-planos">
					<b>TERMOS DE USO</b> <br /><br />
					Ao publicar o seu an�ncio aqui, voce concorda que est� em conformidade com nossas diretrizes listadas abaixo.<br /><br />
	
					Reservamo-nos o direito de modificar quaisquer an�ncios em viola�ao de nossa ordem orienta�oes para evitar abusos e
					manter o conte�do adequado para nosso p�blico em geral. Isto inclui as pessoas de todas as idades, ra�as, religioes e
					nacionalidades. Portanto, todos os an�ncios que estao em viola�ao das nossas diretrizes estao sujeitos a serem retirados
					imediatamente e sem aviso pr�vio.
				</div>
				
				<div id="seguranca-planos">
					
				
				Ao clicar no botao Pr�ximo abaixo, voce <b>concorda</b> com nossos termos e condi�oes. <br /><br />
				Seu endere�o IP foi registrado para fins de seguran�a: <b>189.54.8.227</b>
				</div>
				
	
				<div id="line-btns">
					<input type="submit" name="proximo" id="proximo" value="Proximo >>">
					<input type="submit" name="anterior" id="anterior" value="<< Anterior">
					
				</div>
				
				</form>
			</div>
			<!-- Fim restante do anuncio -->
			
			
			
		</div>
	</div>