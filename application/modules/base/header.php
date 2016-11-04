<?php 
include '../functions/functions.php';
//include '../users/mostra-alerta.php';
//mostraAlerta("success");
// mostraAlerta("danger");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Hospital Livre</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../../assets/css/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- <script src="bower_components/angular/angular.js"></script>
	<script src="bower_components/ngMask/dist/ngMask.js"></script>
	<script src="bower_components/cpf_cnpj/build/cpf.js"></script>
	<script src="bower_components/cpf_cnpj/build/cnpj.js"></script>
	<script src="bower_components/ng-cpf-cnpj/lib/ngCpfCnpj.js"></script>
	<script src="js/app.js"></script> -->	
</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pacientes<span class="caret"></span></a>
        <ul class="dropdown-menu">
		  <li><a href="#">Cadastrar</a></li>
		  <li><a href="#">Consultar</a></li>
		  <li><a href="#">Triagem</a></li>
		  <li><a href="#">Agendar</a>  </li>
        </ul>
      </li>
	  
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Recepção<span class="caret"></span></a>
        <ul class="dropdown-menu">
		  <li><a href="#">Abrir caixa</a></li>
		  <li><a href="#">Extratos/Lançamentos/Fechamento</a></li>
		  <li><a href="#">Agendamento</a></li>
		  <li><a href="#">Sala de espera</a></li>
		</ul>
      </li>
	  
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Médicos<span class="caret"></span></a>
		<ul class="dropdown-menu">
		  <li><a href="#">Atendimento</a></li>
		  <li><a href="#">Receituário</a></li>
        </ul>
      </li>
	  
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Ambulatório<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
	  
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Enfermagem<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
	  
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Laboratório<span class="caret"></span></a>
        <ul class="dropdown-menu">
		  <li><a href="#">Solicitar exames</a></li>
		  <li><a href="#">Verificar exames</a></li>
        </ul>
      </li>
	  
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Farmácia<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../farmacia/tiporeceita.php">Receitas</a></li>
          <li><a href="../farmacia/dadosfarmacia.php">Dados</a></li>
          <li><a href="../farmacia/exclusaotpreceita.php">Excluir tipos receita</a></li>          
          <li><a href="../farmacia/inclufarmaceutico.php">Incluir farmaceutico</a></li>
          <li><a href="../farmacia/inclumedicacao.php">Incluir medicação</a></li>
          <li><a href="../farmacia/incluprograns.php">Incluir programas</a></li>
          <li><a href="../farmacia/inclusaoclassificacao.php">Classificação</a></li>
        </ul>
      </li>
	  
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Radiologia<span class="caret"></span></a>
        <ul class="dropdown-menu">
			<li><a href="#">Solicitação de exames</a></li>
				<li><a href="#">Solicitação pendente</a></li>
					<li><a href="#">Imagens DICOM</a></li>
						<li><a href="#">Upload DICOM</a></li>
							<li><a href="#">Imagens DICOM</a></li>
								<li><a href="#">Selecionar visualizador</a></li>
		</ul>
      </li>
	  
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Marketing<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
	  
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">TISS<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Cadastros</a></li>
          <li><a href="#">Guia de consulta</a></li>
          <li><a href="#">Guia SP/Sadt</a></li>
		  <li><a href="#">Guia de honorários</a></li>
        </ul>
      </li>
	  
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Estoque<span class="caret"></span></a>
        <ul class="dropdown-menu">
			<li><a href="#">Cadastrar</a></li>
			<li><a href="#">Consultar</a></li>
			<li><a href="#">Itens em falta</a></li>
			<li><a href="#">Itens em quantidade mínima</a></li>
			</ul>
      </li>
	  
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Configurações<span class="caret"></span></a>
        <ul class="dropdown-menu">
			<li><a href="cadfuncionarios.php">Cadastrar funcionário</a></li>
		</ul>
      </li>
	  
    </ul>
  </div>
</nav>