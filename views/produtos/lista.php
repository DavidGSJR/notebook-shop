<?php
	session_start();
	$page_title = "Lista de Produtos";
	include "../../includes/header.php";
	require_once "../../config/database.php";
?>
			
			<div id="conteudo_especifico">
				  <div class="max-w-4xl mx-auto text-center">
					<h1>Lista de Produtos </h1> 
				  </div>
				  <div class="mb-4">         
					<?php
					  include "../../includes/menu_local.php";
					?>
				  </div>
			<div class="max-w-6xl mx-auto mt-6">		  
				<?php
				$conectar = conectar();		
				
				$sql_consulta = "SELECT n.id_Note, n.preco_Note, m.nome_Marca, me.quantidade_Memoria, s.nome_So, p.nome_Processador, t.Tamanho_Tela
								FROM	notebooks as n
								JOIN	marca as m ON n.id_Marca = m.id_Marca
								JOIN	memoria as me ON n.id_Memoria = me.id_Memoria
								JOIN	sistemaoperacional as s ON n.id_So = s.id_So
								JOIN	processador as p ON n.id_Processador = p.id_Processador
								JOIN	tela as t ON n.id_Tela = t.id_Tela";											
				$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
				
				
				
				if ($resultado_consulta) {

					while ($registro = mysqli_fetch_row($resultado_consulta)) {
						echo "<p> Marca: $registro[2] </p>";
						echo "<p> Preço: $registro[1] </p>";
						echo "<p> Memoria: $registro[3] </p>";
						echo "<p> Sistema Operacional: $registro[4] </p>";
						echo "<p> Processador: $registro[5] </p>";
						echo "<p> Tela: $registro[6] polegadas </p>";
						?>
				<td>
					<a href="altera.php?codigo=<?php echo $registro[0]?>">
						Alterar	
					</a>	
				</td>
			
				<?php
						echo " <hr> ";						
					}
				}
				else {
					echo "<h3> Ainda não existem produtos cadastrados </h3>";
				}
			?>
			</div>	
		</div>

<?php include "../../includes/footer.php"; ?>

