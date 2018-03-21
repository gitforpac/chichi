<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-white" id="pnav">
  <a class="navbar-brand" href="index.html"><img width="200" height="60" src="public/img/log39.png"></a>
  <ul class="navbar-nav ml-auto">
  	<li class="navbar-item">
      <a href="index.php" class="nav-link">Explore</a>
    </li>
    <?php if(exists('uid')) { ?>
      <li class="navbar-item">
        <a href="user.php?user=<?php echo get_session('uid') ?>" class="nav-link b-bt">Profile</a>
      </li>
      <li class="navbar-item">
        <a href="logout.php" class="nav-link b-bt">Logout</a>
      </li>
    <?php } else { ?>
    <li class="navbar-item">
      <a href="login.php" class="nav-link">Login</a>
    </li>
    <li class="navbar-item">
      <a href="create-account.php" class="nav-link b-bt">Join Free</a>
    </li>
    <?php } ?>
  </ul>
</nav>