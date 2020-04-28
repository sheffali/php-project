<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Processing</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
<script>
	function validate()
 {           
if (document.getElementById('password').value ==document.getElementById('cpassword').value)
	{
    return true;
  } 
  else 
  {
    alert(" Password not matched");
	//user_password.focus();
	return false;
  }

}
  </script>
</head>

<body id="page-top">
<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Parking Space Stockpile</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
      
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
          </li>
      <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="sp_log.php">Log-Out</a>
          </li>
		  </ul>
      </div>
    </div>
  </nav>
  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Request Confirmed.Check for spots</h2>
          <!--<h3 class="section-subheading text-muted">Your Basic Info</h3>-->
        </div>
      </div>
	  <br>
	  <br>
	  <center>
      <div class="row">
        <div class="col-lg-12 text-center">
          <form action="cust_book_opt.php" method="post" name="form">
            
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" onclick="sp_space_record.php" type="submit">check available spots
          </form>
		  
        </div>
      </div>
    </div>
  </section>
<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>


<?php
$conn=mysqli_connect('localhost','root','')or die("not connect");
//echo"conected";
$sec=$_POST['plot_sec'];
$type=$_POST['type'];
$s_time=$_POST['s_time'];
$e_time=$_POST['e_time'];
$q5='use db_22';
mysqli_query($conn,$q5) or die("not created");
//echo"used";
//echo "</br>";//cron job
$q7="select * from space where space.sector='$sec' and(space.type='$type') and(space.s_time<$s_time and space.e_time>'$e_time')";
$result=mysqli_query($conn,$q7);
while($row=mysqli_fetch_array($result))
{
$opt_id= $row[0];
$opt_add= $row[1];
$opt_sec=$row[2];
$opt_typ=$row[3];
$opt_s_time= $row[4];
$opt_e_time= $row[5];
$pending=$opt_e_time-$e_time;
$pending_p=$s_time-$opt_s_time;
//echo $pending_p;
//echo $row[0];
//echo $row[1];
$q18='use db_22';
mysqli_query($conn,$q18) or die("not created");
//echo"used";

$q19="UPDATE space SET s_time='$s_time',e_time='$e_time'";
mysqli_query($conn,$q19) or die("not updated 8");
//echo"updated 8";
if($pending>2)
{
$q36="insert into space values('sp_id','$opt_add','$opt_sec','$opt_typ','$e_time','$opt_e_time')";
mysqli_query($conn,$q36) or die("not updated 5");
//echo"updated 7";
}
if($pending_p>2)
{
$q37="insert into space values('sp_id','$opt_add','$opt_sec','$opt_typ','$opt_s_time','$s_time')";
mysqli_query($conn,$q37) or die("not updated 5");
//echo"updated 79";
}
$q8='use intermediate';
mysqli_query($conn,$q8) or die("not created");
//echo"used";
$q9="insert into inter values('inter_id','$opt_id','$opt_add')";
mysqli_query($conn,$q9) or die("not created");
//echo"entered";
}
?>

</html>
