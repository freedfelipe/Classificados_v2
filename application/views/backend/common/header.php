<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="author" content="<?=$this->parameter_model->get('author');?> ">
	
	<!-- Título da Página -->
	<title><?=$url_title?></title>
	
	<!-- Estilos CSS -->
	<link rel="stylesheet" type="text/css" href="<?=site_url();?>resources/css/jquery-ui/ui-darkness/jquery-ui-1.8.16.custom.css">
	<link rel="stylesheet" type="text/css" href="<?=site_url();?>resources/css/styles.css" />
	
	<!-- Javascripts -->
	<script type="text/javascript" src="<?=site_url();?>resources/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?=site_url();?>resources/js/jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript" src="<?=site_url();?>resources/js/jquery.maskedinput.js"></script>
	<script type="text/javascript" src="<?=site_url();?>resources/js/jquery.price_format.1.3.js"></script>
	<script type="text/javascript" src="<?=site_url();?>resources/js/jquery.numeric.js"></script>
	<script type="text/javascript" src="<?=site_url();?>resources/js/input.core.js"></script>
	<script type="text/javascript" src="<?=site_url();?>resources/js/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript" src="<?=site_url();?>resources/js/functions.js"></script>
	<script type="text/javascript" src="<?=site_url();?>resources/js/jquery.form.js"></script>
	<script type="text/javascript" src="<?=site_url();?>resources/js/jquery.blockUI.js"></script>
	<script type="text/javascript" src="<?=site_url();?>resources/js/alert-javascript.js"></script>
	<script type="text/javascript" src="<?=site_url();?>resources/js/forms.js"></script>
	<script type="text/javascript" src="<?=site_url();?>resources/js/consulta_cep.js"></script>
	<script type="text/javascript" src="<?=site_url();?>resources/js/jquery.base64.min.js"></script>
    <script type="text/javascript" src="<?=site_url();?>resources/js/json2.js"></script>
    <script type="text/javascript" src="<?=site_url();?>resources/js/url.core.js"></script>
	
	<script type="text/javascript">
	tinyMCE.init({
			mode : "textareas"
	});
	</script>

</head>
<body onload="init('<?=site_url();?>');">
	<!-- Confirmação de Exclusão -->
	<div class="modal" id="delete_confirm" title="Mensagem do Sistema" style="display:none;">
		<p>
			<strong>Tem certeza que deseja excluir este registro?</strong><br />
			<div>Esta ação não poderá ser desfeita e o registro não será recuperado, sendo necessário o cadastramento de um novo registro no caso de erros.</div>
		</p>
	</div>
	
	<!-- Mensagens do Sistema -->
	<?php if($this->session->flashdata('message')){?>
	<div id="messages"><?=$this->session->flashdata('message');?></div>
	<?php } ?>
	
	<? if($this->session->userdata('user_logged')){?>
	<div id="top">
		<div class="logo"><?=$this->parameter_model->get('company_name');?> </div>
		<!--<div class="alerts">Você possui <strong>5</strong> ações para aprovar!</div>-->
		<div class="user">
			Olá, <?=$this->session->userdata('user_name')?> | 
			<!--<a href="<?=site_url()?>admin/perfil">meu perfil</a> | -->
			<a href="<?=site_url()?>admin/sair">sair</a>
		</div>
	</div>
	
	<?$this->load->view('backend/common/menu');?>
	
	<? } ?>
	
	<div class="container">
		