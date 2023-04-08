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
				    Cadastro de Fornecedor
				  </div>
				  <div class="card-body">
				    <div class="row">
                        <input type="hidden" name="table" class="form-control" required placeholder="Digite o nome" value="suppliers">

		  				<div class="col-md-4">
		  					<label> Nome Fornecedor: <span class="text-danger">*</span> </label><br>
							<input type="text" name="supplier_name" class="form-control" required placeholder="Digite o nome"><br>
		  				</div>

		  				<div class="col-md-4">
		  					<label> Razão Social: <span class="text-danger">*</span></label><br>
							<input type="text" name="supplier_corporate_name" class="form-control" required placeholder="Digite a Razão Social"><br>
		  				</div>

		  				<div class="col-md-4">
		  					<label> CNPJ: <span class="text-danger">*</span> </label><br>
							<input type="text" name="supplier_cnpj" class="form-control" required placeholder="Digite o CNPJ"><br>
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
