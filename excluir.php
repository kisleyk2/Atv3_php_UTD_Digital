<?php  

	include_once 'connect.php';
	include_once 'functions.php';

	# Repassando 'o nome da tabela' para a variável $t
	$t = $_POST['table'];

	# Excluindo o valor recebido do formulário com o campo 'nome tabela'
	unset($_POST['table']);
	
	# Excluindo último caractere do nome da tabela
	$new_t = substr($t, 0, -1);
	
	# Gravando os dados no banco
	$filter['id_'.$new_t] = $_POST['id_'.$new_t];	
	$result = delete($t, $filter);

	if($result AND $t == 'products')
		header("location: listaProdutos.php");
	elseif($result AND $t == 'clients') 
		header("location: listaClientes.php");
	elseif($result AND $t == 'suppliers') 
		header("location: listaFornecedores.php");
	else
		header("location: cadastroProduto.php?mgs=error");


?>