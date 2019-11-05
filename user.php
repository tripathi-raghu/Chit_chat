  <!DOCTYPE html>
  <html>
  <head>
  	<title>Msg</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style type="text/css">
  	
  	
      .messagingBox{
          border: 2px solid cyan; 
          border-radius: 12PX;
            margin-top:1%;


      }
  }
  </style>
  </head>
  <body style="background-color: #000">
  <!-- nav bar starts here -->
  <!-- nav bar starts -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="Home"><img src="icon.png" style="height: 8%; width: 8%;"> Chit Chat</a>

    <!-- Links -->
    <ul class="navbar-nav ">
    	

      <!-- Dropdown -->
      <li class="nav-item dropdown " >
        <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
  		<?php
  	session_start();
  	$currentUser = $_SESSION['first_name']; 
      
      echo $currentUser;
  		?>
          
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="profile.php">Your Profile</a>
          <a class="dropdown-item" href="settings.php">Settings</a>
          <a class="dropdown-item" href="logout.php">logout</a>
        </div>
      </li>
    </ul>
  </nav>

  <!-- nav bar ends here -->
  <div class="container" style="border:4px solid #73f1ff; margin-top: 2%; border-radius: 15px;">
  		
  		<h2 style="text-align: center; color:#73f1ff; margin-top: 0px;">Messsages</h2>


          </div>


  <!-- recived messaging box starts here -->

    <?php
    include 'connection.php';
      $sql_tab="SELECT * FROM signup ";
      $dt=mysqli_query($con,$sql_tab);
      while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
      {
        ?>
        <div class="container messagingBox" id="messagesBox" >
          <?php 
           
  

         echo "<a href=chat.php?nm=".$row['first_name'].">";
         echo "<h3>".$row['first_name']."</h3>
               <h5>hey buddy</h5>"; 
         echo "</div>";
           $user2=$row['first_name'];
        //  $_SESSION ['user2'] = $user2 ;

         echo "</a>";

      }
      

    ?>

    
  </div>

  <!-- Recived messages Code ends here -->
  </body>








  <!-- messgae sending box starts here -->


  <!-- messgae sending box Ends Here -->



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>