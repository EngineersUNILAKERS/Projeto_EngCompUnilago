<?php include("../config.php") ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cadastrar</title>
</head>

<body>
<?php
$id = $_GET['Id_Cli'];
$sql = mysql_query("select * from users where Id_Cli=$id");
$separar = mysql_fetch_array($sql);
$login_old = $separar['Login'];
$senha_old = $separar['Senha'];
$email_old = $separar['Email'];
$foto_old = $separar['Nome'];
$msg_old = $separar['Group_Id'];
?>
<form action="#" method="post" enctype="multipart/form-data" name="cadastrar">
<table width="406" border="1">
 <tr>
   <th width="103" scope="col">Login :</th>
   <td width="287">
     <input type="text" name="Login" id="Login" value="<?php echo $login_old; ?>" />   </td>
 </tr>
 <tr>
   <th scope="row">Senha :</th>
   <td><label>
     <input type="password" name="Senha" id="Senha" value="<?php echo $senha_old; ?>" />
   </label></td>
 </tr>
 <tr>
   <th scope="row">Email :</th>
   <td><label>
     <input type="text" name="Email" id="Email" value="<?php echo $email_old; ?>" />
   </label></td>
 </tr>
 <tr>
   <th scope="row">Foto :</th>
   <td><label>
     <input type="text" name="Nome" id="Nome"  value="<?php echo $foto_old; ?>"/>
   </label></td>
 </tr>
 <tr>
   <th colspan="2" valign="top" scope="row">Mensagem 
     <textarea name="Group_Id" id="Group_Id" cols="45" rows="5"><?php echo $msg_old; ?></textarea></th>
   </tr>
 <tr>
   <th colspan="2" scope="row"><label>
     Clique aqui para cadastrar
     <input type="submit" name="submit" id="submit" value="Atualizar" />
   </label></th>
   </tr>
</table>

<?php
if(isset($_POST['submit'])==1){
$login = $_POST['Login'];
$senha = $_POST['Senha'];
$email = $_POST['Email'];
$foto_name =$_POST['Nome']
//$foto_name = $_FILES['foto']['name'];
//if($foto_name == ''){
//$foto_name .= $foto_old;
//}
//$caminho = "img/".$foto_name;
//$foto = $foto_name;
$msg = $_POST['Group_Id'];
$sql = mysql_query("

update users set `Login` = '$login',`Senha` = $senha , `Nome` = '$foto_name' ,`Email` = '$email' ,`Group_Id` = '$msg' where Id_CLi = $id
");

if($sql == true){
echo "<script>location.href='gerenciar.php'</script>";

}else{
echo "ocorreu um erro ao cadastrar"; 
}
}

?>

</form>
</body>
</html>