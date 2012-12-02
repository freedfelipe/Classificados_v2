<form class="edt-form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<fieldset>
		<legend>Dados da Publicidade</legend>
		
		<div class="field_row <?php if(form_error('advertising_category_id')){print('validation_error');}?>">
			<div class="field_label">Categoria:</div>
			<div>
				<select name="advertising_category_id" id="advertising_category_id" class="form_input">
					<option value="-1">Selecione...</option>
					<? if($this->router->method == 'update'){ $data_select =  $row[0]['advertising_category_id']; }else{ $data_select = set_value('advertising_category'); } data_select($advertising_category, $data_select);?>
				</select>
			</div>
		</div>
		
		<div class="field_row <?php if(form_error('name')){print('validation_error');}?>">
			<div class="field_label">Nome:</div>
			<div><input type="text" name="name" id="name" class="form_input" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['name']."'");}else{?> value = "<?=set_value('name');?>"<? } ?>/></div>
		</div>
		
		<div class="field_row <?php if(form_error('file')){print('validation_error');}?>">
			<div class="field_label">Arquivo (Permitidos: gif|jpg|png|swf):</div>
			<div><input type="file" name="file" id="file" class="form_input" /></div>
		</div>
		
		<div class="field_row <?php if(form_error('start_date')){print('validation_error');}?>">
			<div class="field_label">Data Início:</div>
			<div><input type="text" name="start_date" id="start_date" class="form_input format_date datepicker" <?php if($this->router->method == 'update'){print(" value='".format_date(@$row[0]['start_date'])."'");}else{?> value = "<?=set_value('start_date');?>"<? } ?>/></div>
		</div>
		
		<div class="field_row <?php if(form_error('end_date')){print('validation_error');}?>">
			<div class="field_label">Data Fim:</div>
			<div><input type="text" name="end_date" id="end_date" class="form_input format_date datepicker" <?php if($this->router->method == 'update'){print(" value='".format_date(@$row[0]['end_date'])."'");}else{?> value = "<?=set_value('end_date');?>"<? } ?>/></div>
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
					<? if($this->router->method == 'update'){ $data_select =  $row[0]['status_id']; }else{ if(set_value('status_id') == '') { $data_select = 1; }else{ $data_select = set_value('status_id'); } } status_select($data_select);?>
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
