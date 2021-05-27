<?php

require_once('inc/conf.php');

require_once('header/header_admin.php');










$Result= mysqli_query($Connect_db, "SELECT  *  FROM  `visits`   ");


echo '
<table>

<tr>
<th>Patient name</th>
<th>Doctors name</th>
<th>Date of visit</th>
<th>Price</th>
<th>Status</th>
</tr>
';


while ($Arr= mysqli_fetch_assoc($Result) )
{
$id= $Arr["id"];

echo'
<tr>
<td>'.$Arr["patient"].'</td>
<td>'.$Arr["doctor"].'</td>
<td>'.$Arr["date"].'</td>
<td>'.$Arr["price"].'</td>

';

if ($Arr["status"] == '')
echo '
<td> <input type="button" value="Reception held" id="'.$id.'" class="priem_proveden"> </td>
';

else
echo '<td>Reception held</td>';

echo '
</tr>
';

}


echo'
</table>
';





?>
















<script>




var buttons= document.querySelectorAll('.priem_proveden');

Array.from(buttons).forEach(function(button)
{

button.addEventListener('click', function(e)
{
var id= e.target.id;

// alert(id);


xhttp= new XMLHttpRequest();
xhttp.open('POST', 'priem_proveden.php', true);  
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send('id2=' +id); 

xhttp.onreadystatechange = function()
{

if (xhttp.readyState == 4 && xhttp.status == 200)
if (xhttp.responseText == "ok")
{
alert("Zapisano");
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