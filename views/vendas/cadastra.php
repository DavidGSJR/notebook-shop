<?php
	session_start();
	$page_title = "Efetuar Venda";
	include "../../includes/header.php";
	require_once "../../config/database.php";
?>
			
	<main class="flex-1">
		<div id="conteudo_especifico" class="max-w-6xl mx-auto px-4 py-12">
		  <div class="max-w-4xl mx-auto text-center">
			<h1 class="text-3xl font-bold text-gray-800">Efetuar Venda</h1>
			<p class="mt-2 text-sm text-gray-600">Registre uma nova venda</p>
		  </div>
				  <div class="mb-4">         
					<?php
					  // include "../../includes/menu_local.php"; // removido para esconder atalhos nesta tela
					?>
				  </div>
			<div class="max-w-6xl mx-auto mt-6">
				<form method="post" action="../../process/vendas/cadastra.php" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow max-w-xl mx-auto">
					<div class="grid grid-cols-1 gap-4">

			
			<div>
            <label for="produto" class="block text-sm font-medium text-gray-700">Produto</label>
            <select id="produto" name="produto" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
			
			<?php
            $conectar = conectar();   
            
            $sql_consulta = "SELECT *                       
                     
                        FROM 
                        notebooks";                      
            $resultado_consulta = mysqli_query ($conectar, $sql_consulta);
            
            $linhas = mysqli_num_rows ($resultado_consulta);

            while ($registro_notebook = mysqli_fetch_row($resultado_consulta)) {
                  ?>
          <option value="<?php echo htmlspecialchars($registro_notebook[0]); ?>"><?php echo 'ID: '.htmlspecialchars($registro_notebook[0]).' Valor: '.number_format($registro_notebook[1],2,',','.'); ?></option>
          <?php

          }

          ?>
            </select>
            </div>
            <div>
            <label for="data" class="block text-sm font-medium text-gray-700">Data da Compra</label>
            <input id="data" name="data" type="date" required class="mt-1 block w-full border border-gray-300 rounded px-3 py-2" />
            </div>

          
																
          	
			
			<div class="pt-4">
					<div class="flex justify-center">
						<input type="submit" value="Finalizar Venda" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 cursor-pointer" />
					</div>
				</div>
				</div>
			</form>
		</div>
	</main>

<?php include "../../includes/footer.php"; ?>

