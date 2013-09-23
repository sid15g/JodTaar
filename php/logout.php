<?php

	error_reporting(0);
	
	session_start();
	
	$_SESSION['user']= NULL;
	
	session_destroy();
	
	header('Location: ../index.php');

?>