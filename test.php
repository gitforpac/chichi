

<?php

require 'functions/sessions.php';
require 'functions/crud.php';
require 'functions/functions.php';

$user = getwhere('*','users','uid = 232');
var_dump($user);
?>