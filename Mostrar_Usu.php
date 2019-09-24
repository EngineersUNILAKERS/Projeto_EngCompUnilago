
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Usuários</title>
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
<div class="wrap-contact100">
		 <?php
		 require('ConsultasSql.php');
		 $ConsultasBanco = new ConsultasBanco;
  		 $categoria = $ConsultasBanco->SelectUsuario();
		 foreach($categoria as $lista)
		  {
              ?>		 
            <div><h3><?php echo $lista ['Id_Cli']?><br></h3></div>  
	        <div><h3><?php echo $lista ['Nome']?><br></h3></div>
			<div><h4><?php echo $lista ['Email']?><br></h4></div>
			<div><h4><?php echo $lista ['Senha']?><br></h4></div>
			<div><h4><?php echo $lista ['Gruop_ID']?><br></h4></div>
			<div><h4><?php echo $lista ['']?><br></h4></div>
			<br><br>
		  <?php }?>
	</div>
</body>