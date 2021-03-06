<?php
require 'functions/sessions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Maniniyot</title>
	<!-- css styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body>


<div class="container login-con">
	<div class="cam-logo" style="font-size: 50px;text-align: center;">
		<i class="fas fa-camera-retro"></i>
		<br>
		<span style="font-size: 24px;position: relative;left: -5px;top: -15px;">Login</span> 
		<div class="flash-text-login <?php if(exists('class-login')) { echo flash('class-login'); } ?>" >
	        <?php
	          if(exists('login')) {
	            echo flash('login');
	          }
	        ?> 
	   	</div>
	</div>
	<form method="POST" action="authenticate.php">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email</label>
	    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="janedoe@mail.com" required>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
	  </div>
	  <button type="submit" class="btn btn-block btn-login">Login</button>
	</form>

</div>

<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="public/js/masonry.pkgd.min.js"></script>
</body>
</html>