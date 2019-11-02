<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


<!-- start of message box codeing -->
<div class="container">
 <?php
session_start();
   $se_id = $SESSION['se_id'];
include 'connection.php';


              $sql_tab="SELECT * FROM chatdata WHERE sender='$se_id' or receiver='$se_id' ORDER BY msg_number DESC";
         $dt=mysqli_query($con,$sql_tab);
      $s=mysqli_num_rows($dt);
if ($s>0)
{
    while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
{

 $row['message_text'];
$msg=$row['message_text'];
$sen=$row['sender'];
$date_msg=$row['date'];
 $sql_tab1="SELECT * FROM signup WHERE user_id='$sen'";
         $dt1=mysqli_query($con,$sql_tab1);
      $s1=mysqli_num_rows($dt1);
 $row1= mysqli_fetch_array($dt1,MYSQLI_ASSOC);


//echo    "</h2>";

 

 if($row1['first_name']==$sender_name)
 { 
     echo"<div class="."chat".">";
echo"     
      <div class="."reciverUser".">";

echo"<h6>".$row1['first_name']."</h6>";
      //echo"<h5>".$sender_name."</h5>";
          

echo "<h5>".$msg."</h5>";
echo"<p>".$date_msg."</p>";
echo "</div>";

 }

 elseif($row1['first_name']==$reciver_name)
 {
  echo"<div class="."chat".">";
   echo    "  <div class="."sendUser".">";        
  echo"<h6>".$row1['first_name']."</h6>";
      //echo"<h5>".$sender_name."</h5>";
          

echo "<h5>".$msg."</h5>";
echo"<p>".$date_msg."</p>";
echo "</div>";
 }

}
}
else{
  echo "Sorry No conversations available, please send an msg to start..";
}
?>
 </div>

</body>
</html>