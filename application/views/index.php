<html lang="pt_br">

	<head>
	
		<title><?php echo lang('controlWard'); ?> - <?php echo lang('churchName'); ?></title>
		
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/chosen.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/prism.css" rel="stylesheet" />
		
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/plugins/morris/raphael-2.1.0.min.js"></script>
   		<script src="<?php echo base_url(); ?>assets/js/plugins/morris/morris.js"></script>
   		<script src="<?php echo base_url(); ?>assets/js/sb-admin.js"></script>
   		<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js"></script>
   		<script src="<?php echo base_url(); ?>assets/js/prism.js"></script>

		
	</head>
	
	<body>
		
		<div id="wrapper">
			
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo lang('controlWard'); ?></a>
				</div>
			</nav>
			
			<nav class="navbar-default navbar-static-side" role="navigation">
				<div class="sidebar-collapse">
					<ul class="nav" id="side-menu">
						<li>
							<a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard fa-fw"></i> <?php echo lang('dashboard'); ?></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-users fa-fw"></i> <?php echo lang('members'); ?><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="#"><?php echo lang('register'); ?></a>
								</li>
								<li>
									<a href="#"><?php echo lang('visualize'); ?></a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#"><i class="fa fa-comment fa-fw"></i> <?php echo lang('speeches'); ?><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="#"><?php echo lang('register'); ?></a>
								</li>
								<li>
									<a href="#"><?php echo lang('visualize'); ?></a>
								</li>
								<li>
									<a href="#"><?php echo lang('edit'); ?></a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			
			<div id="page-wrapper">
			
				<div class="row">
				
					<div class="col-lg-12">
						<h1 class="page-header"><?php echo lang('dashboard'); ?></h1>
					</div>
					
					<div class="col-lg-8">
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-comments fa-fw"></i> <?php echo lang('olderRanters'); ?>
							</div>
							<div class="panel-body">
								<div class="list-group">
									<a href="#" class="list-group-item">
										<i class="fa fa-user fa-fw"></i> Tiago Esteves Vieira
										<span class="pull-right text-muted small"><em>2 meses</em></span>
									</a>
									<a href="#" class="list-group-item">
										<i class="fa fa-user fa-fw"></i> Fabiana Cristina Araújo Vieira
										<span class="pull-right text-muted small"><em>1 mês</em></span>
									</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<i class="fa fa-users fa-fw"></i> <?php echo lang('lastMembersRegistered'); ?>
							</div>
							<div class="panel-body">
								<div class="list-group">
									<a href="#" class="list-group-item">
										Tiago Esteves Vieira
									</a>
									<a href="#" class="list-group-item">
										Fabiana Cristina Araújo Vieira
									</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
		
	</body>
</html>