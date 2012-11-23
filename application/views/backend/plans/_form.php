<form class="edt-form" method="post" accept-charset="utf-8">
	<fieldset>
		<legend>Dados do Plano</legend>
		
		<div class="field_row <?php if(form_error('name')){print('validation_error');}?>">
			<div class="field_label">Nome:</div>
			<div><input type="text" name="name" id="name" class="form_input" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['name']."'");}else{?> value = "<?=set_value('name');?>"<? } ?>/></div>
		</div>
		
		<div class="field_row <?php if(form_error('description')){print('validation_error');}?>">
			<div class="field_label">Descrição:</div>
			<div>
				<textarea name="description"><?php if($this->router->method == 'update'){ echo $row[0]['description']; }else{ echo set_value('description'); } ?></textarea>
			</div>
		</div>
		
		<div class="field_row <?php if(form_error('num_pics')){print('validation_error');}?>">
			<div class="field_label">Quantidade de Fotos:</div>
			<div><input type="text" name="num_pics" id="num_pics" class="form_input onlynumbers" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['num_pics']."'");}else{?> value = "<?=set_value('num_pics');?>"<? } ?>/></div>
		</div>
		
		<div class="field_row <?php if(form_error('price')){print('validation_error');}?>">
			<div class="field_label">Valor:</div>
			<div><input type="text" name="price" id="price" class="form_input add_price" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['price']."'");}else{?> value = "<?=set_value('price');?>"<? } ?>/></div>
		</div>
		
		<div class="field_row <?php if(form_error('period')){print('validation_error');}?>">
			<div class="field_label">Dias de Publicação:</div>
			<div><input type="text" name="period" id="period" class="form_input onlynumbers" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['period']."'");}else{?> value = "<?=set_value('period');?>"<? } ?>/></div>
		</div>
		
		<div class="field_row <?php if(form_error('status_id')){print('validation_error');}?>">
			<div class="field_label">Status:</div>
			<div>
				<select name="status_id" id="status_id" class="form_input">
					<option value="-1">Selecione...</option>
					<? if($this->router->method == 'update'){ $data_select =  $row[0]['status_id']; }else{ $data_select = set_value('status_id'); } status_select($data_select);?>
				</select>
			</div>
		</div>
	</fieldset>
	
	<br />
	
	<input type="submit" class="button" value="<?=$this->lang->line('button_save');?>" />
	<input type="reset" class="button" value="<?=$this->lang->line('button_clear');?>" />
	<input type="button" class="button" value="<?=$this->lang->line('button_back');?>" onclick="javascript:history.back();" />
</form>
