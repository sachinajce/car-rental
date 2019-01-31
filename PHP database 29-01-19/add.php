<?php
include "sampledb.php";
if(isset($_POST["submit"]))
{
  $uname=$_POST['uname'];
  $uaddress=$_POST['uaddress'];
  $umobile=$_POST['umobile'];


$query="INSERT INTO `userlist`(`uname`, `uaddress`, `uphone`) VALUES ('$uname','$uaddress','$umobile')";
mysqli_query($con,$query);
header("location:view.php"); 

}

 ?>
