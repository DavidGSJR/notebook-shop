<?php
	session_start();
	$page_title = "Lista de Funcionários";
	include "../../includes/header.php";
	require_once "../../config/database.php";
?>
			
	<main class="flex-1">
		<div class="max-w-6xl mx-auto px-4 py-12">
			<div id="conteudo_especifico">
				  <div class="max-w-4xl mx-auto text-center">
					<h1 class="text-3xl font-bold text-center text-gray-800">Lista de Funcionários</h1>
				<p class="mt-2 text-sm text-gray-600">Visão geral dos funcionários cadastrados</p>
				  </div>
	
					<?php
	
					?>
				  </div>
			<div class="max-w-6xl mx-auto mt-6">		  
			<?php
				$conectar = conectar();		
				
				$sql_consulta = "SELECT id_Fun,
										nome_Fun, 
										cargo_Fun,
										telefone_Fun										
								 FROM 	funcionarios";											
				$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
				
				$linhas = mysqli_num_rows ($resultado_consulta);				
			?>
			<p class="text-sm text-gray-600 mb-4">Número de funcionários: <?php echo $linhas; ?></p>
		<div class="bg-white rounded-lg shadow p-6 overflow-x-auto">
			<?php if ($resultado_consulta && $linhas > 0) { ?>
				<table class="min-w-full divide-y divide-gray-200">
					<thead class="bg-gray-50">
						<tr>
							<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
							<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cargo</th>
							<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Telefone</th>
							<th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
						</tr>
					</thead>
					<tbody class="bg-white divide-y divide-gray-200">
						<?php while ($registro = mysqli_fetch_row($resultado_consulta)) { ?>
							<tr>
								<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo htmlspecialchars($registro[1]); ?></td>
								<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?php echo htmlspecialchars($registro[2]); ?></td>
								<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?php echo htmlspecialchars($registro[3]); ?></td>
								<td class="px-6 py-4 whitespace-nowrap text-right text-sm">
									<a href="altera.php?codigo=<?php echo htmlspecialchars($registro[0]); ?>" class="inline-block bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 mr-4">Alterar</a>
						<form method="post" action="../../process/funcionarios/excluir.php" onsubmit="return confirm('Confirmar exclusão?');" class="inline">
								<input type="hidden" name="codigo" value="<?php echo htmlspecialchars($registro[0]); ?>" />
								<button type="submit" class="text-white bg-red-500 px-3 py-1 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">Excluir</button>
							</form>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php } else { ?>
				<p class="text-sm text-gray-600">Ainda não existem funcionários cadastrados</p>
			<?php } ?>
		</div>
			</div>
		</div>
	</main>

<?php include "../../includes/footer.php"; ?>

