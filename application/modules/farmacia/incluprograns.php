<?php 
include '../base/header.php';
	// include_once('nav.php');
	// 	require_once 'functions.php';

?>

  
<div class="container">
  

<form class="form-horizontal">
<fieldset>


	<div class="row">
		
		<div class="panel panel-default">
			<div class="panel-heading">Inclusão de programas</div>
		
			<div class="panel-body">
			
				<label for="'codincluprogs">Código:</label>
				<input type="codincluprogs" id="codincluprogs" />
					<br>
				<label for="descprogs">Descrição:</label>
				<input type="descprogs" id="descprogs" />
					<br>
				<div class="row">	
					<div class="col-sm-3">
						<label for="depadm">Dependência administrativa:</label>
							<select name="depadm" id="depadm" class="form-control">
								<option selected="selected">Federal</option>
								<option>Estadual</option>
								<option>Municipal</option>
								<option>Particular</option>
								<option>Outros</option>
							</select>
					</div>
				</div>
				<br>

				<div class="row">	
					<div class="col-sm-3">
						<label for="tpacao">Tipo de ação:</label>
							<select name="tpacao" id="tpacao" class="form-control">
								<option selected="selected">C - Criança</option>
								<option>G - Gestante</option>
								<option>P - Puerpera</option>
								<option>S - Saúde da Mulher</option>
								<option>H - Hipertenso/Diabetes</option>
								<option>O - Outros</option>
							</select>
					</div>
				</div>
				
				
			</div>
		</div>
			
	
			
	</div>

</fieldset>

</form>

</div>