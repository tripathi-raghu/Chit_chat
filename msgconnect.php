<?php
session_start();
include 'connection.php';

$sender=$_POST['sname'];
$reciver=$_POST['rname'];
$msg=$_POST['message'];
$time=$_POST[''];



$sql_tab="insert into chatdata values('$sender','$reciver','msg','$time' )";
mysqli_query($con,$sql_tab);




?>