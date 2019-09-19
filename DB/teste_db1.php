



<?php
//$mysql_hostname = 'databases-auth.000webhost.com';
//    $mysql_username = 'id10869503_root';
///  $mysql_password = 'root123';
//$mysql_dbname= 'id10869503_web_dev';
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "id10869503_web_dev";
$user = "id10869503_root";
$pass = "root123";
// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT *FROM users");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>
 
<html>
    <head>
    <title>Teste DB 1</title>
</head>
<body>
<?php
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
?>
            <p><?=$linha['user']?> / <?=$linha['email']?> / <?=$linha['id']?> /<?=$linha['groupId']?></p>
<?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysql_fetch_assoc($dados));
    // fim do if 
    }
?>
</body>
</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>