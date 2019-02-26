<?php
error_reporting(0);
//session variables can be used in all the pages of  website.
//First of all we will have to start  the session in all the pages of a website.
session_start();
//We can create the session variables in session as I created the "username" session variable in the below line
$_SESSION["username"]="Mohsin Ali Shah";
//to display the session variable use following line method 
echo $_SESSION["username"];  //this will display the value of "username" session variable
//session_unset();  //to end the  session use this statement.When this statement  will run then all the session variables will be ended.
echo $_SESSION["username"];  //This line will give  error if error_reporting(0) is not written but if error_reporting(0)is written the this line will not display anything becuse the session variable has been unset.
echo $_SESSION["class"];
//Session variables ke bare me hamara general rule ye he ke ager hamare pass 3 pages he X,Y,Z.
//aur hum ne Page X pe koi session variable create kia he(aur us page X pe abi is session ko end nahi kia to)  to ye session variable her page  X,Y,Z per
//session start ker ker istamal kia ja sekta he lakin ager hum kisi bi X,Y,Z page per session end kerte he to jub tuk page 
//X ke jis per aik session vriable create kia gya tha,ager hum us page X ko dobara refresh nahi kerte to hum us page X wale Session
//variable ko kabi dobara istamal  nahi ker sekte.
?>

