<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <?php
    $nome = $_POST["nome"];
    $email = $_POST ["email"];
    $sexo = $_POST ["sexo"];
    
    include 'banco.php';
    cadastrar_usuario ($nome, $email, $sexo);
    ?>
</body>
</html>