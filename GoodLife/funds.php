<?php
session_start();

include ("dbconeection.php");
$conn=openconn();
$plan = $_POST["temp"];
$luser = $_SESSION["luser"];

$sql1 = "select * from $plan where username='$luser'";
$result = $conn->query($sql1);

//echo $result;

if($result->num_rows < 1){
$sql = "insert into $plan values ('$luser')";

//echo $username;
// Closing Connection
if($conn->query($sql)==TRUE)
{
header("location: mainmenu.php");
}
else
{
echo "Error: ". $conn->error;
}
}
else{
    echo "you are already registered for this plan";
}
mysql_close($connection); 

?>
