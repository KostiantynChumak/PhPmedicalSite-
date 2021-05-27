<?php

session_start();

require_once('inc/conf.php');




$Name= $_POST['name'];
$Name_doctor= $_POST['name_doctor'];
$id_patient= $_SESSION['id'];

mysqli_query($Connect_db, "INSERT INTO  zaavci  (patient, doctor, id_patient)  VALUES ('$Name', '$Name_doctor', '$id_patient' )    ");

header('Location:  Client.php');      // Возвращаемся на страницу от куда пришел запрос (откуда пришел вызов этой страницы).

?>