
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
 
</head> 
<body> 
<nav class="navbar navbar-custom navbar-static-top">
  <div class="navbar-header">
    <a class="navbar-brand" href="mainmenu.html">Good Life</a>
  </div>
     <ul class="nav navbar-nav">
      <li class="active"><a href="mainmenu.html">Home</a></li>
      <li><a href="mydetails.php">MyAxaPedia</a></li>
      <li><a href="fundfact.html">Fund Fact Sheets</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="account.php">My Account</a></li>
      <li><a href="logout.php">Logout</a></li>   
    </ul>
<!-- /.navbar-collapse -->
</nav>
<div class="container">
  
      <div class="jumbotron">
        <h1>Welcome <?php echo $_SESSION['luser']; ?> to Good Life - Axa Insurance</h1>
        <p class="lead">AXA Insurance is one of the leading and fastest-growing life insurance companies in the India. It is borne out of the formidable synergy between Metrobank, one of the foremost financial institutions in the India, and the AXA Group, a worldwide leader in insurance and asset management serving 102 million customers in 56 countries. </p>
        <p class = "lead">AXA currently protects 606,000 individuals through its group and individual life insurance products, serviced by 2,000 financial advisors in 28 branches nationwide and 500 financial executives servicing 750 Metrobank and PSBank branches all over the country.</p>
        <p><a class="btn btn-lg btn-success" href="fundfact.html" role="button">View Funds Today </a></p>
      </div>



    </div> <!-- /container -->
</div>
</body> 

  </html> 
