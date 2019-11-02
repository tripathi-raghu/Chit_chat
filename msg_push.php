<?php
session_start();
include 'connection.php';

$msg_text=$_POST['msg_text'];
$reciver=$_SESSION['rc_id'];
$sender=$_SESSION['se_id'];
$sender_nm =$_SESSION['sender_name'];


$sql_tab="insert into chatdata (message_text,receiver,sender,date) values('$msg_text','$sender',$reciver, CURRENT_TIMESTAMP)";
//echo $sql_tab;
mysqli_query($con,$sql_tab);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }
  else{
  		
 	header ("location: chat.php?nm=".$sender_nm."");
  }
 

?>
