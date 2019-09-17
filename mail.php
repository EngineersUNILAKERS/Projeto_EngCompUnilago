<?php


$nome= $_REQUEST['nome'];
$fone= $_REQUEST['telefone'];
$email= $_REQUEST['email'];
$msg= $_REQUEST['msg'];

$assunto= $_REQUEST['assunto'];

$opcao= $_REQUEST['opcao'];

           
                     

           $corpo = "<strong>Mensagem de Lojista </strong><br><br>";
           $corpo .= "<strong> Nome: </strong>$nome";
           $corpo .= "<br><strong> Telefone: </strong>$fone";
           $corpo .= "<br><strong> Email: </strong>$email";
           $corpo .= "<br><strong> Mensagem: </strong>$msg";
           
           $para= "comercial@joveportas.com.br";
           $assunto.= " - Contato pelo Site";
           

            
           $header ="Content-Type: text/html; charset= utf-8\n";
           $header .="From: $email Reply-to: $email\n";
           
           
          

@mail($para, $assunto, $corpo, $header);           

header("location:contato.php?msg=enviado");

?>