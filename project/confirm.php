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
          <h2 class="section-heading text-uppercase">Possible parking Spaces</h2>
        </div>
      </div>
	  <br>
	  <br>
	  <center>
      <div class="row">
        <div class="col-lg-12 text-center">
          <form  action="user.php" method="post" name="form" class="section-heading text-uppercase">
          <h1 class="section-heading text-uppercase">Booking Confirmed</h1>
		 		<?php
$conn=mysqli_connect('localhost','root','')or die("not connect");
//echo"conected";
$pid=$_POST['plot_id'];
$q31="use db_22";
mysqli_query($conn,$q31) or die("not used");
$q32="select * from space where space_id='$pid'";
mysqli_query($conn,$q32) or die("not used");
//echo"selecetd";
$result=mysqli_query($conn,$q32);
while($row=mysqli_fetch_array($result))
{
$sp_id= $row[0];
$sp_add= $row[1];
$sp_s_time=$row[4];
$sp_e_time= $row[5];
//echo $row[0];
//echo $row[1];
$q8='use confirm';
mysqli_query($conn,$q8) or die("not created 1");
//echo"used";
$hours=$sp_e_time-$sp_s_time;
$amt=$hours*20;
$q9="insert into confirm_book values('confirm_id','$sp_id','$sp_add','$sp_s_time','$sp_e_time','$hours')";
mysqli_query($conn,$q9) or die("not created 2");
//echo"entered";
$q41='use paydet';
mysqli_query($conn,$q41) or die("not created 11");
//echo"used44";
$q42="insert into p_calc values('p_id','$sp_id','$hours',$amt)";
mysqli_query($conn,$q42) or die("not created 2");
}
$q5='use intermediate';
mysqli_query($conn,$q5) or die("not created 3");
//echo"used";
//echo "</br>";//cron job
$q8="select * from inter where out_id='$pid'";
//echo"selectd";
$q8='use db_22';
mysqli_query($conn,$q8) or die("not used");
//echo "used";
//mysqli_query($conn,$q13) or die("not used");
//if($pending<2)
//{
$q9="delete from space where space_id ='$pid'";
mysqli_query($conn,$q9) or die("not deleted");
//}
//else
//{
//$q10="UPDATE space SET  space.s_time = '$sp_e_time'";
//mysqli_query($conn,$q10) or die("updated");
//}
$q12="use intermediate";
mysqli_query($conn,$q12) or die("not used");
$q11="delete from inter";
mysqli_query($conn,$q11) or die("not deleted all");
//echo"booking confirm";
$q12='use paydet';
mysqli_query($conn,$q12)or die('not using');
//echo"using";
$q4="select sp_id,amount from p_calc where p_calc.sp_id='$sp_id'";
$result=mysqli_query($conn,$q4)or die('not entered');
//echo"inserted";
while($row=mysqli_fetch_array($result))
{
echo "booking ID"."&nbsp;&nbsp;&nbsp;&nbsp;"."Amount";
echo "<br>";

echo $row[0]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row[1];
echo "<br>";
echo "PAYMENT ON LOCATION";
echo "<br>";
echo "your booking id is your OTP";
}

?>
<br>
<br>
		 <h6 class="section-heading text-uppercase">Claim your parking spot 10 minutes before the booking time</h6>
  
 
    <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" onclick="user.php" type="submit">confirm booking

	
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
