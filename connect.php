<?php
//$dbConn =mysqli_connect('localhost', 'root', '') or die("could not connect to server");
$dbConn =mysqli_connect('us-cdbr-gcp-east-01.cleardb.net/gcp_83c58c04d2606dd50304', 'bf7fc733d29771', '980e67efe15a403') or die("could not connect to server");
mysqli_select_db($dbConn,'stockmgt') or die("could not select db stock mgt");
?>