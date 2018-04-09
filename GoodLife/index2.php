<?php
//include('login1.php'); // Includes Login Script
/*
if(isset($_SESSION['login_user'])){
header("location: profile.php");
}*/
$error=$_SESSION["error"] 
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="login-page">
  <div class="form">
    <form action="login1.php" class="login-form" method="post">
      <input name="username" type="text" placeholder="username"/>
      <input name="password" type="password" placeholder="password"/>
      <input name="submit" type="submit" value=" Login ">
      <p class="message">Not registered? <a href="reg.html">Create an account</a></p>
    </form>
    <?php echo "<p>$error</p>";?>
  </div>
</div>
</body>
</html>