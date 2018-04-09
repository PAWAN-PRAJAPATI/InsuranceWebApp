
    <?php
    
    session_start();
    $username = $_SESSION['luser'];
    include ("dbconeection.php");
    $conn=openconn();
    
    $result = $conn->query("select * from login where username='$username'");
    $rows=$result->fetch_assoc();
    $email=$rows['email'];
    $user=$rows['username'];
    $state=$rows['state'];
    $city=$rows['city'];
    $password=$rows['password'];

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
        <h1>Your Details</h1>
    <form name="myform" class="login-form" method="post" onsubmit="return validatef();" action="update.php" >
      <input name="username" type="text" placeholder="username" value=<?php echo $user;?>><br><br>
      <input name="email" type="text" placeholder="email" value=<?php echo $email;?>><br><br>
      <input name="city" type="text" placeholder="city"value=<?php echo $city;?>><br><br>
      <input name="state" type="text" placeholder="state" value=<?php echo $state;?>><br><br>
      <input name="password" type="password" placeholder="password"value=<?php echo $password;?>><br><br>
      <input name="passwordc" type="password" placeholder="confirm password" value=<?php echo $password;?>><br><br>
      <input name="submit" type="submit" value=" Save" /><br>
      <p id="rerr"></p>
      
      </div>



    </div>
</div>
</body> 
</html> 





