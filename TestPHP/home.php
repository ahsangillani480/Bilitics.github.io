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
	header('location:login.php');
}

$query="SELECT * from website where username = '$userprofile'";
$data=mysqli_query($conn,$query);
$result= mysqli_fetch_assoc($data);
echo "Welcome ".$result['Name'];
?>
<br>
<img src ='<?php echo $result['picsource']; ?>'  height ='100' width='100' align='left' hspace = '20'/>;
<p align = "justify">
Text messaging, or texting, is the act of composing and sending electronic messages, typically consisting of alphabetic and numeric characters, between two or more users of mobile devices, desktops/laptops, or other type of compatible computer. Text messages may be sent over a cellular network, or may also be sent via an Internet connection.

The term originally referred to messages sent using the Short Message Service (SMS). It has grown beyond alphanumeric text to include multimedia messages (known as MMS) containing digital images, videos, and sound content, as well as ideograms known as emoji (happy faces, sad faces, and other icons).
</p>
<p align = "justify">
As of 2017, text messages are used by youth and adults for personal, family, business and social purposes. Governmental and non-governmental organizations use text messaging for communication between colleagues. In the 2010s, the sending of short informal messages has become an accepted part of many cultures, as happened earlier with emailing.[1] This makes texting a quick and easy way to communicate with friends, family and colleagues, including in contexts where a call would be impolite or inappropriate (e.g., calling very late at night or when one knows the other person is busy with family or work activities). 
As of 2017, text messages are used by youth and adults for personal, family, business and social purposes. Governmental and non-governmental organizations use text messaging for communication between colleagues. In the 2010s, the sending of short informal messages has become an accepted part of many cultures, as happened earlier with emailing.[1] This makes texting a quick and easy way to communicate with friends, family and colleagues, including in contexts where a call would be impolite or inappropriate (e.g., calling very late at night or when one knows the other person is busy with family or work activities). 
</p>
<a href ="logout.php">Logout </a> 