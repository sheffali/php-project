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
          <h2 class="section-heading text-uppercase">Processing Request</h2>
          <!--<h3 class="section-subheading text-muted">Your Basic Info</h3>-->
        </div>
      </div>
	  <br>
	  <br>
	  <center>
      <div class="row">
        <div class="col-lg-12 text-center">
          <form action="spaceprov.php" class="section-heading text-uppercase">
		  <?php
$conn=mysqli_connect('localhost','root','')or die("not connect");
//echo"conected";

$address=$_POST['address'];
$sec=$_POST['plot_sec'];
$type=$_POST['type'];
$s_time=$_POST['s_time'];
$e_time=$_POST['e_time'];

$q1='create database if not exists db_22';
mysqli_query($conn,$q1) or die('not connected');
//echo"created";
$q2='use db_22';
mysqli_query($conn,$q2)or die('not using');
//echo"using";
$q4="insert into space values('space_id','$address','$sec','$type','$s_time',$e_time)";
mysqli_query($conn,$q4)or die('not entered');
//echo"inserted";
$q9="select space_id from space where address='$address'";
//echo"fine";
$result=mysqli_query($conn,$q9);
echo "</br>"."SpaceID "." &nbsp;&nbsp;&nbsp; ";
		 while($row=mysqli_fetch_row($result))
		 {
			 $id=$row[0];
echo $id."<br>";	
echo "your booking id is your OTP";		 
			 
		 }	

?>
        <br>
<br>		
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" onclick="sp_space_record.php" type="submit">Back to home
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




</html>
