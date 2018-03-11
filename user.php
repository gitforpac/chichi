<?php
require 'functions/sessions.php';
require 'functions/crud.php';
require 'functions/functions.php';

if(!isset($_GET['user'])) {
  redirect('index.php');
} else {
  $user_id = $_GET['user'];
  $user = getwhere('*','users','uid = ' . $user_id);
  if(empty($user)) {
    redirect('index.php');
  } else {
    $uploads = getwhere('*','uploads','user_id = ' . $user_id);
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $user[0]->name; ?></title>
	<!-- css styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body>

<!-- navbar -->

<nav class="navbar navbar-expand-lg bg-white" id="pnav">
  <a class="navbar-brand" href="index.html"><img width="200" height="60" src="public/img/log39.png"></a>
  <ul class="navbar-nav ml-auto">
  	<li class="navbar-item">
      <a href="/about-us" class="nav-link">Explore</a>
    </li>
    <li class="navbar-item">
      <a href="aboutus.php" class="nav-link">Login</a>
    </li>
    <li class="navbar-item">
      <a href="/theteam" class="nav-link b-bt">Join Free</a>
    </li>
    <!-- @if(Auth::guard('user')->check())
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="/storage/user_avatars/{{Auth::guard('user')->user()->avatar}}" class="da">
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
        <a class="dropdown-item" href="/adventurer/{{Auth::guard('user')->id()}}/edit"><i class="fa fa-user"></i> &nbsp;Edit Profile</a>
         <a class="dropdown-item" href="/myadventures"><i class="fa fa-address-book" aria-hidden="true"></i> &nbsp;Booked Adventures</a>
        <a class="dropdown-item" href="#"><i class="fa fa-cog"></i> &nbsp;Account Settings</a>
        <a href="{{ route('logout') }}" class="dropdown-item" 
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out"></i> Logout
        </a>
        <form id="logout-form" action="/logout" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      </div>
    </li>
     @else
     <li class="navbar-item">
      <a href="javascript:void(0)" class="nav-link" data-toggle="modal" data-target="#register-form">Sign Up</a>
    </li>
    <li class="navbar-item">
      <a href="javascript:void(0)" class="nav-link" data-toggle="modal" data-target="#login-form">Login In</a>
    </li>
    @endif -->
  </ul>
</nav>

<div class="container user-details">
	<div class="row" style="position: relative;top: 20px;">
		<div class="col-md-2 avatar-wrapper">
			<img class="user-avatar" src="public/img/user.png">
		</div>
		<div class="col-md-6 user-info">
			<span><h3 class="user-name"><?php echo $user[0]->name; ?></h3></span>
			<span>
				<form method="post" id="upload_form" action="upload.php" enctype="multipart/form-data">
					<span class="upload-btn text-white user-u-b">
						<input type="file" id="upload_image" name="upload_image"><i class="fas fa-camera-retro"></i> &nbsp;Upload+
					</span>
				</form>
			</span>
			<p style="color: #999; font-size: 14px;"><i class="fas fa-map-marker-alt ee"></i> <?php echo $user[0]->address; ?></p>
			<p>Translator, content creator, and hobby photographer. Join me on Instagram (@asodiuesdiari). </p>
		</div>
	</div>
</div>

<!-- display photos -->
<div class="container-fluid user-uploads ep"><h5 class="text-header"><i class="fas fa-camera-retro"></i> User Uploads </h5></div>

<div class="container c-extend">
	<div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 10 }' style="min-height: 500px;">
    <?php
      if(empty($uploads)) {
        echo '<p style="color:#3f1502;">User has no uploads</p>';
      } else {
      foreach($uploads as $d) {
    ?>
	  <div class="grid-item"><img class="image-fit" src="public/uploads/<?php echo $d->file_name; ?>"></div>
    <?php
        }
     }
    ?>
	</div>
</div>

<footer>
  <div class="container">
    <div class="row" style="margin-top: -45px;">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter"> Maniniyot</div>
        <p>
        	With a huge library of photos and thousands more being added each day, chances are we’ve got a photo for you.
        	<br>
        	<br>
			Find inspiration in the new photos we hand-select every day or use our search to find and download exactly what you’re looking for.
        </p>
        
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
        <ul class="footer-ul">
          <li><a href="#"> Home</a></li>
          <li><a href="#"> About us</a></li>
          <li><a href="#"> Contact us</a></li>
        </ul>
      </div>
       <div class="col-md-3 col-sm-6 paddingtop-bottom social-footer" style="font-size: 30px;">
        <h6 class="heading7">Social Media</h6>
        <span title="Facebook"><i class="fab fa-facebook"></i></span>
        <span><i class="fab fa-instagram"></i></span>
        <span><i class="fab fa-twitter"></i></span>
        <span><i class="fab fa-google-plus-square"></i></span>
      </div>
    </div>
  </div>
</footer>

<!-- javascript -->
<script type="text/javascript" src="public/js/app.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="public/js/masonry.pkgd.min.js"></script>
</body>
</html>