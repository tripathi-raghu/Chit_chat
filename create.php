<?php
include 'conection.php';
$sql_tab="create table moon(name varchar(20),roll int(5),mobile varchar(10))";
mysqli_query($con,$sql_tab);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
 


?>