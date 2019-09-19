<?php

session_start();

include "db.php";

function main()
{
    $user = "usuario";
    $password = "1234567890";
    $MD5_password = md5($password);
    echo $MD5_password;
    
    try{

        $userInfo = checkLogin($user, $MD5_password);
       
        echo "<pre>user = ". print_r($userInfo, true) . "</pre>";

        if(!empty($userInfo))
        {
            echo "Usuário validado: Bem-vindo!";
        }
        else
        {
            echo "user ou password inválidos";
        }

    }
    catch(Exception $e)
    {
        echo "Desculpe, ocorreu um erro: " . $e->getMessage();
    }
}


main();
