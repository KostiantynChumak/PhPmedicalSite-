<?php

define ('DB_HOST', 'localhost');  
define ('DB_USER', 'root');
define ('DB_PASSWORD', '');
define ('DB_NAME', 'meds');

$Connect_db= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD); 

mysqli_select_db($Connect_db, DB_NAME);





?>
