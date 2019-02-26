<?php
error_reporting(0);
?>


<html>
<body>
      <form action="" method ="POST" enctype="multipart/form-data">
	     <input type = "file"  name = "uploadfile" value=""/>
		 <input type = "submit" name ="submit"  value = "Upload File"/>
	  </form>
</body>
</html>

<?php
 
 $Arr=$_FILES["uploadfile"]; //to get the files like to get input we use post or get.
 $fileName=$_FILES["uploadfile"]["name"]; //$Arr["name"]=$_FILES["uploadfile"]["name"];
 $tempname=$_FILES["uploadfile"]["tmp_name"];
 $folder="student/".$fileName;  
 move_uploaded_file($tempname,$folder);
 echo "<img src='$folder' height='100' width='100'/>"; //img tag is used to  dislay the  image in HTML case.
?>

