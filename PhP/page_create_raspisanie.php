<?php

// этот код должен быть на всех страницах сайта, кроме страниц регистрации, авторизации, index.php

session_start();


if (!$_SESSION["login"])
{
header('Location:  index.php');      // переходим на страницу авторизации
exit();
}



if ($_SESSION["rol"] != "admin")
{
header('Location:  index.php');      // переходим на страницу авторизации
exit();
}



// Сдесь подключение к бд можно сделать, если нужно.



require_once('header/header_admin.php');


?>














<form action="create_timetable.php" method="post" class="form_raspisanie">

Formularz do tworzenia harmonogramu na 1 dzień dla 1 lekarza. <br><br>


    Wpisz nazwisko lekarza: <br>
<input type="text" name="name"/>  <br><br>

    Wprowadź datę rozpoczęcia budowy <br>
    harmonogram (w formacie 10 September 2000): <br>
<input type="text" name="date"/>  <br><br>

    Wybierz termin wizyty jednego lekarza: <br><br>
<select name="time_interval">
<option value="60">60 minut</option>
</select>

<br><br>


<input type='submit' value='Utwórz harmonogram lekarza'>

</form>
















<link rel="stylesheet" type="text/css" href="style.css" />









