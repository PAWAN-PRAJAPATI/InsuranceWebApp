<?php
session_start();
$plan = $_GET["del"];
$username=$_SESSION["luser"];
echo $username;
include ("dbconeection.php");
$conn=openconn();

$result = $conn->query("delete  from $plan where username='$username'");
echo "Success";
header("Location: mydetails.php");
//$result = $conn->query($sql1);

?>
