<?php
	session_start();
	$page_title = "Alterar Funcionário";
	include "../../includes/header.php";
	require_once "../../config/database.php";
?>
<main class="flex-1">
    <div class="max-w-6xl mx-auto px-4 py-12">
        <div id="conteudo_especifico">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-3xl font-bold text-gray-800">Alterar dados do funcionário</h1>
                <p class="mt-2 text-sm text-gray-600">Atualize os dados do funcionário abaixo.</p>
            </div>


            <?php
						$conectar = conectar();
						
						$cod = $_GET["codigo"];
										
						$sql_pesquisa = "SELECT  id_Fun, nome_Fun, cargo_Fun, telefone_Fun
										 FROM funcionarios
										 WHERE id_Fun = '$cod'";
						$resultado_pesquisa = mysqli_query ($conectar, $sql_pesquisa);	
						
						$registro = mysqli_fetch_row($resultado_pesquisa);
					
					?>
            <form method="post" action="../../process/funcionarios/altera.php" class="bg-white p-6 rounded-lg shadow">
                <input type="hidden" name="codigo" value="<?php echo htmlspecialchars($registro[0]); ?>">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                        <input id="nome" name="nome" type="text" required
                            value="<?php echo htmlspecialchars($registro[1]); ?>"
                            class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                    </div>
                    <div>
                        <label for="cargo" class="block text-sm font-medium text-gray-700">Cargo</label>
                        <input id="cargo" name="cargo" type="text" required
                            value="<?php echo htmlspecialchars($registro[2]); ?>"
                            class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                    </div>
                    <div class="md:col-span-2">
                        <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone</label>
                        <input id="telefone" name="telefone" type="text"
                            value="<?php echo htmlspecialchars($registro[3]); ?>"
                            class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200" />
                    </div>
                </div>

                <div class="mt-6 flex justify-center">
                    <input type="submit" value="Salvar alterações"
                        class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 cursor-pointer" />
                </div>
            </form>
        </div>
    </div>
</main>

<?php include "../../includes/footer.php"; ?>