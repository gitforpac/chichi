<?php

require 'functions/sessions.php';

session_destroy();

redirect('login.php');

?>