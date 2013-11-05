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
					<div class="form-group <?php if(form_error('height')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">Altura (height)</label>
                        <div class="col-lg-10">
                            <input type="Text" class="form-control" placeholder="Altura" name="height" value="<?=set_value('height', @$row['height'], $this->input->post('height')); ?>">
                        </div>
                    </div>
					<div class="form-group <?php if(form_error('width')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">Largura (width)</label>
                        <div class="col-lg-10">
                            <input type="Text" class="form-control" placeholder="Largura" name="width" value="<?=set_value('width', @$row['width'], $this->input->post('width')); ?>">
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