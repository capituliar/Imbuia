<?php

    if (isset ($_POST['email']) && !empty($_POST['email'])) {

    $to = "cursosimbuia@gmail.com";
    $subject = "Contato - Cursos Imbuia";
    $body = "Nome: ".$_POST['name']. "\r\n"
            ."Email: ".$_POST['email']. "\r\n"
            ."Mensagem: ".$_POST['message'];
    $header = "From: cursosimbuia@gmail.com"."\r\n"
            ."Replay-To: ".$_POST['email']."\r\n"
            ."X=Mailer:PHP".phpversion();

    if (mail ($to, $subject,$body,$header)) {
        echo '<script>alert("Mensagem enviada");</script>';
    } else {
        echo '<script>alert("Falha no envio. Por favor, envie a mensagem diretamente para cursosimbuia@gmail.com");</script>';
    }
}  
header("Refresh: 0; index.html");
  
?>
