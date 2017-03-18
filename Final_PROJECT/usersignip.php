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
	<title>User Sign Up</title>
</head>
<body>
	<div id="formwrap">
	<div id="form">
		<header><h2><center>User SignUp</center></h2></header>

<form method="post">
<div class="row">
		<div class="label"> Enter User ID : </div><div class="input"> <input type="text" name="adminid"></div>
		</div>
		<div class="row">
		<div class="label"> Enter Full Name : </div><div class="input"><input type="text" name="adminname"></div>
		</div>
		<div class="row"><div class="label"> Enter Password : </div><div class="input"><input type="password" name="adminpass"></div>
		</div>
		<center><div class="submit"><input type="submit" name="sbt"></div></center>
</form>
<center><h2><body>
	<a href="Project.php">Back Home</a>
</body></h2>
</center>
</div>
</div>
</body>
</html>
<?php
	$userid=$_POST['adminid'];
	$username=$_POST['adminname'];
	$userpass=$_POST['adminpass'];
	if(isset($userid) && isset($userpass) && isset($username)){
	$qry="insert into userdetails values ($userid,'$username','$userpass')";
	//$qry2="select * from AdminDetails";
	mysqli_query($link,$qry) or die(mysql_error());
	//$rs=mysqli_query($link,$qry2) or die(mysql_error());
		//$row=mysqli_fetch_array($rs);
		//echo $row[0];
}?>

