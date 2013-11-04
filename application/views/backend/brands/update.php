<div class="row page-title">
    <h2>
		Editar Marcas
		<small>
			<ul>
				<li>Admin</li>
                <li>/</li>
                <li>Marcas</li>
                <li>/</li>
                <li>Editar</li>
                <li>/</li>
                <li><?=$row['name'];?></li>
            </ul>
        </small>
    </h2>
</div>
<?$this->load->view($dir.'_form');?>