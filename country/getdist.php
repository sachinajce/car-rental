<?php
include("dbcon.php");
$sid=$_POST['sid'];

	$query="SELECT * FROM district where sid='$sid'";
	$query_exe=mysqli_query($con,$query);
	$did=array();
	$dname=array();
	$len=0;

	if($query_exe){
		while($resultset=mysqli_fetch_assoc($query_exe)){
				$len++;
				$did[$len]=$resultset['did'];
				$dname[$len]=$resultset['dname'];
			}
	}
if ($len==0)
{
	echo "false";
}
else {
	$json="{ \"size\":\"".$len."\",\"admno\" : [";
	for($i=1;$i<=$len;$i++){

		if($i>=2)
			$json=$json.",";
		$json=$json."{
						\"did\":\"".$did[$i]."\",
						\"dname\":\"".$dname[$i]."\"

						}" ;
	}
	$json=$json.']}';



	echo $json;

}



?>
