<?php
setcookie('autenticado' , '', time()- 3600);
header ('Location: login.php');
exit;
?>