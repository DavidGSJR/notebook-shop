<?php
	session_start();
	require_once "../../config/database.php";
	$conectar = conectar();
	
	$id_produto = $_POST["produto"];
	$data_venda = $_POST["data"];
	$id_funcionario = $_SESSION["id_Fun"];
	
	// Primeiro, inserir a venda
	$sql_cadastrar_venda = "INSERT INTO vendas (data_Vendas, id_Fun) 
					  VALUES ('$data_venda', '$id_funcionario')";
	
	$sql_resultado_venda = mysqli_query ($conectar, $sql_cadastrar_venda);
	
	if ($sql_resultado_venda == true) {
		// Pegar o ID da venda recém criada
		$id_venda = mysqli_insert_id($conectar);
		
		// Atualizar o notebook com o ID da venda
		$sql_atualizar_notebook = "UPDATE notebooks 
								   SET id_Vendas = '$id_venda'
								   WHERE id_Note = '$id_produto'";
		
		$sql_resultado_notebook = mysqli_query ($conectar, $sql_atualizar_notebook);
		
		if ($sql_resultado_notebook == true) {
			echo "<script>
					alert ('Venda cadastrada com sucesso') 
				  </script>";
			echo "<script>
					location.href = ('../../views/vendas/cadastra.php') 
				  </script>";		
		}
		else {
			echo "<script> 
					alert ('ocorreu um erro ao atualizar o produto') 
				  </script>";
			echo "<script> 
					location.href = ('../../views/vendas/cadastra.php') 
				  </script>";
		}
	}
	else { 	
		echo "<script> 
				alert ('ocorreu um erro no servidor ao tentar cadastrar a venda') 
			  </script>";
		echo "<script> 
				location.href = ('../../views/vendas/cadastra.php') 
			  </script>";
	}
?>

