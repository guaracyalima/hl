<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<?
include "conexao.php";

$grava_fichacadastral = $_POST['fichacadastral'];
$grava_dtcadastro = $_POST['dtcadastro'];
$grava_cartaosus = $_POST['cartaosus'];
$grava_nomepaciente = $_POST['nomepaciente'];
$grava_endpacientepaciente = $_POST['endpacientepaciente'];
$grava_cpfpaciente = $_POST['cpfpaciente'];
$grava_dtnascpaciente = $_POST['dtnascpaciente'];
$grava_endpaciente = $_POST['endpaciente'];
$grava_numendpaciente = $_POST['numendpaciente'];
$grava_complendpaciente = $_POST['complendpaciente'];
$grava_bairropaciente = $_POST['bairropaciente'];
$grava_cidadepaciente = $_POST['cidadepaciente'];
$grava_cep = $_POST['cep'];
$grava_fonepaciente = $_POST['fonepaciente'];
$grava_celularpaciente = $_POST['celularpaciente'];
$grava_sexopaciente = $_POST['sexopaciente'];
$grava_estcivilpaciente = $_POST['estcivilpaciente'];
$grava_etniapaciente = $_POST['etniapaciente'];
$grava_religiao = $_POST['religiao'];
$grava_planSaude = $_POST['planSaude'];
$grava_tpsangue = $_POST['tpsangue'];
$grava_fatorrh = $_POST['fatorrh'];
$grava_doaorgaos = $_POST['doaorgaos'];
$grava_doasangue = $_POST['doasangue'];
$grava_insttratamento = $_POST['insttratamento'];
$grava_idiomapaciente = $_POST['idiomapaciente'];
$grava_naturalidadepaciente = $_POST['naturalidadepaciente'];
$grava_dtcasamentopaciente = $_POST['dtcasamentopaciente'];
$grava_conjugepaciente = $_POST['conjugepaciente'];
$grava_profissaoconjuge = $_POST['profissaoconjuge'];
$grava_procuradorpaciente1 = $_POST['procuradorpaciente1'];
$grava_procuradorpaciente2 = $_POST['procuradorpaciente2'];

//*******************************************************************

if($_GET['funcao'] == "gravar"){

print_r ($_POST);
$sql_gravar = mysql_query ("INSERT INTO cadastro(fichacadastral, dtcadastro, cartaosus, nomepaciente, endpacientepaciente, cpfpaciente, dtnascpaciente, endpaciente, numendpaciente, complendpaciente, bairropaciente, cidadepaciente, cep, fonepaciente, celularpaciente, sexopaciente, estcivilpaciente, etniapaciente, religiao, planSaude, tpsangue, fatorrh, doaorgaos, insttratamento, idiomapaciente, naturalidadepaciente, dtcasamentopaciente, conjugepaciente, profissaoconjuge, procuradorpaciente1, foneprocurador1, procuradorpaciente2, foneprocurador2 ) value ('$grava_fichacadastral', '$grava_dtcadastro', '$grava_cartaosus', '$grava_nomepaciente', '$grava_endpacientepaciente', '$grava_cpfpaciente', '$grava_dtnascpaciente', '$grava_endpaciente', '$grava_numendpaciente', '$grava_complendpaciente', '$grava_bairropaciente', '$grava_cidadepaciente', '$grava_cep', '$grava_fonepaciente', '$grava_celularpaciente', '$grava_sexopaciente', '$grava_estcivilpaciente', '$grava_etniapaciente', '$grava_religiao', '$grava_planSaude', '$grava_tpsangue', '$grava_fatorrh', '$grava_doaorgaos', '$grava_insttratamento' '$grava_idiomapaciente', '$grava_naturalidadepaciente', '$grava_dtcasamentopaciente', '$grava_conjugepaciente', '$grava_profissaoconjuge' '$grava_procuradorpaciente1', '$grava_foneprocurador1', '$grava_procuradorpaciente2', '$grava_foneprocurador2')") or die (mysql_error());
header('Location:login.php');

}

//*******************************************************************

if($_GET['funcao'] == "editar"){
$id = $_GET['id'];
$sql_alterar = mysql_query("UPDATE cadastro SET nome='$grava_nome', nomepaciente='$grava_nomepaciente','$grava_cidadepaciente', '$grava_doasangue', mensagem='$grava_mensagem' WHERE id = '$id'");
//header('Location:cadastro.php');
}

//*******************************************************************

if($_GET['funcao'] == "excluir"){
	$id = $_GET['id'];
	$sql_del = mysql_query("DELETE FROM cadastro WHERE id = '$id'");
//header('Location:cadastro.php');
}
?>