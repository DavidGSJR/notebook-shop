<?php
	session_start();
	require_once "../../config/database.php";
	$conectar = conectar();
	
	$cod = $_POST["codigo"];
	$preco = $_POST["preco"];	
						
	$sql_altera = "UPDATE notebooks 		
					   SET 		preco_Note = '$preco'
					   WHERE 	id_Note = '$cod'";
	$sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);

	if ($sql_resultado_alteracao == true)
	{
		echo "<script>
				alert ('Produto alterado com sucesso') 
			  </script>";
		echo "<script> 
				 location.href = ('../../views/produtos/lista.php') 
			  </script>";
		exit();
	}  
	else
	{    
		echo "<script> 
				alert ('Ocorreu um erro no servidor') 
			</script>";
		echo "<script> 
				location.href ('../../views/produtos/altera.php') 
			 </script>";
	}	

?>

