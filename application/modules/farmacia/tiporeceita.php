<?php 
 include '../base/header.php';
// 	include_once('nav.php');
// 		require_once 'functions.php';

?>

  
<div class="container">
  

<form class="form-horizontal">
<fieldset>


	<div class="row">
		
		<div class="panel panel-default">
			<div class="panel-heading">Inclusão tipo de receita</div>
		
			<div class="panel-body">
			
				<label for="codtpreceita">Código:</label>
				<input type="codtpreceita" id="codtpreceita" />
					<br>
				<label for="desctpreceita">Descrição:</label>
				<input type="desctpreceita" id="desctpreceita" />
					<br>
					<label for="profissional">Profissional:</label>
						<select name="profissional" id="profissional" class="form-control">
							<option selected="selected">Não</option>
							<option>Sim</option>
						</select>
									<br>
					<label for="possologia">Possologia:</label>
						<select name="possologia" id="possologia" class="form-control">
							<option selected="selected">Não</option>
							<option>Sim</option>
						</select>
										<br>
					<label for="requisitante">Requisitante:</label>
						<select name="requisitante" id="requisitante" class="form-control">
							<option selected="selected">Não</option>
							<option>Sim</option>
						</select>
										<br>
					<label for="numreceita">Num receita:</label>
						<select name="numreceita" id="numreceita" class="form-control">
							<option selected="selected">Não</option>
							<option>Sim</option>
						</select>
										<br>
					<label for="viasrecibo">Vias do recibo:</label>
						<select name="viasrecibo" id="viasrecibo" class="form-control">
							<option selected="selected">Não</option>
							<option>Sim</option>
						</select>
										<br>
					<label for="receitaativa">Ativa:</label>
						<select name="receitaativa" id="receitaativa" class="form-control">
							<option selected="selected">Não</option>
							<option>Sim</option>
						</select>
							<br>
					<label for="prescmedica">Prescrição médica:</label>
						<input type="prescmedica" id="prescmedica" />

			</div>
		</div>
			
	
			
	</div>

</fieldset>

</form>

</div>

<?php 

include '../base/footer.php';
 ?>