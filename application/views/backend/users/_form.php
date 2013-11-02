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
					<div class="form-group <?php if(form_error('group_id')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">Grupo</label>
                        <div class="col-lg-10">
							<?php echo form_dropdown('group_id', construct_select($groups), set_value('group_id', @$row['group_id'], $this->input->post('group_id')), 'class="form-control"'); ?>
                        </div>
                    </div>
                    <div class="form-group <?php if(form_error('name')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-10">
                            <input type="Text" class="form-control" placeholder="Nome" name="name" value="<?=set_value('name', @$row['name'], $this->input->post('name')); ?>">
                        </div>
                    </div>
                    <div class="form-group <?php if(form_error('email')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" placeholder="Email" name="email" value="<?=set_value('email', @$row['email'], $this->input->post('email')); ?>">
                        </div>
                    </div>
                    <div class="form-group <?php if(form_error('password')){echo 'has-error';}?>">
                        <label class="col-lg-2 control-label">Senha</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" placeholder="Password" name="password" value="<?=set_value('password', '', $this->input->post('password')); ?>">
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