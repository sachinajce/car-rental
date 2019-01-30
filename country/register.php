<?php
include "dbcon.php";
if(isset($_POST["register"]))
{
  $uname=$_POST['uname'];
  $ctry=$_POST['ctry'];
  $stat=$_POST['stat'];
  $dist=$_POST['dist'];


$query="INSERT INTO `registration`(`uname`, `ctry`, `stat`, `dist`) VALUES ('$uname','$ctry','$stat','$dist')";
mysqli_query($con,$query);
header("location:index.php");

}

 ?>
