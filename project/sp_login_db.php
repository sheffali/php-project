<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login Dashboard</title>
     <style>
	 
	 *, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}
	 </style>
	 </head>
	 <body>

      <form action="" method="post" name="form">
      
        <h1>Log In to dashboard</h1>
        
        <button type="submit" >Log IN</button>
      </form>
      
    </body>
 
 <?php
 $conn=mysqli_connect('localhost','root','')or die("not connect");
//echo"conected";
$user=$_POST['user_name'];
$pass1=$_POST['user_password'];
$pass=bin2hex($pass1);
$q31="use space_provider";
mysqli_query($conn,$q31) or die("not used");
$q32="select name,password from sp_reg where name='$user'";
mysqli_query($conn,$q32) or die("not used");
echo"selected";
$result=mysqli_query($conn,$q32);
while($row = $result->fetch_row())
{
	   $uid=$row[0];
	   $pass2=$row[1];
	  #$pass11=($pass);
#echo $uid;
#echo $user;
#echo $pass;
#echo $pass2;

		if($user==$uid && $pass==$pass2)
		{
		echo"okay";
		header('Location:spaceprov.php');
		}
		else 
		{
		echo "false";
		header( 'Location:sp_log.php' );
		}

}
 ?>
</html>