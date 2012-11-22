<h1><?=$scr_title?></h1>

<h3>Exibindo <?=$dados['count']?> registro(s) de <?=count($dados['rows'])?> Encontrado(s)</h3>

<?php if($dados['count']){ ?>
	<table cellpadding="0" cellspacing="0" width="100%" border="0">
		<thead>
			<th nowrap>#</th>
			<th nowrap>Nome</th>
			<th nowrap>Data de Criação</th>
			<th nowrap>Status</th>
			<th nowrap class="actions">Ações</th>
		</thead>
	
		<tbody>
			<?php foreach($dados['rows'] as $row){?>
				<tr>
					<td nowrap><?=$row->id?></td>
					<td nowrap><?=$row->name?></td>
					<td nowrap><?=format_date($row->insertDate)?></td>
					<td nowrap><?=status($row->active)?></td>
					<td nowrap>
						<?=anchor($url.'editar/'.$row->id.'/'.$row->idHash, $this->lang->line('button_update'), 'class="button"');?>
						<?=anchor($url.'remover/'.$row->id, $this->lang->line('button_delete'), 'class="button" rel="delete"');?>
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
