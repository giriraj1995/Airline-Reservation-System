<?php
$host="localhost";
$user="root";
$pass="root";
$dbname="ARS";
$link=mysqli_connect($host,$user,$pass,$dbname) or die("Connection error");
?>
<!DOCTYPE html>
<html>
<head>
	<link href="contact/css/contactform.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="contact.css">
	<title>Airline Reservation System</title>
</head>
<body>
<div class="img">
<h1><center><i>Airline Reservation System</i></center></h1>
<img src="http://24.media.tumblr.com/89fa1deedb55ae248a62ca65b884d8a9/tumblr_mvl9lgZUNF1spl3lco1_500.gif">
</div>

		<div class="col">
				<a href="admin.php">ADMIN Login</a>
				<div id="area">
				<b><i><h3>Administrator Module</h3></i></b>
Add new flight details.
Cancel the flight if the flight cannot be operated due to some reason.
Manage the schedule of flights and can alter the flight source and destination.
Admin can alter the arrival and departure time of flight and can change the days of flight.

</div>
		</div>

		</div>
		<div class="col">
				<a href="user.php">USER Login</a>
					<div id="area">
				<b><i><h3>User Module</h3></i></b>
Search for flight (Schedule) according to date, source and destination.Reservation of ticket.Cancellation of ticket.</li>
Check PNR status.
Get fare for any source to destination of different classes for the particular flight.</li>
Check the status of the flight that seats are available or not for particular flight and class.</li>
</div>
		</div>
		<div class="col">
				<a href="adminsignup.php">Admin Sign Up</a>
				<div id="area">
				</div>
		</div>
		<div class="col">	
				<a href="usersignip.php">User Sign Up</a>
		</div>
		<div class="col">
				<a href="madeby.php">Made By</a>
		</div>
</body>
</html>