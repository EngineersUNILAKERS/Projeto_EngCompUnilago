<?php include("../config.php") ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cadastrar</title>
</head>

<body>
<?php
require('../ConsultasSql.php');
session_start();
$ConsultasBanco = new ConsultasBanco;
$ConsultasBanco->verificaAdm($_SESSION['grupo']);
$id = $_GET['id'];
$sql=("SELECT * FROM USERS");
 $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);

 while($linha = mysqli_fetch_assoc($result))
{    


$login_old = $linha['Login'];
$senha_old = $linha['Senha'];
$email_old = $linha['Email'];
$foto_old = $linha['Nome'];
$msg_old = $linha['Grupo_Id'];

}

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
   <th scope="row">Nome :</th>
   <td><label>
     <input type="text" name="Nome" id="Nome"  value="<?php echo $foto_old; ?>"/>
   </label></td>
 </tr>
 <th scope="row">Grupo ID :</th>
   <td><label>
     <input type="text" name="Grupo_Id" id="Grupo_Id"  value="<?php echo $msg_old; ?>"/>
   </label></td>
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
$senha = md5($senha);
$email = $_POST['Email'];
$foto_name =$_POST['Nome'];
//$foto_name = $_FILES['foto']['name'];
//if($foto_name == ''){
//$foto_name .= $foto_old;
//}
//$caminho = "img/".$foto_name;
//$foto = $foto_name;
$msg = $_POST['Grupo_Id'];


$sql=("UPDATE `users` SET `Login` = '$login', `Nome` = '$foto_name', `Email` = '$email', `Senha` = '$senha', `Grupo_Id` = '$msg' WHERE `Id_Cli` = $id");
 $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);
 
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