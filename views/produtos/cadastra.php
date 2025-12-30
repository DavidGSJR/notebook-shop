<?php 
	session_start();
	$page_title = "Cadastro de Produtos";
	include "../../includes/header.php";
	require_once "../../config/database.php";
?>

          <div id="conteudo_especifico">
                  <div class="max-w-4xl mx-auto text-center">
                    <h1 class="text-2xl font-semibold">Cadastro de Produtos</h1>
                  </div>
                  <div class="mb-4">         
                    <?php
                      include "../../includes/menu_local.php";
                    ?>
                  </div>    
               <div class="max-w-6xl mx-auto mt-6">
                
              <table border="0px">
              <form method="post" action="../../process/produtos/cadastra.php" 
                              enctype="multipart/form-data">
              <tr><td>  
               <label nome="marca"> Marca</label><br> 
                <select name="marca">             
          <?php
            $conectar = conectar();   
            
            $sql_consulta = "SELECT 
                        id_Marca,
                        nome_Marca 
                        FROM 
                        marca";                      
            $resultado_consulta = mysqli_query ($conectar, $sql_consulta);
            
            $linhas = mysqli_num_rows ($resultado_consulta);

            while ($registro_marca = mysqli_fetch_row($resultado_consulta)) {
                  ?>
           <option value="<?php echo $registro_marca[0];?>"> <?php echo $registro_marca[1]; ?> </option>
          <?php
          }

          ?>
                 
            </select>
            </td>                       
            <td>
            <label tamanhotela="tamanhotela">Tela</label><br>
            <select name="tamanhotela">
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
           <option value="<?php echo $registro_marca[0];?>"> <?php echo $registro_marca[1]; ?> </option>
          <?php
          }

          ?>
            </select></td>
         
           <tr> <td>
            <label sistemaoperacional="sistemaoperacional">Sistema Operacional</label><br>
            <select name="sistemaoperacional">
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
           <option value="<?php echo $registro_sistemaOperacional[0];?>"> <?php echo $registro_sistemaOperacional[1]; ?> </option>
          <?php
          }

          ?>
            </select></td>
            
            <td>
            <label memoria="memoria">Memoria</label><br>
            <select name="memoria">
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
           <option value="<?php echo $registro_memoria[0];?>"> <?php echo $registro_memoria[1]; ?> </option>
          <?php
          }

          ?>
            </select> </td></tr>

             <tr><td>
            <label nome="processador"> Processador</label><br>
            <select name="processador">
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
           <option value="<?php echo $registro_processador[0];?>"> <?php echo $registro_processador[1]; ?> </option>
          <?php
          }

          ?>
            </select></td></tr>

            
            
            <tr>
            <td>
             <label name="preco"> Preço</label>
            <input type="text" name="preco"  placeholder="preço"/>
           
            </td>
            <tr><td> 
            <input type="submit" value="Cadastrar Produto">
            </td></tr>
           </form>
           <form method="post" action="../../process/produtos/nova_opcao.php" 
                              enctype="multipart/form-data">
            <tr><td>
            <label nome="tabelanovo"> Inserir  Novo</label><br>
            <select name="tabelanovo">
            <option value="1"> Marca </option>
            <option value="2"> Tamanho Tela  </option>
            <option value="3"> Sistema operacional </option>
            <option value="4"> Memoria </option>
            <option value="5"> Processador </option>
            </select>

            <input type="text" name="nomenovo" placeholder="novo"/>

            </td></tr>
            <tr><td> 
            <input type="submit" value="Cadastrar ">
            </td></tr>
  
         </form>          
          </table>
             
         </div> 
        
      </div>

<?php include "../../includes/footer.php"; ?>

