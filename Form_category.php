﻿<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Form_Category</title>
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
	require('ConsultasSql.php');
	session_start();
	$ConsultasBanco = new ConsultasBanco;
	$ConsultasBanco->verificaAdm($_SESSION['grupo']);
	?>

    <form name="Form_Category" method="post" enctype="multipart/form-data" action="cadastrarCategory.php">
        
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Cadastre sua Categoria:
				</span>

				<div class="wrap-input100 validate-input" data-validate="Codigo é obrigatório">
					<span id=codigo class="label-input100">Código</span>
					<input class="input100" type="text" name="codigo" placeholder="Insira o Código da Categoria" required>
					<span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Nome da Categoria é obrigatório">
					<span id=Nome_Categoria class="label-input100">Nome do Categoria</span>
					<input class="input100" type="text" name="Nome_Categoria" placeholder="Insira o Nome do Categoria" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span id=descricao class="label-input100">Descrição</span>
					<input class="input100" type="text" name="descricao" placeholder="Informe a descrição" required>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input">
					<span id=Qtd_Fotos class="label-input100">Quantidade de Fotos</span>
					<input class="input100" type="number" name="Qtd_Fotos" placeholder="Insira a quantidade de fotos" required>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input">
					<span id=Estoque_Min class="label-input100">Estoque Mínimo</span>
					<input class="input100" type="number" name="Estoque_Min" placeholder="Insira a quantidade mínima de estoque" required>
					<span class="focus-input100"></span>
				</div>
				

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Cadastrar
								<i class="fa fa-plus-square m-l-7"></i>
							</span>
						</div>
					</div>
				</form>
		</div>
	</div>
    </form>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script> 
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
