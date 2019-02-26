<?php
session_start();

echo $_SESSION["username"];  //if wehave end the session on some page then it will not be displayed on any other page.
$_SESSION["class"]="CS";
echo $_SESSION["class"];
session_unset();
?>