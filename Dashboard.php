<?php 
//Patrick - Aqui eu faço a verificação se o user ta logado, e se ele é adm(precisa de adm pra ver essa pagina)
require('ConsultasSql.php');
session_start();
$ConsultasBanco = new ConsultasBanco;
$ConsultasBanco->verificaAdm($_SESSION['grupo']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página Principal</title>
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
<!-- patrick - coloquei o teu h2 com a mensagem de bem vindo mais o login do user -->
<h2> Seja Bem-Vindo <?php echo ' ' .$_SESSION['login']; ?></h2>


	<div class="container-contact100">
			<!-- patrick - A opção de ver usuário é esse trecho de código - trecho gerencia -->
			<div><button class="contact100-form-btn" type="button">
					<span><a href="gerencia\menu.php">
						USUÁRIOS
					</a></span>
				</button>
				</div>
				<!-- trecho gerencia termina aqui -->
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span><a href="menu_Prod.php">
								PRODUTOS
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</a></span>
						</button>
					</div>
				</div>
				<div>
				<button class="contact100-form-btn" type="button">
					<span>
						CATEGORIA
					</span>
				</button>
			</div>
				<div>
				<button class="contact100-form-btn" type="button">
					<span><a href="Enviar_Email.php">
						EMAIL
						<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
					</a></span>
				</button>
			</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
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