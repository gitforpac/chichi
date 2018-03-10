<?php

$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$salt = Hash::salt(32);
$clientdata = array (
					'username' => $username,
					'firstname' => $firstname,
					'lastname' => $lastname,
					'email' => $email,
					'contact' => $contact,
					'password' => Hash::make($password,$salt),
					'salt' => $salt
				);


$register = $client->register($clientdata);
if ($register == true) {
	echo 'Creating Account Successful, Now You can Log in!';
} else {
	echo 'Error Creating Account, Please Try Again';
}

?>