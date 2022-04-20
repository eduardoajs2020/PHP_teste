
<?php



//include "servicos/servicoMensagemSessao.php";
//include "servicos/servicoValidacao.php";
//include "servicos/servicoCategoriaCompetidor.php";

include "Servicos/servicoNivelColesterol.php";
include "Servicos/servicoValidacao.php";
//include "css/style.php";

$nome=$_POST['nome'];
$idade=$_POST['idade'];
$resultado=$_POST['resultado'];

//var_dump($nome=$_POST['nome']);
//var_dump($idade=$_POST['idade']);
//var_dump($resultado=$_POST['resultado']);

defineNivelColesterol($nome, $idade, $resultado);

//header('location: Index.php');

?>
