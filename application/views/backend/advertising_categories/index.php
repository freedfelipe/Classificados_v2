<h1><?=$scr_title?></h1>

<?$this->load->view($dir.'../common/search');?>

<h3>Exibindo <?=count($dados['rows'])?> registro(s) de <?=$dados['count']?> Encontrado(s)</h3>

<?php if($dados['count']){ ?>
	<table cellpadding="0" cellspacing="0" width="100%" border="0">
		<thead>
			<th nowrap>Nome do Grupo</th>
			<th nowrap>Data de Criação</th>
			<th nowrap>Status</th>
			<th nowrap class="actions">Ações</th>
		</thead>
	
		<tbody>
			<?php foreach($dados['rows'] as $row){?>
				<tr>
					<td nowrap><?=$row['name']?></td>
					<td nowrap><?=format_date($row['created_in'])?></td>
					<td nowrap><?=status($row['status_id'])?></td>
					<td nowrap>
						<?=anchor($url.'editar/'.$row['id'].'/'.$row['idHash'], $this->lang->line('button_update'), 'class="button"');?>
						<?=anchor($url.'remover/'.$row['id'], $this->lang->line('button_delete'), 'class="button" rel="delete"');?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

	<?php echo $pag; ?>
	<br />
	
<?php } else { ?>
	<div class="message">
		<strong>Nenhum registro encontrado!</strong>
		<p>Desculpe, sua consulta não retornou nenhum resultado! Tente recarregar a página e caso este erro ocorra novamente, entre em contato com o suporte técnico.</p>
	</div>
<?php } ?>

<?=anchor($url.'adicionar/', 'Adicionar Novo', 'class="button"', 'rel="delete"');?>
