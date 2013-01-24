<div class="wrapperContent">
	<div class="content">
		<h1 class="title_page"><?=$scr_title?></h1>

		<?//$this->load->view($dir.'../common/search');?>

		<?=anchor($url.'adicionar/', 'Adicionar Novo', 'class="btnDefault button fRight btnAdd mTop10"', 'rel="delete"');?>

		<h3 class="mTop20">Exibindo <?=$dados['count']?> registro(s) de <?=$total_rows['count']?> Encontrado(s)</h3>

		<?php if($dados['count']){ ?>

			<div class="resultsContent mTop20">
				
				<table class="results" width="100%">
					<thead align="left">
						<tr>
							<th nowrap>Nome</th>
							<th class="borderTable" nowrap>Data de Criação</th>
							<th class="borderTable" nowrap>Status</th>
							<th class="borderTable" nowrap class="actions" width="150">Ações</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($dados['rows'] as $row){?>
							<tr>
								<td nowrap><?=$row['name']?></td>
								<td nowrap><?=format_date($row['created_in'])?></td>
								<td nowrap><?=status($row['status_id'])?></td>
								<td nowrap>
									<?=anchor($url.'editar/'.$row['id'].'/'.$row['idHash'], $this->lang->line('button_update'), 'class="btnDefaultSmall button"');?>
									<?=anchor($url.'remover/'.$row['id'].'/'.$row['idHash'], $this->lang->line('button_delete'), 'class="btnDefaultGraySmall button" rel="delete"');?>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>

			<?php echo $pag; ?>
			<br />
			
		<?php } else { ?>
			<div class="message">
				<strong>Nenhum registro encontrado!</strong>
				<p>Desculpe, sua consulta não retornou nenhum resultado! Tente recarregar a página e caso este erro ocorra novamente, entre em contato com o suporte técnico.</p>
			</div>
		<?php } ?>

		
	</div>
</div>