<?php 
	session_start();
	$page_title = "Alterar Produto";
	include "../../includes/header.php";
	require_once "../../config/database.php";
?>

          <div id="conteudo_especifico">
                  <div class="max-w-4xl mx-auto text-center">
                    <h1>Alterar dados do produto </h1> 
                  </div>
                  <div class="mb-4">         
                    <?php
                      include "../../includes/menu_local.php";
                    ?>
                  </div>    
          
          
		  <?php
			$conectar = conectar();
						
						$cod = $_GET["codigo"];
										
						$sql_pesquisa = "SELECT  id_Note, preco_Note
										 FROM notebooks
										 WHERE id_Note = '$cod'";
						$resultado_pesquisa = mysqli_query ($conectar, $sql_pesquisa);	
						
						$registro = mysqli_fetch_row($resultado_pesquisa);
					
					?>
					<form method="post" action="../../process/produtos/altera.php">
						<input type="hidden" name="codigo" value="<?php echo $registro[0]; ?>">
						<p>	Preço: <input type="text" name="preco" value = "<?php echo $registro[1]; ?>"> </p>
							
						<p> <input type="submit" value="Alterar Produto"> </p>
					</form>
        </div>        

<?php include "../../includes/footer.php"; ?>

