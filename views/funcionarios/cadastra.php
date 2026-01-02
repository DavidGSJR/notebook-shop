<?php 
	session_start();
	$page_title = "Cadastro de Funcionários";
	include "../../includes/header.php";
?>

	<main class="flex-1">
		  <div id="conteudo_especifico">
				  <div class="max-w-4xl mx-auto text-center">
				<h1 class="text-3xl font-bold text-center text-gray-800">Cadastro de Funcionários</h1>
				<p class="mt-2 text-sm text-gray-600">Preencha os campos abaixo para criar um novo funcionário.</p>
	

	
			   <div class="max-w-6xl mx-auto mt-6">

                <form method="post" action="../../process/funcionarios/cadastra.php" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                            <input id="nome" name="nome" type="text" required placeholder="Nome completo" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                        </div>
                        <div>
                            <label for="cargo" class="block text-sm font-medium text-gray-700">Cargo</label>
                            <input id="cargo" name="cargo" type="text" required placeholder="Ex: Administrador" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                        </div>
                        <div>
                            <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone</label>
                            <input id="telefone" name="telefone" type="text" placeholder="(11) 99999-9999" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                        </div>
                        <div>
                            <label for="login" class="block text-sm font-medium text-gray-700">Login</label>
                            <input id="login" name="login" type="text" required placeholder="Login" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                        </div>
                        <div class="md:col-span-2">
                            <label for="senha" class="block text-sm font-medium text-gray-700">Senha</label>
                            <input id="senha" name="senha" type="password" required placeholder="Senha" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                        </div>
                    </div>

                    <div class="mt-6 flex justify-center">
                        <input type="submit" value="Cadastrar Funcionário" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 cursor-pointer" />
                    </div>
                </form>

            </div>
	  </div>
	</main>

<?php include "../../includes/footer.php"; ?>

