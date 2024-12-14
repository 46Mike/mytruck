<?php

$dbservername = 'mytrucv121.mysql.db';
$dbusername = 'mytrucv121';
$dbpassword = '_78.DantE.24_';
$dbname = 'mytrucv121';

$conn = mysqli_connect ($dbservername, $dbusername, $dbpassword,$dbname);
if ($conn = TRUE) 
     {
          echo 'connesso';
     }

?>
