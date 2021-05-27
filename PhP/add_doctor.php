<?php

require_once('inc/conf.php');



$Name= $_POST['name'];
$Specialization= $_POST['specialization'];
$Phone= $_POST['phone'];
$Zarplata= $_POST['salary'];

mysqli_query($Connect_db, "INSERT INTO  users  (login, pass, rol, name, specialization, phone, salary)  VALUES ('', '', 'doctor', '$Name', '$Specialization', '$Phone', '$Salary' )    ");

header('Location:  doctor.php');      // Возвращаемся на страницу от куда пришел запрос (откуда пришел вызов этой страницы).

?>