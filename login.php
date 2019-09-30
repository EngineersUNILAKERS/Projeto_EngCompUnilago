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
$sql = "SELECT email, Login, Grupo_Id FROM users WHERE email = '$email' AND senha = '$senha'";
$buscar = mysqli_query($ConsultasBanco->Conectarbanco(),$sql);
//Função que indica quantas linhas o select retornou
$total = mysqli_num_rows($buscar);
//Atribuindo o grupo_id e a string do login, vindos do select em variáveis
while($consulta = mysqli_fetch_assoc($buscar))
{
   $grupo = $consulta['Grupo_Id'];
   $login = $consulta['Login'];
}
 

//Se o numero de linhas seja maior que 1 ele irá redirecionar o usuário para o Dashboard, senão ele retornará mensagens de erro 
if($total > 0)
{
    //Provisóriamente o toda vez que esse script for executado ele destruirá e limpará a sessão(se existir uma), uma vez que o logout não foi implementado 
    session_unset();   
    session_destroy();
    //Será criada a sessão caso ela não exista
    if (!isset($_SESSION)) //Verificar se a sessão não já está aberta.
    {
    session_cache_expire(30);// A sessão aberta será expirada em 30 de inatividade
    session_start();//Uma nova sessão de usuário é iniciada.
    //O array global $_SESSION terá seus index(grupo, email, senha, login), definidos de acordo com os dados do usuário logado - Esses valores podem ser acessados em qualquer arquivo php desde que seja usada a função session_start(); anteriormente no script 
    $_SESSION['grupo'] = $grupo;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['login'] = $login;
    }
    header('Location:Dashboard.php');
    
} else {
    session_start();
    unset ($_SESSION['grupo']);
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
    unset ($_SESSION['login']);
    echo 'conferir senha';
}

?>
<script>
    alert("Você não possui cadastro!!");
</script>
