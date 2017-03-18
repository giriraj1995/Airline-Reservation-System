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
	<title>Search Flight</title>
		<link href="contact/css/contactform.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
	<div id="formwrap">
	<div id="form">
			<header><h2><center>Search Flight<?php $a=$_SESSION['username']; //echo "$a";?></center></h2></header>

<form method="post">
<div class="row">
<div class="label">
			Enter Source : </div><div class="input"><select name="sourceid">
					<option >Bangalore</option>
					<option selected="true">Delhi</option>
					<option >Mumbai</option>
				</select></div>
				</div>
<div class="row">
<div class="label">
			Enter Destination : </div><div class="input"><select name="destinationid">
					<option >Bangalore</option>
					<option >Delhi</option>
					<option >Mumbai</option>
				</select></div>
				</div>
		<div class="submit"><input type="submit" value="Search" name="sbt"></div>
</form>
<center><h2><body>
	<a href="user1.php">Back Home</a>
</body></h2>
</div></div>
</body>
</html>
<?php
	if(isset($_POST['sbt']))
	{
			$sourceid=$_POST['sourceid'];
			$destinationid=$_POST['destinationid'];
			
			if ($sourceid==$destinationid) {
				echo "Same Source And Destination is Not Possible";
			
				exit();
			}
			else
			{	
		
				if (strcasecmp($sourceid,"delhi")==0) {
					$s='Delhi';
					$sourceid=1001;

				}elseif (strcasecmp($sourceid,"Mumbai")==0) {
										$s='Mumbai';

					$sourceid=2001;
				}
				elseif (strcasecmp($sourceid,"Bangalore")==0) {
										$s='Bangalore';

					$sourceid=3001;
				}
				if (strcasecmp($destinationid,"delhi")==0) {
										$d='Delhi';

					$destinationid=1001;

				}elseif (strcasecmp($destinationid,"Mumbai")==0) {
															$d='Mumbai';

					$destinationid=2001;
				}
				elseif (strcasecmp($destinationid,"Bangalore")==0) {
															$d='Bangalore';

					$destinationid=3001;
				}
				
				$qry="select flightno,flightname,sourceid,destinationid from flightmaster where sourceid=$sourceid and destinationid=$destinationid";
				$rs=mysqli_query($link,$qry);
				$row=mysqli_fetch_array($rs);
				echo "<table><tr><td><header>Flight No</header></td><td><header>Flight Name</header></td><td><header>Source</header></td><td><header>Destination</header></td></tr>";
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$s</td><td>$d</td></tr></table>";

			}

		}
?>
