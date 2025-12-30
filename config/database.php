<?php
// Configuração centralizada do banco de dados
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "bd_notebook";

// Função para conectar ao banco
function conectar() {
	global $db_host, $db_user, $db_pass, $db_name;
	$conectar = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	return $conectar;
}
?>

