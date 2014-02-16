<div class="col-lg-12">

	<h1 class="page-header"><?php echo lang('allSpeeches'); ?></h1>
	
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<?php echo lang('titleViewSpeechesList'); ?>
			</div>
			
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables">
						<thead>
							<tr>
								<th><?php echo lang('labelMemberName'); ?></th>
								<th><?php echo lang('labelThemeSpeeche'); ?></th>
								<th><?php echo lang('labelDateSpeeche'); ?></th>
								<th><?php echo lang('labelTimeMadeSpeeche'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php echo $tdTabelaAntigos; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
    $('#dataTables').dataTable({
    	"oLanguage": {
		    "sProcessing": "Aguarde enquanto os dados são carregados ...",
		    "sLengthMenu": "Mostrar _MENU_ registros por p&aacute;gina",
		    "sZeroRecords": "Nenhum registro correspondente ao criterio encontrado",
		    "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
		    "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
		    "sInfoFiltered": "",
		    "sSearch": "Procurar",
		    "oPaginate": {
		       "sFirst":    "Primeiro",
		       "sPrevious": "Anterior",
		       "sNext":     "Próximo",
		       "sLast":     "Último"
    		}
 		}                 
    });
});
</script>