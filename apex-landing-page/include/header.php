<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

<script>

  function validateForm() {
  var w = document.forms["myForm"]["Name"].value;
  var x = document.forms["myForm"]["Email"].value;
  var y = document.forms["myForm"]["Subject"].value;
  var z = document.forms["myForm"]["Message"].value;
  if ( x == "" || y == "" || z == "" || w == "") {
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
    </style>
	<!------------------------------------------------------------------------------------------>
	
	

</head>
<body>
	<div id="top"></div>
	<!-- Start Header Area -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark p-3"  style="background-image: linear-gradient(45deg,#061161, #780206)!important;overflow:visible"  >
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
				<li class="nav-item ">
					<a  href="#blog" class="nav-link  blog ">Blogs</a>
<!--						<ul class="dropdown-menu" style="min-width: 180px;">background-image: linear-gradient(45deg,#061161, #780206);
						  <li style="margin-top:10px;margin-left:5px;"><a  style="color:black !important;font-size:0.9375rem;" href="#blog">Blogs</a></li>
						  <li style="margin-top:10px;margin-left:5px;"><a  style="color:black !important;font-size:0.9375rem;"href="#home">Web Development</a></li>
						  <li style="margin-top:10px;margin-left:5px;"><a  style="color:black !important;font-size:0.9375rem;"href="#about">Business Automation</a></li>
						  <li style="margin-top:10px;margin-left:5px;"><a  style="color:black !important;font-size:0.9375rem;"href="#project">CRM</a></li>
						</ul>-->
				</li>
				<li class="nav-item">
					<a class="nav-link  blog" href="#contect">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- End Header Area -->