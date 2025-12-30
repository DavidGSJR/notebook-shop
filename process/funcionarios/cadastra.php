<?php
	session_start();
	require_once "../../config/database.php";
	$conectar = conectar();
	
	$nome = $_POST["nome"];
	$cargo = $_POST["cargo"];
	$telefone = $_POST["telefone"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];	

	$sql_cadastrar = "INSERT INTO funcionarios (nome_Fun,
										cargo_Fun,
										telefone_Fun,
										login_Fun,
										senha_Fun)										
					  VALUES
										('$nome',
					  					'$cargo',
					  					'$telefone',
					  					'$login',
										'$senha')";
											
	$sql_resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);

	
	if ($sql_resultado_cadastrar == true) { 	
		echo "<script>
				alert ('Funcionário cadastrado com sucesso') 
			  </script>";
		echo "<script>
				location.href = ('../../views/funcionarios/cadastra.php') 
			  </script>";		
	}
	else { 	
		echo "<script> 
				alert ('ocorreu um erro no servidor ao 
											tentar cadastrar') 
			  </script>";
		echo "<script> 
				location.href = ('../../views/funcionarios/cadastra.php') 
			  </script>";
	
	}
		
		

?>

