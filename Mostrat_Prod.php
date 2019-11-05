
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
 <a href="menu_Prod.php"><button class="btn btn-secondary">Voltar</button></a><br>
		 <?php
		 require('ConsultasSql.php');
		 $ConsultasBanco = new ConsultasBanco;
		 $categoria = $ConsultasBanco->SelectProd();
		   
		 foreach($categoria as $lista)
		  {
			?>

	        <div><h3><?php echo 'Nome do Produto: ',$lista ['PRO_Nome']?><br></h3></div>
			<div><h4><?php echo 'Descrição: ',$lista ['PRO_Descricao']?><br></h4></div>
			<div><h4><?php echo 'R$: ', $lista ['PRO_Preco']?><br></h4></div>
			<div><h4><?php echo 'Quantidade em Estoque: ',$lista ['PRO_Estoque']?><br></h4></div>
			
			<div><h4><?php 
			$result = $lista['PRO_Tipo_Foto'];
			$foto = $lista['PRO_Foto'];
			header("Content-Type: $result");
			echo 'Foto: ',$foto;?><br></h4></div>
			
			<?php $verifica = $lista['PRO_Ativo']; 
			if($verifica== 1)
			{
				?><div><h4><?php echo 'Produto está ativo no momento!';?></h4></div>
			<?php
			}
			 else{
				?><div><h4><?php echo 'Produto está desativado!';?></h4></div><?php
			}
			?>
			
			<?php $id_prod = $lista['PRO_Id'];?>
			<div>
			<li>
			<a href="Form_Alterar_Prod.php?id=<?php echo $id_prod;?>"><button class="btn btn-warning">Alterar</button></a>	
			</li>
			<li><a href="Ativar.php?id=<?php echo $id_prod;?>"><button class="btn btn-primary">Ativar</button></a>
			<a href="Desativar.php?id=<?php echo $id_prod;?>"><button class="btn btn-danger">Desativar</button></a>
		    </li>	
			
		</div>
			<br><br>
		  <?php }?>
	</div>
</div>


</body>