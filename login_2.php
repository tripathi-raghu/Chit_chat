<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body onload="myFunction()"  style="background-color:black">
<!-- pre loader -->

<div class="preload" id="loader">
    <div class="icon">
        <img src="icon.png"></div>
            
    <div class="loader-frame">
        <div class="loader1" id="loader1"></div>
        <div class="loader2" id="loader2"></div>
        
    </div>
</div>
<!-- pre loader ends -->




<div class="container" style="border:4px solid #73f1ff; margin-top: 10px; border-radius: 15px;">
		
		<h2 style="text-align: center; color:#73f1ff; margin-top: 10px;">Welcome Back</h2>
        </div>
        <!-- head End's here -->
        
    <div class="container" style="margin-left: 20%; width: 60%; margin-top:20px;border: 2px solid white; border-radius: 20PX ;padding-bottom: 20px; ">
	    

      <H3 style="color:#73f1ff; text-align: center; padding: 12px; ">SignUp form</H3>
    
<!-- form Starts Here -->

    <form method="post" action="loginconnect.php" >
        <div class="form-row">
    <div class="form-group col-md-6" style="margin-top: 15px;">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6" style="margin-top: 15px;">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password1" class="form-control" id="inputPassword4" placeholder="Password">
    </div>

<button  type="submit" class="btn " style="width:100%; background-color:#73f1ff; margin-top:10px;">SignIn</button>
</div>
 </form>

 <!-- form ends here -->
<button  onclick="window.location.href = 'index.php';" type="submit" class="btn " style="width:100%; background-color:#73f1ff; margin-top:20px;" >Not a memeber? SignUp</button>
 
</div>
</div>
    





 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="loader.js"></script>
 
</body>
</html>