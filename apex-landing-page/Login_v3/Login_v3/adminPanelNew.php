<?php
session_start();
error_reporting(0);
include("connection.php");
$userprofile=$_SESSION['user_name'];
if($userprofile==true)
{
}
else
{
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px; background-color:#009688!important;color:#fff!important;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button"><h1>Bilitics</h1></a>
  <a href="#" class="w3-bar-item w3-button">Blogs</a>
  <a href="#" class="w3-bar-item w3-button">Portfolio</a>
  <li class="has-sub nav-item"><a href="#"><span data-i18n="" class="menu-title">UI Kit</span></a>
                <ul class="menu-content">
                  <li><a href="grids.html" class="menu-item">Grid</a>
                  </li>
                  <li><a href="typography.html" class="menu-item">Typography</a>
                  </li>
                </ul>
    </li>
  <a href="logout.php" class="w3-bar-item w3-button">LogOut</a>
</div>

<div class="w3-main" style="margin-left:200px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h2>Admin Panel</h2>
  </div>
</div>

<div class="w3-container">
  <h3>Responsive Sidebar</h3>
  <p>The sidebar in this example will always be displayed on screens wider than 992px, and hidden on tablets or mobile phones (screens less than 993px wide).</p>
  <p>On tablets and mobile phones the sidebar is replaced with a menu icon to open the sidebar.</p>
  <p>The sidebar will overlay of the page content.</p>
  <p><b>Resize the browser window to see how it works.</b></p>
</div>
   
</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html>
