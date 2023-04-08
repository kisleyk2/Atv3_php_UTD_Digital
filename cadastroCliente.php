<!DOCTYPE html>
<html>
<head>
	<title> Formulario de Cadastro </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	
	<?php include_once 'components/menu.php'; ?>

	<div class="container-fluid">
	  <div class="row">	  	
	  	<div class="col-8 offset-2">
	  		<form action="inserir.php" method="POST">
				<div class="card">
				  <div class="card-header">
				    Cadastro de Cliente
				  </div>
				  <div class="card-body">
				    <div class="row">
                        <input type="hidden" name="table" class="form-control" required placeholder="Digite o nome" value="clients"><br>

		  				<div class="col-md-6">
		  					<label> Nome Cliente: <span class="text-danger">*</span> </label><br>
							<input type="text" name="client_name" class="form-control" required placeholder="Digite o nome"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> Email: <span class="text-danger">*</span></label><br>
							<input type="email" name="client_email" class="form-control" required placeholder="Digite o Email"><br>
		  				</div>

		  				<div class="col-md-4">
		  					<label> Senha: <span class="text-danger">*</span> </label><br>
							<input type="password" name="client_password" class="form-control" required placeholder="Digite a Senha"><br>
		  				</div>

		  				<div class="col-md-4">
		  					<label> CPF: <span class="text-danger">*</span></label><br>
							<input type="text" name="client_cpf" class="form-control" required placeholder="Digite o CPF"  maxlength="14"><br>
		  				</div>

                        <div class="col-md-4">
		  					<label> Telefone: <span class="text-danger">*</span></label><br>
							<input type="text" name="client_phone" class="form-control" required placeholder="Digite o Telefone" maxlength="16"><br>
		  				</div>

                        <div class="col-md-4">
		  					<label> Tipo: <span class="text-danger">*</span></label><br>
							<input type="text" name="client_type" class="form-control" required placeholder="Digite o Tipo de Cliente"><br>
		  				</div>

                        <div class="col-md-8">
		  					<label> Endereço: <span class="text-danger">*</span></label><br>
							<input type="text" name="client_adddress" class="form-control" required placeholder="Digite o Endereço do Cliente"><br>
		  				</div>			    	
		  				
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
