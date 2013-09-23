<?php

	error_reporting(0);
	
	upload();
	
	function upload()	{
		
		$filename = $_FILES["upl"]["name"];
		$fname = explode(".",$filename);
		$i=0;
	
		while($fname[$i+1]!=NULL) 
			$i=$i+1;
	
		$extension=	strtolower( $fname[$i] );

		if( ($extension=="png" || $extension=="jpg" || $extension=="gif") && $_FILES["upl"]["size"] < 2048000 )		{
			
			$ID = fetch_id();
			move_uploaded_file($_FILES["upl"]["tmp_name"],"../data/user_pics/".$ID.".png");
			$ret = 'Location: ../confirm_pro.php?return='.$ID;
			header($ret);
			
		}//End Of If
		else
			header('Location: ../confirm_pro.php');
	
	}//End Of Function
	
	
	function fetch_id()	{
	
		include('connect.php');
		session_start();
		
		$json = $_SESSION['reg_json'];
		$info = json_decode( $json );
		
		$sql = 'SELECT `ID` FROM `'.$login.'` WHERE `username`="'.$info->{'username'}.'";';
		$data = mysql_query($sql);
		$result = mysql_fetch_array( $data );
		
		return $result['ID'];
	
	}//End Of Function	

?>