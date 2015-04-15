<?php
class Auth {
	public function __constructor() {
	}

	//	static function to check if a user is logged in
	public static function user() {
		if (!isset($_SESSION)) session_start();
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
			return true;
		else return false;
	}

	//	static function to check if a user is not logged in
	public static function guest() {
		if (!isset($_SESSION)) session_start();
		if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false)
			return true;
		else return false;
	}

	//	static functino to log out a user
	public static function logout() {
		if (!isset($_SESSION)) session_start();
		session_destroy();
	}
}
?>