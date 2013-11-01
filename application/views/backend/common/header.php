<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="lt-ie9 lt-ie8 lt-ie7" lang="en">
<![endif]-->

<!--[if IE 7]>
<html class="lt-ie9 lt-ie8" lang="en">
<![endif]-->

<!--[if IE 8]>
<html class="lt-ie9" lang="en">
<![endif]-->

<!--[if gt IE 8]>
<!-->
<html lang="en">
<!--
<![endif]-->

<head>
	<meta charset="utf-8">
    <title>Administração - Meu Carro Turbo</title>
    <meta name="author" content="<?=$this->parameter_model->get('author');?>">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    
    
    <script src="<?=site_url('resources/backend/js/html5-trunk.js');?>"></script>
	<link href="<?=site_url('resources/backend/icomoon/style.css');?>" rel="stylesheet">
    <!--[if lte IE 7]>
    <script src="<?=site_url('resources/backend/css/icomoon-font/lte-ie7.js');?>"></script>
    <![endif]-->

    <!-- bootstrap css -->
    <link href="<?=site_url('resources/backend/css/bootstrap.css');?>" rel="stylesheet">

    <!-- custom css -->
    <link href="<?=site_url('resources/backend/css/main.css');?>" rel="stylesheet">

</head>
<body>
	<!-- Header start -->
    <header>

	<!-- Logo start -->
	<div class="logo">
		W<span>ad</span>
	</div>
	<!-- Logo end -->

	<? $this->load->view('backend/common/menu_topo');?>
	
    </header>
	
	<!-- Main Container start -->
    <div class="main-container">
		
		<? $this->load->view('backend/common/menu_container');?>
		
		<!-- Dashboard wrapper start -->
		<div class="dashboard-wrapper">