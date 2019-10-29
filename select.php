<?php
$server="localhost";
$user="root";
$password="";
$db="chitchat";
$con= mysqli_connect("$server","$user","$password","$db");



if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
 
$sql_tab="select * from moon";
$dt=mysqli_query($con,$sql_tab);
$a=mysqli_num_rows($dt);
while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
{

echo $a."<br>" ;
echo "Name ";
echo $row['name'];
echo "   Roll ";
echo $row['roll'];
echo "  Mobile ";
echo $row['mobile'];
}
?>