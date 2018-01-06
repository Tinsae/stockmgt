<?php

/* $sqlFileToExecute = 'stockmgt.sql';
$hostname = 'us-cdbr-gcp-east-01.cleardb.net';
$db_user = 'bf7fc733d29771';
$db_password = '980e67efe15a403';
$link = mysqli_connect($hostname, $db_user, $db_password);
if (!$link) {
  die ("MySQL Connection error");
}
 
$database_name = 'gcp_83c58c04d2606dd50304';
mysql_select_db($database_name, $link) or die ("Wrong MySQL Database");
 
// read the sql file
$f = fopen($sqlFileToExecute,"r+");
$sqlFile = fread($f, filesize($sqlFileToExecute));
$sqlArray = explode(';',$sqlFile);
foreach ($sqlArray as $stmt) {
  if (strlen($stmt)>3 && substr(ltrim($stmt),0,2)!='/*') {
    $result = mysql_query($stmt);
    if (!$result) {
      $sqlErrorCode = mysql_errno();
      $sqlErrorText = mysql_error();
      $sqlStmt = $stmt;
      break;
    }
  }
}
if ($sqlErrorCode == 0) {
  echo "Script is executed succesfully!";
} else {
  echo "An error occured during installation!<br/>";
  echo "Error code: $sqlErrorCode<br/>";
  echo "Error text: $sqlErrorText<br/>";
  echo "Statement:<br/> $sqlStmt<br/>";
}




 */









//$dbConn =mysqli_connect('localhost', 'root', '') or die("could not connect to server");
$dbConn = mysqli_connect('us-cdbr-gcp-east-01.cleardb.net', 'bf7fc733d29771', '980e67efe15a403') or die("tinsae: could not connect to server");
//mysqli_select_db($dbConn,'stockmgt') or die("could not select db stock mgt");
mysqli_select_db($dbConn,'gcp_83c58c04d2606dd50304') or die("could not select db on cloud");
?>