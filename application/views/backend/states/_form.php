<p><input type="button" class="btnDefault button fRight" value="<?=$this->lang->line('button_back');?>" onclick="javascript:history.back();" /></p>

<form class="formItem" method="post" accept-charset="utf-8">
	<br>
	<fieldset>
		<legend><strong>Dados do Estado</strong></legend>
		<br>
		<div class="fieldRow <?php if(form_error('name')){print('validation_error');}?>">
			<label for="name">Nome:</label>
			<div><input type="text" name="name" id="name" class="form_input" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['name']."'");}else{?> value = "<?=set_value('name');?>"<? } ?>/></div>
		</div>
		
		<div class="fieldRow <?php if(form_error('uf')){print('validation_error');}?>">
			<label for="name">UF:</label>
			<div><input type="text" name="uf" id="uf" class="form_input" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['uf']."'");}else{?> value = "<?=set_value('uf');?>"<? } ?>/></div>
		</div>
		
		<div class="fieldRow <?php if(form_error('status_id')){print('validation_error');}?>">
			<label for="status_id">Status:</label>
			<div>
				<select name="status_id" id="status_id" class="form_input">
					<option value="-1">Selecione...</option>
					<? if($this->router->method == 'update'){ $data_select =  $row[0]['status_id']; }else{ if(set_value('status_id') == ""){ $data_select = 1; }else{ $data_select = set_value('status_id'); } } status_select($data_select);?>
				</select>
			</div>
		</div>
	</fieldset>
	
	<br />
	
	<input type="reset" class="btnDefaultGray button" value="<?=$this->lang->line('button_clear');?>" />
	<input type="submit" class="btnDefault button" value="<?=$this->lang->line('button_save');?>" />
	
</form>
