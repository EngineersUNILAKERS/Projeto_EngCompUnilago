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
<th>ID</th><th>Login</th><th>Senha</th><th>Nome</th><th>Email</th><th>Grupo</th><th colspan="2">Opções</th>
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

echo "<tr><td>".$id."</td><td>".$login."</td><td>".$senha."</td><td>".$email."</td><td>".$nome."</td><td>".$msg."</td><td><a href='editar.php?id=".$id."'><img src='../img/editar.png' title='Editar'></a></td><td><a href='excluir.php?id=".$id."'><img src='../img/excluir.gif' title='Excluir'></a></td>
<br>
</tr>";
}

?>
</table>
<a href="menu.php">Voltar</a>
</body>
</html>