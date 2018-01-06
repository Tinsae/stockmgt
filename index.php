<?php 
session_start();
if(isset($_POST['submit'])) {

include_once('connect.php');
	$uname=$_POST['username'];
	$pword=$_POST['password'];//md5($_POST['pword']) 
	$query="SELECT * FROM user WHERE user_name='".$uname."' and password='".$pword."'";
	$result=mysqli_query($dbConn,$query);
	if(mysqli_num_rows($result)>0)
	  {
		$row=mysqli_fetch_array($result);
		$_SESSION['uname']=$row['user_name'];
		$_SESSION['pword']=$row['password'];
		$_SESSION['utype']=$row['user_type'];
		session_write_close();
		if($_SESSION['utype']=="Admin")
        {
		
		header('Location: admin.php');
		   }
		 else if($_SESSION['utype']=="Main_Store")
		  {
	
			header('Location: mainstorehome.php');
          }
	    else if($_SESSION['utype']=="Keeper")
		  {
	
			header('Location: substorekeeper.php');
          }
		else if($_SESSION['utype']=="Customer")
		  {
		 header('Location: customerhome.php');
		  }
		  	exit();
	      }
    
		else
	     {
echo '<script language="javascript">';
echo 'window.alert("Invalid User name or password");';
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
    <br />
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="contactus.php">Contact Us</a></li>
    </ul>
    <p><!-- end .sidebar1 --></p>
  </div>
  <div class="content">
<h3>Welcome to the Web Stock Management</h3>
    <p>In many organizations  the Internal control system, manpower management, Inventory management and  control, cash control and management, etc are given no or little emphasis. This  being said we as a group concur on the idea giving high emphasis on the stated  matters of an organization lead to success. In addition to success, we need to  satisfy the need of customers through ensuring sound internal control system. </p>
    <h1>&nbsp;</h1>
  <!-- end .content --></div>
  <div class="sidebar2">
    <h4>Login Here</h4>
    <form id="form1" name="form1" method="post" action="">
    <table width="276" border="0" cellpadding="2" cellspacing="8">
        <tr>
          <td>User Name</td>
          <td><input type="text" name="username" id="username" /></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password" id="password" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="submit" id="submit" value="Go" /></td>
        </tr>
      </table>
    </form>
  <!-- end .sidebar2 --></div>
    <div class="footer">
    <p>Designed and Developed by ASTU MIS Students, All Rights Reserved.<!-- end .footer --></p>
  </div>
  <!-- end .container --></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
