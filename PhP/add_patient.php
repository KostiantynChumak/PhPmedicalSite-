<?php

require_once('inc/conf.php');



$Login= $_POST['login'];
$Pass= $_POST['pass'];
$Name= $_POST['name'];
$City= $_POST['city'];
$Street= $_POST['street'];

mysqli_query($Connect_db, "INSERT INTO  users  (login, pass, rol, name, specialization, phone, zarplata, city, street)  VALUES ('$Login', '$Pass', 'patient', '$Name', '', '', '', '$City', '$Street' )    ");



header('Location:  patient.php');      // Возвращаемся на страницу от куда пришел запрос (откуда пришел вызов этой страницы).

?>