<?php 
include_once('header.php');
	include_once('nav.php');
		require_once 'functions.php';

?>

  
<div class="container">
  

<form class="form-horizontal">
<fieldset>


	<div class="row">
		
		<div class="panel panel-default">
			<div class="panel-heading">Inclusão de prescrição médica</div>
		
			<div class="panel-body">
			
				<label for="codprescmedxanvisa">Código:</label>
				<input type="codprescmedxanvisa" id="codprescmedxanvisa" />
					<br>
				<label for="nomemedanvisa">Med Anvisa:</label>
				<input type="nomemedanvisa" id="nomemedanvisa" />
					<br>
				<label for="nomemedpresc">Presc médica:</label>
				<input type="nomemedpresc" id="nomemedpresc" />
			
			</div>
		</div>
			
	
			
	</div>

</fieldset>

</form>

</div>