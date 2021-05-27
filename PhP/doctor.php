<?php

require_once('inc/conf.php');

require_once('header/header_admin.php');

?>












<form action="add_doctor.php" method="post" class="form_raspisanie">

    Dodaj formularz lekarza. <br><br>

Imię <br>
<input type="text" name="name"/>  <br><br>

    Specjalizacja <br>
<input type="text" name="specialization"/>  <br><br>

Telefon <br>
<input type="text" name="phone"/>  <br><br>

    Wynagrodzenie <br>
<input type="text" name="zarplata"/>  <br><br>

<input type='submit' value='Add'>

</form>










<?php



$Result= mysqli_query($Connect_db, "SELECT  id, name, specialization, phone, zarplata  FROM  `users`  WHERE  rol = 'doctor'   ");


echo '
<table>

<tr>
<th>Imię</th>
<th>Specjalizacja / zajęty </th>
<th>Telefon</th>
<th>Wynagrodzenie</th>
<th>Usunąć</th>
</tr>
';

while ($Arr= mysqli_fetch_assoc($Result) )
{
$id= $Arr["id"];

echo'
<tr>
<td>'.$Arr["name"].'</td>
<td>'.$Arr["specialization"].'</td>
<td>'.$Arr["phone"].'</td>
<td>'.$Arr["Wynagrodzenie"].'</td>
<td> <input type="button" value="Usunąć" id="'.$id.'" class="delete"> </td>
</tr>
';
}

echo'
</table>
';



?>











<script>




var buttons= document.querySelectorAll('.delete');

Array.from(buttons).forEach(function(button)
{

button.addEventListener('click', function(e)
{
var id= e.target.id;

// alert(id);


xhttp= new XMLHttpRequest();
xhttp.open('POST', 'delete_user.php', true);  
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send('id2=' +id); 

xhttp.onreadystatechange = function()
{

if (xhttp.readyState == 4 && xhttp.status == 200)
if (xhttp.responseText == "ok")
{
alert("Удалено");
window.location.reload(true);
}

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