<?php 
	session_start();
	$page_title = "Cadastro de Produtos";
	include "../../includes/header.php";
	require_once "../../config/database.php";
?>

	<main class="flex-1">
		  <div id="conteudo_especifico">
                  <div class="max-w-4xl mx-auto text-center">
                    <h1 class="text-3xl font-bold text-gray-800">Cadastro de Produtos</h1>
					<p class="mt-2 text-sm text-gray-600">Adicione um novo produto ao catálogo.</p>
                  </div>
                  <div class="mb-4">         
                    <?php
                      // include "../../includes/menu_local.php"; // removido para esconder atalhos nesta tela
                    ?>
                  </div>    
               <div class="max-w-6xl mx-auto mt-6">
                

              <form method="post" action="../../process/produtos/cadastra.php" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                        <label for="marca" class="block text-sm font-medium text-gray-700">Marca</label> 
                <select id="marca" name="marca" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">             
          <?php
            $conectar = conectar();   
            
            $sql_consulta = "SELECT id_Marca, nome_Marca FROM marca";
            $resultado_consulta = mysqli_query ($conectar, $sql_consulta);
            while ($registro_marca = mysqli_fetch_row($resultado_consulta)) {
                  ?>
           <option value="<?php echo htmlspecialchars($registro_marca[0]); ?>"><?php echo htmlspecialchars($registro_marca[1]); ?></option>
          <?php
          }

          ?>
                 
            </select>
                </div>
                <div>
            <label for="tamanhotela" class="block text-sm font-medium text-gray-700">Tamanho da Tela</label>
            <select id="tamanhotela" name="tamanhotela" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
            <?php
            $conectar = conectar();   
            
            $sql_consulta = "SELECT 
                        id_Tela,
                        Tamanho_Tela 
                        FROM 
                        tela";                      
            $resultado_consulta = mysqli_query ($conectar, $sql_consulta);
            
            $linhas = mysqli_num_rows ($resultado_consulta);

            while ($registro_marca = mysqli_fetch_row($resultado_consulta)) {
                  ?>
           <option value="<?php echo htmlspecialchars($registro_marca[0]); ?>"><?php echo htmlspecialchars($registro_marca[1]); ?></option>
          <?php
          }

          ?>
            </select>
                </div>

                <div>
            <label for="sistemaoperacional" class="block text-sm font-medium text-gray-700">Sistema Operacional</label>
            <select id="sistemaoperacional" name="sistemaoperacional" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
           <?php
            $conectar = conectar();   
            
            $sql_consulta = "SELECT 
                        id_So,
                        nome_So 
                        FROM 
                        sistemaoperacional";                      
            $resultado_consulta = mysqli_query ($conectar, $sql_consulta);
            
            $linhas = mysqli_num_rows ($resultado_consulta);

            while ($registro_sistemaOperacional = mysqli_fetch_row($resultado_consulta)) {
                  ?>
           <option value="<?php echo htmlspecialchars($registro_sistemaOperacional[0]); ?>"><?php echo htmlspecialchars($registro_sistemaOperacional[1]); ?></option>
          <?php
          }

          ?>
            </select>
                </div>
                <div>
            <label for="memoria" class="block text-sm font-medium text-gray-700">Memória</label>
            <select id="memoria" name="memoria" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
             <?php
            $conectar = conectar();   
            
            $sql_consulta = "SELECT 
                        id_Memoria,
                       quantidade_Memoria 
                        FROM 
                        memoria";                      
            $resultado_consulta = mysqli_query ($conectar, $sql_consulta);
            
            $linhas = mysqli_num_rows ($resultado_consulta);

            while ($registro_memoria = mysqli_fetch_row($resultado_consulta)) {
                  ?>
           <option value="<?php echo htmlspecialchars($registro_memoria[0]); ?>"><?php echo htmlspecialchars($registro_memoria[1]); ?></option>
          <?php
          }

          ?>
            </select>
                </div>

                <div class="md:col-span-2">
                        <label for="processador" class="block text-sm font-medium text-gray-700">Processador</label>
                        <select id="processador" name="processador" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
             <?php
            $conectar = conectar();   
            
            $sql_consulta = "SELECT 
                        id_Processador,
                       nome_Processador 
                        FROM 
                        processador";                      
            $resultado_consulta = mysqli_query ($conectar, $sql_consulta);
            
            $linhas = mysqli_num_rows ($resultado_consulta);

            while ($registro_processador = mysqli_fetch_row($resultado_consulta)) {
                  ?>
           <option value="<?php echo htmlspecialchars($registro_processador[0]); ?>"><?php echo htmlspecialchars($registro_processador[1]); ?></option>
          <?php
          }

          ?>
            </select>
                </div>

            
            
                <div class="md:col-span-2">
                    <label for="preco" class="block text-sm font-medium text-gray-700">Preço</label>
                    <input id="preco" name="preco" type="text" placeholder="R$ 0,00" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2" />
                </div>
                </div>

                <div class="mt-6 flex justify-center">
                    <input type="submit" value="Cadastrar Produto" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600" />
                </div>
            </form> 
           <form method="post" action="../../process/produtos/nova_opcao.php" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow mt-6">
                <div>
                        <label for="tabelanovo" class="block text-sm font-medium text-gray-700">Inserir novo</label> 
            <select id="tabelanovo" name="tabelanovo" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
            <option value="1"> Marca </option>
            <option value="2"> Tamanho Tela  </option>
            <option value="3"> Sistema operacional </option>
            <option value="4"> Memoria </option>
            <option value="5"> Processador </option>
            </select>

            <input id="nomenovo" name="nomenovo" type="text" placeholder="Novo valor" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2" />


                    <div class="md:col-span-3 flex justify-center">
                        <input type="submit" value="Cadastrar" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600" />
                    </div>
                </div>
            </form>           

             
         </div>
	</main>
      </div>

<?php include "../../includes/footer.php"; ?>

