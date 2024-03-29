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
	require('ConsultasSql.php');
	session_start();
	$ConsultasBanco = new ConsultasBanco;
	$ConsultasBanco->verificaAdm($_SESSION['grupo']);
	$contador = $ConsultasBanco->ContaCat();
	?>

    <form name="Form_Products" method="post" enctype="multipart/form-data" action="CadastrarProduto.php">
        
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Cadastre seu produto:
				</span>

				<div class="wrap-input100 validate-input" data-validate="Codigo é obrigatório" >
					<span id=codigo class="label-input100">Código</span>
					<input class="input100" type="text" name="codigo" placeholder="Insira o Código do Produto" required>
					<span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Nome do Produto é obrigatório">
					<span id=Nome_Produto class="label-input100">Nome do Produto</span>
					<input class="input100" type="text" name="Nome_Produto" placeholder="Insira o Nome do Produto" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span id=descricao class="label-input100">Descrição</span>
					<input class="input100" type="text" name="descricao" placeholder="Informe a descrição">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Categoria é obrigatoria">
					<span id=categoria class="label-input100">Categoria</span>
					<!--<input class="input100" type="number" name="categoria" min="1" max="" placeholder="Informe a Categoria" required>-->
					<select class="form-control" name="categoria" size="<?php echo $contador?>" placeholder="Informe a Categoria" required>
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
                <div class="wrap-input100 validate-input" data-validate="A foto é obrigatoria">
					<span id=foto class="label-input100">Foto Produto</span>
					<input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
					<input class="input100" type="file" name="imagem" required>
					<span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Preço é obrigatorio">
                    <span class="label-input100">Preço</span>
                    <label for="dinheiro">R$</label><input type="text" id="dinheiro" name="dinheiro" 
                    class="dinheiro form-control" style="display:inline-block" placeholder="0,00" />
                </div>
                <div class="wrap-input100 validate-input">
					<span id=Qtd_Estoque class="label-input100">Quantidade em Estoque</span>
					<input class="input100" min="1" max="99999" type="number" name="Qtd_Estoque" required>
					<span class="focus-input100"></span>
				</div>
				

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Cadastrar
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
					<div class="wrap-contact100-form-btn">
					<a href="menu_Prod.php"><button class="contact100-form-btn">
							<span><a href="menu_Prod.php">
								Voltar
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button></a>
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
