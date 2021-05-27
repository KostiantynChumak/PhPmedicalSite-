<?php

// этот код должен быть на всех страницах сайта, кроме страниц регистрации, авторизации, index.php

session_start();

if (!$_SESSION["login"])
{
header('Location:  index.php');
exit();            // переходим на страницу авторизации
}

?>






<meta http-equiv="Content-Type" content="text/html; charset=utf-8">







<input type='button'  style='float: right'   value='Wyjście'  onclick="window.location.href='logout.php'  ">




Pacjent <br><br>








<form action="create_zaavca.php" method="post" class="form_raspisanie" style="height: 180">

    Formularz zgłoszeniowy <br><br>

    Twoje imię <br>
<input type="text" name="name"/>  <br><br>

    Imię doktora <br>
<input type="text" name="name_doctor"/>  <br><br>

<input type='submit'  value='Zastosować'>

</form>









<?php

require_once('inc/conf.php');





$id_patient= $_SESSION['id'];                  // Так как этот файл для клиента, то не $id, а $id_patient.

$Result= mysqli_query($Connect_db, "SELECT  *  FROM  `visits`    WHERE   id_patient = '$id_patient'   LIMIT 1   ");

$Arr= mysqli_fetch_assoc($Result);

if (isset($Arr["date"]) && $Arr["status"] == "")
echo 'Masz zaplanowaną wizytę ' .$Arr["date"]. 'do lekarza ' .$Arr["doctor"];






echo '<br><br> Historia:';





mysqli_data_seek($Result, 0);        // Чтобы еще раз перебрать $Result.


echo '
<table>

<tr>
<th>Lekarz</th>
<th>Data</th>
<th>Cena</th>
<th>Status</th>
</tr>
';

while ($Arr= mysqli_fetch_assoc($Result) )
if ($Arr["status"] != "")
{

echo'
<tr>
<td>'.$Arr["doctor"].'</td>
<td>'.$Arr["date"].'</td>
<td>'.$Arr["price"].'</td>
<td>'.$Arr["status"].'</td>
</tr>
';
}

echo'
</table>
';





?>

















<link rel="stylesheet" type="text/css" href="style.css" />



<style>


table
{
border-collapse: collapse;      /* Убираем двойные границы между ячейками */
}

td, th
{
padding: 5px;                   /* Поля вокруг текста */
border: 2px solid Gainsboro;    /* Рамка вокруг ячеек */
}


</style>


