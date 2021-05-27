<?php
session_start();




if (isset($_SESSION["login"]) )                      // так как авторизация есть, то авторизоваться не нужно, перенаправляем на клиент
{
header('Location:  Client.php');
exit();
}

?>








<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<input type='button'  style='position: absolute; top: 10%; left: 45%;'   value='Wjście'  onclick="window.location.href='indexAuthorize.php'  ">
<input type='button'  style='position: absolute; top: 10%; left: 50%;'   value='Rejestracja'  onclick="window.location.href='indexRegistration.php'  ">








