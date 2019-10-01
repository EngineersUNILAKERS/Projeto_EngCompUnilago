<?php 
//Patrick - Aqui eu faço a verificação se o user ta logado, e se ele é adm(precisa de adm pra ver essa pagina)
require('../ConsultasSql.php');
$ConsultasBanco = new ConsultasBanco;

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
<title>gerenciar</title>
<style>
table{
border:2px;
border-style:solid;

color:#FF0000;


}
th{
background-color:#003366;
color:#FFFFFF;
}
</style>
</head>

<body>
<h1 align="center">Administração</h1>
<hr color="#FF0000" />
<table width="396" cellpadding="1"  cellspacing="0" align="center" border = "1">
<tr>
<th>ID</th><th>Login</th><th>Nome</th><th>Senha</th><th>Email</th><th>Grupo</th><th colspan="2">Opções</th>
</tr>
<?php 
 $sql=("SELECT * FROM USERS");
 $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);

 while($linha = mysqli_fetch_assoc($result))
{      
$id = $linha['Id_Cli'];
$login = $linha['Login']; 
$nome= $linha['Nome'];
$senha = $linha['Senha'];
$email = $linha['Email'];
$msg =  $linha['Grupo_Id'];

echo "<tr><td>".$id."</td><td>".$login."</td><td>".$nome."</td><td>".$senha."</td><td>".$email."</td><td>".$msg."</td><td><a href='editar.php?id=".$id."'><img src='../img/editar.png' title='Editar'></a></td><td><a href='excluir.php?id=".$id."'><img src='../img/excluir.gif' title='Excluir'></a></td>
<br>
</tr>";
}

?>
</table>

<div class="container-contact100-form-btn">
				<div class="wrap-contact100-form-btn">
					<div class="contact100-form-bgbtn"></div>
					<button type="submit" class="contact100-form-btn">
						<span>
                        <a href="../cadastro_gerencia.html">Cadastrar</a>
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
								<a href="../Dashboard.php">Menu Principal</a>
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
								<a href="menu.php">Menu Posterior</a>
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							
						</span>
					</button>
				</div>
			</div>
</body>
</html>