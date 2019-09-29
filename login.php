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
$sql = "SELECT email, Grupo_Id FROM users WHERE email = '$email' AND senha = '$senha'";
$buscar = mysqli_query($ConsultasBanco->Conectarbanco(),$sql);
//Função que indica quantas linhas o select retornou
$total = mysqli_num_rows($buscar);

while($consulta = mysqli_fetch_assoc($buscar))
{
   $grupo = $consulta['Grupo_Id'];
}
 

//Se o numero de linhas seja maior que 1 ele irá redirecionar o usuário para o Dashboard, senão ele retornará mensagens de erro 
if($total > 0)
{
    session_unset();   
    session_destroy();
    if (!isset($_SESSION)) //Verificar se a sessão não já está aberta.
    {
    session_cache_expire(30);    
    session_start();//Uma nova sessão de usuário é iniciada.
    $_SESSION['grupo'] = $grupo;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    }
    header('Location:Dashboard.html');
    
} else {
    session_start();
    unset ($_SESSION['grupo']);
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
    echo 'conferir senha';
}

?>
<script>
    alert("Você não possui cadastro!!");
</script>
