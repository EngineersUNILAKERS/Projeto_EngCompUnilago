<?php
require('../config.php');
require('../ConsultasSql.php');

$ConsultasBanco = new ConsultasBanco;

//Exemplo de select 
$sql="SELECT Nome FROM USERS";
$result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);

//Imprimindo o resultado
// while($nome = mysqli_fetch_assoc($result))
// {
// //  echo $nome['Nome']."<br>";
// $valor = $nome;
// }
// echo $valor;

//Exemplo de como imprimir todos usuários
echo "<p>Lista de todos usuários</p>";
$users = $ConsultasBanco->TodosUsuarios();
foreach($users as $lista)
{
    echo $lista."<br>";
}

echo "<p>Lista de todos adm</p>";
//Exemplo de como imprimir uma lista de adm
$adm = $ConsultasBanco->ListaDeAdm();
foreach($adm as $lista)
{
    echo $lista."<br>";
}

echo "<p>Lista de todos usuários não adm</p>";
//Exemplo de como imprimir uma lista de usuários sem ser adm
$nonAdm = $ConsultasBanco->ListaDeUsuarios();
foreach($nonAdm as $lista)
{
    echo $lista."<br>";
}

echo "<p>Lista de todos Emails do site</p>";
//Exemplo de como imprimir uma lista de todos emails
$email = $ConsultasBanco->ListaEmail();
foreach($email as $lista)
{
    echo $lista."<br>";
}

echo "<p>Lista de todas Categorias(códigos) do site</p>";
//Exemplo de como imprimir uma lista de todas categorias
$categoria = $ConsultasBanco->ListaCategorias();
foreach($categoria as $lista)
{
    echo $lista."<br>";
}

echo "<p>Lista de todos Produtos do site</p>";
//Exemplo de como imprimir todos produtos 
$categoria = $ConsultasBanco->SelectProd();
foreach($categoria as $lista)
 {
    echo $lista['PRO_Nome'].' '.$lista['PRO_Codigo'].'<br>';
 }

























