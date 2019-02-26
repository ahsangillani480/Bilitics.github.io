<?php
include"connection.php";
error_reporting(0);

?>
<?php
      //Remember when we click on the submit button then first javascript function validateForm runs,and if all the fields are filled then it
	  //shows us the msg data inserted successfully and when we click ok then the data is actually inserted in database by running if($_GET['submit'])
	  //portion.
      if($_POST['submit'])
	  {
		  $Name=$_POST['Name'];
	      $Email=$_POST['Email'];
	      $Subject=$_POST['Subject'];
	      $Message=$_POST['Message'];
		  
		  $fileName=$_FILES["uploadfile"]["name"]; //$Arr["name"]=$_FILES["uploadfile"]["name"];
          $tempname=$_FILES["uploadfile"]["tmp_name"];
          $folder="student/".$fileName; 
		  move_uploaded_file($tempname,$folder);
		  
		  if($Name != "" && $Email!="" && $Subject!="" && $Message!="" && $fileName !="") //here actually  this condition is not required because we have already check this by the javascript code of validateForm() .
		  {
			  $query="INSERT INTO website (`Name`, `Email`, `Subject`, `Message`,`picsource`) VALUES ('$Name','$Email','$Subject','$Message','$folder')";

	          $data=mysqli_query($conn,$query);
			 
	          if($data)
	          {
				  echo "<script>alert('Record Inserted Successfully') </script>";
				  ?>
	
	                  <META HTTP-EQUIV = "Refresh" CONTENT="0; URL = http://localhost/testPHP/insert.php" >  <!--here 0 is for refreshing no of seonds-->
	
	             <?php
				  //header("Location: insert.php");
	          }
			  else{
				  echo "<script>alert('Something is wrong.Primary Key Value entered again') </script>";
				  ?>
	
	                  <META HTTP-EQUIV = "Refresh" CONTENT="0; URL = http://localhost/testPHP/insert.php" >  <!--here 0 is for refreshing no of seonds-->
	
	             <?php
			  }
		  }
		  else
		  {
			      echo "<script>alert('All the fields are required') </script>";
				  ?>
	
	                  <META HTTP-EQUIV = "Refresh" CONTENT="0; URL = http://localhost/testPHP/insert.php" >  <!--here 0 is for refreshing no of seonds-->
	
	             <?php
				  //header("Location: insert.php");  //this will not work here.
		  }
	  }
?>

<!DOCTYPE html>
<html>
<head>
<!--
<script>
function validateForm() {
  var w = document.forms["myForm"]["Name"].value;
  var x = document.forms["myForm"]["Email"].value;
  var y = document.forms["myForm"]["Subject"].value;
  var z = document.forms["myForm"]["Message"].value;
  var p = document.forms["myForm"]["uploadfile"].value;
  if (x == "" || y=="" || z=="" || w=="" || p == "") {
    alert("All the fields must be filled out");
    return false;
  }
  else
  {
	   alert("Data inserted successfully");
       return true;
  }
}
</script>
-->
</head>
<body>

<!--onsubmit="return validateForm()" this line can be placed in the form tag with name,method,enctype if we want to run he above javascript ValidateForm() function-->

<form name="myForm" action="" method="post" enctype ="multipart/form-data"  >
  Name:<br>
  <input type="text" name="Name" value="" />
  <br>
  Email:<br>
  <input type="text" name="Email" value ="" />
  <br>
  Subject:<br>
  <input type="text" name="Subject" value=""   />
  <br>
  Message:<br>
  <textarea type="text" name="Message" value = "" maxlength="140" rows="7"  ></textarea>
  <br>
  Upload Image:<br>
  <input type = "file"  name = "uploadfile" value=""/>
  <br><br>
  <input type="submit" name="submit" value="Submit" />
  
</form> 


</body>
</html>
