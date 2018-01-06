<?php
$dbConn =mysqli_connect('localhost', 'root', '') or die("could not connect to server");
mysqli_select_db($dbConn,'stockmgt') or die("could not select db stock mgt");
?>