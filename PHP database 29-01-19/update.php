<?php
include "sampledb.php";
if(isset($_POST["submit"]))
{
  $id=$_POST['id'];
$uname=$_POST['uname'];
  $uaddress=$_POST['uaddress'];
  echo $uaddress;
  $umobile=$_POST['umobile'];


$query="UPDATE `userlist` SET `uid`='$id',`uname`='$uname',`uaddress`='$uaddress',`uphone`='$umobile' WHERE uid='$id'";
mysqli_query($con,$query);
header("location:view.php");

}

 ?>
