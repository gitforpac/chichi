<?php

session_start();

require 'functions/crud.php';
require 'functions/functions.php';
require 'functions/sessions.php';

if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['address']) || empty($_POST['password'])) {

	$msg = '*All fields are required';

	flash("register_error", $msg);
	redirect('create-account.php');

} else {

	$name = $_POST['first_name'] . ' ' . $_POST['last_name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$password = $_POST['password'];

	$data = [
				'name' => $name,
				'email' => $email,
				'address' => $address,
				'password' => hashed_password($password),
			];

	$registered = insert('users',$data);

	if($registered) {

		$msg = 'You can now login to your account';

		flash("registered", $msg);
		redirect('login.php');

	} else {

		$msg = 'Error Creating Account';

		flash("register_error", $msg);
		redirect('create-account.php');
	}

}


?>