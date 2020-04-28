<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Request record</title>

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

</head>

<body id="page-top">

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
            <a class="nav-link js-scroll-trigger" href="cust_log.php">Log-Out</a>
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
          <h2 class="section-heading text-uppercase">FILL IN THIS FORM TO REQUEST </h2>
          <h3 class="section-subheading text-muted">Necessary Requirements</h3>
        </div>
      </div>
      <div class="row">
	  
        <div class="col-lg-12 text-center">
          <form id="customersignup" name="signup" action="reqs.php" method="post" novalidate="novalidate">
            <div class="row">
              <div class="col-lg-6 text-center">
			 
                
 <div class="form-group">
 <p class="text-warning">nearest sector:</p>
<input class="form-control" id="sec" name="plot_sec" type="number" placeholder="Plot number/sector *" required="required" data-validation-required-message="Please enter your email address.">
   <p class="help-block text-danger"></p>
    </div>
	
 <div class="form-group">
 <p class="text-warning">Space available for:</p>
<select name="type">suitable for
  <option value="Hatchback">Hatchback</option>
  <option value="Seden">Seden</option>
  <option value="SUV">SUV</option>
</select>
 <p class="help-block text-danger"></p>

    </div>
		
	<div class="form-group">
 <p class="text-warning">Start time(24 hr format):</p>
<select name="s_time" id="s_time">START TIME-
    <option value="00">12.00 AM</option>
    
    <option value="01">01.00 AM</option>
    
    <option value="02">02.00 AM</option>
  
    <option value="03">03.00 AM</option>
  
    <option value="04">04.00 AM</option>
  
    <option value="05">05.00 AM</option>
   
    <option value="06">06.00 AM</option>
   
    <option value="07">07.00 AM</option>
   
    <option value="08">08.00 AM</option>
   
    <option value="09">09.00 AM</option>
   
    <option value="10">10.00 AM</option>
  
    <option value="11">11.00 AM</option>

    <option value="12">12.00 PM</option>
   
    <option value="13">01.00 PM</option>
  
    <option value="14">02.00 PM</option>
   
    <option value="15">03.00 PM</option>
    
    <option value="16">04.00 PM</option>
  
    <option value="17">05.00 PM</option>
   
    <option value="18">06.00 PM</option>
   
    <option value="19" selected="">07.00 PM</option>
    <option value="20">08.00 PM</option>
    <option value="21">09.00 PM</option>
    <option value="22">10.00 PM</option>
    <option value="23">11.00 PM</option> 
</select>

 <p class="help-block text-danger"></p>

    </div>
	<div class="form-group">
 <p class="text-warning">End time(24 hr format):</p>
<select name="e_time" id="e_time">END TIME-
    <option value="00">12.00 AM</option>
    
    <option value="01">01.00 AM</option>
    
    <option value="02">02.00 AM</option>
  
    <option value="03">03.00 AM</option>
  
    <option value="04">04.00 AM</option>
  
    <option value="05">05.00 AM</option>
   
    <option value="06">06.00 AM</option>
   
    <option value="07">07.00 AM</option>
   
    <option value="08">08.00 AM</option>
   
    <option value="09">09.00 AM</option>
   
    <option value="10">10.00 AM</option>
  
    <option value="11">11.00 AM</option>

    <option value="12">12.00 PM</option>
   
    <option value="13">01.00 PM</option>
  
    <option value="14">02.00 PM</option>
   
    <option value="15">03.00 PM</option>
    
    <option value="16">04.00 PM</option>
  
    <option value="17">05.00 PM</option>
   
    <option value="18">06.00 PM</option>
   
    <option value="19" selected="">07.00 PM</option>
    <option value="20">08.00 PM</option>
    <option value="21">09.00 PM</option>
    <option value="22">10.00 PM</option>
    <option value="23">11.00 PM</option> 
</select>

 <p class="help-block text-danger"></p>

    </div>  
             </div>
			 </div>
			 </div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">generate Request</button>
              </div>
            </div>
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
