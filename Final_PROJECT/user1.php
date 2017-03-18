<?php

session_start();
$link=mysqli_connect("localhost","root","root","ARS") or die("conn error");
if(isset($_SESSION['userid']) )
{
//print_r($_SESSION);

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Signed IN</title>
		<link href="contact/css/contactform.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
	<div id="formwrap">
	<div id="form">
		<header><h2><center>Welcome <?php $a=$_SESSION['username']; echo "$a";?></center></h2></header>

<div class="label"><a href="user2.php">Search Flight</a></div><div class="label"><a href="user3.php">Reservation Of Ticket</a></div>
	<div class="label"><a href="user4.php">Cancel Ticket</a></div>
	<footer><a href="logoutuser.php">LOGOUT</a></footer>
	</div></div>
</body>
</html>