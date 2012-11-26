<form class="edt-form" method="post" accept-charset="utf-8">
	<fieldset>
		<legend>Dados do Anúncio</legend>
		
		<div class="field_row <?php if(form_error('category_id')){print('validation_error');}?>">
			<div class="field_label">Categoria:</div>
			<div>
				<select name="category_id" id="category_id" class="form_input">
					<option value="-1">Selecione...</option>
					<? if($this->router->method == 'update'){ $data_select =  $row[0]['category_id']; }else{ $data_select = set_value('category_id'); } status_select($data_select);?>
				</select>
			</div>
		</div>
		
		<div class="field_row <?php if(form_error('title')){print('validation_error');}?>">
			<div class="field_label">Título:</div>
			<div><input type="text" name="title" id="title" class="form_input" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['title']."'");}else{?> value = "<?=set_value('title');?>"<? } ?>/></div>
		</div>
		
		<div class="field_row <?php if(form_error('price')){print('validation_error');}?>">
			<div class="field_label">Preço:</div>
			<div><input type="text" name="price" id="price" class="form_input" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['price']."'");}else{?> value = "<?=set_value('price');?>"<? } ?>/></div>
		</div>
		
		<div class="field_row <?php if(form_error('cep')){print('validation_error');}?>">
			<div class="field_label">CEP:</div>
			<div><input type="text" name="cep" id="cep" class="form_input" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['cep']."'");}else{?> value = "<?=set_value('cep');?>"<? } ?>/></div>
		</div>
		
		<div class="field_row <?php if(form_error('state')){print('validation_error');}?>">
			<div class="field_label">Estado:</div>
			<div><input type="text" name="state" id="state" class="form_input" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['state']."'");}else{?> value = "<?=set_value('state');?>"<? } ?>/></div>
		</div>
		
		<div class="field_row <?php if(form_error('city')){print('validation_error');}?>">
			<div class="field_label">Cidade:</div>
			<div><input type="text" name="city" id="city" class="form_input" <?php if($this->router->method == 'update'){print(" value='".@$row[0]['city']."'");}else{?> value = "<?=set_value('city');?>"<? } ?>/></div>
		</div>
		
		<div class="field_row <?php if(form_error('description')){print('validation_error');}?>">
			<div class="field_label">Descrição:</div>
			<div>
				<textarea name="description"><?php if($this->router->method == 'update'){ echo $row[0]['description']; }else{ echo set_value('description'); } ?></textarea>
			</div>
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
