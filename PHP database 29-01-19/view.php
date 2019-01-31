<?php
include "sampledb.php";
$query1="select * from userlist";
$result=mysqli_query($con,$query1);
$rowcount=mysqli_num_rows($result);


?>
<a href="userlist.php">Click to add user</a><br><br><br>
<caption> User List</caption>
<table border=1>
  <tr>
    <th>Name</th>
    <th>Address</th>
    <th>Mobile</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
<?php
if($rowcount!=0)
{
  while($row=mysqli_fetch_array($result))
  {
  //  print_r($row
  $id=$row['uid'];
    $uname=$row['uname'];
    $uaddress=$row['uaddress'];
    $umobile=$row['uphone'];
    echo "<tr><td>".$uname."</td>";
    echo "<td>".$uaddress."</td>";
    echo "<td>".$umobile."</td>";
    echo "<td><a href='edit.php?id=$id'>Edit </a></td>";
    echo "<td><a href='delete.php?id=$id'' >Delete </a></td></tr>";
  }
}
?>
