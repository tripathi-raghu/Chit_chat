<?php
	
	
  if($_COOKIE['testing'] ==""){
  header("location: login.php");

}
else{
header("location: user.php");  
}
?>