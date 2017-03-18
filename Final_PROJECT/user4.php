<?php

session_start();
$link=mysqli_connect("localhost","root","root","ARS") or die("conn error");
if(isset($_SESSION['userid']) )
{
//print_r($_SESSION);
}


?>
<?php

		$qry2="select * from customerdetails";
		$rs=mysqli_query($link,$qry2);
		$row=mysqli_fetch_row($rs);
		echo "<table><center>";
		echo "<tr><td><header>PNR</header></td><td><header>Passport ID</header></td><td><header>Name</header></td><td><header>Age</header></td><td><header>Genger</header></td><td><header>City</header></td><td><header>Email</header></td><td><header>Contact No</header></td><td><header>Class Id</header></td><td><header>Flight No</header></td></tr>";
	while($row=mysqli_fetch_array($rs)){
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td></tr>";}

echo "</center></table>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cancel Ticket</title>
		<link href="contact/css/contactform.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
	<div id="formwrap">
	<div id="form">
	        <header><h2><center>Cancelling Ticket</center></h2></header>

		<form method="post">
			<div class="row">
			<div class="label">
				Enter PNR To Cancel : </div><div class="input"><input type="text" name="pnr"></div>
				</div>
				<div class="submit">
				<input type="submit" name="sbt" value="Cancel">
		</form>
				<center><h2><body>
	<a href="user1.php">Back Home</a>
</body></h2>
</center>
		</div></div>
</body>
</html>
<?php
if ($_POST['sbt']) {
		$pnr=$_POST['pnr'];
		$qry3="delete from customerdetails where pnrno=$pnr";
		mysqli_query($link,$qry3);
}
?>

