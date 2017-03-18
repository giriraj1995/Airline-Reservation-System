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
	<title>Cancel Flight</title>
		<link href="contact/css/contactform.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
	<div id="formwrap">
	<div id="form">
	<header><h2><center>Cancelling Flight</center></h2></header>

<form method="post">
<div class="row">
<div class="label">		Flight No : </div><div class="input"><input type="text" name="flightno" value="<?php
				$flightno=$_POST['flightno'];
				$qry="select flightno from flightmaster where flightno=$flightno";
				$rs=mysqli_query($link,$qry);
				$row=mysqli_fetch_array($rs);
				echo $row[0];
?>"></div><div class="input"><input type="submit" name="sbt" value="find"></div>
</div>
<div class="row">
<div class="label">
			Flight Name : </div><div class="input"><input type="text" name="flightname" value="<?php
			$flightno=$_POST['flightno'];
				$qry="select flightname from flightmaster where flightno=$flightno";
				$rs=mysqli_query($link,$qry);
				$row=mysqli_fetch_array($rs);
				echo $row[0];				
			?>"></div>
</div>
<div class="row">
<div class="label">
			Company ID : </div><div class="input"><input type="text" name="companyid" value="<?php
			$flightno=$_POST['flightno'];
				$qry="select companyid from flightmaster where flightno=$flightno";
				$rs=mysqli_query($link,$qry);
				$row=mysqli_fetch_array($rs);
				echo $row[0];				
			?>"></div>
</div>
<div class="row">
<div class="label">
			Source ID : </div><div class="input"><input type="text" name="sourceid" value="<?php
			$flightno=$_POST['flightno'];
				$qry="select sourceid from flightmaster where flightno=$flightno";
				$rs=mysqli_query($link,$qry);
				$row=mysqli_fetch_array($rs);
				echo $row[0];				
			?>"></div>
</div>
<div class="row">
<div class="label">
			Destination Id : </div><div class="input"><input type="text" name="destinationid" value="<?php
			$flightno=$_POST['flightno'];
				$qry="select destinationid from flightmaster where flightno=$flightno";
				$rs=mysqli_query($link,$qry);
				$row=mysqli_fetch_array($rs);
				echo $row[0];				
			?>"></div>
</div>
<div class="input">
			<input type="submit" name="sbt2" value="Cancel Flight"></div>	
		</form>
	<center><h2><body>
	<a href="admin1.php">Back Home</a>
</body></h2>
		</div></div>
</body>
</html>
<?php
if(isset($_POST['sbt2']))
{
		$flightno=$_POST['flightno'];
		$qry="delete from flightmaster where flightno='$flightno'";
		mysqli_query($link,$qry);
		echo "Succesfully Cancelled";
}
?>