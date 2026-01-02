<?php
	session_start();
	$page_title = "Lista de Vendas";
	include "../../includes/header.php";
	require_once "../../config/database.php";
?>
			
	<main class="flex-1">
		<div class="max-w-6xl mx-auto px-4 py-12">
			<div id="conteudo_especifico">
			  <div class="max-w-4xl mx-auto text-center">
				<h1 class="text-3xl font-bold text-gray-800">Lista de Vendas</h1>
				<p class="mt-2 text-sm text-gray-600">Relatório de vendas</p>
			  </div>

			  <div class="mb-4">
				<?php // include "../../includes/menu_local.php"; // removido para esconder atalhos nesta tela ?>
			  </div>
			<div class="max-w-6xl mx-auto mt-6">		  
			<?php
				$conectar = conectar();		
				
				$sql_consulta = "SELECT v.id_Vendas, v.data_Vendas, f.nome_Fun, n.preco_Note
								FROM vendas as v
								JOIN funcionarios as f ON v.id_Fun = f.id_Fun
								JOIN notebooks as n ON n.id_Vendas = v.id_Vendas";											
				$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
				
				$linhas = mysqli_num_rows($resultado_consulta);
				?>
				<p class="text-sm text-gray-600 mb-4">Número de vendas: <?php echo $linhas; ?></p>
				<?php if ($resultado_consulta && $linhas > 0): ?>
				<div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

					<?php while ($registro = mysqli_fetch_row($resultado_consulta)): ?>
							<div class="bg-white rounded-lg shadow p-5">
								<p class="text-sm text-gray-600">ID: <?php echo htmlspecialchars($registro[0]); ?></p>
								<p class="text-sm text-gray-600">Data: <?php echo date('d/m/Y', strtotime($registro[1])); ?></p>
								<p class="text-sm text-gray-600">Vendedor: <?php echo htmlspecialchars($registro[2]); ?></p>
								<p class="text-sm text-gray-600">Valor: R$ <?php echo number_format($registro[3], 2, ',', '.'); ?></p>
							</div>
						<?php endwhile; ?>
				</div>
				<?php else: ?>
					<p class="text-sm text-gray-600">Ainda não existem vendas cadastradas</p>
				<?php endif; ?>
</div>
		</div>
	</main>

<?php include "../../includes/footer.php"; ?>

