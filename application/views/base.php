<html lang="pt_br">

	<head>
	
		<title><?php echo lang('controlWard'); ?> - <?php echo lang('churchName'); ?></title>
		
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/chosen.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/prism.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
		
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/plugins/morris/raphael-2.1.0.min.js"></script>
   		<script src="<?php echo base_url(); ?>assets/js/plugins/morris/morris.js"></script>
   		<script src="<?php echo base_url(); ?>assets/js/sb-admin.js"></script>
   		<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js"></script>
   		<script src="<?php echo base_url(); ?>assets/js/prism.js"></script>
   		<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
   		<script src="<?php echo base_url(); ?>assets/js/datepicker-locales/bootstrap-datepicker.pt-BR.js"></script>
   		<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
   		<script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
   		<script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/jquery.dataTables.js"></script>
   		<script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/bootstrap-dataTables-paging.js"></script>

		
	</head>
	
	<body>
		
		<div id="wrapper">
			
			<nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
			
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url(); ?>index"><?php echo lang('controlWard'); ?></a>
				</div>
				
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#"><i class="fa fa-user fa-fw"></i> <?=$this->session->userdata('logado')['nomeUsuario']; ?></a></li>
							<li class="divider"></li>
							<li><a href="<?=base_url();?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
						</ul>
					</li>
				</ul>
				
			</nav>
			
			<nav class="navbar-default navbar-static-side">
				<div class="sidebar-collapse">
					<ul class="nav" id="side-menu">
						<li>
							<a href="<?php echo base_url(); ?>index"><i class="fa fa-dashboard fa-fw"></i> <?php echo lang('dashboard'); ?></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-users fa-fw"></i> <?php echo lang('members'); ?><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="<?php echo base_url(); ?>membros/registrar"><?php echo lang('register'); ?></a>
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
									<a href="<?php echo base_url(); ?>discursos/registrar"><?php echo lang('register'); ?></a>
								</li>
								<li>
									<a href="#"><?php echo lang('edit'); ?></a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>discursos/discursantesAntigos"><?php echo lang('formerRanters'); ?></a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>discursos/todosDiscursantes"><?php echo lang('allSpeeches'); ?></a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#"><i class="fa fa-smile-o fa-fw"></i> <?=lang('authors');?><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="<?=base_url();?>autores/registrar"><?php echo lang('register'); ?></a>
								</li>
								<li>
									<a href="<?=base_url();?>autores/todosAutores"><?=lang('allAuthors');?></a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#"><i class="fa fa-quote-right fa-fw"></i> <?=lang('quote'); ?><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="<?=base_url();?>citacoes/registrar"><?=lang('register'); ?></a>
								</li>
								<li>
									<a href="<?=base_url();?>citacoes/todasCitacoes"><?=lang('allQuote'); ?></a>
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