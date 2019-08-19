<?php

    if (isset ($_POST['email']) && !empty($_POST['email'])) {
        $to = "cursosimbuia@gmail.com";
        $subject = "Contato - Cursos Imbuia";
        $body = "Nome: ".$_POST['name']. "\r\n"
                ."E-mail: ".$_POST['email']. "\r\n"
                ."Mensagem: ".$_POST['message'];

        if (mail ($to, $subject,$body)) {
            echo '<script>alert("Mensagem enviada");</script>';
        } else {
            echo '<script>alert("Falha no envio. Por favor, envie a mensagem diretamente para cursosimbuia@gmail.com");</script>';
        }
}  
header("Refresh: 0; index.html");
  
?>
