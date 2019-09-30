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
	$id_prod = 2;
	/* $_POST['PRO_Id'];*/
 	require('ConsultasSql.php');
	session_start();
	$ConsultasBanco = new ConsultasBanco;
	$ConsultasBanco->verificaAdm($_SESSION['grupo']);
	$sql = "SELECT * FROM products WHERE PRO_Id='". $id_prod ."'";

	$result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);
	
	while($produto = mysqli_fetch_assoc($result))
	{	
		$exibe_nome = $produto['PRO_Nome'];
		$exibe_descricao = $produto['PRO_Descricao'];
		$pega_categoria = $produto['PRO_Categoria_Id'];
		$exibe_foto = $produto['PRO_Foto'];
		$exibe_preco = $produto['PRO_Preco'];
		$exibe_estoque = $produto['PRO_Estoque'];

	}
	/*WHERE CAT_Id='". $pega_categoria ."'*/
	$sql2 = "SELECT * FROM category";
	$result2=mysqli_query($ConsultasBanco->ConectarBanco(),$sql2);
	while($categoria = mysqli_fetch_assoc($result2))
	{
		$exibe_Nome_Categoria = $categoria['CAT_Nome'];
	}
	?>
	
	
	<div class="container-contact100">
        <div class="wrap-contact100">
							
				<h2>Alteração de produto</h2>
				
				<form method="post" action="alterarProduto.php" name="incluiProd" enctype="multipart/form-data">
				
					<div class="form-group">
				
						<label for="Produto">Produto</label>
						<input type="text" name="Produto" value="<?php echo $exibe_nome;?>"  class="form-control" required id="Produto">
					</div>
					<div class="form-group">
				
					<label for="Descricao">Descrição</label>
					
						<textarea rows="5" class="form-control" name="Descricao"><?php echo $exibe_descricao; ?></textarea>
						

					</div>
					<div class="form-group">
				
						<label for="Categoria">Categoria</label>
						<input type="number" name="Categoria" min="1" max="4" value="<?php echo $pega_categoria;?>"  class="form-control" required id="Categoria">
						<?php
						  $sql2 = "SELECT * FROM category";
	                      $result2=mysqli_query($ConsultasBanco->ConectarBanco(),$sql2);
	                        while($categoria = mysqli_fetch_assoc($result2))
	                        {
							 $exibe_Nome_Categoria = $categoria['CAT_Nome'];
							 $exibe_Id = $categoria['CAT_Id'];
							 echo $exibe_Id, ' - ', $exibe_Nome_Categoria;
							 ?><br><?php
	                        }
						   ?>
					</div>
					<div class="form-group">
				
					<label for="PRO_foto">Foto Principal</label>
					
					<input type="file" accept="image/*" class="form-control" required name="Foto" id="Foto1">

					</div>
					
					<div class="form-group">
						
					<img src="upload/<?php echo $exibe_foto; ?>" width="100px" >
						
					</div>
						
												
				<button type="submit" class="btn btn-lg btn-primary">
					
					<span class="glyphicon glyphicon-pencil"> Alterar </span>
					
				</button>
				
				</form>
				
			</div>