<?php

     $server="localhost";
	 $username="root";
	 $password="";
	 $db="test";
	 
	 $conn=mysqli_connect($server,$username,$password,$db);
	 
	 if($conn)
		 echo "";
	 else
		 die ("Connection Failed because".mysqli_connect_error());

?>