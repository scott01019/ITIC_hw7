<?php
require_once('auth.php');
require_once('functions.php');

//	start a session on first visit to webpage
if (!isset($_SESSION)) {
session_start();
$_SESSION['id'] = sha1(getSalt() . $_SERVER['REQUEST_TIME']);	//	set a session ID
}

//	if user is guest direct to guest index
if (Auth::guest()) {
	header('Location: index_guest.php');
} else if (Auth::user()) {	//	if user is logged in direct to user index
	header('Location: postcards.php');
}
?>