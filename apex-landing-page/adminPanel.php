<?php
include"connection.php";
error_reporting(0);
?>


<?php
      if(isset($_POST['submit']))
	  {
		 $picID= $_POST['picID'];        //remember this 'Name' comes from the name attribute of the below HTML form.
		 
		 $fileName=$_FILES["uploadfile"]["name"]; //$Arr["name"]=$_FILES["uploadfile"]["name"];
         $tempname=$_FILES["uploadfile"]["tmp_name"];
         $folder="pics/".$fileName; 
		 move_uploaded_file($tempname,$folder);
		 
		 $query="UPDATE `websitepics` SET `picSource`='$folder' WHERE picId='$picID'";
		 $data=mysqli_query($conn,$query);
		 if($data)
		 {
			 header("Location: adminPanel.php");
		 }
		 else
		 {
			 echo "Data could not be updated";
		 }
		
	  }
?>

<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
  var w = document.forms["myForm"]["picID"].value;  //This "Name" also comes from the below html Form name attribue.
  var p = document.forms["myForm"]["uploadfile"].value;
  if (w=="" || p == "") {
    alert("All the fields must be filled out");
    return false;
  }
  else
  {
	   alert("Data Updated successfully");
       return true;
  }
}
</script>
</head>
<body>
<form name="myForm" action="" method="POST" enctype ="multipart/form-data" onsubmit="return validateForm()">  
  PicID:<br>
  <input type="text" name="picID" value="" />   
  <br>
  <br>
  Upload Image:<br>
  <input type = "file"  name = "uploadfile"  />
  <br><br>
  <input type="submit" name="submit" value="Update" />
 
</form> 

</body>
</html>
