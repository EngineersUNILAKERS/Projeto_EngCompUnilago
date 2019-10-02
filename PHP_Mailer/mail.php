<?php

$emailuser = $_REQUEST['email'];
$assunto= $_POST['assunto'];
$msg= $_POST['msg'];

$Emails = explode(" ", $emailuser);
$Emails= array_filter($Emails);


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
}

?>