<html lang="pt_br">

	<head>
	
		<title>Login - <?=lang('controlWard'); ?> - <?=lang('churchName'); ?></title>
		
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
		
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/sb-admin.js"></script>
		
	</head>
	
	<body style="margin-top: 100px;">
	
		<div class="container">
	        <div class="row">
	            <div class="col-md-4 col-md-offset-4">
	            
	            	<?php echo validation_errors(); ?>
	            	
	            	<?=$this->session->flashdata('alerta'); ?>
	            	
	                <div class="login-panel panel panel-default">
	                    <div class="panel-heading">
	                        <h3 class="panel-title">Faça o login</h3>
	                    </div>
	                    <div class="panel-body">
	                        <form action="login" method="post">
	                            <fieldset>
	                                <div class="form-group">
	                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
	                                </div>
	                                <div class="form-group">
	                                    <input class="form-control" placeholder="Senha" name="senha" type="password">
	                                </div>
	                                
	                                <button type="submit" class="btn btn-lg btn-success btn-block">Entrar</button>
	                            </fieldset>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
    	</div>

		
	</body>
	
</html>