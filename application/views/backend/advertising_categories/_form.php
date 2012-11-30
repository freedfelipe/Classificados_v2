<form class="edt-form" method="post" accept-charset="utf-8">
	<fieldset>
		<legend>Dados da Marca</legend>
		
		<div class="field_row <?php if(form_error('height')){print('validation_error');}?>">
			<div class="field_label">Nome:</div>
			<div><input type="text" name="name" id="name" class="form_input" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['name']."'");}else{?> value = "<?=set_value('name');?>"<? } ?>/></div>
		</div>
		
		<div class="field_row <?php if(form_error('height')){print('validation_error');}?>">
			<div class="field_label">Altura (height):</div>
			<div><input type="text" name="height" id="height" class="form_input onlynumbers" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['height']."'");}else{?> value = "<?=set_value('height');?>"<? } ?>/></div>
		</div>
		
		<div class="field_row <?php if(form_error('width')){print('validation_error');}?>">
			<div class="field_label">Largura (width):</div>
			<div><input type="text" name="width" id="width" class="form_input onlynumbers" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['width']."'");}else{?> value = "<?=set_value('width');?>"<? } ?>/></div>
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
