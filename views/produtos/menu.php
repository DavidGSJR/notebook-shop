<?php 
  session_start();
  $page_title = "Produtos";
  include "../../includes/header.php";
?>

<div id="conteudo_especifico">
<main class="flex-1">
    <div class="max-w-6xl mx-auto px-4 py-12">
        <div class="bg-white rounded-lg shadow p-6">
            <header class="mb-6">
                <h1 class="text-3xl font-bold text-center text-gray-800">Produtos</h1>
            </header>

            <div class="flex items-center justify-center min-h-[160px]">
                <div class="flex flex-wrap justify-center gap-6 max-w-2xl">
                    <a href="cadastra.php"
                        class="group w-44 bg-white rounded-lg p-4 shadow hover:shadow-lg transition flex flex-col items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 text-green-500 group-hover:text-green-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7l9-4 9 4-9 4-9-4zM3 7v7a2 2 0 002 2h14a2 2 0 002-2V7" />
                        </svg>
                        <span class="mt-2 text-sm font-medium text-gray-700">Cadastrar Produto</span>
                    </a>
                    <a href="lista.php"
                        class="group w-44 bg-white rounded-lg p-4 shadow hover:shadow-lg transition flex flex-col items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 text-gray-500 group-hover:text-gray-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5h18M3 12h18M3 19h18" />
                        </svg>
                        <span class="mt-2 text-sm font-medium text-gray-700">Listar Produtos</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</main>
</div>

<?php include "../../includes/footer.php"; ?>
