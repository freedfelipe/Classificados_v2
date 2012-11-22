<form class="edt-form" method="post" accept-charset="utf-8">
	<fieldset>
		<legend>Dados do Grupo</legend>
		
		<div class="field_row <?php if(form_error('name')){print('validation_error');}?>">
			<div class="field_label">Nome:</div>
			<div><input type="text" name="name" id="name" class="form_input" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['name']."'");}else{?> value = "<?=set_value('name');?>"<? } ?>/></div>
		</div>
		
		<div class="field_row <?php if(form_error('active')){print('validation_error');}?>">
			<div class="field_label">Status:</div>
			<div>
				<select name="active" id="active" class="form_input">
					<option value="0">Selecione...</option>
					<? if($this->router->method == 'update'){ $data_select =  $row[0]['active']; }else{ $data_select = set_value('active'); } status_select($data_select);?>
				</select>
			</div>
		</div>
		
	</fieldset>
	
	<br />
	
	<input type="submit" class="button" value="<?=$this->lang->line('button_save');?>" />
	<input type="reset" class="button" value="<?=$this->lang->line('button_clear');?>" />
	<input type="button" class="button" value="<?=$this->lang->line('button_back');?>" onclick="javascript:history.back();" />
</form>
