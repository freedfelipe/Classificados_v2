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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="generator" content="Komodo">
	<meta name="author" content="<?=$this->parameter_model->get('author');?>">
    <script src="<?=site_url('resources/backend/js/html5-trunk.js');?>"></script>
	<script src="<?=site_url('resources/backend/js/jquery.min.js');?>"></script>
    <script src="<?=site_url('resources/backend/js/bootstrap.js');?>"></script>
    <script src="<?=site_url('resources/backend/js/jquery-ui-1.8.23.custom.min.js');?>"></script>
	<script src="<?=site_url('resources/backend/js/jquery.easy-pie-chart.js');?>"></script>
	<script src="<?=site_url('resources/backend/js/custom.js');?>"></script>
    <link href="<?=site_url('resources/backend/icomoon/style.css');?>" rel="stylesheet">
    <!--[if lte IE 7]>
    <script src="<?=site_url('resources/backend/css/icomoon-font/lte-ie7.js');?>"></script>
    <![endif]-->
    <link href="<?=site_url('resources/backend/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?=site_url('resources/backend/css/main.css');?>" rel="stylesheet">
	
  </head>

	<body>
		<div class="main-container">
			<div class="row">
				<form action="<?=site_url('admin/login');?>" class="login-wrapper" method="post">
					<div class="header">
						<div class="row">
							<div class="col-md-12">
								<h3>Login<img src="<?=site_url('resources/backend/img/logo.png');?>" alt="Logo" class="pull-right"></h3>
								<p>Preencha o formulário abaixo para efetuar login.</p>
							</div>
						</div>
					</div>
					<div class="content">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<input class="input col-md-12 col-sm-12 email" id="" name="email" placeholder="seu@email.com" required="required" type="email" value="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<input class="input col-md-12 col-sm-12 password" id="" name="password" placeholder="********" required="required" type="password">
						</div>
					</div>
					</div>
					<div class="actions">
						<input type="submit" class="btn btn-danger" value="Login" />
						<? if(isset($error)){?>
						<span class="label label-danger">
							<?=$error;?>
						</span>
						<? } ?>
						<div class="clearfix"></div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>