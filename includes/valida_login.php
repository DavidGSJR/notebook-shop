<?php
	if ( isset($_SESSION["nome_Fun"]) ) {
		
		echo $_SESSION["nome_Fun"];
		
	}
	else {
	
		echo "<script> 
				alert ('Você não está logado!!!') 
			  </script>";
			
		echo "<script> 
				location.href = ('../views/auth/index.php') 
			  </script>";
	}
?>

