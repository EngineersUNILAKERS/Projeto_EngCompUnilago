<?php
include('../config.php');
session_start();
?>
<?php
if(!isset($_SESSION['Login']) and !isset($_SESSION['Senha'])){

}
else{
echo "<script>location.href='menu.php'</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
</head>

<style>
#login{
position:absolute;
width:159px;
height:135px;
left: 7px;
top: 11px;
}
</style>
<body>

<div id="Login" width="200">
 <fieldset>
<legend>Administração</legend>
<table width="160" height="120">
<form name="Login" action="" method="post">
<tr>
   	<td width="191" height="43">Login:
  	  <input name="Login" type="text" size="25" maxlength="25" /></td>
   <tr><td>senha:
     <input name="Senha" type="password" size="25" maxlength="25" /></td></tr><tr><td>     <input name="submit" type="submit" value="Entrar" /></p></td></td>
   </tr>
   </form>
   <?php
if(isset($_POST['submit'])==1){
   $login = str_replace("'","", $_POST['Login']);
$senha = str_replace("'","",$_POST['Senha']);
$_SESSION['Login'] = $login;
$_SESSION['Senha'] = $senha;
$sql = mysql_query("select * from users where Login = '$login' and Senha = '$senha'");
if(mysql_num_rows($sql) == 0){
echo "nao foi encontrado registro";
}else{
echo "<script>location.href='menu.php'</script>";
}
}
?>
</table>
</fieldset>
</div>
</body>
</html>