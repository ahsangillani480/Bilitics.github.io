<?php
include"connection.php";
error_reporting(0);
?>
<?php
      if(isset($_POST['submit']))
	  {
		  $Name=$_POST['Name'];
	      $Email=$_POST['Email'];
	      $Subject=$_POST['Subject'];
	      $Message=$_POST['Message'];
		  
		  if($Name != "" && $Email!="" && $Subject!="" && $Message!="")
		  {
			  $query="INSERT INTO website (`Name`, `Email`, `Subject`, `Message`) VALUES ('$Name','$Email','$Subject','$Message')";

	          $data=mysqli_query($conn,$query);
			
	          if($data)
	          {
				  header("Location:Demo.php");
                  exit();
				
	          }
		  }
		  else
		  {
			      echo "All the fields are required";
		  }
	  }
?>
<?php

$query="SELECT * from websitepics where picId = 1";
$data=mysqli_query($conn,$query);
$result= mysqli_fetch_assoc($data);

$query1="SELECT * from websitepics where picId = 2";
$data1=mysqli_query($conn,$query1);
$result1= mysqli_fetch_assoc($data1);


?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

<script>

  function validateForm() {
  var w = document.forms["myForm"]["Name"].value;
  var x = document.forms["myForm"]["Email"].value;
  var y = document.forms["myForm"]["Subject"].value;
  var z = document.forms["myForm"]["Message"].value;
  if (x == "" || y=="" || z=="" || w=="") {
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
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="PIXINVENT">
	<!-- Meta Description -->
	<meta name="description" content="Apex Frontend">
	<!-- Meta Keyword -->
	<meta name="keywords" content="HTML,CSS,JavaScript,Apex,angularjs">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>APEX</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
	<!-- CSS ============================================= -->
	
	
	
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	
	<!------------------------------------------------------------------------------------------>
	<style>
			div.gallery {
			  margin: 7px;
			  border: 1px solid #ccc;
			  float: left;
			  width: 355px;
			}

			div.gallery:hover {
			  border: 1px solid #777;
			}

			div.gallery img {
			  width: 100%;
			  height: auto;
			}

			div.desc {
			  padding: 50px;
			  text-align: center;
			}
    </style>
	<!------------------------------------------------------------------------------------------>
	
	

</head>

<body>
	<div id="top"></div>
	<!-- Start Header Area -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark p-3"  style="background-image: linear-gradient(45deg,#061161, #780206); !important;overflow:visible"  >
		<a class="navbar-brand pl-5 blog" href="#home">
			<img src="img/logo.png" class="mr-3 brand-logo" alt="logo">Bilitics
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse " id="navbarCollapse">
			<ul class="navbar-nav ml-auto pr-5">
				<li class="nav-item active">
					<a class="nav-link blog" href="#home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link  blog" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link  blog" href="#project">Portfolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link  blog" href="#features">Technolgies</a>
				</li>
				<li class="nav-item">
					<a class="nav-link   blog" href="#team">Team</a>
				</li>
				<li class="dropdown  nav-item" style="margin-top:8px;margin-left:8px;margin-right:8px">
					<a  href="" class="dropdown-toggle  blog " data-toggle="dropdown"><span style="margin-top:8px;font-size:0.9375rem">Blogs</span></a>
						<ul class="dropdown-menu" style="min-width: 180px;"><!--background-image: linear-gradient(45deg,#061161, #780206);-->
						  <li style="margin-top:10px;margin-left:5px;"><a  style="color:black;!important;font-size:0.9375rem;" href="#blog">Blogs</a></li>
						  <li style="margin-top:10px;margin-left:5px;"><a  style="color:black;!important;font-size:0.9375rem;"href="#home">Web Development</a></li>
						  <li style="margin-top:10px;margin-left:5px;"><a  style="color:black;!important;font-size:0.9375rem;"href="#about">Business Automation</a></li>
						  <li style="margin-top:10px;margin-left:5px;"><a  style="color:black;!important;font-size:0.9375rem;"href="#project">CRM</a></li>
						</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link  blog" href="#contect">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- End Header Area -->

	
	


	


     <br><br>
	<!-- Blog Post Area -->
	<section class="blogs py-10" id="blog">
		<div class="container">
			<h3 class="text-center black mb-4 headline">Latest Blogs</h3>
			
			
			<p class="text-center mt-4" >In the advertising, digital or marketing sectors, the creative team is responsible
				<br> for generating attention-grabbing ideas</p>
			
			<?php
			     $num=6;
	             while($num)
	        {
			?>
				<div class="gallery">
				  <a target="_blank" href="img_5terre.jpg">
					<img src="img/BPA.jpg" alt="Cinque Terre" width="600" height="400">
				  </a>
				  <div class="desc"><h3 style="color:blue">CRM Services</h3>Add a description of the image here  Mohsin Ali Shah Haider ALi shah Mohsin Ali Shah Haider ALi shah</div>
				</div>
			<?php
				$num--;
			}
			?>
		</div>
	</section>
	<!-- End Blog Post Area -->
	<br><br><br><br><br><br>

	<!-- scrollUp Area -->
	
	<!-- End scrollUp Area -->

	<!-- Footer Area -->
	<!-- End footer Area -->


	<!-- Script Link Area -->
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/granim.min.js"></script>
	<script src="js/vendor/scroll.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<!-- End Script Link Area -->


</body>

</html>