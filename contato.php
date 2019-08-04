
<?php

    if (isset ($_POST['email']) && !empty($_POST['email'])) {

    $nome = addcslashes($_POST['name']);
    $email = addcslashes($_POST['email']);
    $mensagem = addcslashes($_POST['message']);
    
    $to = "sams2723@gmail.com";
    $subject = "Contato - Cursos Imbuia";
    $body = "Nome: ".$nome. "\r\n"
            ."Email ".$email. "\r\n"
            ."Mensagem: ".$mensagem;
    $header = "From: samara@cursosimbuia.com"."\r\n"
            ."Replay-To: ".$email."\r\n"
            ."X=Mailer:PHP".phpversion();

    if (mail ($to, $subject,$body,$header)) {
        echo ("Email enviado com sucesso!");
    } else {
        echo ("Falha. O email não pode ser enviado.");
    }


}
?>