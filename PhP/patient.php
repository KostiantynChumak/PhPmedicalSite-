<?php

require_once('inc/conf.php');

require_once('header/header_admin.php');

?>












<form action="add_patient.php" method="post" class="form_raspisanie">

    Formularz dodania pacjenta. <br><br>

Login <br>
<input type="text" name="login"/>  <br><br>

Password <br>
<input type="text" name="pass"/>  <br><br>

Name <br>
<input type="text" name="name"/>  <br><br>

City <br>
<input type="text" name="city"/>  <br><br>

Street <br>
<input type="text" name="street"/>  <br><br>


<input type='submit' value='Add'>

</form>










<?php



$Result= mysqli_query($Connect_db, "SELECT  id, name, city, street  FROM  `users`  WHERE  rol = 'patient'   ");


echo '
<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>City</th>
<th>Street</th>
<th>Delete</th>
</tr>
';

while ($Arr= mysqli_fetch_assoc($Result) )
{
$id= $Arr["id"];

echo'
<tr>
<td>'.$id.'</td>
<td>'.$Arr["name"].'</td>
<td>'.$Arr["city"].'</td>
<td>'.$Arr["street"].'</td>
<td> <input type="button" value="Delete" id="'.$id.'" class="delete"> </td>
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