<?php

$assunto= $_POST['assunto'];
$msg= $_POST['msg'];

//defazendo o array(caso não seja array isso não fará nada)
$Emails = implode(" ",$_POST['email']);
//refazendo o array
$Emails = explode(" ", $Emails );
$Emails= array_filter($Emails);

// if (isset($_POST['todos'])) {
    
    //não estava entrando nessa condição, pois o nome do form é email e não todos(mesmo a opção selecionado se chamando todos)
    
// }
// else
// {
//     $Emails = $_POST['email'];
    
// }

//Incluir o phpmailer
require_once("PHPMailerAutoload.php");

//Criar instancia do phpmailer

$mail = new PHPMailer();

//habilitar SMTP

$mail->isSMTP();

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )

);
//debug para informar erros
$mail->SMTPDebug = 2; // 0-Nada 1-msg cliente e servidor 3 tudo
//host
$mail->Host = 'smtp.gmail.com';
//proteção
$mail->SMTPSecure = "tls";
//porta
$mail->Port = 587;
//Autenticação
$mail->SMTPAuth = true;
//detalhes da conta de email
$mail->Username = 'engcomplakers@gmail.com';
$mail->Password = 'computacao2015';
//detalhes do emil
$mail->setFrom('engcomplakers@gmail.com', 'Site');
foreach($Emails as $lista)
{
$mail->addAddress($lista);
}

$mail->Subject = $assunto;
$mail->Body = $msg;
//mensagem de envio ou erro
if($mail->send())
{
    header('Location:../SucessoEmail.php');
}
else
{
    echo "Deu algum erro!";
    header('Location:../ErroEmail.php');
}

?>