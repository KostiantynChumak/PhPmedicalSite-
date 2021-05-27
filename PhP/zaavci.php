<?php

require_once('inc/conf.php');

require_once('header/header_admin.php');





$Result= mysqli_query($Connect_db, "SELECT  *  FROM  `zaavci`   ");


echo '
<table>

<tr>
<th>A patient</th>
<th>Patient ID</th>
<th>Doctor</th>
</tr>
';

while ($Arr= mysqli_fetch_assoc($Result) )
{

echo'
<tr>
<td>'.$Arr["patient"].'</td>
<td>'.$Arr["id_patient"].'</td>
<td>'.$Arr["doctor"].'</td>
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