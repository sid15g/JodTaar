<?php

	error_reporting(0);
	
	include('../main-functions.php');
	
	$data = fetch_json_data( NULL , "admin" );

	echo $data;

?>