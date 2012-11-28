<ul class="menu">
	<li class="top"><a href="#" class="top_link"><span><?=$this->lang->line('menu_system_title');?></span></a>
		<ul class="sub">
			<li class="menu_separator"><?=$this->lang->line('menu_system_modparams');?></li>
			<li><a href="<?=site_url();?>admin/parametros"><?=$this->lang->line('menu_system_parameters');?></a></li>
			<!--<li><a href="<?=site_url();?>admin/planos"><?=$this->lang->line('menu_system_plans');?></a></li>-->
			<li class="menu_separator"><?=$this->lang->line('menu_system_security');?></li>
			<li><a href="<?=site_url();?>admin/usuarios"><?=$this->lang->line('menu_system_users');?></a></li>
			<li><a href="<?=site_url();?>admin/grupos"><?=$this->lang->line('menu_system_groups');?></a></li>
		</ul>
	</li>
	
	
	<li class="top">
		<a href="<?=site_url();?>admin/planos/" class="top_link"><span>Planos</span></a>
	</li>
	<li class="top">
		<a href="<?=site_url();?>admin/categorias/" class="top_link"><span>Categorias</span></a>
	</li>
	<li class="top">
		<a href="<?=site_url();?>admin/marcas/" class="top_link"><span>Marcas</span></a>
	</li>
	<li class="top">
		<a href="<?=site_url();?>admin/modelos/" class="top_link"><span>Modelos</span></a>
	</li>
	<li class="top">
		<a href="<?=site_url();?>admin/anuncios/" class="top_link"><span>Anúncios</span></a>
	</li>
</ul>
