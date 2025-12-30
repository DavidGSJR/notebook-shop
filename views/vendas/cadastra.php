<?php
	session_start();
	$page_title = "Efetuar Venda";
	include "../../includes/header.php";
	require_once "../../config/database.php";
?>
			
			<div id="conteudo_especifico">
				  <div class="max-w-4xl mx-auto text-center">
					<h1>Efetuar Venda </h1> 
				  </div>
				  <div class="mb-4">         
					<?php
					  include "../../includes/menu_local.php";
					?>
				  </div>
			<div class="max-w-6xl mx-auto mt-6">
					<form method="post" action="../../process/vendas/cadastra.php" 
															enctype="multipart/form-data">
			
			<table class="mx-auto">	
			
			<tr><td>
            <label nome="produto"> Produto </label>
            <select name="produto">
			
			<?php
            $conectar = conectar();   
            
            $sql_consulta = "SELECT *                       
                     
                        FROM 
                        notebooks";                      
            $resultado_consulta = mysqli_query ($conectar, $sql_consulta);
            
            $linhas = mysqli_num_rows ($resultado_consulta);

            while ($registro_notebook = mysqli_fetch_row($resultado_consulta)) {
                  ?>
          <option value="<?php echo $registro_notebook[0];?>"> <?php echo "ID:",$registro_notebook [0], " Valor:", number_format($registro_notebook [1],2,",","."); ?></option>
          <?php

          }

          ?></select></td></tr>

          <td>
          <label data="DataDaCompra">Data da Compra </label>
          <input name="data" type="date" required>
          </td>

          
																
          	<tr>
			<td colspan="2">
			<p> <input type="submit" value="Finalizar Venda"> </p>
			</td>
							</tr>
						</table>
					</form>
					</div>	
		</div>

<?php include "../../includes/footer.php"; ?>

