<?php
$server="localhost";
$user="root";
$password="";
$db="word";

$nm=$_POST['nm'];
$rno=$_POST['roll'];
$mob=$_POST['mob'];

$con= mysqli_connect("$server","$user","$password","$db");

$sql_tab="insert into moon values('$nm',$rno,'$mob')";

mysqli_query($con,$sql_tab);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
 


?>