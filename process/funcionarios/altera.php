<?php
	session_start();
	require_once "../../config/database.php";
	$conectar = conectar();
	
	$cod = $_POST["codigo"];
	$nome = $_POST["nome"];
	$cargo = $_POST["cargo"];
	$telefone = $_POST["telefone"];	
						
	$sql_altera = "UPDATE funcionarios 		
					   SET 		nome_Fun = '$nome', 
								cargo_Fun = '$cargo',
								telefone_Fun = '$telefone'
					   WHERE 	id_Fun = '$cod'";
	$sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);

	if ($sql_resultado_alteracao == true)
	{
		echo "<script>
				alert ('Funcionário alterado com sucesso') 
			  </script>";
		echo "<script> 
				 location.href = ('../../views/funcionarios/lista.php') 
			  </script>";
		exit();
	}  
	else
	{    
		echo "<script> 
				alert ('Ocorreu um erro no servidor') 
			</script>";
		echo "<script> 
				location.href ('../../views/funcionarios/altera.php') 
			 </script>";
	}	

?>

