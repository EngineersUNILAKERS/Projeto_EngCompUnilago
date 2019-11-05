
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
 <a href="menuCategoria.php"><button class="btn btn-secondary">Voltar</button></a><br>
		 <?php
		 require('ConsultasSql.php');
		 $ConsultasBanco = new ConsultasBanco;
		 $categoria = $ConsultasBanco->SelectCat();
		   
		 foreach($categoria as $lista)
		  {
			?>
			<!--<div><h4><?php/* $ConsultasBanco->MostraImagem($lista['PRO_Nome_Foto'])*/?><br></h4></div>-->
	        <div><h3><?php echo 'Nome da Categoria: ',$lista ['CAT_Nome']?><br></h3></div>
            <div><h4><?php echo 'Descrição: ',$lista ['CAT_Descricao']?><br></h4></div>
            <div><h4><?php echo 'Quantidade de Fotos: ',$lista ['PhotoQuant']?><br></h4></div>
			<div><h4><?php echo 'Quantidade em Estoque: ',$lista ['MinimumStockLevel']?><br></h4></div>
						
			<?php $verifica = $lista['CAT_Ativo']; 
			if($verifica== 1)
			{
				?><div><h4><?php echo 'Categoria está ativa no momento!';?></h4></div>
			<?php
			}
			 else{
				?><div><h4><?php echo 'Categoria está desativado!';?></h4></div><?php
			}
			?>
			
			<?php $id_prod = $lista['CAT_Id'];?>
			<div>
			<li>
			<a href="Form_Alterar_CAT.php?id=<?php echo $id_prod;?>"><button class="btn btn-warning">Alterar</button></a>	
			</li>
			<li><a href="AtivarCAT.php?id=<?php echo $id_prod;?>"><button class="btn btn-primary">Ativar</button></a>
			<a href="DesativarCAT.php?id=<?php echo $id_prod;?>"><button class="btn btn-danger">Desativar</button></a>
		    </li>	
			
		</div>
			<br><br>
		  <?php }?>
	</div>
</div>


</body>