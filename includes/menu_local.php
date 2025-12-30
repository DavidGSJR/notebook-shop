<?php
$role = isset($_SESSION['cargo_Fun']) ? trim($_SESSION['cargo_Fun']) : '';
$role_lower = strtolower($role);

if (strpos($role_lower, 'admin') !== false) {
?>
		<ul>
			<a href="../views/funcionarios/menu.php" ><h3>Funcionários</h3></a>
				<p><a href="../views/funcionarios/cadastra.php" >Cadastrar de Funcionários</a></p>
				<p><a href="../views/funcionarios/lista.php">Lista/Altera Funcionários</a></p>
				
			<a href="../views/produtos/menu.php" ><h3>Produtos</h3></a>
				<p><a href="../views/produtos/cadastra.php">Cadastrar de Produto</a></p>    
				<p><a href="../views/produtos/lista.php">Lista/Altera Produtos</a></p>
				
			<h3>Vendas</h3>
				<p><a href="../views/vendas/cadastra.php">Nova Venda</a></p>    
				<p><a href="../views/vendas/lista.php">Lista de Vendas</a></p>  						
		</ul> 
<?php
	} elseif (strpos($role_lower, 'estoq') !== false) {
?>
		<ul>
			<a href="../views/produtos/menu.php" ><h3>Produtos</h3></a>
				<p><a href="../views/produtos/cadastra.php">Cadastrar de Produto</a></p>    
				<p><a href="../views/produtos/altera.php">Alterar Produto</a></p>
				<p><a href="../views/produtos/lista.php">Lista de Produtos</a></p>
			  						
		</ul>
<?php
	}
	else  {
?>
		<ul>
			<h3>Vendas</h3>
				<p><a href="../views/vendas/cadastra.php">Nova Venda</a></p>    
				<p><a href="../views/vendas/lista.php">Lista de Vendas</a></p>    						
		</ul>
<?php
	}
?>

