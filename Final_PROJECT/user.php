<!DOCTYPE html>
<html>
<head>
    <title>User LogIn</title>
        <link href="contact/css/contactform.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
    <div id="formwrap">
    <div id="form">
        <header><h2><center>User Log In</center></h2></header>

<form method="post">
<div class="row">
<div class="label">
Enter User Id : </div><div class="input"><input type="text" name="userid"></div>
</div>
<div class="row">
<div class="label">
Enter Password : </div><div class="input"><input type="password" name="userpass"></div>
</div>
<div class="input">
<input type="submit" name="LogIn" value="LOG IN"></div>
</form>
<center><h2><body>
    <a href="Project.php">Back Home</a>
</body></h2>
</div></div>
</body>
</html>
<?php
 session_start();
$link=mysqli_connect("localhost","root","root","ARS") or die("conn error");
if(isset($_POST['LogIn']))
{
    $userid=$_POST['userid'];
    $userpass=$_POST['userpass'];
$qry="select userid,password,username from userdetails";
$rs=mysqli_query($link,$qry);
while($row=mysqli_fetch_array($rs))
   {
      if($row[0]==$userid && $row[1]==$userpass){
         echo "welcome &nbsp; $row[2]<br>";
            $_SESSION['userid']=$row[0];
            $_SESSION['userpass']=$row[1];
            $_SESSION['username']=$row[2];
         echo '<script type="text/javascript"> window.location = "user1.php" </script>';

         } 

}
        


}
?>

