<?php

session_start();

function exists($name) {
	return (isset($_SESSION[$name])) ? true : false;
}

function put($name,$value) {
	return $_SESSION[$name] = $value;
}

function get_session($name) {
	return $_SESSION[$name];
}

function delete_session($name) {
	if(get_session($name)) {
		unset($_SESSION[$name]);
	}
}

function flash($name,$string='') {
	if (exists($name)) {
		$session = get_session($name);
		delete_session($name);
		return $session;
	} else {
		put($name,$string);
	}

}



?>
