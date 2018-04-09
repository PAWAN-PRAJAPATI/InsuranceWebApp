<?php
session_start();

include ("dbconeection.php");
$conn=openconn();

$username=$_POST["username"];
$city=$_POST["city"];
$state=$_POST["state"];
$email=$_POST["email"];
$password=$_POST["password"];
$_SESSION["luser"] = $username;

// SQL query to fetch information of registerd users and finds user match.
$sql = "insert into login values('$username','$password','$city','$state','$email')";
echo $username;
// Closing Connection
if($conn->query($sql)==TRUE)
{
header("location: mainmenu.php");
}
else
{
echo "Error: ". $conn->error;
}
mysql_close($connection); 
?>