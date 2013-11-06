<!-- Optional Dropdown start -->
<div id="optional-dropdown">
	<ul>
		<li>
			<a href="<?=site_url('admin/painel');?>">
				<span class="fs1" aria-hidden="true" data-icon="&#xe000;" ></span>
			</a>
		</li>
		<li class="hidden-lg hidden-md">
			<a href="javascript:">
				<span class="fs1" aria-hidden="true" data-icon="&#xe0a2;" ></span>
				<span class="count-label"></span>
			</a>
			<ul>
				<!--<li>
					<a href="<?=site_url('admin/painel');?>">Painel</a>
				</li>-->
				<li>
					<a href="<?=site_url('admin/parametros');?>">Parametros do Sistema</a>
				</li>
				<li>
					<a href="<?=site_url('admin/planos');?>">Planos</a>
				</li>
				<li>
					<a href="<?=site_url('admin/usuarios');?>">Usuários</a>
				</li>
				<li>
					<a href="<?=site_url('admin/grupos');?>">Grupos</a>
				</li>
				<li>
					<a href="<?=site_url('admin/categorias');?>">Categorias</a>
				</li>
				<li>
					<a href="<?=site_url('admin/marcas');?>">Marcas</a>
				</li>
				<li>
					<a href="<?=site_url('admin/modelos');?>">Modelos</a>
				</li>
				<li>
					<a href="<?=site_url('admin/anuncios');?>">Anuncios</a>
				</li>
				<li>
					<a href="<?=site_url('admin/publicidade');?>">Publicidade</a>
				</li>
				<li>
					<a href="<?=site_url('admin/publicidade-categorias');?>">Categorias de Publicidade</a>
				</li>
				<li>
					<a href="<?=site_url('admin/parceiros');?>">Parceiros</a>
				</li>
				<li>
					<a href="<?=site_url('admin/opcionais');?>">Opcionais</a>
				</li>
				<li>
					<a href="<?=site_url('admin/sair');?>">Sair</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="<?=site_url('admin/notificacoes');?>">
				<span class="fs1" aria-hidden="true" data-icon="&#xe040;" ></span>
				<span class="count-label"></span>
			</a>
		</li>
	</ul>
</div>
<!-- Optional Dropdown end -->

<!-- Mini navigation start -->
<div id="mini-nav" class="hidden-phone">
	<ul>
		<li>
			<a href="javascript:">
				<span class="text-label"><?=$this->session->userdata('user_name');?></span><span class="fs1" aria-hidden="true" data-icon="&#xe088;"></span>
			</a>
			<ul class="user-summary">
				<li>
					<div class="summary">
						<div class="user-pic">
							<img src="<?=site_url('resources/backend/img/avatar-1.png');?>" alt="Admin"/>
						</div>
						<div class="basic-details">
							<h4 class="no-margin"><?=$this->session->userdata('user_name');?></h4>
						</div>
						<div class="clearfix"></div>
					</div>
				</li>
				<li>
					<button class="btn btn-xs btn-danger pull-right" onclick="location.href='<?=site_url('admin/sair');?>'">Logout</button>
					<span class="clearfix"></span>
				</li>
			</ul>
		</li>
	</ul>
</div>
<!-- Mini navigation end -->