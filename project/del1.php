<?php 
//echo "----------------------------------------------------------------------------------------------------------------------<br>";		 
//echo "EMPTY TABLE";
//echo "<br/>";
$sp=$_POST['sp'];
$conn=mysqli_connect('localhost','root','')or die("not connect");
$q92="use confirm";
mysqli_query($conn,$q92)or die('not using');
$q91="delete from confirm_book where space_id='$sp'";
mysqli_query($conn,$q91)or die('not using');
$q93="use paydet";
mysqli_query($conn,$q93)or die('not using');
$q94="delete from p_calc where sp_id='$sp'";
mysqli_query($conn,$q94)or die('not using');
header('Location:admin_dash.php');			
?>