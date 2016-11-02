<?php 
require_once 'functions.php';

# $planos = listaPlanosDeSaude($conexao);
 ?>
<div class="container-fluid">
	
	<form action="" method="post" accept-charset="utf-8" class="form-inline" novalidate=""  class="my-form" name="formCadastro">	

		<div class="panel panel-success"> <!-- inicio do painel de dados primarios do paciente -->
			<div class="panel-heading text-center">
				<h4 class="text-center">Cadastro de cartão de crédito</h4>
			</div>
			<div class="panel-body">

		<div class="panel panel-success">
			<div class="panel-body">

				<div class="row">

					<div class="form-group">
						<label class="control-label" for="nomepaciente">Nome bandeira:</label>
						<input class="form-control" type="nomepaciente" class="form-control" id="nomepaciente" ng-model="userType" required/>
						<span class="alert-danger" ng-show="formCadastro.input.$error.required">O nome do fornecedor é obrigatorio</span>
					</div>
				</div>
				
			<div class="row">
			<div class="row">
					<div class="form-group">
						<label class="control-label" for="endpaciente">Endereço:</label>
						<input class="form-control" type="endpaciente" class="form-control" id="endpaciente">
					</div>
					
					<div class="form-group">
						<label for="rgpaciente">Número:</label>
						<input class="form-control" type="rgpaciente" id="rgpaciente">
					</div>
				</div>

				<div class="row">
					<div class="form-group">
						<label for="complendpaciente">Compl:</label>
						<input class="form-control" type="complendpaciente" id="complendpaciente"/>
					</div>

					<div class="form-group">
						<label for="bairro">Bairro:</label>
						<input class="form-control" type="bairro" id="bairro" />
					</div>

					<div class="form-group">
						<label for="dtnascpaciente">Cidade:</label>
						<input class="form-control" type="dtnascpaciente" id="dtnascpaciente" />
					</div>

					<div class="form-group">
						<label for="cep">CEP:</label>
						<input class="form-control" type="cep" id="cep"  ng-model="cep" mask="99999-999"/>
						
					</div>

					</div>
				<div class="row">
				
					<div class="form-group">
						<label for="fonepaciente">Contato:</label>
						<input class="form-control" type="fonepaciente" id="fonepaciente" ng-model="fonepaciente" mask="(99)9999-9999"/>  
					</div>
					<div class="form-group">
						<label for="fonepaciente">Telefone:</label>
						<input class="form-control" type="fonepaciente" id="fonepaciente" ng-model="fonepaciente" mask="(99)9999-9999"/>  
					</div>

				<div class="row">
					<div class="form-group">
						<label for="fonepaciente">Ramal:</label>
						<input class="form-control" type="fonepaciente" id="fonepaciente" ng-model="fonepaciente" mask="(99)9999-9999"/>  
					</div>
					
					<div class="form-group">
						<label for="celularpaciente">Celular:</label>
						<input class="form-control" type="celularpaciente" id="celularpaciente" ng-model="celularpaciente" mask="(99)9999-9999"/>
					</div>
					</div>

				</div>
				<br>



	<!-- panel de menus de informações adicionais -->
		<div class="panel panel-success">
			<div class="panel-heading"><h4 class="text-center">Informações adicionais</h4></div>
			<div class="panel-body">
				<ul class="nav nav-tabs nav-pills">
					<li class="active"><a data-toggle="tab" href="#home">Financeiro</a></li>
					<li><a data-toggle="tab" href="#menu1">Observações</a></li>
				</ul>
			</div>
		</div>

		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">

				<div class="row">
					<div class="form-group">
						<label for="ultimaconsulta">Última consulta:</label>
						<input class="form-control" type="ultimaconsulta" id="ultimaconsulta" />
					</div>

					<div class="form-group">
						<label for="idiomapaciente">Idioma:</label>
						<input class="form-control" type="idiomapaciente" id="idiomapaciente" /> 
					</div>

					<div class="form-group">
						<label for="naturalidadepaciente">Naturalidade:</label>
						<input class="form-control" type="naturalidadepaciente" id="naturalidadepaciente" />
					</div>

				</div>

				<br>

				<div class="row">
				
				
					<div class="form-group">
						<label for="dtcasamentopaciente">Data Casamento:</label>
						<input class="form-control" type="dtcasamentopaciente" id="dtcasamentopaciente" ng-model="dtcasamentopaciente" mask="99/99/9999"/>  
					</div>
					
					
					<div class="form-group">
						<label for="conjugepaciente">Nome conjuge:</label>
						<input class="form-control" type="conjugepaciente" id="conjugepaciente" />  
					</div>

					<div class="form-group">
						<label for="profissaoconjuge">Profissão conjuge:</label>
						<input class="form-control" type="profissaoconjuge" id="profissaoconjuge" />	
					</div>
				</div>	
				
				<div class="row">
					<div class="form-group">
						<label for="procuradorpaciente1">Procurador 1:</label>
						<input class="form-control" type="procuradorpaciente1" id="procuradorpaciente1" />	
					</div>

					<div class="form-group">
						<label for="foneprocurador1">Contato:</label>
						<input class="form-control" type="foneprocurador1" id="foneprocurador1" ng-model="foneprocurador1" mask="(99)9999-9999"/>  
					</div>
				</div>
				
				<div class="row">
					<div class="form-group">
						<label for="procuradorpaciente1">Procurador 2:</label>
						<input class="form-control" type="procuradorpaciente2" id="procuradorpaciente2" />	
					</div>
					
					<div class="form-group">
						<label for="foneprocurador2">Contato:</label>
						<input class="form-control" type="foneprocurador2" id="foneprocurador2" ng-model="foneprocurador2" mask="(99)9999-9999"/> 
					</div>
				</div>


			</div>
		</div>	
		<br>
		<div class="row center-block text-center">
			<div class="col col-xs-6 col-md-5">
				<button class="btn btn-primary btn-lg btn-block">Cadastrar</button>
			</div>

			<div class="col col-xs-6 col-md-5">
				<button class="btn btn-warning btn-lg btn-block">Limpar</button>
			</div>
		</div>

	</form>

</div>