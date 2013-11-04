<div class="row page-title">
    <h2>
		Parâmetros
		<small>
			<ul>
				<li>Admin</li>
                <li>/</li>
                <li>Parâmetros</li>
            </ul>
        </small>
    </h2>
</div>

<? if($this->session->flashdata('message')){ ?>
<div class="row">
	<div class="col-md-4 col-sm-4">
		<div class="alert alert-block alert-success go-green-bg no-margin">
			<button data-dismiss="alert" class="close" type="button">×</button>
			<h3 class="text-white">Atenção!</h3>
			<?=$this->session->flashdata('message'); ?>
		</div>
	</div>
</div>
<? } ?>

<!-- Row start -->
<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-header">
				<div class="title">
					<span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>
				</div>
			</div>
			
			<div class="widget-body">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<a href="<?=site_url('admin/parametros/adicionar');?>" class="btn btn-primary btn-block">Adicionar Novo Registro</a>
					</div>
				</div>
			</div>
			
			<div class="widget-body">
				<div id="dt_example" class="example_alt_pagination">
					<table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">    
						<thead>
							<tr>
								<th style="width:25%">Nome</th>
								<th style="width:25%" class="hidden-phone">Valor</th>
								<th style="width:20%" class="hidden-phone">Data de Criação</th>
								<th style="width:20%">Status</th>
								<th style="width:10%">Ações</th>
							</tr>
						</thead>
						<tbody>
							
							<? if($dados){ foreach($dados as $parametros){?>
							
							<tr class="gradeX">
								<td><?=$parametros['name'];?></td>
								<td class="hidden-phone"><?=$parametros['value'];?></td>
								<td class="hidden-phone"><?=format_date($parametros['created_in']);?></td>
								<td><?=status_select($parametros['status_id']);?></td>
								<td>
									<a href="<?=site_url('admin/parametros/editar/'.$parametros['id'].'/'.$parametros['idHash']);?>" class="actions-icons">
										<img src="<?=site_url('resources/backend/img/edit-icon.png');?>" alt="editar" class="icons">
									</a>
									<a href="<?=site_url('admin/parametros/remover/'.$parametros['id'].'/'.$parametros['idHash']);?>" class="delete-row" data-original-title="Delete">
										<img src="<?=site_url('resources/backend/img/trash-icon.png');?>" alt="Remover">
									</a>
								</td>
							</tr>
							<? } }else{ ?>
							<tr class="gradeX">
								<td>Sem dados</td>
								<td class="hidden-phone"></td>
								<td class="hidden-phone"></td>
								<td class="hidden-phone"></td>
								<td class="hidden-phone"></td>
							</tr>
							<? } ?>
							
						</tbody>
					</table>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Row end -->