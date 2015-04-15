<?php
require_once('auth.php');

if (!isset($_SESSION)) session_start();
if (!Auth::user()) {	//	check to see if the user is logged in (if not redirect to index)
    header('Location: index.php');
}
?>