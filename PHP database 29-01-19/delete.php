<?php
include "sampledb.php";
$id=$_GET['id'];
$query1="delete from userlist where uid='$id'";
$result=mysqli_query($con,$query1);
header("location:view.php"); 
?>
