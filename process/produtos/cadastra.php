<?php
	session_start();
	require_once "../../config/database.php";
	$conectar = conectar();
	
	$preco_Note = $_POST["preco"];
	$nome_Marca = $_POST["marca"];
	$quantidade_Memoria = $_POST["memoria"];
	$nome_So= $_POST["sistemaoperacional"];
	$nome_Processador = $_POST["processador"];
	$Tamanho_Tela = $_POST["tamanhotela"];	
	$preco_Note = str_replace(".", "", $preco_Note);
	$preco_Note = str_replace(",", ".", $preco_Note);

	$sql_cadastrar = "INSERT INTO notebooks (preco_Note,
										id_Marca,
										id_Memoria,
										id_So,
										id_Processador,
										id_Tela) 
					  VALUES 			($preco_Note,
					  					'$nome_Marca',
					  					'$quantidade_Memoria',
					  					'$nome_So',
										'$nome_Processador', 
										'$Tamanho_Tela'
										)";
											
	$sql_resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);

	
	if ($sql_resultado_cadastrar == true) { 	
		echo "<script>
				alert ('produto cadastrado com sucesso') 
			  </script>";
		echo "<script>
				location.href = ('../../views/produtos/cadastra.php') 
			  </script>";		
	}
	else { 	
		echo "<script> 
				alert ('ocorreu um erro no servidor ao 
											tentar cadastrar') 
			  </script>";
		echo "<script> 
				location.href = ('../../views/produtos/cadastra.php') 
			  </script>";
	
	}
		
		

?>

