<?php

require_once('inc/conf.php');






// $_POST['name']= "Михаил";
// $_POST['time_interval']= 60;





$Name= $_POST['name'];
$Date_POST= $_POST['date'];
$Time_interval= $_POST['time_interval'];




// Создаем таблицу расписания врача, если ее нет.

$Result= mysqli_query($Connect_db, "CHECK TABLE {$Name}");

$Arr= mysqli_fetch_assoc($Result);


if ($Arr["Msg_type"] == Error)             // Всегда для строк используем "
{
mysqli_query($Connect_db, "

CREATE TABLE {$Name} (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
data VARCHAR(20),
svobodnaa_li VARCHAR(9)
)

");


}








$Time_unix= strtotime($Date_POST);           // $Date_POST == "10 September 2000"



$d= new DateTime();

// Преобразуем unix в дату и время.
$d->setTimestamp($Time_unix);
$Date= $d->format('d.m.Y  H:i');



for ($i= 0; $i < 24; $i++)
{
mysqli_query($Connect_db, "INSERT INTO  {$Name} (data, svobodnaa_li)  VALUES ('$Date', 'Wołna')    ");

$Time_unix= $Time_unix + $Time_interval * 60;

// Преобразуем unix в дату и время.
$d->setTimestamp($Time_unix);
$Date= $d->format('d.m.Y  H:i');
}
























header('Location:  page_create_raspisanie.php');      // Возвращаемся на страницу от куда пришел запрос (откуда пришел вызов этой страницы).

?>