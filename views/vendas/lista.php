<?php
	session_start();
	$page_title = "Lista de Vendas";
	include "../../includes/header.php";
	require_once "../../config/database.php";
?>
			
			<div id="conteudo_especifico">
				  <div class="max-w-4xl mx-auto text-center">
					<h1>Lista de Vendas </h1> 
				  </div>
				  <div class="mb-4">         
					<?php
					  include "../../includes/menu_local.php";
					?>
				  </div>
			<div class="max-w-6xl mx-auto mt-6">		  
			<?php
				$conectar = conectar();		
				
				$sql_consulta = "SELECT v.id_Vendas, v.data_Vendas, f.nome_Fun, n.preco_Note
								FROM vendas as v
								JOIN funcionarios as f ON v.id_Fun = f.id_Fun
								JOIN notebooks as n ON n.id_Vendas = v.id_Vendas";											
				$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
				
				$linhas = mysqli_num_rows ($resultado_consulta);				
				echo "<h3> Número de vendas: $linhas </h3>";
				
				if ($resultado_consulta) {

					while ($registro = mysqli_fetch_row($resultado_consulta)) {
						echo "<p> ID Venda: $registro[0] </p>";
						echo "<p> Data: $registro[1] </p>";
						echo "<p> Vendedor: $registro[2] </p>";
						echo "<p> Valor: R$ " . number_format($registro[3], 2, ",", ".") . " </p>";
						echo " <hr> ";						
					}
				}
				else {
					echo "<h3> Ainda não existem vendas cadastradas </h3>";
				}
			?>
			</div>	
		</div>

<?php include "../../includes/footer.php"; ?>

