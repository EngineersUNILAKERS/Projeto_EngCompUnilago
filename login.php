<?php

//Requisitando o arquivo que contem a função de conectar com o banco
require('ConsultasSql.php');

$ConsultasBanco = new ConsultasBanco();
$ConsultasBanco->Conectarbanco();
//Variaveis que recebem o email e senha do index.html
$email = $_POST['email'];
//Criptografando a senha com md5
$senha = md5($_POST['senha']);

//Select que retorna uma linha com email, quando a consulta achar email e senha iguais ao informado pelo user
$sql = "SELECT email FROM users WHERE email = '$email' AND senha = '$senha'";
$buscar = mysqli_query($ConsultasBanco->Conectarbanco(),$sql);
//Função que indica quantas linhas o select retornou
$total = mysqli_num_rows($buscar);

//Se o numero de linhas seja maior que 1 ele irá redirecionar o usuário para o Dashboard, senão ele retornará mensagens de erro 
if($total > 0)
{
    header('Location:Dashboard.html');
    
} else {
    echo 'conferir senha';
    
}

?>
<script>
    alert("Você não possui cadastro!!");
</script>
