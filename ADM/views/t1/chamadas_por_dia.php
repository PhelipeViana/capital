
<select name="" id="dia_chamada" class="form-control noprint my-5">
	<option value="0">SELECIONE O DIA</option>
	<option value="2">15/10/19 18:00 UNIDADE 2</option>
	
	
</select>
<div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden" id="area_tabela" style="display: none;">
	<div class="panel-heading templatemo-position-relative">
		<h2 class="text-uppercase noprint">CHAMADA DE MOTORISTAS <i class="fa fa-print" aria-hidden="true" onclick="imprimir()"></i></h2>

		<h2 class="text-uppercase print_oculto">CHAMADA <?=date("d/m/Y h:i:s")  ?></h2>


	</div>
	<div class="table-responsive" >
		<table class="table table-striped table-bordered" id="tabela">
			<thead>
				<tr>
					<td>DATA</td>
					<td>UNIDADE</td>
					<td>MOTORISTAS</td>
					<td>STATUS</td>
				</tr>

			</thead>
			<tbody>
				<tr>
					<td>15/08/2017</td>
					<td>GAB</td>
					<td>LUCIVALDO OLIVEIRA DE SOUZA</td>
					<td>CANCELADA</td>
				</tr>
				<tr>
					<td>18/08/2017</td>
					<td>GA2</td>
					<td>JEFERSOM AQUINO BORJA</td>
					<td>SUCESSO</td>
				</tr>
				<tr>
					<td>22/10/2018</td>
					<td>ACB</td>
					<td>LUCURGO SOUZA AGUIAR</td>
					<td>EM ANDAMENTO</td>
				</tr>
				<tr>
					<td>23/10/2019</td>
					<td>GCB</td>
					<td>SERGIO OLIVEIRA BARBOSA</td>
					<td>PRESENTE</td>
				</tr>
				<tr>
					<td>11/04/2015</td>
					<td>TOR </td>
					<td>SANDRA CORREIA DE ALMEIDA</td>
					<td>COMPLETA</td>
				</tr>

				<tr>
					<td>22/08/2003</td>
					<td>TOR </td>
					<td>OZIEL DE BRAGA NUNES</td>
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

	let tabela=document.getElementById("area_tabela");
	
	document.getElementById("dia_chamada").addEventListener("change", function(e){
		
		if (document.getElementById("dia_chamada").value==0) {
			tabela.style.display = "none";
		}else{
			tabela.style.display = "block";		
		}
		
	})











</script>