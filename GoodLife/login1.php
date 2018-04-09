<?php
session_start();

include ("dbconeection.php");
$conn=openconn();
$username=$_POST["username"];
$password=$_POST["password"];
$_SESSION["luser"] = $username;


$username=$_POST["username"];
$password=$_POST['password'];

// SQL query to fetch information of registerd users and finds user match.
$sql = "select * from login where password='$password' AND username='$username'";
echo $username;
$result = $conn->query("select * from login where password='$password' AND username='$username'");

$rows=$result->fetch_assoc();

if($result->num_rows){
$_SESSION['luser']=$username; // Initializing Session
header("location: mainmenu.php"); // Redirecting To Other Page
$_SESSION["error"] = "";

}
else{
    $_SESSION["error"] = "Invalid credintial";
    header("location: index2.php"); 
}
mysql_close($connection); // Closing Connection
?>
