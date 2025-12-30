<?php
	session_start();
	require_once "../../config/database.php";
	$conectar = conectar();
	
	$login_Fun = $_POST["login"];
	$senha_Fun = $_POST["senha"];	
		
	$sql_consulta = "SELECT id_Fun,
							nome_Fun,
							cargo_Fun,
							telefone_Fun,
							login_Fun,
							senha_Fun
							
					 FROM 	funcionarios
					 WHERE 
							login_Fun = '$login_Fun' 
					 AND 
							senha_Fun = '$senha_Fun'";
					 
					 
	$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
	
	$linhas = mysqli_num_rows ($resultado_consulta);	
	
	if ($linhas == 1) {	
		// aqui ser criada a credencial de entrada no sistema
		$registro = mysqli_fetch_row($resultado_consulta);
		$_SESSION["nome_Fun"] = $registro[1];
		$_SESSION["login_Fun"] = $registro[4];
		$_SESSION["id_Fun"] = $registro[0];
		$_SESSION["cargo_Fun"]= $registro[2];
		
		echo "<script> 
					location.href = ('../../views/administracao.php') 
			  </script>";
	}
	else {
		echo "<script> 
				  alert ('Login ou Senha Incorretos! Digite Novamente!!') 
			  </script>";
		echo "<script> location.href = ('../../views/auth/index.php') </script>";
	}
?>

