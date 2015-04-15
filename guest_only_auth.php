<?php
require_once('auth.php');

//	used to verify a guest
if (!isset($_SESSION)) session_start();
if (!Auth::guest()) {
    header('Location: index.php');
}
?>