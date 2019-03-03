<?php
session_start();
include("connection.php");
error_reporting(0);
?>
<?php
if(isset($_POST['submit']))
{
	$user= $_POST['username'];
	$pwd = $_POST['pass'];
	$query="SELECT * from website where username = '$user' && password='$pwd'";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total==1)
	{
		if(!empty($_POST["remember-me"]))
		{
			setcookie("member_login",$_POST["username"],time()+(10*365*24*60*60));
			setcookie("member_password",$_POST["pass"], time()+(10*365*24*60*60));
		}
		else
		{
			if(isset($_COOKIE["member_login"]))
			{
				setcookie("member_login","");
			}
			if(isset($_COOKIE["member_password"]))
			{
				setcookie("member_password","");
			}
		}
		$_SESSION['user_name']=$user;
		//echo "<script>alert('Login Successfully')</script>";
		?>
	
	                  <META HTTP-EQUIV = "Refresh" CONTENT="0; URL = http://localhost/apex-landing-page/AdminPenal/dashboard.php" >  <!--here 0 is for refreshing no of seonds-->
	
	    <?php
	}
	else
	{
		echo "<script>alert('Login Failed')</script>";
		?>
	
	                  <META HTTP-EQUIV = "Refresh" CONTENT="0; URL = http://localhost/apex-landing-page/AdminPenal/dashboard.php" >  <!--here 0 is for refreshing no of seonds-->
	
	    <?php
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/login_main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../img/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" value="<?php if(isset($_COOKIE["member_login"])){echo $_COOKIE["member_login"];} ?>" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" value="<?php if(isset($_COOKIE["member_password"])){echo $_COOKIE["member_password"];} ?>" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" <?php if(isset($_COOKIE["member_login"])){ ?> checked <?php } ?>>
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button type ="submit" name="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/admin_penal.js"></script>

</body>
</html>

