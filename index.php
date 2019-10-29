<!DOCTYPE html>
<html>
<head>
	<title>First Program</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">




</head>
<body style="background-color: #000">
	<!-- heading start -->
	<div class="container" style="border:4px solid #73f1ff; margin-top: 10px; border-radius: 15px;">
		
		<h2 style="text-align: center; color:#73f1ff; margin-top: 10px;">Welcome to Chit Chat</h2>



	</div>
<!-- heading end -->





<!-- form start here -->

<div class="container" style="margin-left: 20%; width: 60%; margin-top:20px;border: 2px solid white; border-radius: 20PX ;padding-bottom: 20px; ">
	<H3 style="color:#73f1ff; text-align: center; padding: 12px; ">SignUp form</H3>

	<!-- form details -->
<form method="post" action="signupconnect.php" name="fr1">
  <div class="row">
    <div class="col">
    	<label for="inputEmail4">First Name</label>
      <input type="text" name="fname" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      
    	<label for="inputEmail4">Last Name</label>
      <input type="text"name="lname" class="form-control" placeholder="Last name">
    </div>
  </div>

<!-- sencond lines -->

<div class="form-row">
    <div class="form-group col-md-6" style="margin-top: 15px;">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6" style="margin-top: 15px;">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password1" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="address1" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">State</label>
      <select id="inputState" name="state" class="form-control">
        <option selected>Choose...</option>
        <option>Andhra Pradesh</option>
        <option>Arunachal Pradesh</option>
        <option>Assam</option>
        <option>	Bihar</option>
        <option>Chhattisgarh</option>
        <option>	Goa</option>
        <option>Gujarat</option>
        <option>Haryana</option>
        <option>Himachal Pradesh</option>
        <option>Jammu and Kashmir</option>
        <option>	Jharkhand</option>
        <option>	Karnataka</option>
        <option>Andhra Pradesh</option>
        <option>Andhra Pradesh</option>
        <option>Andhra Pradesh</option>
        <option>Andhra Pradesh</option>
        <option>Andhra Pradesh</option>
        <option>Andhra Pradesh</option>
        <option>Andhra Pradesh</option>
        <option>Andhra Pradesh</option>
        <option>Andhra Pradesh</option>
        <option>Andhra Pradesh</option>
        <option>Andhra Pradesh</option>
        <option>Andhra Pradesh</option>
        <option>Andhra Pradesh</option>

        <option>Andhra Pradesh</option>
        <option>Andhra Pradesh</option>
        <option>Andhra Pradesh</option>
      </select>
    </div>
    
  </div>
  
  <button onclick="window.location.href = 'chathuj.php';" type="submit" class="btn " style="width:100%; background-color:#73f1ff; margin-top:10px;">SignUp</button>


</form> 


 <button onclick="window.location.href = 'login.php';"   type="submit" class="btn " style="width:100%; background-color:#73f1ff; margin-top:20px;" >Already a memeber? SignIn</button>

</div>



<!-- form End Here -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<a href="create.php" style="color:#FFFFFF;">Create</a> <a href="insert.php" style="color:#FFFFFF;">Insert</a><a href="select.php" style="color:#FFFFFF;">Select</a>


<form method="post" action="insert.php" name="fr2">
<input type="text" name="nm">
<input type="text" name="roll">
<input type="text" name="mob">
<input type="submit">
</form>
</body>
</html>