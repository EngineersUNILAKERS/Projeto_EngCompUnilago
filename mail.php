<?php



$assunto= "Mensagem de UNILAKERS";
$emailuser = $_REQUEST['email'];
$msg= $_REQUEST['msg'];
$email = "ENGCOMPLAKERS@GMAIL.COM";
           
                     

           $corpo = "<strong>Mensagem de UNILAKERS </strong><br><br>";
           $corpo .= "<br><strong> Mensagem: </strong>$msg";
           
           $para = $emailuser;
           $assunto= "Contato pelo Site";
           

            
           $header ="Content-Type: text/html; charset= utf-8\n";
           $header .="De: $email Reply-to: $email\n";
           
           
          

@mail($para, $assunto, $corpo, $header);           

echo "email enviado com sucesso!"

?>