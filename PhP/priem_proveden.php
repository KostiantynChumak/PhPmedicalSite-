<?php

require_once('inc/conf.php');



$id= $_POST['id2'];

mysqli_query($Connect_db, "UPDATE  visits   SET  status = 'Przyjęcie odbyło się'    WHERE  id = '{$id}'   LIMIT 1   ");







exit("ok");

?>