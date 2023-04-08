<?php  

	include_once 'connect.php';
	include_once 'functions.php';

	# Repassando 'o nome da tabela' para a variável $t
	$t = $_POST['table'];
	echo $t;

	# Excluindo o valor recebido do formulário com o campo 'nome tabela'
	unset($_POST['table']); 
	
	# Gravando os dados no banco
	$result = insert($t, $_POST);	

	if($result AND $t == 'products')
		header("location: listaProdutos.php");
	elseif($result AND $t == 'clients') 
		header("location: listaClientes.php");
	elseif($result AND $t == 'suppliers') 
		header("location: listaFornecedores.php");
	else
		header("location: cadastroProduto.php?mgs=error");		
	

?>