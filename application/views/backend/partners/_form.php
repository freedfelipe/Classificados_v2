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
					<div class="form-group <?php if(form_error('file')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">Arquivo (Permitidos: gif|jpg|png|swf)</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" placeholder="Arquivo" name="file" value="<?=set_value('file', @$row['file'], $this->input->post('file')); ?>">
                        </div>
                    </div>
					<div class="form-group <?php if(form_error('link')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">URL (LINK)</label>
                        <div class="col-lg-10">
                            <input type="Text" class="form-control" placeholder="URL (LINK)" name="link" value="<?=set_value('link', @$row['link'], $this->input->post('link')); ?>">
                        </div>
                    </div>
					<div class="form-group <?php if(form_error('status_id')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">Status</label>
                        <div class="col-lg-10">
							<?php echo form_dropdown('status_id', construct_select(status()), set_value('status_id', @$row['status_id'], $this->input->post('status_id')), 'class="form-control"'); ?>
                        </div>
                    </div>
					<div class="form-group">
						<? if(isset($row['file'])){ if($row['file'] != ''){ ?>
						<div class="thumbnail">
							<img src="<?=site_url($this->parameter_model->get('UPLOAD_PATH_PARTNER').$row['file']);?>" alt="<?=@$row['name'];?>" />
						</div>
						<? } } ?>
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