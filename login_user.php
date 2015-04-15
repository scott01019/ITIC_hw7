<?php
require_once('login.php');
require_once('db_connect.php');
require_once('functions.php');
require_once('auth.php');

//	create a new login object to attempt login
$login = new Login($db, $_POST['username'], $_POST['password']);

if ($login->messages == 'Success!' && Auth::user()) {	//	if succesful login the user and return him to user index
	header('Location: postcards.php');
} else {	//	else report errors and return back to guest login page
	if(!isset($_SESSION)) session_start();
	$_SESSION['login_errors'] = $login->errors;
	header('Location: login_guest.php');
}
?>