<?php include("../config.php") ?> 
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
<title>cadastrar</title>
</head>

<body>
<form action="#" method="post" enctype="multipart/form-data" name="cadastrar">
<table width="406" border="1">
 <tr>
   <th width="103" scope="col">Login :</th>
   <td width="287">
     <input type="text" name="login" id="login" />   </td>
 </tr>
 <tr>
   <th scope="row">Senha :</th>
   <td><label>
     <input type="password" name="senha" id="senha" />
   </label></td>
 </tr>
 <tr>
   <th scope="row">Foto :</th>
   <td><label>
   <input type="file" name="foto" id="foto" />
   </label></td>
 </tr>
 <tr>
   <th scope="row">Email :</th>
   <td><label>
     <input type="text" name="email" id="email" />
   </label></td>
 </tr>
 <tr>
   <th colspan="2" valign="top" scope="row">Mensagem 
     <textarea name="msg" id="msg" cols="45" rows="5"></textarea></th>
   </tr>
 <tr>
   <th colspan="2" scope="row"><label>
     Clique aqui para cadastrar
     <input type="submit" name="submit" id="submit" value="Cadastrar" />
   </label></th>
   </tr>
</table>

<?php
if(isset($_POST['submit'])==1){
$login = $_POST['login'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$foto_name = $_FILES['foto']['name'];
$caminho = "img/".$foto_name;
$foto = $foto_name;
$msg = $_POST['msg'];
$sql = mysql_query("

INSERT INTO  `qlegalweb`.`admin` (
`Id_Cli` ,
`Login` ,
`Senha` ,
`Nome` ,
`email` ,
`Group_Id`
)
VALUES (
NULL ,  '$login',  '$senha',  '$email',  '$foto',  '$msg'
)");

if($sql == true){
move_uploaded_file($_FILES['foto']['tmp_name'],$caminho);
echo "foi cadastrado com sucesso <a href='index.php'>clique aqui.</a>";

}else{
echo "ocorreu um erro ao cadastrar"; 
}
}

?>

</form>
</body>
</html>