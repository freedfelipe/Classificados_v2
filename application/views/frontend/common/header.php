<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">

<!--[if IE 7]>                  <html class="ie7 no-js" lang="pt">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="pt">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="pt">  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title><?=$this->parameter_model->get('system_title').' | '.$url_title?></title>
	
	<meta name="description" content="Meu Carro Turbo - O seu classificados turbinado!" />
	<meta name="keywords" content="Carro Turbo, Aspirado, Rebaixado, Classificados" />
	<meta name="author" content="<?=$this->parameter_model->get('author');?> ">
	
	<!-- Smartphone -->
	<!--<link href="<?=site_url('resources/frontend/css/phone.css');?>" rel="stylesheet" type="text/css" media="only screen and (max-width:320px)" class="cssfx" />-->
	<!-- Phone Wide -->
	<!--<link href="<?=site_url('resources/frontend/css/phone-landscape.css');?>" rel="stylesheet" type="text/css" media="only screen and (min-width:321px) and (max-width:480px)" class="cssfx" />-->
	<!-- Tablet -->
	<!--<link href="<?=site_url('resources/frontend/css/tablet.css');?>" rel="stylesheet" type="text/css" media="only screen and (min-width:481px) and (max-width:768px)" class="cssfx" />-->
	<!--[if !lte IE 6]><!-->
		<link rel="stylesheet" href="<?=site_url('resources/frontend/css/style.css');?>" media="screen" />
		<link rel="stylesheet" href="<?=site_url('resources/frontend/css/fancybox.min.css');?>" media="screen" />
		<link rel="stylesheet" href="<?=site_url('resources/frontend/css/mediaelementplayer.min.css');?>" media="screen" />
	<!--<![endif]-->

	<!--[if lte IE 6]>
		<link rel="stylesheet" href="http://universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Banner -->
	<link rel="stylesheet" type="text/css" href="<?=site_url('resources/frontend/css/destaque.css');?>">
	
	<script type="text/javascript" src="<?=site_url('resources/backend/js/jquery.min.js');?>"></script>
	<!-- Masked Input -->
	<script type="text/javascript" src="<?=site_url('resources/backend/js/masked.input.js');?>"></script>
	<!-- Numeric Input -->
	<script type="text/javascript" src="<?=site_url('resources/backend/js/jquery.numeric.js');?>"></script>
	<!-- Price Format Input -->
	<script type="text/javascript" src="<?=site_url('resources/backend/js/jquery.price_format.min.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('resources/frontend/js/jquery.form.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('resources/frontend/js/jquery.fancybox.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('resources/frontend/js/functions.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('resources/frontend/js/script.js');?>"></script>
</head>
<body>
	<header>
		<div id="margin">
			<div id="logo"><a href="<?=site_url();?>"><img src="<?=site_url('resources/frontend/images/logo.png');?>" width="100%" /></a></div>
			<div id="menu_topo">
				<a href="<?=site_url();?>">HOME</a>  |
				<a href="<?=site_url('quem-somos');?>">QUEM SOMOS</a>  |
				<a href="<?=site_url('publicidade');?>">PUBLICIDADE</a>  |
				<a href="<?=site_url('planos');?>">PLANOS</a>  |
				<a href="<?=site_url('parceiros');?>">PARCEIROS</a>  |
				<a href="<?=site_url('contato');?>">CONTATO</a>
			</div>
			<div class="login">
				<? if($this->session->userdata('logado_front') == false){ ?>
				<a href="<?=site_url('registrar');?>"><div class="user-novo">Usuário Novo</div></a>
				<? } ?>
				<div class="info-user">
					<div id="right-div">
						<? if($this->session->userdata('logado_front') == false){ ?>
						<a href="<?=site_url('entrar');?>"><div id="login-btn">Login</div></a>
						<? }else{ ?>
						<a href="<?=site_url('sair');?>"><div id="logout-btn">Logout</div></a>
						<? } ?>
					</div>
					
					<? if($this->session->userdata('logado_front')){?>
					<div id="left-div">
						<a href="javascript:"><div class="logado"><?=$this->session->userdata('user_name');?></div></a>
						<a href="#"><div class="my-anuncios">Meus Anúncios</div></a>
						<a href="#"><div class="my-conta">Minha conta</div></a>
					</div>
					<? } ?>
				</div>
			</div>
		</div>
	</header>
	
	<?$this->load->view('frontend/common/menu');?>
	
	<? if(showBanner($this->uri->segment(1))){?>
	<?$this->load->view('frontend/common/banner');?>
	<? } ?>
	
	<? if(showLogin($this->uri->segment(1))){?>
	<!-- Inicio do conteudo -->
	<div id="content" class="clearfix">
	<? } ?>
		
		<? if(isset($alert) or $this->session->flashdata('message')){?>
		<div>
			<? if(isset($alert['error'])){ echo $alert['error']; }?>
			<? if(isset($alert['sucess'])){ echo $alert['sucess']; }?>
			<?=$this->session->flashdata('message'); ?>
		</div>
		<? } ?>