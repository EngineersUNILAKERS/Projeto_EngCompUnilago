<?php
include('../config.php');

?>
<?php
include ('protect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>menu</title>
</head>

<body>
<h2>Seja Bem-Vindo <?php echo $_SESSION['login'] ?></h2><hr />
<ul>
<li><a href="gerenciar.php">Gerenciar</a></li>
   <li><a href="../cadastro.html">Cadastrar</a></li>


 <li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>