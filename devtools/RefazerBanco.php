<?php
require('../config.php');

$NomeDoServer=$GLOBALS['NomeDoServer'];
$UserDoServer=$GLOBALS['UserDoServer'];
$senha = $GLOBALS['senha'];
$nomeDoBanco =$GLOBALS['nomeDoBanco'];

// Conectando com o MySql Server(conexão sem o nome do banco de dados)
$conn = new mysqli($NomeDoServer, $UserDoServer, $senha);

// Checando conexão
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}
//Criando o banco
$refazer = "DROP DATABASE`".$nomeDoBanco;

//Redirecionar para CriarBanco.php para refazer o banco
if ($conn->query($refazer) === TRUE) {
    header('Location: CriarBanco.php');
}
else {
 echo 'Error: '. $conn->error;
}






























