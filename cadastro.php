<?php 

require('ConsultasSql.php');
$ConsultasBanco = new ConsultasBanco();
$ConsultasBanco->Conectarbanco();

$Usuario=$_POST['usuario'];
$Email=$_POST['email'];
$Senha=MD5($_POST['senha']);



/*$result = ("SELECT * FROM users WHERE Nome = '$Usuario' AND Senha = '$Senha'");

if(($result) > 0 )
{
    echo 'Usuário já existe';

}*/
/*else{*/
    $sql = "INSERT INTO users(Nome, Senha, Email) VALUES ('$Usuario', '$Senha', '$Email')";
    
	if ($ConsultasBanco->ConectarBanco()->query($sql) === TRUE) {
		echo 'Usuario criado com sucesso!<br>';
	  }
	  else {
	   echo 'Error: '. $ConsultasBanco->ConectarBanco()->error;
	  }
/*}*/
?>