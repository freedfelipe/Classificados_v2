<? //include_once(dirname(__FILE__).'/header.php'); ?>
<body style="background: #FFF;">
    <div>
		<div>
			<h1>
				<? if(isset($erro)){ ?>
				<img src="<?=site_url('resources/frontend/images/menu-mecanica.jpg')?>" alt="!" />
				Atenção
				<? } ?>
				<? if(isset($sucesso)){ ?>
				<img src="<?=site_url('resources/frontend/images/menu-mecanica.jpg')?>" alt="!" />
				Sucesso!
				<? } ?>
			</h1>
			
			<p>
                <? if(isset($erro)){ foreach($erro AS $error){ echo $error.'.<br/><br/>'; } } ?>
				<? if(isset($sucesso)){ echo $sucesso.'.<br/><br/>'; } ?>
			</p>
		</div>
	</div>
</body>
</html>