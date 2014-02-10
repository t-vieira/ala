<div class="col-lg-12">

	<h1 class="page-header"><?php echo lang('titleRegisterMember'); ?></h1>
	
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<?php echo lang('titleRegisterMemberInForm'); ?>
			</div>
			
			<?php echo validation_errors(); ?>
			
			<?php echo $this->session->flashdata('alerta'); ?>
			
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-3">
						<?php echo form_open(); ?>
							<div class="form-group">
								<label><?php echo lang('labelMemberName'); ?></label>
								<input type="text" name="nomeMembro" class="form-control" value="<?php echo set_value('nomeMembro'); ?>" autofocus />
							</div>
							<button type="submit" class="btn btn-success"><?php echo lang('buttonRegisterMember'); ?></button>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>