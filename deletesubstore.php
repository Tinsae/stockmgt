
<?php
include('connect.php');
if(isset($_GET['substoreid']))
{
$substoreid=$_GET['substoreid'];
$query1=mysqli_query($dbConn, "DELETE FROM substore WHERE sub_store_ID='".$_GET['substoreid']."'");
if($query1)
{
echo "<script>
alert('Sub Store Successfully Deleted');
window.location.href='viewsubstores.php';
</script>";

}
else
{
echo "<script>
alert('Sub Store Cannot be deleted');
window.location.href='viewsubstores.php';
</script>";
}
}
?>
