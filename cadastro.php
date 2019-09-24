<?php 

require('../config.php');

$con=mysqli_connect($NomeDoServer,$UserDoServer,$senha,$nomeDoBanco); 

$user = $_POST['usuario'];
$password = MD5($_POST['senha']);
$email = $_POST['email'];


$select = mysql_select_db("server") or die("Sem acesso ao DB");
$result = mysql_query("SELECT * FROM `USUARIO` WHERE `NOME` = '$login' AND `SENHA`= '$senha'");

if(mysql_num_rows ($result) > 0 )
{
    echo 'Usuário já existe';

}

else{
    $sql = "INSERT INTO users(user, senha, email) VALUES ('$user','$password','$email')";
}
?>