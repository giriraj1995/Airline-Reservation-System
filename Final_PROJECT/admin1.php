<?php

session_start();
$link=mysqli_connect("localhost","root","root","ARS") or die("conn error");
if(isset($_SESSION['adminid']) )
{
//print_r($_SESSION);
}


?>
<!DOCTYPE html>
<html>
<head>
	<link href="contact/css/contactform.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="contact.css">
	<title>Signed IN</title>
</head>
<body>
	<div id="formwrap">
	<div id="form">
<header><h2><center>Welcome <?php $a=$_SESSION['adminname'];echo "$a";?></center></h2></header>
	<div class="label"><a href="admin2.php">Add New Flight Details</a></div><div class="label"><a href="admin3.php">Cancel A Flight</a></div>
	<footer><a href="logoutadmin.php">LOGOUT</a></footer>
	</div></div>
</body>
</html>