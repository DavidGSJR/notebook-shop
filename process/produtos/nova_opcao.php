<?php
	session_start();
	require_once "../../config/database.php";
	$conectar = conectar();
	
	$tabelanovo = $_POST["tabelanovo"];
	$nomenovo = $_POST["nomenovo"];

	if($tabelanovo == 1){
	$sql_cadastrar = "INSERT INTO marca (nome_Marca)
										
					  VALUES ('$nomenovo')";
											
	$sql_resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);

	

	if ($sql_resultado_cadastrar == true) { 	
		echo "<script>
				alert ('Nova marca cadastrada com sucesso') 
			  </script>";
		echo "<script>
				location.href = ('../../views/produtos/cadastra.php') 
			  </script>";		
	}else { 	
		echo "<script> 
				alert ('ocorreu um erro no servidor ao 
											tentar cadastrar') 
			  </script>";
		echo "<script> 
				location.href = ('../../views/produtos/cadastra.php') 
			  </script>";
	
	}
}
	if($tabelanovo == 2){
	$sql_cadastrar = "INSERT INTO tela (Tamanho_Tela)
										
					  VALUES 			('$nomenovo')";
											
	$sql_resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);

	

	if ($sql_resultado_cadastrar == true) { 	
		echo "<script>
				alert ('Nova tela cadastrada com sucesso') 
			  </script>";
		echo "<script>
				location.href = ('../../views/produtos/cadastra.php') 
			  </script>";		
	}else { 	
		echo "<script> 
				alert ('ocorreu um erro no servidor ao 
											tentar cadastrar') 
			  </script>";
		echo "<script> 
				location.href = ('../../views/produtos/cadastra.php') 
			  </script>";
	
	}
}

	if($tabelanovo == 3){
	$sql_cadastrar = "INSERT INTO sistemaoperacional (nome_So)
										
					  VALUES 			('$nomenovo')";
											
	$sql_resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);

	

	if ($sql_resultado_cadastrar == true) { 	
		echo "<script>
				alert ('Novo sistema operacional cadastrada com sucesso') 
			  </script>";
		echo "<script>
				location.href = ('../../views/produtos/cadastra.php') 
			  </script>";		
	}else { 	
		echo "<script> 
				alert ('ocorreu um erro no servidor ao 
											tentar cadastrar') 
			  </script>";
		echo "<script> 
				location.href = ('../../views/produtos/cadastra.php') 
			  </script>";
	
	}
}

	if($tabelanovo == 4){
	$sql_cadastrar = "INSERT INTO memoria (quantidade_Memoria)
										
					  VALUES 			('$nomenovo')";
											
	$sql_resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);

	

	if ($sql_resultado_cadastrar == true) { 	
		echo "<script>
				alert ('Nova memoria cadastrada com sucesso') 
			  </script>";
		echo "<script>
				location.href = ('../../views/produtos/cadastra.php') 
			  </script>";		
	}else { 	
		echo "<script> 
				alert ('ocorreu um erro no servidor ao 
											tentar cadastrar') 
			  </script>";
		echo "<script> 
				location.href = ('../../views/produtos/cadastra.php') 
			  </script>";
	
	}
}


	if($tabelanovo == 5){
	$sql_cadastrar = "INSERT INTO processador (nome_Processador)
										
					  VALUES 			('$nomenovo')";
											
	$sql_resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);




	if ($sql_resultado_cadastrar == true) { 	
		echo "<script>
				alert ('Novo processador cadastrada com sucesso') 
			  </script>";
		echo "<script>
				location.href = ('../../views/produtos/cadastra.php') 
			  </script>";		
	}else { 	
		echo "<script> 
				alert ('ocorreu um erro no servidor ao 
											tentar cadastrar') 
			  </script>";
		echo "<script> 
				location.href = ('../../views/produtos/cadastra.php') 
			  </script>";
	
	}
 }
?>

