
<?php  session_start();if(isset($_POST['submit'])) {

$subid=$_POST['subid'];
$dept=$_POST['dept'];
$block=$_POST['block'];
include('connect.php');
$query="INSERT INTO substore VALUES ('$subid','$dept','$block')";

$result=mysqli_query($dbConn, $query);
if($result)
{
echo '<script language="javascript">';
echo 'window.alert("New Sub-Store Added");';
echo '</script>';}
else
{
echo '<script language="javascript">';
echo 'alert("Unable to Insert Sub Store")';
echo '</script>';

}

}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}

ul, ol, dl { 
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 
	padding-right: 15px;
	padding-left: 15px; }
a img { 
	border: none;
}

a:link {
	color: #42413C;
	text-decoration: underline; 
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { 
	text-decoration: none;
}

.container {
	width: 960px;
	background-color: #FFFFFF;
	margin: 0 auto; 
}

.header {
	background-color: #ADB96E;
	border-width: 4px;
}

.sidebar1 {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding-bottom: 10px;
}
.content {
	padding: 10px 0;
	width: 510px;
	float: left;
}
.sidebar2 {
	float: left;
	width: 270px;
	background-color: #EADCAE;
	padding: 10px 0;
}

.content ul, .content ol { 
	padding: 0 15px 15px 40px; 
}

ul.nav {
	list-style: none; 
	border-top: 1px solid #666; 
	margin-bottom: 15px; }
ul.nav li {
	border-bottom: 1px solid #666; 
}
ul.nav a, ul.nav a:visited { 
	padding: 5px 5px 5px 15px;
	display: block; width: 160px;
	text-decoration: none;
	background-color: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { 
	background-color: #ADB96E;
	color: #FFF;
}

.footer {
	padding: 10px 0;
	background-color: #CCC49F;
	position: relative;
	clear: both; /
}

.fltrt {  
	float: right;
	margin-left: 8px;
}
.fltlft { 
	float: left;
	margin-right: 8px;
}
.clearfloat {
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>

<div class="container">
  <div class="header">
    <p><a href="index.php"><img src="images/ASTU Logo.gif" alt="Insert Logo Here" name="Insert_logo" width="64" height="64" id="Insert_logo" style="background-color: #C6D580; display:block;" /></a> 
      ASTU Stock Management
</p>
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="index.php">Home</a>      </li>
      <li><a href="services.php">Services</a></li>
      <li><a href="aboutus.php">About Us</a>      </li>
      <li><a href="contactus.php">Contact Us</a></li>
    </ul>
    <p>&nbsp; </p>
    <!-- end .header --></div>
 <br/>

  <div class="sidebar1">
    <ul class="nav">      <li><a href="newsubstore.php">New Sub Store</a></li>
      <li><a href="newmaterial.php">New  Material</a></li>
      <li><a href="assignmaterial.php">Assign Material</a></li>
	  	  <li><a href="viewsubstores.php">View Sub Stores</a></li><li><a href="viewmaterials.php">View Materials</a></li>
<li><a href="viewassignedmats.php">View Assigned Materials.</a></li>
</ul>
    <p><!-- end .sidebar1 --></p>
  </div>
  <p align="left"><strong>	New Sub Store</strong></p>
  <div class="content"><!-- end .content -->
    <form id="form1" name="form1" method="post" action="">
    <table width="410" border="0" align="right" cellpadding="2" cellspacing="8">
      <tr>
        <td width="118">Sub Store ID</td>
        <td width="276">
          <input type="text" name="subid" id="subid" />
        </td>
      </tr>
      <tr>
        <td>Department</td>
        <td><input type="text" name="dept" id="dept" /></td>
      </tr>
      <tr>
        <td>Block</td>
        <td><input type="text" name="block" id="block" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="submit" /></td>
      </tr>
    </table>
    </form>
  </div>
  <div class="footer">
    <p>Designed and Developed by ASTU MIS Students, All Rights Reserved.<!-- end .footer --></p>
  </div>
  <!-- end .container --></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>




