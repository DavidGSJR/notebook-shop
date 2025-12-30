<?php
// Normaliza e verifica o cargo do usuário para decidir quais opções mostrar
$role = isset($_SESSION['cargo_Fun']) ? trim($_SESSION['cargo_Fun']) : '';
$role_lower = strtolower($role);

if (strpos($role_lower, 'admin') !== false) {
?>
		<div class="flex flex-wrap justify-center gap-6 mt-6">
			<a href="../views/funcionarios/menu.php" class="group w-44 bg-white rounded-lg p-4 shadow hover:shadow-lg transition flex flex-col items-center text-center" aria-label="Funcionários">
				<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-500 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 11a3 3 0 10-6 0 3 3 0 006 0z" />
				</svg>
				<span class="mt-2 text-sm font-medium text-gray-700">Funcionários</span>
			</a>

			<a href="../views/produtos/menu.php" class="group w-44 bg-white rounded-lg p-4 shadow hover:shadow-lg transition flex flex-col items-center text-center" aria-label="Produtos">
				<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-green-500 group-hover:text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9-4 9 4-9 4-9-4zM3 7v7a2 2 0 002 2h14a2 2 0 002-2V7" />
				</svg>
				<span class="mt-2 text-sm font-medium text-gray-700">Produtos</span>
			</a>

			<a href="../views/vendas/menu.php" class="group w-44 bg-white rounded-lg p-4 shadow hover:shadow-lg transition flex flex-col items-center text-center" aria-label="Vendas">
				<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-yellow-500 group-hover:text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M9 16h6M9 8h6M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2v-7" />
				</svg>
				<span class="mt-2 text-sm font-medium text-gray-700">Vendas</span>
			</a>
		</div>
<?php
	} elseif (strpos($role_lower, 'estoq') !== false) {
?>
		<div class="grid grid-cols-1 sm:grid-cols-1 gap-4 mt-6 justify-items-center max-w-md mx-auto">
			<a href="../views/produtos/cadastra.php" class="group bg-white rounded-lg p-4 shadow hover:shadow-lg transition flex flex-col items-center text-center">
				<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-green-500 group-hover:text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9-4 9 4-9 4-9-4zM3 7v7a2 2 0 002 2h14a2 2 0 002-2V7" />
				</svg>
				<span class="mt-2 text-sm font-medium text-gray-700">Produtos</span>
			</a>
		
		</div>
<?php
	}
	else  {
?>
			
		<div class="flex justify-center mt-6">
			<a href="../views/vendas/menu.php" class="group w-44 bg-white rounded-lg p-4 shadow hover:shadow-lg transition flex flex-col items-center text-center" aria-label="Vendas">
				<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-yellow-500 group-hover:text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M9 16h6M9 8h6M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2v-7" />
				</svg>
				<span class="mt-2 text-sm font-medium text-gray-700">Vendas</span>
			</a>
		</div>	
		 
<?php
	}
?>

