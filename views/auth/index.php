<?php 
	session_start();
	$page_title = "Home - Login";
	include "../../includes/header.php";
?>

<main class="flex-1 flex items-center justify-center">
<div class="content max-w-md mx-auto p-6 bg-white rounded shadow">
					<form method="post" action="../../process/auth/login.php"> 
			          <h1 class="text-2xl font-bold mb-4 text-center">Login</h1> 
			          <p> 
			            <!--FORMULÁRIO DE LOGINrequired = "obrigatório"-->
			            <label name="login" class="block text-sm font-medium text-gray-700">Login</label>
			            <input name="login"   required="required" type="text" placeholder="ex. nome" class="w-full border border-gray-300 rounded px-3 py-2 mb-3"/>
			          </p>
			           
			          <p> 
			            <label name="senha" class="block text-sm font-medium text-gray-700">Senha</label>
			            <input name="senha"  required="required"  type="password" placeholder="ex. senha" class="w-full border border-gray-300 rounded px-3 py-2 mb-4" /> 
			          </p>
			                
			           <p class="text-center"> 
			            <input type="submit" value="Entrar" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 cursor-pointer"/> 
			          </p>

			        </form>
				
</div>
</main>

<?php include "../../includes/footer.php"; ?>

