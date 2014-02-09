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
			
			<nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo lang('controlWard'); ?></a>
				</div>
			</nav>
			
			<nav class="navbar-default navbar-static-side">
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
				
					<?php $this->load->view($view); ?>
					
				</div>
			</div>
			
		</div>
		
	</body>
</html>