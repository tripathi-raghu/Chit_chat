<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style type="text/css">
      .messageInput{
        position: fixed;
        overflow: hidden;
        bottom:  0;
        width: 100%;
        margin-bottom: 1px;
        height: 6%;
      }
      .reciverUser{
        border: 2px solid grey;
        border-radius: 52px 100px 100px 0px;
        margin-bottom: 2%;
        margin-right: 10%;    
        padding: 1%;
        color: #ff7c36;

      }

      .reciverUser p{
        color: grey !important;
        font-size: 12px;

      }

      

      


      .sendUser p{
        color: grey !important;
        font-size: 12px;

      }


      .sendUser{
        border: 2px solid #365bff;
        border-radius: 100px 52px 0px 100px;
        margin-bottom: 2%;
        margin-left: 10%;
        padding: 1%;
        color: #52a8ff;
        text-align: right;
      }
    </style>
  </head>


 <body style="background-color: #000;color: #fff">
      <!-- start of message box codeing -->
      
<?php
session_start();
include 'connection.php';
$sender_name = $_GET['nm'];
$rc_id = $_SESSION['rc_id'];
$_SESSION['sender_name'] = $sender_name;
$sender_nm = $_SESSION['sender_name'];
$se_id = $_SESSION['sender_name'];
$sec = "3";
header("refresh: $sec; msgDisplay.php?nm=" . $sender_nm . "");
$sql_tab = "SELECT * FROM chatdata  WHERE sender='$se_id' AND receiver='$rc_id' or receiver='$se_id' AND sender='$rc_id'  ORDER BY msg_number DESC";
$dt = mysqli_query($con, $sql_tab);
$s = mysqli_num_rows($dt);
//echo $se_id;
//echo $rc_id;
//echo $_SESSION['sender_name'];
if ($s > 0) {
    while ($row = mysqli_fetch_array($dt, MYSQLI_ASSOC)) {
        $reciver_name = $_SESSION['reciver_name'];
        $row['message_text'];
        $msg = $row['message_text'];
        $sen = $row['sender'];
        $date_msg = $row['date'];
        $sql_tab1 = "SELECT * FROM signup WHERE user_id='$sen'";
        $dt1 = mysqli_query($con, $sql_tab1);
        $s1 = mysqli_num_rows($dt1);
        $row1 = mysqli_fetch_array($dt1, MYSQLI_ASSOC);
        $sender_name = $_SESSION['sn_nm'];
        if ($row1['first_name'] == $sender_name) {
            //jis user ko bhejna hai wo hai is part ma so $sender_name = jisa bhejna hai
            echo "<div class=" . "chat" . ">";
            echo "<div class=" . "reciverUser" . ">";
            //echo"<h6>".$row1['first_name']."</h6>";
            //echo"<h5>".$sender_name."</h5>";
            echo "<h5>" . $msg . "</h5>";
            echo "<p>" . $date_msg . "</p>";
            echo "</div>";
            echo "</div>";
        } elseif ($row1['first_name'] == $reciver_name)
        // jo user login hai wo hai is part m so $reciver_name = jo user login hai
        {
            echo "<div class=" . "chat" . ">";
            echo "  <div class=" . "sendUser" . ">";
           // echo"<h6>".$row1['first_name']."</h6>";
            //echo"<h5>".$sender_name."</h5><br>";
            //echo"<h5>".$reciver_name."</h5><br>";

            echo "<h5>" . $msg . "</h5>";
            echo "<p>" . $date_msg . "</p>";
            echo "</div>";
            echo "</div>";
        }
    }
} else {
    echo "Sorry No conversations available, please send an msg to start..";
}
?>
     
    </div>
  </body>
