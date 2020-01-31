<?php
session_start();
include 'connection.php';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password1=$_POST['password1'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state'];



$sql_tab="insert into  signup (user_id,first_name, last_name, email, password, address1, address2, city, state) values(null,'$fname','$lname','$email','$password1', '$address1', '$address2', '$city', '$state' )";
mysqli_query($con,$sql_tab);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }
  else{
  	$_SESSION ['first_name'] = $fname ;
  	setcookie("f_name", $_SESSION['first_name'], time() +60*60*365 );
$_SESSION ['first_name'] = $_COOKIE['f_name'];
  	header ("location: user.php");
  }
 


?>