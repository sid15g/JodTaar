<?php

	error_reporting(0);
	include('main-functions.php');
	
	$id = fetch_user_id( $_GET['id'] );
	
	$user_pic = "../data/user_pics/".$id.".png";
	
	copy( "../data/user_pics/nopicture.png" , $user_pic );
	
	header('Location: ../home.php');

?>