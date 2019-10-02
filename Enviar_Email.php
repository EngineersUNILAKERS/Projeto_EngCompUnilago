<?php 
require('ConsultasSql.php');
session_start();
$ConsultasBanco = new ConsultasBanco;
$ConsultasBanco->verificaAdm($_SESSION['grupo']);
?>
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

    <form name="Form_email" action="PHP_Mailer/mail.php" method="post" enctype="multipart/form-data">
	<div class="container-contact100">
		<div class="wrap-contact100">
		
				<span class="contact100-form-title">
					Disparo de Emails
				</span>
				<div class="wrap-input100 validate-input" data-validate="Escolha ao menos um usuário">
				<span id=codigo class="label-input100">Escolha o grupo de usuários</span><br>
				<INPUT TYPE="RADIO" NAME="OPCAO" VALUE="todos" CHECKED>Todos
				<?php
				$grupos = $ConsultasBanco->ListaGrupos();
				foreach($grupos as $grupo)
				{
					echo '<INPUT TYPE="RADIO" NAME="OPCAO" VALUE="'.$grupo.'"> Grupo '.$grupo;

				}
	
				?>
				</div>


				<div class="wrap-input100 validate-input" data-validate="Escolha ao menos um usuário">
					<span id=codigo class="label-input100">Escolha o Email</span>

					<div class="todos">
					<select name="email">
						<option value="valor1"selected>Escolha</option> 
						<?php
						$emails = $ConsultasBanco->ListaEmail();
						foreach($emails as $lista)
						{
							$email = $lista;
							echo'<option name="email" value="'.$email.'">'.$email.'</option>';
							$todos .= $email.' ';
						}
						echo'<option name="email" value="'.$todos.'">'."Todos".'</option>';
						?>
					  </select>
					<span class="focus-input100"></span>
				</div>

				<!-- <div class="adm">
					<select name="email">
						<option value="valor1"selected>Escolha</option> 
						<?php
						// $emails = $ConsultasBanco->ListaEmailAdm();
						// foreach($emails as $lista)
						// {
						// 	$email = $lista;
						// 	echo'<option name="email" value="'.$email.'">'.$email.'</option>';
						// 	$todos .= $email.' ';
						// }
						// echo'<option name="email" value="'.$todos.'">'."Todos".'</option>';
						?>
					  </select>
					<span class="focus-input100"></span>
				</div>

				<div class="user">
					<select name="email">
						<option value="valor1"selected>Escolha</option> 
						<?php
						// $emails = $ConsultasBanco->ListaEmailUser();
						// foreach($emails as $lista)
						// {
						// 	$email = $lista;
						// 	echo'<option name="email" value="'.$email.'">'.$email.'</option>';
						// 	$todos .= $email.' ';
						// }
						// echo'<option name="email" value="'.$todos.'">'."Todos".'</option>';
						?>
					  </select>
					<span class="focus-input100"></span>
				</div> -->

				

				<div class="wrap-input100 validate-input" data-validate="Assunto é obrigatória">
					<span id=Nome_Produto class="label-input100">Insira o assunto do email</span>
				<input class="input100" type="text" name="assunto" placeholder="Assunto">
				<span class="focus-input100"></span>
				</div>


                <div class="wrap-input100 validate-input" data-validate="Mensagem é obrigatória">
					<span id=Nome_Produto class="label-input100">Insira sua mensagem</span>
					<textarea class="input100" rows="8" cols="85" name="msg" placeholder="Insira sua mensagem"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
				
				

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Enviar
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script type="text/javascript">
    $('input[name="OPCAO"]').change(function () {
    if ($('input[name="OPCAO"]:checked').val() === "todos") {
        $('.todos').show();
		$('.user').hide();
		$('.adm').hide();
    }else if($('input[name="OPCAO"]:checked').val() === "1"){
        $('.todos').hide();
		$('.user').show();
		$('.adm').hide();
    }else if($('input[name="OPCAO"]:checked').val() === "2"){
		$('.todos').hide();
		$('.user').hide();
		$('.adm').show();
	}else{
		$('.todos').show();
		$('.user').hide();
		$('.adm').hide();
	}
});
</script>
</body>
</html>
