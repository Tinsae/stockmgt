
<?php
include('connect.php');
if(isset($_GET['matid']))
{
$id=$_GET['matid'];
$query1=mysql_query("DELETE FROM material WHERE mat_ID='".$_GET['matid']."'");
if($query1)
{
echo "<script>
alert('Material Successfully Deleted');
window.location.href='viewmaterials.php';
</script>";

}
else
{
echo "<script>
alert('Material Cannot be deleted');
window.location.href='viewmaterials.php';
</script>";
}
}
?>
