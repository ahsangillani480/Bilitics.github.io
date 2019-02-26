<?php
include"connection.php";
error_reporting(0);
?>


<?php
      if($_POST['submit'])
	  {
		 $Na= $_POST['Name'];        //remember this 'Name' comes from the name attribute of the below HTML form.
		 $Em=$_POST['Email'];
		 $Sub=$_POST['Subject'];
		 $Msg=$_POST['Message'];
		 
		 $fileName=$_FILES["uploadfile"]["name"]; //$Arr["name"]=$_FILES["uploadfile"]["name"];
         $tempname=$_FILES["uploadfile"]["tmp_name"];
         $folder="student/".$fileName; 
		 move_uploaded_file($tempname,$folder);
		 
		 $query="UPDATE `website` SET `Name`='$Na',`Email`='$Em',`Subject`='$Sub',`Message`='$Msg',`picsource`='$folder' WHERE Name='$Na'";
		 $data=mysqli_query($conn,$query);
		 if($data)
		 {
			 header("Location: display.php");
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
  var w = document.forms["myForm"]["Name"].value;  //This "Name" also comes from the below html Form name attribue.
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
	   alert("Data Updated successfully");
       return true;
  }
}
</script>
</head>
<body>

<form name="myForm" action="" method="POST" enctype ="multipart/form-data" onsubmit="return validateForm()">  
  Name:<br>
  <input type="text" name="Name" value="<?php echo $_GET['Nam']; //here Nam,Email,Subject,Message are those written after ? sign in display.php  file  Not of database Columns Name.and also remember that the data which is passed through ? sign it is always got by S_GET[] not by $_POST[]  ?>" />   
  <br>
  Email:<br>
  <input type="text" name="Email" value ="<?php echo $_GET['Email']; ?>" />
  <br>
  Subject:<br>
  <input type="text" name="Subject" value="<?php echo $_GET['Subject']; ?>"   />
  <br>
  Message:<br>
  <textarea type="text" name="Message" maxlength="140" rows="7" value="" ><?php echo $_GET['Message']; ?></textarea>   <!--value field not work in case of TextArea Field therefore written in between 2 textareas opening nd closing tags.-->
  <br>
  Upload Image:<br>
  <input type = "file"  name = "uploadfile"  />
  <br><br>
  <input type="submit" name="submit" value="Update" />
  
</form> 

</body>
</html>
