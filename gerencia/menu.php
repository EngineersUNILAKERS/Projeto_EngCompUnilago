<?php 
//Patrick - Aqui eu faço a verificação se o user ta logado, e se ele é adm(precisa de adm pra ver essa pagina)
require('../ConsultasSql.php');
session_start();
$ConsultasBanco = new ConsultasBanco;
$ConsultasBanco->verificaAdm($_SESSION['grupo']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>menu</title>
</head>

<body>

<ul>
<div class="container-contact100-form-btn">
				<div class="wrap-contact100-form-btn">
					<div class="contact100-form-bgbtn"></div>
					<button type="submit" class="contact100-form-btn">
						<span>
               <li><a href="gerenciar.php">Gerenciar</a></li>
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							
						</span>
					</button>
				</div>
      </div>  
      


      <div class="container-contact100-form-btn">
				<div class="wrap-contact100-form-btn">
					<div class="contact100-form-bgbtn"></div>
					<button type="submit" class="contact100-form-btn">
						<span>
            <li><a href="../cadastro_gerencia.html">Cadastrar</a></li>
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							
						</span>
					</button>
				</div>
			</div>    

      <div class="container-contact100-form-btn">
				<div class="wrap-contact100-form-btn">
					<div class="contact100-form-bgbtn"></div>
					<button type="submit" class="contact100-form-btn">
						<span>
            <li><a href="logout.php">Logout</a></li>
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							
						</span>
					</button>
				</div>
			</div>    



</ul>

</body>
</html>