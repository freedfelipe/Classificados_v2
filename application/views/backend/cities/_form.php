<p align="right"><?=anchor(site_url($url), $this->lang->line('button_back'), 'class="btnDefault button"');?></p>

<form class="formItem" method="post" accept-charset="utf-8">
	<br>
	<fieldset>
		<legend><strong>Dados do Cidades</strong></legend>
		<br>
		
		<div class="fieldRow <?php if(form_error('state_id')){print('validation_error');}?>">
			<label for="">Estado:</label>
			<div>
				<select name="state_id" class="form_input">
					<? if($this->router->method == 'update'){ $data_select3 = @$row[0]['state_id']; }else{ $data_select3 = set_value('state_id'); } data_select($state, $data_select3);?>
				</select>
			</div>
		</div>
		
		<div class="fieldRow <?php if(form_error('name')){print('validation_error');}?>">
			<label for="name">Nome:</label>
			<div><input type="text" name="name" id="name" class="form_input" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['name']."'");}else{?> value = "<?=set_value('name');?>"<? } ?>/></div>
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
