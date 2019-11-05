<!DOCTYPE html>
<html>
  <head>
    <title>Chit Chat
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style type="text/css">
      html, body {
    height: 100%;
    margin: 0;         /* Reset default margin on the body element */
}
      .messageInput{
        position: fixed;
        overflow: hidden;
        bottom:  0;
        width: 100%;
        margin-bottom: 1px;
        height: 6%;
      }
 /*     .reciverUser{
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
 */   </style>
  </head>
  <body style="background-color: #000;color: #fff">
    <!-- nav bar starts -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand -->
      <a class="navbar-brand" href="user.php">
        <img src="icon.png" style="height: 8%; width: 8%;"> Chit Chat
      </a>
      <!-- Links -->
      <ul class="navbar-nav ">
        <!-- Dropdown -->
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            <?php
session_start();
include 'connection.php';
$reciver_name=$_SESSION['first_name'] ;
// user number fetching start here for reciver
$sql_tab="SELECT * FROM signup WHERE first_name='$reciver_name'";
$dt=mysqli_query($con,$sql_tab);
$b=mysqli_num_rows($dt);
//echo $a;
if ($b>0)
{
while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
{
echo $row['user_id'];
$rc_id=$row['user_id'];
$_SESSION['rc_id']=$rc_id;
}
// user number fectch ends here
//echo $us_id;
}
else{
echo "echo something goes wrong";
}
// user name fetching using session
echo $reciver_name;
$_SESSION['reciver_name']=$reciver_name;
// ends here 
?>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Link 1
            </a>
            <a class="dropdown-item" href="#">Link 2
            </a>
            <a class="dropdown-item" href="logout.php">Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>

<!-- Something starting here -->

<div class="container" style="border:4px solid #73f1ff; margin-top: 5px;  border-radius: 15px;height:100%;width: 100%;max-width: 100%; padding-bottom: 10%;">
      <!-- skdjd -->
      <!-- reciver name heading at the top center -->
      <h2 style="text-align: center; color:#73f1ff; margin-top: 0px;">
        <?php
        
$sender_name=$_GET['nm'];
$rc_id=$_SESSION['rc_id'];
$_SESSION['sender_name']=$sender_name;
echo $sender_name;

$_SESSION['sn_nm'] = $sender_name;

// user number fetching start here for sender
$sql_tab="SELECT * FROM signup WHERE first_name='$sender_name'";
$dt=mysqli_query($con,$sql_tab);
$a=mysqli_num_rows($dt);


//echo $a;
if ($a>0)
{
while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
{
echo $row['user_id'];
$se_id=$row['user_id'];
$_SESSION['se_id']=$se_id;


}
//echo $us_id;
}
else{
echo "echo something goes wrong";
}
?>
      </h2> 
      <!-- end of reciver name heading at the top center -->
 




    <!-- iframe start here all the message display here -->
   <?php 


   echo "<iframe src="."msgDisplay.php?nm=".$_SESSION['se_id']."   style="." overflow:hidden;height:100%;width:100%; "." height="."100%"." width="."100%"."  frameborder="."0"." > </iframe>"; ?>

   
</div>


    <!-- message send box start  -->
    <div class="msgSendBar " style="position: fixed; bottom: 0; width: 100% ; background-color: black;" >
      <form method="post" action="msg_push.php" >
        <div class="form-row">
          <div class="form-group col-md-9">
            <input type="text" name="msg_text" class="form-control"  placeholder="enter your message">
          </div>
          <div class="form-group col-md-3" >
            <button  type="submit" class="btn " style="width:100%; background-color:#73f1ff;">Send
            </button>
          </div>
        </div>
      </form>
    </div>
    <!-- msg send box end here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
  </body>
</html>
