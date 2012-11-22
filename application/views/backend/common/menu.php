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
		<a href="javascript:" class="top_link"><span>Administração</span></a>
		<ul class="sub">
			<li><a href="<?=site_url();?>bancos/">Bancos</a></li>
			<li><a href="<?=site_url();?>grupos/">Grupos</a></li>
			<li><a href="<?=site_url();?>distribuidores/">Distribuidores</a></li>
			
		</ul>
		
	</li>
</ul>
