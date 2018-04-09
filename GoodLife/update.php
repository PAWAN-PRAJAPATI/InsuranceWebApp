<?php
echo "Pawan";
session_start();
$username = $_SESSION['luser'];
include ("dbconeection.php");
$conn=openconn();
echo $username;
$email=$_POST['email'];
$city=$_POST['city'];
$state=$_POST['state'];
$password=$_POST['password'];
$result = $conn->query("UPDATE login SET email='$email',city='$city',state='$state',password='$password' WHERE username='$username'");
header("Location: mainmenu.php");
?>
