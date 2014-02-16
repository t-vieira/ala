<div class="col-lg-12">

	<h1 class="page-header"><?php echo lang('formerRanters'); ?></h1>
	
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Veja abaixo os discursantes mais antigos
			</div>
			
			<div class="panel-body">
			
				<div class="list-group">
					<?php echo $divDiscursantesMaisAntigos; ?>
				</div>
				
				<div class="col-lg-12">
					<?php echo $this->pagination->create_links(); ?>
				</div>
				
			</div>
			
		</div>
	</div>
</div>