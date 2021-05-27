<?php

require_once('inc/conf.php');



$id_patient= $_POST['id_patient2'];
$Name= $_POST['Name2'];
$id= $_POST['id2'];
$Name_patient= $_POST['Name_patient2'];
$Price= $_POST['Price2'];


mysqli_query($Connect_db, "UPDATE  {$Name}   SET  svobodnaa_li = 'занятая', pacient = '$Name_patient', price = '$Price'    WHERE  data = '{$id}'   LIMIT 1   ");





mysqli_query($Connect_db, "INSERT INTO  visits (patient, id_patient, doctor, date, price)  VALUES ('$Name_patient', '$id_patient', '$Name', '$id', '$Price')    ");








exit("ok");

?>