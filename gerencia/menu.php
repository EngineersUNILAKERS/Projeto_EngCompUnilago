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
<li><a href="gerencia.php">Gerenciar</a></li>
   <li><a href="../cadastro.html">Cadastrar</a></li>


 <li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>