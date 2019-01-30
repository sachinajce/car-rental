<?php
 ?>
 <html>
 <head>
   <script type="text/javascript" src="jquery.min.js"></script>
      <script type="text/javascript" src="main1.js"></script>
    </head>
<body>
  <form action="register.php" method="POST">
    <table >
      <tr>
        <td>Name</td>
        <td><input type="text" name="uname" ></td>
      </tr>
      <tr>
        <td>Country</td>
        <td><select id="ctry" name="ctry" onchange="getstate(this.value)">
            <option value="" >Select Country</option>
        </select><br><br>
        </td>
      </tr>
      <tr>
        <td>State</td>
        <td>
        <select id="stat" name="stat" onchange="getdist(this.value)">
            <option value="">Select state</option>
        </select><br><br></td>
      </tr>
      <tr>
        <td>District</td>
        <td><select id="dist" name="dist" >
            <option value="">Select district</option>
        </select><br><br></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value ="Register" name="register" >
      </tr>
    </table>
  </form>
  <a href="index.php">Previous</a>
</body>
</html>
