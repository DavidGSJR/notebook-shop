<?php 
  session_start();
  $page_title = "Vendas";
  include "../../includes/header.php";
?>

                <div id="conteudo_especifico">
                    <div class="flex justify-center">
			
<div class="flex flex-wrap justify-center gap-6 mt-6 max-w-2xl mx-auto">
				<a href="cadastra.php" class="group w-44 bg-white rounded-lg p-4 shadow hover:shadow-lg transition flex flex-col items-center text-center">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-yellow-500 group-hover:text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M9 16h6M9 8h6M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2v-7" />
					</svg>
					<span class="mt-2 text-sm font-medium text-gray-700">Efetuar Vendas</span>
				</a>
				<a href="lista.php" class="group w-44 bg-white rounded-lg p-4 shadow hover:shadow-lg transition flex flex-col items-center text-center">
						<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-500 group-hover:text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h18M3 12h18M3 19h18" />
						</svg>
						<span class="mt-2 text-sm font-medium text-gray-700">Listar Vendas</span>
					</a>
				</div>
			
					</div>
                        
                </div>


<?php include "../../includes/footer.php"; ?>

