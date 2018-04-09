<?php
function openconn()
{
$dbhost="localhost";
$dbuser="root";
$dbpass="pawan";
$db="company";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$db)or
die("Connect failed: %s\n". $conn->error);
//echo "connected";
return $conn;

}

function closeconn($conn)
{
$conn->close();
}


?>
