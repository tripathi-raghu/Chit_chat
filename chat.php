<!DOCTYPE html>
<html>
<head>
	<title>Chit Chat</title>
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
    border: 2px solid #ff3643;
    border-radius: 7px;
    margin-bottom: 2%;
    padding: 1%;
    color: #ff7c36;
    
  }


  .sendUser{
      border: 2px solid #365bff;
  
    border-radius: 7px;
    margin-bottom: 2%;
    padding: 1%;
    color: #52a8ff;
    text-align: right;

    

  }

</style>
</head>
<body style="background-color: #000;color: #fff">
<!-- nav bar starts -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="user.php"><img src="icon.png" style="height: 8%; width: 8%;"> Chit Chat</a>

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

}


// user number fectch ends here

//echo $us_id;
}
else{
  echo "echo something goes wrong";
}
// user name fetching using session

   echo $reciver_name;
		// ends here 
    ?>
        
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
  </ul>
</nav>

<div class="container" style="border:4px solid #73f1ff; margin-top: 0px; margin-left: 5.5%; border-radius: 15px;height:90%;width: 100%;     position: fixed;    overflow: hidden;    bottom:  0;">
  <!-- skdjd -->




<div class="container" style=" margin-top: 0%; border-radius: 15px;">
    
    <h2 style="text-align: center; color:#73f1ff; margin-top: 0px;">
      <?php
        $sender_name=$_GET['nm'];
        echo $sender_name;
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

}

//echo $us_id;
}
else{
  echo "echo something goes wrong";
}
  

      ?>
 
 <?php

              $sql_tab="SELECT * FROM chatdata WHERE sender='$se_id'";
         $dt=mysqli_query($con,$sql_tab);
      $s=mysqli_num_rows($dt);



              //SOmething something

//echo $a;
if ($s>0)
{
    while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
{

 $row['message_text'];
$msg=$row['message_text'];

echo    "</h2>";
     echo"<div class="."chat".">";
echo"      <!-- reciver box/left -->
      <div class="."reciverUser".">";
 

            echo"<h5>".$sender_name."</h5>";
          

echo "<h3>".$msg."</h3>";
echo "</div>";

}
}
else{
  echo "something goes wrong";
}


            ///somethig something




        ?>


      




     <!-- sender box/right -->


<?php

              $sql_tab="SELECT * FROM chatdata WHERE sender='$rc_id'";
         $dt=mysqli_query($con,$sql_tab);
      $s=mysqli_num_rows($dt);



              //SOmething something

//echo $a;
if ($s>0)
{
    while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
{

 $row['message_text'];
$smsg=$row['message_text'];





echo    "  <div class="."sendUser".">";
        

            echo"<h5>".$reciver_name."</h5>";
            echo"<h4>".$smsg."</h4>";








      echo" </div>";
 }
}
else
{
  echo "something goes wrong";
}


 ?>     
    </div>

        </div>





<div class="messageInput">
         <form method="post" action="msgconnect.php">
          <div class="row">
 <div class="col col-lg-9">
          <input type="text" class="form-control" id="textMsg" placeholder="Write Your Messsage Here.."  >
          
          </div>
           <div class="col">
          
            <button class="btn btn-primary" style="width: 48%; margin-left: -6%;">Send</button>
          </div>
            </div>
            </form>
    </div>
  </div>  
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
