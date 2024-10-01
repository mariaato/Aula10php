<?php
if(!isset($_COOKIE['autenticado']) || $_COOKIE['autenticado'] !== 'true'){
    header('Location : login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteudo Restrito</title>
</head>
<body>
    <h1> Conteúdo Restrito </h1>
    <p>Este é um conteudo restrito acessivel apenas para usuários autenticados.</p>
    <p><a href = "logout.php">Sair</a></p>
    
</body>
</html>