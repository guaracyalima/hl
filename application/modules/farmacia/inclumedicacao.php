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
			<div class="panel-heading">Inclusão medicação</div>
		
			<div class="panel-body">
			
				<label for="codmedicacao">Código:</label>
				<input type="codmedicacao" id="codmedicacao" />
					<br>
				<label for="nomegenerico">Nome genérico:</label>
				<input type="nomegenerico" id="nomegenerico" />
					<br>
				<label for="nomemedicamento">Medicamento:</label>
				<input type="nomemedicamento" id="nomemedicamento" />
					<br>
				<label for="nomemedanvisa">Medicamento Anvisa:</label>
				<input type="nomemedanvisa" id="nomemedanvisa" />
					<br>
				<label for="prescmedica">Prescrição médica:</label>
				<input type="prescmedica" id="prescmedica" />
					<br>
				<label for="classeterapeutica">Classe terapeutica:</label>
				<input type="classeterapeutica" id="classeterapeutica" />
									<br>
				<label for="listacontrolados">Lista controlados:</label>
				<input type="listacontrolados" id="listacontrolados" />
									<br>
				<label for="medreferencia">Medicamento referência:</label>
				<input type="medreferencia" id="medreferencia" />
									<br>
				<label for="nomelaboratorio">Laboratorio:</label>
				<input type="nomelaboratorio" id="nomelaboratorio" />
									<br>
				<label for="nomeformafarmaceutica">Forma farmaceutica:</label>
				<input type="nomeformafarmaceutica" id="nomeformafarmaceutica" />
									<br>
				<label for="concentracao">Concentração:</label>
				<input type="concentracao" id="concentracao" />
									<br>
				<label for="classificacao">Classificação:</label>
				<input type="classificacao" id="classificacao" />
		
		<div class="row">	
		<div class="col-sm-3">
				<label for="hiperdia">Hiperdia:</label>
								<select name="hiperdia" id="hiperdia" class="form-control">
									<option selected="selected">Não informado</option>
									<option>Hidroclorotiazida 25mg comp</option>
									<option>Propranolol - comp simp - 40mg</option>
									<option>Captopril - comp simp - 25mg</option>
									<option>Glibenclamida - comp simp - 5mg</option>
									<option>Metformina - comp revest - 850mg</option>
									<option>Insulina</option>
								</select>
		</div>
		</div>					
			<div class="row">	
				<div class="col-sm-3">
					<label for="msg">Observação:</label>
						<textarea id="msg" class="form-control" rows="4"></textarea>
				
				</div>
			</div>
			</div>
		</div>
			
	
			
	</div>

</fieldset>

</form>

</div>