<?php
require_once('register.php');
require_once('db_connect.php');

//	create a new register object to attempt user registration
$register = new Register($db, $_POST['username'], $_POST['password'], $_POST['password_confirm']);

if ($register->messages == 'Success!') {	//	if register is successful redirect to login page
	header('Location: login_check.php');
} else {	//	else if register unsucessful redirect to registration page with errors
	if(!isset($_SESSION)) session_start();
	$_SESSION['register_errors'] = $register->errors;
	header('Location: registration_guest.php');
}
?>