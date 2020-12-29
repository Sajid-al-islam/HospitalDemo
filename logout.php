<?php
	session_start();
	require_once('class/user.php');
		$user = new User;
		$user->logout();	
?>
