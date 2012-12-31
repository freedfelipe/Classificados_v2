<form class="edt-form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<fieldset>
		<legend>Dados da Publicidade</legend>
		
		<div class="field_row <?php if(form_error('name')){print('validation_error');}?>">
			<div class="field_label">Nome:</div>
			<div><input type="text" name="name" id="name" class="form_input" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['name']."'");}else{?> value = "<?=set_value('name');?>"<? } ?>/></div>
		</div>
		
		<div class="field_row <?php if(form_error('file')){print('validation_error');}?>">
			<div class="field_label">Arquivo (Permitidos: gif|jpg|png|swf):</div>
			<div><input type="file" name="file" id="file" class="form_input" /></div>
		</div>
		
		<div class="field_row <?php if(form_error('link')){print('validation_error');}?>">
			<div class="field_label">URL (LINK):</div>
			<div><input type="text" name="link" id="link" class="form_input" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['link']."'");}else{?> value = "<?=set_value('link');?>"<? } ?>/></div>
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
		<? if(isset($row[0]['file'])){ if($row[0]['file'] != ''){ ?>
		<div class="field_row">
			<div class="field_label">Arquivo:</div>
			<div><?=$row[0]['file']; ?></div>
		</div>
		<? } } ?>
	</fieldset>
	
	<br />
	
	<input type="submit" class="button" value="<?=$this->lang->line('button_save');?>" />
	<input type="reset" class="button" value="<?=$this->lang->line('button_clear');?>" />
	<input type="button" class="button" value="<?=$this->lang->line('button_back');?>" onclick="javascript:history.back();" />
</form>
