<?php
	session_start();
	$page_title = "Lista de Produtos";
	include "../../includes/header.php";
	require_once "../../config/database.php";
?>
			
	<main class="flex-1">
		<div class="max-w-6xl mx-auto px-4 py-12">
			<div id="conteudo_especifico">
			  <div class="max-w-4xl mx-auto text-center">
				<h1 class="text-3xl font-bold text-gray-800">Lista de Produtos</h1>
				<p class="mt-2 text-sm text-gray-600">Produtos disponíveis no catálogo</p>
			  </div>

			  <div class="mb-4">
				<?php // include "../../includes/menu_local.php"; // removido para esconder atalhos nesta tela ?>
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
				
				
				
			if ($resultado_consulta && mysqli_num_rows($resultado_consulta) > 0) {

?>
			<div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
				<?php while ($registro = mysqli_fetch_row($resultado_consulta)) { ?>
					<div class="bg-white rounded-lg shadow p-5">
						<h3 class="text-lg font-semibold text-gray-800 mb-2"><?php echo htmlspecialchars($registro[2]); ?></h3>
						<p class="text-sm text-gray-600">Preço: R$ <?php echo number_format($registro[1], 2, ',', '.'); ?></p>
						<p class="text-sm text-gray-600">Memória: <?php echo htmlspecialchars($registro[3]); ?></p>
						<p class="text-sm text-gray-600">Sistema: <?php echo htmlspecialchars($registro[4]); ?></p>
						<p class="text-sm text-gray-600">Processador: <?php echo htmlspecialchars($registro[5]); ?> • Tela: <?php echo htmlspecialchars($registro[6]); ?> polegadas</p>
						<div class="mt-4 flex justify-end gap-2">
							<a href="altera.php?codigo=<?php echo htmlspecialchars($registro[0]); ?>" class="inline-block bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">Alterar</a>
							<form method="post" action="../../process/produtos/excluir.php" class="inline" onsubmit="return confirm('Confirmar exclusão?');">
								<input type="hidden" name="codigo" value="<?php echo htmlspecialchars($registro[0]); ?>" />
								<button type="submit" class="text-white bg-red-500 px-3 py-1 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">Excluir</button>
							</form>
						</div>
					</div>
				<?php } ?>
				</div>
				<?php
				}
				else {
					echo "<h3> Ainda não existem produtos cadastrados </h3>";
				}
			?>
			</div>
			</div>
	</main>

<?php include "../../includes/footer.php"; ?>

