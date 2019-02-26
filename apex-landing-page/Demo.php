<?php
include"connection.php";
error_reporting(0);
?>
<?php
      if($_POST['submit'])
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
	

</head>

<body>
	<div id="top"></div>
	<!-- Start Header Area -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark p-3">
		<a class="navbar-brand pl-5" href="#home">
			<img src="img/logo.png" class="mr-3 brand-logo" alt="logo">APEX
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav ml-auto pr-5">
				<li class="nav-item active">
					<a class="nav-link" href="#home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#project">Portfolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#features">Technolgies</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#team">Team</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#blog">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#blog">Videos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contect">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<canvas id="canvas-basic"></canvas>
	<section class="banner-area" id="home">
		<img src="img/home2.jpg" alt="banner image" class="mt-7 ml-5 position-absolute banner-img w-30">
		<img src="img/home3.jpg" alt="banner image" class="mt-7 ml-5 position-absolute banner-img w-30" style="margin-left:65% !important; margin-top:25% !important;">
		<div class="banner-content text-center pt-max position-relative">
			<p class="text-white">We work hard, we result perfect</p>
			<h1 class="text-white">Bilitics</h1>
			<h3 class="white">Software Solutions</h3>
			<a href="#about" class="primary-btn banner-btn">Explore Us</a>
			<br>
			<i class="fa fa-chevron-down white mt-5 arrow bounce" aria-hidden="true"></i>
		</div>
	</section>
	<!-- End Banner Area -->

	<!-- About Area -->
	<section class="about py-10" id="about">
		<div class="container">
			<h3 class="text-center black headline">About Bilitics </h3>
			<p class="text-center mt-4">This is by far the cleanest template and the most well structured and the most well
				<br> thought out design theme I have ever used. The codes are up to standard.</p>
			<div class="row">
				<div class="col-md-4 col-12 mt-5 pl-sm">
					<h4>
						<i class="fa fa-coffee danger mr-2 font-md" aria-hidden="true"></i> Web Development</h4>
					<p class="mt-2">We can help you find the precise message to clearly speak to who.</p>
				</div>
				<div class="col-md-4 col-12 mt-5 pl-sm">
					<h4>
						<i class="fa fa-gamepad danger mr-2 font-md" aria-hidden="true"></i>Business Process Automation</h4>
					<p class="mt-2">We can help you find the precise message to clearly speak to who.</p>
				</div>
				<div class="col-md-4 col-12 mt-5 pl-sm">
					<h4>
						<i class="fa fa-globe danger mr-2 font-md" aria-hidden="true"></i> Tools Customization</h4>
					<p class="mt-2">We can help you find the precise message to clearly speak to who.</p>
				</div>
				<div class="col-md-4 col-12 mt-5 pl-sm">
					<h4>
						<i class="fa fa-rocket danger mr-2 font-md" aria-hidden="true"></i>Project Management Customization</h4>
					<p class="mt-2">We can help you find the precise message to clearly speak to who.</p>
				</div>
				<div class="col-md-4 col-12 mt-5 pl-sm">
					<h4>
						<i class="fa fa-file danger mr-2 font-md" aria-hidden="true"></i> Customer Relationship Management</h4>
					<p class="mt-2">We can help you find the precise message to clearly speak to who.</p>
				</div>
				<div class="col-md-4 col-12 mt-5 pl-sm">
					<h4>
						<i class="fa fa-camera danger mr-2 font-md" aria-hidden="true"></i>Mobile App Development</h4>
					<p class="mt-2">We can help you find the precise message to clearly speak to who.</p>	
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->

	<!-- Parallax Area -->
	<section class="parallax">
		<div class="parallax text-center pt-10 white">
			<h1 class="mb-4 white"><h1 style="color:Red;">Bilitics</h1>
			<h3 class="white"> <h3 style="color:blue;">Make Unlimited Websites in No-Time with APEX</h3>
			<p class="mt-4"> <p style="color:blue;">This is by far the cleanest template and the most well structured and the most well
				<br> thought out design theme I have ever used. The codes are up to standard.</p>
		</div>
	</section>
	<!-- End Parallax Area -->

	<!-- Project Area -->
	<section class="project">
		<div class="project py-10" id="project">
			<div class="container">
				<div class="project text-center">
					<h3 class="text-center black headline">Portfolio</h3>
					<p class="text-center mt-4">Showcasing the innovative project work of engineering undergraduates
						<br> from all levels to industry. The Virtual Project Showcase</p>

					<div class="bd-example mt-5">
						<div class="card-columns">
							<div class="card">
								<div id="carouselExample" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img class="d-block w-100" src="img/BPA.jpg" alt="project 1">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="img/BPA1.jpg" alt="project 2">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="img/BPA2.jpg" alt="project 3">
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
								<div class="card-body">
									<h5 class="card-title">Business Process Automation</h5>
									<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
									<p class="card-text">
										<small class="text-muted">Last updated 3 mins ago</small>
									</p>
								</div>
							</div>
							<div class="card">
								<div id="carouselExampleTwo" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img class="d-block w-100" src="img/mobApp1.jpg" alt="project 10">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="img/mobApp2.jpg" alt="project 11">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="img/mobApp3.jpg" alt="project 12">
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselExampleTwo" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleTwo" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
								<div class="card-body">
									<h5 class="card-title">Mobile Apps</h5>
									<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
									<p class="card-text">
										<small class="text-muted">Last updated 3 mins ago</small>
									</p>
								</div>
							</div>
							<div class="card">
								<div id="carouselExampleThree" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img class="d-block w-100" src="img/hospital.jpg" alt="project 13">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="img/hospital1.jpg" alt="project 14">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="img/hospital2.jpg" alt="project 15">
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselExampleThree" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleThree" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
								<div class="card-body">
									<h5 class="card-title">Hospital Management System</h5>
									<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
									<p class="card-text">
										<small class="text-muted">Last updated 3 mins ago</small>
									</p>
								</div>
							</div>
							<div class="card">
								<div id="carouselExampleFour" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img class="d-block w-100" src="img/school1.jpg" alt="project 4">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="img/school2.jpg" alt="project 5">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="img/school3.jpg" alt="project 6">
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselExampleFour" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleFour" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
								<div class="caed-body p-3">
									<h5 class="card-title">Education System Automation</h5>
									<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
									<p class="card-text">
										<small class="text-muted">Last updated 3 mins ago</small>
									</p>
								</div>
							</div>
							<div class="card">
								<div id="carouselExampleFive" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img class="d-block w-100" src="img/realEstate1.jpg" alt="project 7">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="img/realEstate2.jpg" alt="project 8">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="img/realEstate3.jpg" alt="project 9">
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselExampleFive" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleFive" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
								<div class="card-body">
									<h5 class="card-title">Real Estate Business Apps</h5>
									<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
									<p class="card-text">
										<small class="text-muted">Last updated 3 mins ago</small>
									</p>
								</div>
							</div>
							<div class="card">
								<div id="carouselExampleSix" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img class="d-block w-100" src="img/Law 1.jpg" alt="project 16">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="img/Law 2.jpg" alt="project 17">
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" src="img/Law 3.jpg" alt="project 18">
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselExampleSix" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleSix" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
								<div class="card-body">
									<h5 class="card-title">Law Applications</h5>
									<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
									<p class="card-text">
										<small class="text-muted">Last updated 3 mins ago</small>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Project Area -->

	<!-- Everything for you Area -->
	<section class="everything" id="everything">
		<div class="row">
			<div class="col-lg-6 col-12 p-0 ">
				<div class="everything"></div>
			</div>
			<div class="col-lg-6 col-12 bg-black white p-5 py-10">
				<h2 class="white">We make everything for you to get desire results with Apex</h2>
				<div class="row">
					<div class="col-6 mt-5">
						<h4 class="white">
							<span class="white">01.</span> Elegant / Unique design</h4>
						<p class="muted mb-0">Clean and intuitive design which makes your next project look awesome.</p>
					</div>
					<div class="col-6 mt-5">
						<h4 class="white">
							<span class="white">02.</span> Different Layout Type</h4>
						<p class="muted mb-0">Clean and intuitive design which makes your next project look awesome.</p>
					</div>
					<div class="col-6 mt-5">
						<h4 class="white">
							<span class="white">03.</span> Make it Simple</h4>
						<p class="muted mb-0">Clean and intuitive design which makes your next project look awesome.</p>
					</div>
					<div class="col-6 mt-5">
						<h4 class="white">
							<span class="white">04.</span> True Responsiveness</h4>
						<p class="muted mb-0">Clean and intuitive design which makes your next project look awesome.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End everything for you Area -->

	<!-- Features Area -->
	<section class="features py-10" id="features">
		<div class="container">
			<h3 class="text-center black headline">Technolgies</h3>
			<p class="text-center mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting
				<br> industry Lorem Ipsum has been the industry's standard dummy text ever since.</p>
			<div class="col-12">
				<div class="row">
					<div class="col-lg-2 col-md-4 col-6 mt-5 text-center rotate-hover">
						<img src="img/icons8-podio.undefined" alt="icon">
						<p>Podio</p>
					</div>
					<div class="col-lg-2 col-md-4 col-6 mt-5 text-center rotate-hover">
						<img src="img/icons8-css3.undefined" alt="icon">
						<p>CSS3</p>
					</div>
					<div class="col-lg-2 col-md-4 col-6 mt-5 text-center rotate-hover">
						<img src="img/icon-15.png" alt="icon">
						<p>HTML 5</p>
					</div>
					<div class="col-lg-2 col-md-4 col-6 mt-5 text-center rotate-hover">
						<img src="img/icons8-java.undefined" alt="icon">
						<p>Java</p>
					</div>
					<div class="col-lg-2 col-md-4 col-6 mt-5 text-center rotate-hover">
						<img src="img/icon-16.png" alt="icon">
						<p>Angularjs</p>
					</div>
					<div class="col-lg-2 col-md-4 col-6 mt-5 text-center rotate-hover">
						<img src="img/icon-1.png" alt="icon">
						<p>Bootstrap Toolkit</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Features Area -->

	<!-- Purchase Area -->
	<section class="purchase" id="purchase">
		<div class="text-center py-10 white bg-overlay">
			<h4 class="muted">You are at the right step now</h4>
			<h1 class="white mt-3">Purchase The Apex and
				<br> Make Your Own Template</h1>
			<a href="#" class="primary-btn banner-btn mt-4">Purchase Now</a>
		</div>
		<div class="purchase-bg"></div>
	</section>
	<!-- End Purchase Area -->

	<!-- Customer Team Area -->
	<section class="reviews py-10" id="team">
		<div class="container">
			<h3 class="text-center black headline">Creative Team</h3>
			<p class="text-center mt-4">In the advertising, digital or marketing sectors, the creative team is responsible
				<br> for generating attention-grabbing ideas</p>
			<div class="card-deck mt-5">
				<div class="card mb-3">
					<img class="card-img-top img-fluid" src="img/photo-3.png" alt="Card image cap">
					<div class="card-body text-center">
						<h5 class="card-title">Mohsin Gillani</h5>
						<p class="card-text">Web Developer</p>
						<div class="h3">
							<a href="#">
								<i class="fa fa-linkedin-square mr-2" aria-hidden="true"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter-square mr-2" aria-hidden="true"></i>
							</a>
							<a href="#">
								<i class="fa fa-facebook-square mr-2" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
				
				<div class="card mb-3">
					<img class="card-img-top img-fluid" src="img/photo-3.png" alt="Card image cap">
					<div class="card-body text-center">
						<h5 class="card-title">FRANCES BUTLER</h5>
						<p class="card-text">Fast Coder</p>
						<div class="h3">
							<a href="#">
								<i class="fa fa-linkedin-square mr-2" aria-hidden="true"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter-square mr-2" aria-hidden="true"></i>
							</a>
							<a href="#">
								<i class="fa fa-facebook-square mr-2" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="card mb-3">
					<img class="card-img-top img-fluid" src="img/photo-3.png" alt="Card image cap">
					<div class="card-body text-center">
						<h5 class="card-title">Ahsan Gillani</h5>
						<p class="card-text">CEO</p>
						<div class="h3">
							<a href="#">
								<i class="fa fa-linkedin-square mr-2" aria-hidden="true"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter-square mr-2" aria-hidden="true"></i>
							</a>
							<a href="#">
								<i class="fa fa-facebook-square mr-2" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Area -->

	<!-- Customers Area -->
	<section class="customers" id="customers">
		<div class="bg-black p-5 text-center">
			<div class="h1">
				<i class="fa fa-heart danger" aria-hidden="true"></i>
			</div>
			<h2 class="white">Loved by 50,000+ Customers</h2>
		</div>
	</section>
	<!-- End Customers Area -->

	<!-- Reviews Area -->
	<section class="reviews py-10" id="reviews">
		<div class="container text-center" style="width:70%;">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<h3 class="text-center black mb-4 headline">What People Say</h3>
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="img/photo-1.png" class="rounded-circle m-3 w-80" alt="review 1">
						<h4>Mohsin Gillani</h4>
						<div class="mb-4 h4">
							<i class="fa fa-star danger" aria-hidden="true"></i>
							<i class="fa fa-star danger" aria-hidden="true"></i>
							<i class="fa fa-star danger" aria-hidden="true"></i>
							<i class="fa fa-star danger" aria-hidden="true"></i>
							<i class="fa fa-star danger" aria-hidden="true"></i>
						</div>
						<p class="pb-3">Very nice theme + good documentation. I had some issues, but fixed very quickly thanks to the amazing support. Our
							project is going live in 2 weeks and it looks very nice with this theme!!</p>
					</div>
					<div class="carousel-item">
						<img src="img/photo-2.png" class="rounded-circle m-3 w-80" alt="review 2">
						<h4>Frances Butler</h4>
						<div class="mb-4 h4">
							<i class="fa fa-star danger" aria-hidden="true"></i>
							<i class="fa fa-star danger" aria-hidden="true"></i>
							<i class="fa fa-star danger" aria-hidden="true"></i>
							<i class="fa fa-star danger" aria-hidden="true"></i>
							<i class="fa fa-star danger" aria-hidden="true"></i>
						</div>
						<p class="pb-3">10 Star. A unique template with modern design and great quality. Just loved it... Simply awesome. You guys are genius.
							I have purchased so many templates so far, but this the best template among them. Cheers.</p>
					</div>
					<div class="carousel-item">
						<img src="img/photo-3.png" class="rounded-circle m-3 w-80" alt="review 3">
						<h4>Ahsan Gillani</h4>
						<div class="mb-4 h4">
							<i class="fa fa-star danger" aria-hidden="true"></i>
							<i class="fa fa-star danger" aria-hidden="true"></i>
							<i class="fa fa-star danger" aria-hidden="true"></i>
							<i class="fa fa-star danger" aria-hidden="true"></i>
							<i class="fa fa-star danger" aria-hidden="true"></i>
						</div>
						<p class="pb-3">The best angular admin template out there with awesome design, components, cohesive code and quick support. Many options
							to use and attention to every detail. Of all admin templates I have used can only recommend this one!!</p>
					</div>
				</div>
				<a class="carousel-control-p" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-n" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section>
	<!-- End Reviews Area -->


	<!-- Blog Post Area -->
	<section class="blog py-10" id="blog">
		<div class="container">
			<h3 class="text-center black mb-4 headline">Latest Blogs</h3>
			<p class="text-center mt-4">In the advertising, digital or marketing sectors, the creative team is responsible
				<br> for generating attention-grabbing ideas</p>
			<div class="card-deck mt-5">
				<div class="card mb-4 box-shadow">
					<img src="img/project-6.jpg" alt="blog image 1">
					<div class="card-body">
						<h3>Design</h3>
						<h4>Creative Ideas</h4>
						<p class="card-text">This is a wider card with amazing design and supporting text below check...</p>
						<div class="d-flex justify-content-between align-items-center">
							<a href="#" class="danger">Continue Reading</a>
							<small class="text-muted">June 9, 2018</small>
						</div>
					</div>
				</div>
				<div class="card mb-4 box-shadow">
					<img src="img/project-7.jpg" alt="blog image 1">
					<div class="card-body">
						<h3>Marketing</h3>
						<h4>How To ?</h4>
						<p class="card-text">This is a wider card with amazing design and supporting text below check...</p>
						<div class="d-flex justify-content-between align-items-center">
							<a href="#" class="danger">Continue Reading</a>
							<small class="text-muted">June 9, 2018</small>
						</div>
					</div>
				</div>
				<div class="card mb-4 box-shadow">
					<img src="img/project-8.jpg" alt="blog image 1">
					<div class="card-body">
						<h3>Cryptocurrency</h3>
						<h4>Investing Money</h4>
						<p class="card-text">This is a wider card with amazing design and supporting text below check...</p>
						<div class="d-flex justify-content-between align-items-center">
							<a href="#" class="danger">Continue Reading</a>
							<small class="text-muted">June 9, 2018</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Blog Post Area -->

	<!-- Our Clients Area -->
	<section class="clients" id="clients">
		<div class="gray-bg py-10 text-center">
			<h3 class="text-center black mb-4 headline">Our Clients</h3>
			<p class="black mt-4">Call your clients regularly. Communication makes everything easier.
				<br> Schedule periodical calls with your customers to share updates</p>
			<div class="row mt-5">
				<div class="col-lg-3 col-md-4 col-6">
					<img src="img/logo-1.png" class="mt-3 w-150" alt="clients logo">
				</div>
				<div class="col-lg-3 col-md-4 col-6">
					<img src="img/logo-2.png" class="mt-3 w-150" alt="clients logo">
				</div>
				<div class="col-lg-3 col-md-4 col-6">
					<img src="img/logo-3.png" class="mt-3 w-150" alt="clients logo">
				</div>
				<div class="col-lg-3 col-md-4 col-6">
					<img src="img/logo-4.png" class="mt-3 w-150" alt="clients logo">
				</div>
				<div class="col-lg-3 col-md-4 col-6">
					<img src="img/logo-5.png" class="mt-3 w-150" alt="clients logo">
				</div>
				<div class="col-lg-3 col-md-4 col-6">
					<img src="img/logo-6.png" class="mt-3 w-150" alt="clients logo">
				</div>
				<div class="col-lg-3 col-md-4 col-6">
					<img src="img/logo-7.png" class="mt-3 w-150" alt="clients logo">
				</div>
				<div class="col-lg-3 col-md-4 col-6">
					<img src="img/logo-8.png" class="mt-3 w-150" alt="clients logo">
				</div>
			</div>
		</div>
	</section>
	<!-- End Our Clients Area -->

	<!-- Contact Us Area -->
	<section class="contect py-10" id="contect">
		<div class="container">
			<h3 class="text-center black mb-4 headline">Let's Get In Touch</h3>
			<p class="text-center mt-4">Please fill up the form and we'll be in touch soon.</p>
			<div class="row mt-5 p-sm">
				<div class="col-lg-6 mt-3">
					<p>This is by far the cleanest template and the most well structured and the most well thought out design theme I have
						ever used. The codes are up to standard. We can help you find the precise message to clearly speak to who.</p>
					<p>
						<i class="fa fa-map-marker" aria-hidden="true"></i> 58 alley, Mertle St, Rd 12, Apt 2C
						<br> Seattle, Washington</p>
					<p>
						<i class="fa fa-phone" aria-hidden="true"></i> +92 1440 59 58
						<br> +92 1440 59 58</p>
					<p>
						<i class="fa fa-globe" aria-hidden="true"></i> email@website.com
						<br> www.website.com</p>
				</div>
				<div class="col-lg-6">
					<div class="form-area">
						<form name="myForm" action="" method="POST" onsubmit="return validateForm()">
							<br style="clear:both">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="Name" placeholder="Name"  value=""/>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="email" name="Email" placeholder="Email"  value=""/>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="Subject" placeholder="Subject"  value=""/>
							</div>
							<div class="form-group">
								<textarea type="text" name="Message" value = "" class="form-control" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
							</div>
							 
							 <input class="primary-btn banner-btn mt-4" style=" color: #000;" type="submit" name="submit" value="Submit Form"/>
						</form>
						

					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- End Contact Us Area -->

	<!-- scrollUp Area -->
	<section class="nav-item text-center">
		<a class="nav-link p-0" href="#home">
			<i class="fa fa-angle-up scrollUp white" aria-hidden="true"></i>
		</a>
	</section>
	<!-- End scrollUp Area -->

	<!-- Footer Area -->
	<footer>
		<section class="footer" id="footer">
			<div class="bg-black p-5 text-center">
				<h2 class="white">
					<span style="font-size: 14px; font-weight:100;" class="muted mr-2">Powered By</span> Apex</h2>
			</div>
		</section>
	</footer>
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