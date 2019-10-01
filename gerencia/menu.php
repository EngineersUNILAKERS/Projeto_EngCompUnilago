<?php 
session_start();

if($_SESSION['grupo']==2)
{
    
}
else if($_SESSION['grupo']==1)
{
    header('Location:../DashboardUser.php');
}
else
{
    header('Location:../index.html');
}

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
					<button class="contact100-form-btn">
						<span>
               				<a href="gerenciar.php">Gerenciar</a></li>
						</span>
					</button>
				</div>
      </div>  
      


      <div class="container-contact100-form-btn">
				<div class="wrap-contact100-form-btn">
					<div class="contact100-form-bgbtn"></div>
					<button class="contact100-form-btn">
						<span>
            				<a href="../cadastro_gerencia.html">Cadastrar</a></li>
						</span>
					</button>
				</div>
			</div>    

      <div class="container-contact100-form-btn">
				<div class="wrap-contact100-form-btn">
					<div class="contact100-form-bgbtn"></div>
					<button class="contact100-form-btn">
						<span>
            				<a href="logout.php">Logout</a></li>						
						</span>
					</button>
				</div>
			</div>    



</ul>

</body>
</html>