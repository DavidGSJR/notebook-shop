<?php 
  session_start();
  $page_title = "Funcionários";
  include "../../includes/header.php";
?>

<main class="flex-1">
    <div class="max-w-6xl mx-auto px-4 py-12">
        <div class="bg-white rounded-lg shadow p-6">
            <header class="mb-6">
                <h1 class="text-3xl font-bold text-center text-gray-800">Funcionários</h1>
            </header>

            <div class="flex items-center justify-center min-h-[160px]">
                <div class="flex flex-wrap justify-center gap-6 max-w-2xl">
                    <a href="cadastra.php"
                        class="group w-44 bg-white rounded-lg p-4 shadow hover:shadow-lg transition flex flex-col items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 text-indigo-500 group-hover:text-indigo-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        <span class="mt-2 text-sm font-medium text-gray-700">Cadastrar Funcionário</span>
                    </a>
                    <a href="lista.php"
                        class="group w-44 bg-white rounded-lg p-4 shadow hover:shadow-lg transition flex flex-col items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 text-gray-500 group-hover:text-gray-600" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5h18M3 12h18M3 19h18" />
                        </svg>
                        <span class="mt-2 text-sm font-medium text-gray-700">Listar Funcionários</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</main>

<?php include "../../includes/footer.php"; ?>