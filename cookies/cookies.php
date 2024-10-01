<?php
$nome_cookie = "usuario";

$valor_cookie = "Aluno";

setcookie($nome_cookie, $valor_cookie, time() + 3600);
?>
<html>
    <body>
<?php  
if (!isset($_COOKIE[$nome_cookie])){
    echo "Cookie " . $nome_cookie . "não estava atribuído ";
}else{
    echo "Cookie " . $nome_cookie . "está atribuido <br>";

    echo "Valor :" . $_COOKIE[$nome_cookie];
}
?>
    </body>
</html>