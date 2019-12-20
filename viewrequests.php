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

/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the divs. The elements within these divs have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a div set to float right). Many times, padding can be used instead. For divs where this rule must be broken, you should add a "display:inline" declaration to the div's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar divs could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the right instead of the left, simply float these columns the opposite direction (all right instead of all left) and they'll render in reverse order. There's no need to move the divs around in the HTML source.

*/
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
    <ul class="nav">
    <li><a href="viewrequests.php">View Requests</a></li>

    </ul>
    <p><!-- end .sidebar1 --></p>
  </div>
<p align="left"><strong>Waiting Requests</strong></p>
  <div class="content"><!-- end .content -->    <form id="form1" name="form1" method="post" action="">

<table style="font-size:12px" border="0" align="center" cellpadding="2"
			cellspacing="2">
			<!-- column headers -->
			<tr>
				<th bgcolor="lightblue">Req No.</th>
				<th bgcolor="lightblue">Sub-Store ID</th>
				<th bgcolor="lightblue">Material ID</th>
				<th bgcolor="lightblue">Req User</th>

			</tr>
<?php
include('connect.php');
$query1=mysqli_query($dbConn, "SELECT * FROM requestmaterial WHERE appv_user IS NULL");
while($queryttt=mysql_fetch_array($query1))	
{	
echo "<tr><td>".$queryttt['req_no']."</td>";
echo "<td>".$queryttt['sub_store_ID']."</td>";
echo "<td>".$queryttt['mat_ID']."</td>";
echo "<td>".$queryttt['reqt_user']."</td>";
echo "<td>".$queryttt['appv_user']."</td>";

echo "<td><a href='approvereq.php?reqno=".$queryttt['req_no']."'>Approve</a></td>";
}
?>
</table>
<strong>Approved Requests</strong>
<table style="font-size:12px" border="0" align="center" cellpadding="2"
			cellspacing="2">
			<!-- column headers -->
			<tr>
				<th bgcolor="lightblue">Req No.</th>
				<th bgcolor="lightblue">Sub-Store ID</th>
				<th bgcolor="lightblue">Material ID</th>
				<th bgcolor="lightblue">Req User</th>
                <th bgcolor="lightblue">App User</th>

  </tr>
<?php
include('connect.php');
$query2=mysqli_query($dbConn, "SELECT * FROM requestmaterial WHERE appv_user IS NOT NULL");
while($querymmm=mysql_fetch_array($query2))	
{	
echo "<tr><td>".$querymmm['req_no']."</td>";
echo "<td>".$querymmm['sub_store_ID']."</td>";
echo "<td>".$querymmm['mat_ID']."</td>";
echo "<td>".$querymmm['reqt_user']."</td>";
echo "<td>".$querymmm['appv_user']."</td>";


}
?>
</table> 


 
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
