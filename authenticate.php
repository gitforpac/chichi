<?php

require 'functions/functions.php';
require 'functions/crud.php';
require 'functions/sessions.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$user = $dbcon->query($sql);

if($user->num_rows == 0) {
	flash('login','<i class="fas fa-exclamation-circle"></i> Credentials not found');
	flash('class-login','error');
	redirect('login.php');
} else {
	$row = $user->fetch_object();
	$auth = check_password($row->password,$password);

	if($auth) {
		put('uid',$row->uid);
		put('name',$row->name);
		put('email',$row->email);
		put('address',$row->address);
		redirect('index.php');
	} else {
		flash('login','<i class="fas fa-exclamation-circle"></i> Credentials not found');
		flash('class-login','error');
		redirect('login.php');
	}
}

?>