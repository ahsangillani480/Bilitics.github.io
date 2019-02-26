<?php
include"connection.php";
error_reporting(0);

$Na=$_GET['Nam'];

$query="DELETE FROM `website` WHERE Name='$Na'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<script>alert('Record Deleted') </script>";
	?>
	
	<META HTTP-EQUIV = "Refresh" CONTENT="0; URL = http://localhost/testPHP/display.php" >  <!--here 0 is for refreshing no of seonds-->
	
	<?php
}
else
{
	echo"<font color='red'>Sorry,Delete process failed";
}
?>