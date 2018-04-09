
    <?php

    session_start();
    $username = $_SESSION['luser'];
    include ("dbconeection.php");
    $conn=openconn(); 
    $result = $conn->query("select * from online1 where username='$username'");
    if($result->num_rows>=1){
       $online1= "LIFE ONLINE TERM PLAN";
    }
    
    $result = $conn->query("select * from online2 where username='$username'");
    if($result->num_rows>=1){
        $online2 = "LIFE CANCER INSURANCE ";
    }
    $result = $conn->query("select * from health where username='$username'");
    if($result->num_rows>=1){
        $health = "HEALTH PLANS ";
    }
    $result = $conn->query("select * from child where username='$username'");
    if($result->num_rows>=1){
        $child = "CHILD PLANS";
    }
    

    /*
    echo "<table>";
    while($rows=$result->fetch_assoc())
    {
    echo "<tr>
    <td>".$rows['Reg']."</td><td>".
    $rows['Name']."</td></tr>";
    }
    echo "</table>";
    */
    ?>



<?php
$luser = $_SESSION['luser'];
session_start();

?>
<!DOCTYPE html> 
<html> 
<title> Good Life Philippines </title> 
<head> 
  <link rel="stylesheet" type="text/css" href="fundfact.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <script>
      function del(){
          confirm("This plan willl be permenantly deleted from your login.")
      }
  </script>
</head> 
<body> 
<nav class="navbar navbar-custom navbar-static-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="mainmenu.html">Good Life</a>
  </div>
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="mainmenu.html">Home</a></li>
      <li><a href="mydetails.php">MyAxaPedia</a></li>
      <li><a href="fundfact.html">Fund Fact Sheets</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="account.php">My Account</a></li>
      <li><a href="logout.php">Logout</a></li>   
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
<div class="container">
  
      <div class="jumbotron">
        <h1>Your Plans</h1>
        <a class="lead" href="delete.php?del=online1" onclick="del()"><?php echo $online1 ?></p>
        <a class="lead" href="delete.php?del=online2"  onclick="del()"><?php echo $online2 ?></p>
        <a class="lead" href="delete.php?del=health"  onclick="del()"><?php echo $health ?></p>
        <a class="lead" href="delete.php?del=child"  onclick="del()"><?php echo $child ?></p>
      </div>



    </div> <!-- /container -->
</div>
</body> 

</html> 
