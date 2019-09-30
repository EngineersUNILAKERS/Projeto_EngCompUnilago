
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Produtos</title>
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
<div class="container-contact100">
 <div class="wrap-contact100">
		 <?php
		 require('ConsultasSql.php');
		 $ConsultasBanco = new ConsultasBanco;
  		 $categoria = $ConsultasBanco->SelectProd();
		 foreach($categoria as $lista)
		  {
			  ?>		 
	        <div><h3><?php echo $lista ['PRO_Nome']?><br></h3></div>
			<div><h4><?php echo $lista ['PRO_Descricao']?><br></h4></div>
			<div><h4><?php echo $lista ['PRO_Preco']?><br></h4></div>
			<div><h4><?php echo $lista ['PRO_Estoque']?><br></h4></div>
			<div><h4><?php echo $lista ['PRO_Foto']?><br></h4></div>
			<?php $id_prod = $lista['PRO_Id'];?>
			<div>
			<li>
			<a href="Form_Alterar_Prod.php?id=<?php echo $id_prod;?>"><button class="btn btn-danger">Alterar</button></a>	
			</li>
		    <li>
		    </li>	
			
		</div>
			<br><br>
		  <?php }?>
	</div>
  </div>
</body>