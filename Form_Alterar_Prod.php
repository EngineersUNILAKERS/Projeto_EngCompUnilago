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
	$contador = $ConsultasBanco->ContaCat();
	$sql = "SELECT * FROM products WHERE PRO_Id='". $id_prod ."'";

	$result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);
	
	while($produto = mysqli_fetch_assoc($result))
	{	
		$lista = $produto['PRO_Id'];
		$tipofoto = $produto['PRO_Tipo_Foto'];
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
	
	
	<div class="teste">
        <div >
							
				<h2>Alteração de produto</h2>
				
				<form method="post" action="alterarProduto.php?id=<?php echo $id_prod;?>" name="incluiProd" enctype="multipart/form-data">
				
					<div class="form-group" class="label-input100">
						<label for="Produto">Produto</label>
						<input type="text" name="Produto" value="<?php echo $exibe_nome;?>"  class="form-control" required id="Produto">
					</div>

					<div class="form-group" class="label-input100">
						<label for="Descricao">Descrição</label>
						<textarea rows="5" class="form-control" name="Descricao"><?php echo $exibe_descricao; ?></textarea>
					</div>
					<div class="form-group" class="label-input100">
					<span class="label-input100">Categoria</span>
					<!--<input class="input100" type="number" name="categoria" min="1" max="" placeholder="Informe a Categoria" required>-->
					<select class="form-control" name="Categoria" size="<?php echo $contador?>" value="<?php echo $pega_categoria;?>" 
					placeholder="Informe a Categoria" required>
					<span class="focus-input100"></span>
					<?php
						  $sql2 = "SELECT * FROM category";
						  $result2=mysqli_query($ConsultasBanco->ConectarBanco(),$sql2);
						  while($categoria = mysqli_fetch_assoc($result2))
	                        {
							 $exibe_Nome_Categoria = $categoria['CAT_Nome'];
							 $exibe_Id = $categoria['CAT_Id'];
							 echo'<option name="email" 
							 value="'.$exibe_Id.'">'.$exibe_Nome_Categoria.'</option>';
							 /*echo $exibe_Id, ' - ', $exibe_Nome_Categoria;*/
							 ?><br>
							 <?php
	                        }
							   ?>
					</select>
					</div>
					<div class="form-group" class="label-input100">				
					 <label for="PRO_foto">Foto Principal</label>
					 <input type="file" class="form-control" name="Foto" required>
					 </div>
					 <div class="container-img"> <?php echo '
					<img class="product" src="data:'.$tipofoto.';base64,'. base64_encode($ConsultasBanco->MostraImagem($lista)).'">
						'; ?>
					<br></div>

					<div class="form-group" class="label-input100">
						<label for="dinheiro">Preço (R$)</label>
						<input type="text" name="dinheiro" id="dinheiro" value="<?php echo $exibe_preco;?>" 
						class="dinheiro form-control" style="display:inline-block">
					</div>
					<div class="form-group" class="label-input100">
				
						<label for="Estoque">Quantidade em Estoque</label>
						<input type="number" min="1" max="99999" name="Estoque" value="<?php echo $exibe_estoque;?>"  class="form-control" required id="Produto">
					</div>
					
						
												
				<button type="submit" class="btn btn-lg btn-primary">
					
					<span class="glyphicon glyphicon-pencil"> Alterar </span>
					
				</button>
				
				</form>
				<a href="menu_Prod.php"><button class="btn btn-secondary">Voltar</button></a><br>
	</div>