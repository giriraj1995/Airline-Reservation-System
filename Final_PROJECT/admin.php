<!DOCTYPE html>
<html>
<head>
    <title>Admin LogIn</title>
        <link href="contact/css/contactform.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
    <div id="formwrap">
    <div id="form">
    <header><h2><center>Log In <?php $a=$_SESSION['adminname'];echo "$a";?></center></h2></header>

<form>
<div class="row">
<div class="label">
Enter Admin Id : </div><div class="input"><input type="text" name="adminid"></div>
</div>
<div class="row">
<div class="label">
Enter Password : </div><div class="input"><input type="password" name="adminpass"></div>
 </div>
 <div class="submit">
<input type="submit" name="LogIn" value="LOG IN">
</div>
</form>
<center><h2><body>
    <a href="Project.php">Back Home</a>
</body></h2>
</center>
</div></div>
</body>
</html>
<?php
 session_start();
$link=mysqli_connect("localhost","root","root","ARS") or die("conn error");
if(isset($_GET['LogIn']))
{
    $adminid=$_GET['adminid'];
    $adminpass=$_GET['adminpass'];
$qry="select adminid,password,adminname from admindetails";
$rs=mysqli_query($link,$qry);
while($row=mysqli_fetch_array($rs))
   {
      if($row[0]==$adminid && $row[1]==$adminpass){
         echo "welcome &nbsp; $row[2]<br>";
            $_SESSION['adminid']=$row[0];
            $_SESSION['adminpass']=$row[1];
            $_SESSION['adminname']=$row[2];
         echo '<script type="text/javascript"> window.location = "admin1.php" </script>';

         } 

}
        


}
?>
