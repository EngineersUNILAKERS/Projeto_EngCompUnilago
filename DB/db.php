<?php

function db_connect()
{

    
    //$mysql_hostname = 'databases-auth.000webhost.com';
    //    $mysql_username = 'id10869503_root';
    ///  $mysql_password = 'root123';
    //$mysql_dbname= 'id10869503_web_dev';
    // definições de host, database, usuário e senha
    $host = "localhost";
    $db   = "id10869503_web_dev";
    $userdb= "id10869503_root";
    $pass = "root123";
    // conecta ao banco de dados
    $con = mysql_pconnect($host, $userdb, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
    // seleciona a base de dados em que vamos trabalhar
    mysql_select_db($db, $con);
    // cria a instrução SQL que vai selecionar os dados
    $query = sprintf("SELECT  * FROM users");
    // executa a query
    $dados = mysql_query($query, $con) or die(mysql_error());
    // transforma os dados em um array
    $linha = mysql_fetch_assoc($dados);
    // calcula quantos dados retornaram
    $total = mysql_num_rows($dados);
    
  
    

    
}

function checkLogin($user, $MD5_password)
{
    $dbh = db_connect();

    try
    {
        $stmt = $dbh->prepare("SELECT   id, 
                                        name, 
                                        user, 
                                        password,
                                        email, 
                                        groupId 
                                FROM users 
                                WHERE   user = :user
                                AND     password = :password");

        /*** bind the parameters ***/
        $stmt->bindParam(':user', $user, PDO::PARAM_STR);
        $stmt->bindParam(':password', $MD5_password, PDO::PARAM_STR);

        /*** execute the prepared statement ***/
        $stmt->execute();

        // Commit Transaction
        $user = $stmt->fetchAll();

        return $user;
    }
    catch (Exception $e) 
    {
        throw new Exception("Erro de conexão no bando de dados ". $e);
        return null;
    }
}

?>