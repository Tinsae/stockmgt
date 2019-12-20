
<?php
session_start();
include('connect.php');
if(isset($_GET['reqno']))
{
$reqno=$_GET['reqno'];
$query1=mysqli_query($dbConn, "UPDATE requestmaterial SET appv_user='".$_SESSION['uname']."' WHERE req_no=$reqno");
mysql_error();
if($query1)
{
echo "<script>
alert('Request Sucessfully Approved');
window.location.href='viewrequests.php'; 
</script>";

}
else
{
echo "<script>
alert('Request Cannot be Approved' );
window.location.href='viewrequests.php';
</script>";
}
}
?>
