<?php

function db_connect()
{

    /*** mysql_hostname 
     * 
     * Coloque nesta variável o endereço do servidor
     * 
     * ***/
    $mysql_hostname = "";

    /*** mysql_username 
     * 
     * Coloque nesta variável o user do banco de dados
     * 
     * ***/
    $mysql_username = "";

    /*** mysql_password 
     * 
     * Coloque nesta variável o password do banco de dados
     * 
     * ***/
    $mysql_password = "";

    /*** mysql_database 
     * 
     * Coloque nesta variável o nome da base de dados
     * 
     * ***/
    $mysql_dbname = "";

    $mysql_hostname = 'localhost';
    $mysql_username = 'id10869503_root';
    $mysql_password = 'root123';
    $mysql_dbname= 'id10869503_web_dev';

    try {
        $dbh = new pdo("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        /*** $message = a message saying we have connected ***/

        // /*** set the error mode to exceptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $dbh;
    } 
    catch (Exception $e) 
    {
        trigger_error("Erro de conexão no banco de dados <br>". $e);
        return null;
    }

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
