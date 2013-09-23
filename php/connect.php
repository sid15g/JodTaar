<?php

	$host ="localhost";
	$user = "Sid";
	$password = "PassworD";
	$db="jodtaar";

	$connect = mysql_connect($host, $user, $password);

	if (!$connect) {
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db($db,$connect);


	$login = "users";
	$profile = "profile";
	$friends = "friends";
	$friend_request = "friend_request";
	$posts = "posts";
	$msgs = "messages";
	$log_details = "log_details";

?>
