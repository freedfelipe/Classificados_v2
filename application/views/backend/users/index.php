<div class="row page-title">
    <h2>
		Usuários
		<small>
			<ul>
				<li>Admin</li>
                <li>/</li>
                <li>Usuários</li>
            </ul>
        </small>
    </h2>
</div>

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
						<a href="<?=site_url('admin/usuarios/adicionar');?>" class="btn btn-primary btn-block">Adicionar Novo Registro</a>
					</div>
				</div>
			</div>
			
			<div class="widget-body">
				<div id="dt_example" class="example_alt_pagination">
					<table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">    
						<thead>
							<tr>
								<th style="width:25%">Nome do Usuário</th>
								<th style="width:35%">Grupo</th>
								<th style="width:10%" class="hidden-phone">Email</th>
								<th style="width:10%" class="hidden-phone">Data de Criação</th>
								<th style="width:10%">Status</th>
								<th style="width:10%">Ações</th>
							</tr>
						</thead>
						<tbody>
							
							<? if($dados){ foreach($dados as $user){?>
							
							<tr class="gradeX">
								<td><?=$user['name'];?></td>
								<td><?=$user['group_name'];?></td>
								<td class="hidden-phone"><?=$user['email'];?></td>
								<td class="hidden-phone"><?=format_date($user['created_in']);?></td>
								<td><?=status_select($user['status_id']);?></td>
								<td>
									<a href="<?=site_url('admin/usuarios/editar/'.$user['id'].'/'.$user['idHash']);?>" class="actions-icons">
										<img src="<?=site_url('resources/backend/img/edit-icon.png');?>" alt="editar" class="icons">
									</a>
									<a href="<?=site_url('admin/usuarios/remover/'.$user['id'].'/'.$user['idHash']);?>" class="delete-row" data-original-title="Delete">
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