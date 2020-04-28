<?php 
//echo "----------------------------------------------------------------------------------------------------------------------<br>";		 
//echo "EMPTY TABLE";
//echo "<br/>";
$conn=mysqli_connect('localhost','root','')or die("not connect");
$q92="use db_22";
mysqli_query($conn,$q92)or die('not using');
$q91="delete from space";
mysqli_query($conn,$q91)or die('not using');
header('Location:admin_dash.php');			
?>