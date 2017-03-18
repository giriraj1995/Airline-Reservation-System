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
	<title>New Flight Details</title>
		<link href="contact/css/contactform.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
	<div id="formwrap">
	<div id="form">
	<header><h2><center>New Flight Details</center></h2></header>

<form method="post">
<div class="row">	<div class="label"> Enter Flight No : </div><div class="input"><input type="text" name="flightno"></div>
</div>
<div class="row">
	<div class="label"> Enter Flight Name : </div><div class="input"><input type="text" name="flightname"></div>
	</div>
	<div class="row">
	<div class="label">
		Enter Company Id : </div><div class="input"><input type="text" name="companyid"></div>
		</div>
	<div class="row">
	<div class="label">
		Enter Source Id : </div><div class="input"><input type="text" name="sourceid"></div>
		</div>
	<div class="row">
	<div class="label">
		Enter Destination Id : </div><div class="input"><input type="text" name="destinationid"></div>
		</div>
		<div class="submit">
		<input type="submit" value="Store" name="sbt"></div>
</form>
<center><h2><body>
	<a href="admin1.php">Back Home</a>
</body></h2>
</center>
</div></div>
</body>
</html>
<?php
	if(isset($_POST['sbt']))
	{
		$flightno=$_POST['flightno'];
		$flightname=$_POST['flightname'];
		$companyid=$_POST['companyid'];
		$sourceid=$_POST['sourceid'];
		$destinationid=$_POST['destinationid'];
	$qry="insert into flightmaster values($flightno,'$flightname',$companyid,$sourceid,$destinationid)";
	mysqli_query($link,$qry) or die(mysql_error());
}
?>