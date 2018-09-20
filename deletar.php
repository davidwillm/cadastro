<?php
session_start();
include_once("seguranca.php");
include_once("conexao.php");

$id = intval($_GET['id']);

$sql_code = "DELETE FROM cadastro WHERE idcadastro = '$id'";
$sql_query = mysqli_query($conn,$sql_code) or die (mysqli_error());

if ($sql_query){
	echo "<script>
window.alert('Exclusão efetuada com sucesso')
			window.location='consulta.php';
</script>
";
}
else{
	echo "<script> windows.alert('Erro ao deletar usuário')
			windows.location='consulta.php';</script>";
}

?>