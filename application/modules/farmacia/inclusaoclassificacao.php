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
			<div class="panel-heading">Inclusão de classificação</div>
		
			<div class="panel-body">
			
				<label for="'incluclassificacao">Código:</label>
				<input type="incluclassificacao" id="incluclassificacao" />
					<br>
				<label for="mascara">Máscara:</label>
				<input type="mascara" id="mascara" />
					<br>
				<label for="classificacao">Classificação:</label>
				<input type="classificacao" id="classificacao" />
					<br>
				<div class="row">	
					<div class="col-sm-3">
						<label for="tipomed">Tipo:</label>
							<select name="tipomed" id="tipomed" class="form-control">
								<option selected="selected">Sintético</option>
								<option>Analitico</option>
							</select>
					</div>
				</div>
				<br>
			<label for="descclassificacao">Descrição:</label>
				<input type="descclassificacao" id="descclassificacao" />
				
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