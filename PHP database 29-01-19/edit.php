<?php
include "sampledb.php";
$id=$_GET['id'];
$query1="select * from userlist where uid='$id'";
$result=mysqli_query($con,$query1);
$row=mysqli_fetch_array($result);
{
//print_r($row);
$id=$row['uid'];
  $uname=$row['uname'];
  $uaddress=$row['uaddress'];
  $umobile=$row['uphone'];
}


 ?>
 <body>
   <form action="update.php" method="POST">
     <table>
       <tr>
         <td>Name</td>
         <td><input type="text" name="uname" value=<?php echo  $uname ?> ></td>
       </tr>
       <tr>
         <td>Address</td>
         <td><textarea name="uaddress" ><?php echo  $uaddress ?></textarea></td>
       </tr>
       <tr>
         <td>Mobile</td>
         <td><input type="text" name="umobile" value=<?php echo  $umobile ?>></td>
       </tr>
       <tr>
         <td></td>
         <td><input type="hidden" value=<?php echo  $id ?> name="id"><input type="submit" name="submit" value="submit" style="background:green";></td>
       </tr>
     </table>
   </form>
 </body>
