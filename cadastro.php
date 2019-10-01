<?php 

//require('ConsultasSql.php');
//$ConsultasBanco = new ConsultasBanco();
//$ConsultasBanco->Conectarbanco();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "englakersdb";


$Usuario=$_POST['usuario'];
$Email=$_POST['email'];	
$Senha=MD5($_POST['senha']);
$Grupo_Id = ($_POST['grupo']);

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "SELECT Login FROM users WHERE Login = '$Usuario'";
$buscar_user = mysqli_query($conn,$sql1);
$total = mysqli_num_rows($buscar_user);


if(($total) > 0 )
{
	echo ($total);
    echo 'Usuário já existe';

}

$sql = "SELECT Email FROM users WHERE Email = '$Email'";
$buscar_email = mysqli_query($conn,$sql);
$total1 = mysqli_num_rows($buscar_email);

if(($total1) > 0)
{
	echo 'Email já existe';
}
else{
	$sql = "INSERT INTO users(Login, Email, Senha, Grupo_Id) VALUES ('$Usuario', '$Email', '$Senha','$Grupo_Id')";
	if ($conn->query($sql) === TRUE)
	{
		echo 'Usuário cadastrado com sucesso!';
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
}
/*if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/


/*else{a*/
   // $sql = "INSERT INTO users(usuario, emai, senha) VALUES ('$Usuario', '$Email', '$Senha')";
    
	//if ($ConsultasBanco->ConectarBanco()->query($sql) === TRUE) {
	//	echo 'Usuario criado com sucesso!<br>';
	  //}
	  //else {
	  // echo 'Error:db '. $ConsultasBanco->ConectarBanco()->error;
	 // }
/*}*/
$conn->close();

?>
