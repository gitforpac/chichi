<?php
require 'functions/sessions.php';
require 'functions/crud.php';
$data = get("SELECT * FROM uploads LEFT JOIN users ON uploads.user_id = users.uid");
?>
<!DOCTYPE html>
<html>
<head>
	<title>unplash like</title>
	<!-- css styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body>

<!-- navbar -->
<?php
  include 'includes/nav.php';
?>

<!-- first div - jumbotron -->

<div class="jumbotron jumbotron-fluid j1">
  <div class="container">
    <h1 class="text-light">Maniniyot</h1>
    <p class="lead text-light">
    	Beautiful, free photos. Gifted by the world’s most generous community of photographers.
	</p>
	<form id="search-form">
	  <div class="form-group e1">
	    <input type="text" class="form-control sei" id="findImage" name="findimage" placeholder="Nature, City, Nudes" autofocus>
	    <small id="emailHelp" class="form-text text-light">Trending Searches: business, computer, nature, lovehouse</small>
	    <button type="submit" class="btn search-button">Search</button>
	  </div>
	</form>
  </div>
</div>

<!-- display photos -->

<div class="container-fluid"><h5 class="text-header"> Beautiful, free photos </h5></div>

<div class="container c-extend">
	<div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 10 }'>
		<?php
			foreach($data as $d) {
		?>
	    <div class="grid-item" data-author="<?php echo $d->name; ?>" data-userid="<?php echo $d->uid; ?>">
	      <div class="overlay"></div>
	       <img class="image-fit" src="public/uploads/<?php echo $d->file_name; ?>">
	    </div>
	    <?php
			}
	    ?>
	</div>
</div>

<!-- javascript -->
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="public/js/masonry.pkgd.min.js"></script>
<script type="text/javascript">
  $(function(){
    $('div.grid div.grid-item').on('mouseenter',function(){
      var author = $(this).data('author');
      var userid = $(this).data('userid');
      $(this).children('div.overlay').animate({opacity:1},60);
      $(this).children('div.overlay').html('<content style="position: absolute;bottom: 10px;color#fff;"><span><img class="user-avatar-overlay" src="public/img/user.png"></span><a style="color:#f9f9f9;position:relative;top:4px;" href="user.php?user='+ userid + '">' + author + '</a></content>');
    }).on('mouseleave',function(){
      $(this).children('div.overlay').animate({opacity:0},100);
    });
  });
</script>
</body>
</html>