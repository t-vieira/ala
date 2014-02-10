<div class="col-lg-12">
	<h1 class="page-header"><?php echo lang('dashboard'); ?></h1>
</div>

<div class="col-lg-8">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<i class="fa fa-comments fa-fw"></i> <?php echo lang('rantersOldest'); ?>
		</div>
		<div class="panel-body">
			<div class="list-group">
				<?php echo $divDiscursantesMaisAntigos; ?>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-4">
	<div class="panel panel-default">
		<div class="panel-heading">
			<i class="fa fa-users fa-fw"></i> <?php echo lang('lastMembersRegistered'); ?>
		</div>
		<div class="panel-body">
			<div class="list-group">
				<?php echo $divUltimosMembros; ?>
			</div>
		</div>
	</div>
</div>