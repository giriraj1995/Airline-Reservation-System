<?php

session_start();
$link=mysqli_connect("localhost","root","root","ARS") or die("conn error");
if(isset($_SESSION['adminid']))
{
    unset ($_SESSION['adminid']);
    unset($_SESSION['adminpass']);
    session_destroy();
    //header("location:Project.php");
             echo '<script type="text/javascript"> window.location = "Project.php" </script>';

}


?>