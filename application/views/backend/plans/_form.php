<? if(isset($error)){?>
<div class="row">
	<div class="col-md-4 col-sm-4">
		<div class="alert alert-block alert-error ruby-red-bg">
			<button data-dismiss="alert" class="close" type="button">×</button>
			<h3 class="text-white">Atenção!</h3>
			<?=$error;?>
		</div>
	</div>
</div>
<? } ?>
<div class="row">
    <div class="col-md-6">
        <div class="widget">
            <div class="widget-body">
                <form class="form-horizontal" role="form" method="post" action="<?=site_url($_SERVER['REQUEST_URI']);?>" accept-charset="utf-8">
                    <div class="form-group <?php if(form_error('name')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-10">
                            <input type="Text" class="form-control" placeholder="Nome" name="name" value="<?=set_value('name', @$row['name'], $this->input->post('name')); ?>">
                        </div>
                    </div>
					<div class="form-group <?php if(form_error('description')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">Descrição</label>
                        <div class="col-lg-10">
							<textarea class="form-control" rows="5" name="description"><?=set_value('name', @$row['description'], $this->input->post('description')); ?></textarea>
                        </div>
                    </div>
					<div class="form-group <?php if(form_error('num_pics')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">Quantidade de Fotos:</label>
                        <div class="col-lg-10">
                            <input type="Text" class="form-control numeric" placeholder="Quantidade de Fotos" name="num_pics" value="<?=set_value('num_pics', @$row['num_pics'], $this->input->post('num_pics')); ?>">
                        </div>
                    </div>
					<div class="form-group <?php if(form_error('price')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">Valor:</label>
                        <div class="col-lg-10">
                            <input type="Text" class="form-control price" placeholder="Valor" name="price" value="<?=set_value('price', @$row['price'], $this->input->post('price')); ?>">
                        </div>
                    </div>
					<div class="form-group <?php if(form_error('period')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">Dias de Publicação:</label>
                        <div class="col-lg-10">
                            <input type="Text" class="form-control numeric" placeholder="Dias de Publicação" name="period" value="<?=set_value('period', @$row['period'], $this->input->post('period')); ?>">
                        </div>
                    </div>
					
					<div class="form-group <?php if(form_error('video')){echo 'has-error';}?>">
						<label class="col-lg-2 control-label">Video:</label>
						<div class="onoffswitch">
							<input type="checkbox" name="video" class="onoffswitch-checkbox" id="video" <? if(@$_POST['video'] or @$row['video'] == 1){ ?>checked <? } ?>>
							<label class="onoffswitch-label" for="video">
								<div class="onoffswitch-inner"></div>
								<div class="onoffswitch-switch"></div>
							</label>
						</div>
					</div>
					
					<div class="form-group <?php if(form_error('destaque')){echo 'has-error';}?>">
						<label class="col-lg-2 control-label">Destaque:</label>
						<div class="onoffswitch">
							<input type="checkbox" name="destaque" class="onoffswitch-checkbox" id="destaque" <? if(@$_POST['destaque'] or @$row['destaque'] == 1){ ?>checked <? } ?>>
							<label class="onoffswitch-label" for="destaque">
								<div class="onoffswitch-inner"></div>
								<div class="onoffswitch-switch"></div>
							</label>
						</div>
					</div>
					
					<div class="form-group <?php if(form_error('newsletter')){echo 'has-error';}?>">
						<label class="col-lg-2 control-label">Newsletter Mensal:</label>
						<div class="onoffswitch">
							<input type="checkbox" name="newsletter" class="onoffswitch-checkbox" id="newsletter" <? if(@$_POST['newsletter'] or @$row['newsletter'] == 1){ ?>checked <? } ?>>
							<label class="onoffswitch-label" for="newsletter">
								<div class="onoffswitch-inner"></div>
								<div class="onoffswitch-switch"></div>
							</label>
						</div>
					</div>
					
					<div class="form-group <?php if(form_error('icone')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">Icone:</label>
                        <div class="col-lg-10">
                            <input type="Text" class="form-control" placeholder="icone" name="icone" value="<?=set_value('icone', @$row['icone'], $this->input->post('icone')); ?>">
                        </div>
                    </div>
					
					<div class="form-group <?php if(form_error('status_id')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">Status</label>
                        <div class="col-lg-10">
							<?php echo form_dropdown('status_id', construct_select(status()), set_value('status_id', @$row['status_id'], $this->input->post('status_id')), 'class="form-control"'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-success">Salvar</button>
							<button type="reset" class="btn btn-warning">Limpar</button>
							<button type="button" class="btn btn-default" onclick="javascript:history.back();" >Voltar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>