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
	<title>Customer Details</title>
		<link href="contact/css/contactform.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
	<div id="formwrap">
	<div id="form">
		<header><h2><center>Booking Ticket</center></h2></header>

		<fieldset>
			<legend>Customer Details</legend>
			<form method="post">
			
			<div class="row">
			<div class="label"> Enter Desired PNR No : </div><div class="input"><input type="text" name="pnr"></div>
			</div>
			<div class="row">
			<div class="label">
				                Enter Passport Id : </div><div class="input"><input type="text" name="pass" required="true"></div>
		    </div>
		    <div class="row">
		    <div class="label">
								Enter Customer Name : </div><div class="input"><input type="text" name="customername" required="true"></div>
			</div>
			<div class="row">
			<div class="label">
				                Enter Age :</div> <div class="input"><input type="text" name="age"></div>
			</div>
			<div class="row">
			<div class="label">

								Enter Genger:</div><div class="input"><select name="rdo1">
									<option>Male</option>
									<option>Female</option>
								</select></div>
			</div>
			<div class="row">
			<div class="label">
		Enter City : </div><div class="input"><select name="city">
				<optgroup label="UP">
					<option>LUCKNOW</option>
					<option>MERRUT</option>
					<option selected="true">NOIDA</option>
				</optgroup>
				<optgroup label="DELHI">
					<option>DELHI</option>
				</optgroup>
				<optgroup label="MP">
					<option>INDORE</option>
					<option>GWALIOR</option>
					<option>JABALPUR</option>
				</optgroup>
					</select></div>
					</div>
			<div class="row">
			<div class="label">
				Enter Email:</div><div class="input"><input type="email" name="emailid" required="true"></div>
				</div>
			<div class="row">
			<div class="label">
				
				Enter Contact No : </div><div class="input"><input type="text" name="con"></div>
				</div>
			<div class="row">
			<div class="label">
				Enter Class ID : </div><div class="input"><select name="clas">
					<option value="666">Business</option>
					<option value="999">First Class</option>
					<option value="333" selected="true">Economic</option>
					</select></div>
					</div>
			<div class="row">
			<div class="label">
				Enter Flight No : </div><div class="input"><select name="flightno">
					<option>12345</option>
					<option>54321</option>
					<option selected="true">22341</option>
					<option>33441</option>	
					<option>43041</option>
		
					</select></div>
				</div>
				<!--<tr><td colspan="2"> <input type="submit" name="sbt"></td></tr>-->
	
<div class="submit">
			<input type="submit" name="sbt" value="Book"></div>
			</form>
		</fieldset>
		<center><h2><body>
	<a href="user1.php">Back Home</a>
</body></h2>
</center>
		</div></div>
</body>
</html>
<?php
	if(isset($_POST['sbt'])){
			$customername=$_POST['customername'];
		$emailid=$_POST['emailid'];
		$city=$_POST['city'];
		$rdo1=$_POST['rdo1'];
		$age=$_POST['age'];
		$con=$_POST['con'];
		$pnr=$_POST['pnr'];
		$clas=$_POST['clas'];
		$flightno=$_POST['flightno'];
		$pass=$_POST['pass'];
		$qry="insert into customerdetails values($pnr,'$pass','$customername',$age,'$rdo1','$city','$emailid','$con',$clas,$flightno)";
		mysqli_query($link,$qry);
		$qry2="select * from customerdetails";
		$rs=mysqli_query($link,$qry2);
		$row=mysqli_fetch_row($rs);
		echo "<table>";
		echo "<tr><td><header>PNR</header></td><td><header>Passport ID</header></td><td><header>Name</header></td><td><header>Age</header></td><td><header>Genger</header></td><td><header>City</header></td><td><header>Email</header></td><td><header>Contact No</header></td><td><header>Class Id</header></td><td><header>Flight No</header></td></tr>";
	


		while($row=mysqli_fetch_array($rs)){
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td></tr>";
}
echo "</table>";
}
?>

