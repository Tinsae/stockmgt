
<?php
include('connect.php');
if(isset($_GET['substoreid']) AND isset($_GET['matid']))
{
$substoreid=$_GET['substoreid'];
$matid=$_GET['matid'];

$query1=mysql_query("DELETE FROM assignmaterial WHERE sub_store_ID='".$_GET['substoreid']."' AND mat_ID='".$_GET['matid']."'");
if($query1)
{
echo "<script>
alert('Assigned Material Successfully Deleted');
window.location.href='viewassignedmats.php';
</script>";
}
else
{
echo "<script>
alert('Assigned Material Cannot be Deleted');
window.location.href='viewassignedmats.php';
</script>";
}
}
?>
