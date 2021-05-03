
<div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
	<div class="panel-heading templatemo-position-relative">
		<h2 class="text-uppercase noprint">RELATÓRIO <i class="fa fa-print" aria-hidden="true" onclick="imprimir()"></i></h2>

		<h2 class="text-uppercase print_oculto"><?=date("d/m/Y h:i:s")  ?></h2>


	</div>
	<div class="table-responsive">
		<table class="table table-striped table-bordered" id="tabela">
			<thead>
				<tr>
					<td>DATA</td>
					<td>UNIDADE</td>
					<td>MOTORISTAS</td>
					<td>STATUS</td>
				</tr>
				<tr class="noprint">
					<td>
						<input type="text" class="form-control">
					</td>

					<td>
						<input type="text" class="form-control">
					</td>

					<td>
						<input type="text" class="form-control">
					</td>

					<td>
						<input type="text" class="form-control">
					</td>						
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>15/08/2017</td>
					<td>GAB</td>
					<td>16</td>
					<td>CANCELADA</td>
				</tr>
				<tr>
					<td>18/08/2017</td>
					<td>GAB</td>
					<td>31</td>
					<td>SUCESSO</td>
				</tr>
				<tr>
					<td>22/10/2018</td>
					<td>ACB</td>
					<td>16</td>
					<td>EM ANDAMENTO</td>
				</tr>
				<tr>
					<td>23/10/2019</td>
					<td>GCB</td>
					<td>3</td>
					<td>CANCELADA</td>
				</tr>
				<tr>
					<td>11/04/2015</td>
					<td>TOR </td>
					<td>11</td>
					<td>COMPLETA</td>
				</tr>

				<tr>
					<td>22/08/2003</td>
					<td>TOR </td>
					<td>61</td>
					<td>EM ANDAMENTO</td>
				</tr>                               
			</tbody>
		</table>    
	</div>                          
</div>
<script>

	function imprimir(){
		window.print();
	}
</script>