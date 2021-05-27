<?php

require_once('inc/conf.php');


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



require_once('header/header_admin.php');



?>












<form action="raspisanie.php" method="post" class="form_raspisanie" style="height: 180">


Aby wyświetlić harmonogram, wprowadź dane: <br><br>


Wpisz nazwisko lekarza: <br>
<input type="text" name="name"/>  <br><br>

    Wprowadź datę harmonogramu (w formacie 10 September 2000): <br>
<input type="text" name="date"/>  <br><br>

<input type='submit'  style=''   value='Wyświetl harmonogram'>

</form>










<?php


$Name= $_POST['name'];
$Date_POST= $_POST['date'];

$Time_unix= strtotime($Date_POST);           // $Date_POST == "10 September 2000"


$d= new DateTime();

// Преобразуем unix в дату и время.
$d->setTimestamp($Time_unix);
$Date= $d->format('d.m.Y');



$Result= mysqli_query($Connect_db, "SELECT  data, svobodnaa_li  FROM  `{$Name}`  WHERE  LOCATE('$Date', data)   ");


echo '
<table>

<tr>
<th>Data</th>
<th>Wolny / zajęty</th>
<th>Umów się na wizytę</th>
</tr>
';

while ($Arr= mysqli_fetch_assoc($Result) )
{
$Data= $Arr["data"];	
	
echo'
<tr>
<td>'.$Arr["data"].'</td>
<td>'.$Arr["svobodnaa_li"].'</td>
<td> <input type="button" value="Umów się na wizytę" id="'.$Data.'" class="zapisat"> </td>
</tr>
';
}

echo'
</table>
';




?>















<script>




Name = "<?php echo $_POST['name']; ?> ";





var buttons= document.querySelectorAll('.zapisat');

Array.from(buttons).forEach(function(button)
{

button.addEventListener('click', function(e)
{
var id= e.target.id;

// alert(id);


id_patient= prompt('Wprowadź identyfikator pacjenta');
Name_patient= prompt('Wprowadź nazwisko pacjenta');
Price= prompt('Podaj cenę');

// alert(id_patient);
// alert(Name);
// alert(Price);



xhttp= new XMLHttpRequest();
xhttp.open('POST', 'update_raspisanie_doctor.php', true);  
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send('id_patient2=' +id_patient+ '&Name2=' +Name+ '&id2=' +id+   '&Name_patient2=' +Name_patient+ '&Price2=' +Price); 

xhttp.onreadystatechange = function()
{
if (xhttp.readyState == 4 && xhttp.status == 200)
if (xhttp.responseText == "ok")
alert("Записано");
else
alert("Ошибка");

}


})   // Конец   button.addEventListener()
});   // Конец   Array.from()




</script>












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





