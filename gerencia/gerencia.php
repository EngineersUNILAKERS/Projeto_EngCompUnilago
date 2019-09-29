<?php include('../config.php'); ?>
<?php
//include ('protect.php');
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
<table width="396" cellpadding="1"  cellspacing="0" align="center">
<tr>
<th>ID</th><th>Login</th><th>Senha</th><th>Nome</th><th>Email</th><th>Grupo</th><th colspan="2">Opções</th>
</tr>
<?php 
$sql = mysql_query("select * from USERS");

while($linha = mysql_fetch_array($sql))
{
$id = $linha['Id_Cli'];
$login = $linha['Login']; 
$foto = $linha['Nome'];
$senha = $linha['Senha'];
$email = $linha['Email'];

$msg =  $linha['Group_Id'];
echo "
<tr>
	<td>$Id</td><td>$login</td><td>$senha</td><td>$email</td><td>$foto</td><td>$msg</td><td><a href='editar.php?id=$id'><img src='img/editar.png' title='Editar'></a></td><td><a href='excluir.php?id=$id'><img src='img/excluir.gif' title='Excluir'></a></td>
<br>
</tr>




";

}


?>
</table>
<a href="menu.php">Voltar</a>
</body>
</html>