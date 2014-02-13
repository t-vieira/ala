<div class="col-lg-12">
	<h1 class="page-header"><?=lang('dashboard'); ?></h1>
</div>

<div class="col-lg-8">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<i class="fa fa-comments fa-fw"></i> <?=lang('rantersOldest'); ?>
		</div>
		<div class="panel-body">
			<div class="list-group">
				{divDiscursantesMaisAntigos}
			</div>
		</div>
	</div>
</div>

<div class="col-lg-4">
	<div class="panel panel-default">
		<div class="panel-heading">
			<i class="fa fa-users fa-fw"></i> <?=lang('lastMembersRegistered'); ?>
		</div>
		<div class="panel-body">
			<div class="list-group">
				{divUltimosMembros}
			</div>
		</div>
	</div>
</div>