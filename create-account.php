<?php
require 'functions/sessions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register | Maniniyot</title>
	<!-- css styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body>


<div class="container login-con">
	<div class="cam-logo" style="font-size: 50px;text-align: center;">
		<i class="fas fa-camera-retro"></i>
		<br>
		<span style="font-size: 24px;position: relative;left: -5px;top: -15px;">Join Us!</span> 
	</div>
	<br>
	<form method="POST" action="register.php">
	<?php 
		if(exists('register_error')) {
	?>
	<small id="emailHelp" class="form-text error">
		<?php
			echo flash('register_error');
		?>
	</small>
	<?php
		}
	?>
	<div class="form-row" style="margin-bottom: 10px;">
	    <div class="col">
	      <label for="exampleInputEmail1">First Name</label>
	      <input type="text" name="first_name" class="form-control" placeholder="Jane" required="">
	    </div>
	    <div class="col">
	    	<label for="exampleInputEmail1">Last Name</label>
	      <input type="text" name="last_name" class="form-control" placeholder="Doe" required="">
	    </div>
	  </div>
    <div class="form-group">
    	<label for="exampleInputEmail1">Email</label>
    	<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="janedoe@mail.com" required>
    </div>

    <div class="form-group">
	    <label for="exampleInputEmail1">Where do you live?</label>
	    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ouano St. Looc, Mandaue City" required>
    </div>

    <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
    </div>

	  <button type="submit" class="btn btn-block btn-login">Register</button>

	</form>

</div>

<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="public/js/masonry.pkgd.min.js"></script>
</body>
</html>