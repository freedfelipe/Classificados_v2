<? //include_once(dirname(__FILE__).'/header.php'); ?>
<body style="background: #FFF;">
    <div>
		<div>
			<h1>
				<img src="<?=site_url('resources/frontend/images/menu-mecanica.jpg')?>" alt="!" />
				Atenção
			</h1>
			
			<p>
                <? if(isset($erro)){ foreach($erro AS $error){ echo $error.'.<br/><br/>'; } } ?>
			</p>
		</div>
	</div>
</body>
</html>