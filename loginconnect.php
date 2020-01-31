<?php
session_start();
include 'connection.php';

$email=$_POST['email'];
$password1=$_POST['password1'];



$sql_tab="SELECT * FROM signup WHERE email='$email' AND password='$password1'";
$dt=mysqli_query($con,$sql_tab);
$a=mysqli_num_rows($dt);
echo $a;
if ($a>0)
{
  	while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
{

echo "Name ";

echo $row['first_name'];
$fn=$row['first_name'];


echo "  Last Name ";
echo $row['last_name'];

echo "  Email ";
echo $row['email'];
$em=$row['email'];

}
header ("location: user.php");
$_SESSION['email']=$em;

setcookie("testing", $_SESSION['email'], time() +60*60*365 );
$_SESSION['email']=$_COOKIE['testing'];
$_SESSION ['first_name'] = $fn ;
setcookie("f_name", $_SESSION['first_name'], time() +60*60*365 );
$_SESSION ['first_name'] = $_COOKIE['f_name'];

}

else
{
	$message = "sorry the E-mail and password does not exist";
echo "<script type='text/javascript'>
alert('$message');

</script>";
echo "<script type='text/javascript'>
window.location= 'login.php';

</script>
";

}


?>