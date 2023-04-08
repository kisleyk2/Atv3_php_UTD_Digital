<?php 
	
	require_once 'connect.php';
	require_once 'functions.php';

	if(isset($_GET['id'])){
		$filter['id_client'] = $_GET['id'];
		$client = select("clients", null, $filter, " LIMIT 1")[0];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Formulario de Edição </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	
	<?php include_once 'components/menu.php'; ?>

	<div class="container-fluid">
	  <div class="row">	  	
	  	<div class="col-8 offset-2">
          <form action="editar.php" method="POST">
				<div class="card">
				  <div class="card-header">
				    Cadastro de Fornecedor
				  </div>
				  <div class="card-body">
				    <div class="row">
                        <input type="hidden" name="table" value="clients" required><br>

                        <div class="col-md-6">
                            <label> Nome Cliente: <span class="text-danger">*</span> </label><br>
                            <input type="text" name="client_name" class="form-control" required placeholder="Digite o nome" value="<?=$client['client_name'];?>"><br>
                        </div>

                        <div class="col-md-6">
                            <label> Email: <span class="text-danger">*</span></label><br>
                            <input type="email" name="client_email" class="form-control" required placeholder="Digite o Email" value="<?=$client['client_email'];?>"><br>
                        </div>

                        <div class="col-md-4">
                            <label> Senha: <span class="text-danger">*</span> </label><br>
                            <input type="password" name="client_password" class="form-control" required placeholder="Digite a Senha" value="<?=$client['client_name'];?>"><br>
                        </div>

                        <div class="col-md-4">
                            <label> CPF: <span class="text-danger">*</span></label><br>
                            <input type="text" name="client_cpf" class="form-control" required placeholder="Digite o CPF"  maxlength="14" value="<?=$client['client_cpf'];?>"><br>
                        </div>

                        <div class="col-md-4">
                            <label> Telefone: <span class="text-danger">*</span></label><br>
                            <input type="text" name="client_phone" class="form-control" required placeholder="Digite o Telefone" maxlength="16" value="<?=$client['client_phone'];?>"><br>
                        </div>

                        <div class="col-md-4">
                            <label> Tipo: <span class="text-danger">*</span></label><br>
                            <input type="text" name="client_type" class="form-control" required placeholder="Digite o Tipo de Cliente" value="<?=$client['client_type'];?>"><br>
                        </div>

                        <div class="col-md-8">
                            <label> Endereço: <span class="text-danger">*</span></label><br>
                            <input type="text" name="client_adddress" class="form-control" required placeholder="Digite o Endereço do Cliente" value="<?=$client['client_adddress'];?>"><br>
                        </div>

                        <input type="hidden" name="id_client" value="<?=$client['id_client'];?>">

		  				<div class="col-md-12">
				    		<button type="submit" class="btn btn-success"> Enviar Dados </button>
				    	</div>
                        
		  			</div>	

				  </div>
				</div>
			</form>
            
	  	</div>	  	
	  </div>
	</div>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>