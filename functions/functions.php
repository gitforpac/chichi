<?php

function hash($password)
{
	$options = [
	    'cost' => 12,
	];

	return password_hash($password, PASSWORD_BCRYPT, $options);
}

function check_password($hashed,$password)
{
	if (password_verify($password, $hashed)) {
    	return true;
	} else {
	    return false;
	}
}


?>