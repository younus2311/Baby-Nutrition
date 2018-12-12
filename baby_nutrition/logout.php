<?php 
	
	session_start();
	
	session_unset();
	session_destroy();
	
	if(!$_SESSION["username"]) {
		header("location: login.php");
	}	
	
?>