<?php
require_once('auth.php');
Auth::logout();	//	end session log user out return to index
header('Location: index.php');
?>