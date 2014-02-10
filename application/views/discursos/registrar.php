<div class="col-lg-12">

	<h1 class="page-header"><?php echo lang('titleRegisterSpeeche'); ?></h1>
	
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<?php echo lang('titleRegisterSpeecheInForm'); ?>
			</div>
			
			<?php echo validation_errors(); ?>
			
			<?php echo $this->session->flashdata('alerta'); ?>
			
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-3">
						<?php echo form_open(); ?>
							<div class="form-group">
								<label><?php echo lang('labelMemberName'); ?></label>
								<select name="nomeMembro" id="selectMembro" class="form-control" data-placeholder="Escolha um membro...">
									<?php echo $optionTodosMembros; ?>
								</select>
							</div>
							<div class="form-group">
								<label><?php echo lang('labelThemeSpeeche'); ?></label>
								<input type="text" name="temaDiscurso" class="form-control" value="<?php echo set_value('temaDiscurso'); ?>" />
							</div>
							<div class="form-group">
								<label><?php echo lang('labelDateSpeeche'); ?></label>
								<div class="col-lg-5 input-group date">
									<input type="text" name="dataDiscurso" id="dataDiscurso" class="form-control" value="<?php echo set_value('temaDiscurso'); ?>" />
									<span class="input-group-addon"><i class="fa fa-calendar fw"></i></span>
								</div>
							</div>
							<button type="submit" class="btn btn-success"><?php echo lang('buttonRegisterSpeeche'); ?></button>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>

<script>
$('#wrapper .input-group.date').datepicker({
});

$('#selectMembro').chosen();

$('#dataDiscurso').datepicker({
	language: 'pt-BR',
	format: 'dd/mm/yyyy',
	autoclose: true
});
</script>