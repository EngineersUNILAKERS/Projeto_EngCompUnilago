<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Form_Products</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
<!--===============================================================================================-->
</head>

<body>
	
<?php
	$id_prod = $_GET['id'];
	/* $_POST['PRO_Id'];*/
 	require('ConsultasSql.php');
	session_start();
	$ConsultasBanco = new ConsultasBanco;
	$ConsultasBanco->verificaAdm($_SESSION['grupo']);
	$sql = "SELECT * FROM category WHERE CAT_Id='". $id_prod ."'";

	$result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);
	
	while($produto = mysqli_fetch_assoc($result))
	{	
		$exibe_nome = $produto['CAT_Nome'];
		$exibe_descricao = $produto['CAT_Descricao'];
		$exibe_foto = $produto['PhotoQuant'];
		$exibe_preco = $produto['MinimumStockLevel'];
		
	}
	?>
	<div class="container-contact100">
        <div class="wrap-contact100">
							
				<h2>Alteração de Categoria</h2>
				
				<form method="post" action="alterarCategoria.php?id=<?php echo $id_prod;?>" name="incluiCAT" enctype="multipart/form-data">
				
					<div class="form-group" class="label-input100">
						<label for="Produto">Categoria</label>
						<input type="text" name="Produto" value="<?php echo $exibe_nome;?>"  class="form-control" required id="Produto">
					</div>

					<div class="form-group" class="label-input100">
						<label for="Descricao">Descrição</label>
						<textarea rows="5" class="form-control" name="Descricao"><?php echo $exibe_descricao; ?></textarea>
					</div>

					<div class="form-group" class="label-input100">				
					 <label for="CAT_foto">Quantidade de Fotos</label>
					  <input type="number" class="form-control" name="Foto" id="Foto1" value="<?php echo $exibe_foto; ?>">
					</div>
					<div class="form-group">
					</div>

					<div class="form-group" class="label-input100">
						<label for="dinheiro">Quantidade Minima em Estoque</label>
						<input type="number" name="dinheiro" id="dinheiro" value="<?php echo $exibe_preco;?>" 
						class="dinheiro form-control" style="display:inline-block">
					</div>
					
					
						
												
				<button type="submit" class="btn btn-lg btn-primary">
					
					<span class="glyphicon glyphicon-pencil"> Alterar </span>
					
				</button>
				
				</form>
				
			</div>