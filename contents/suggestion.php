<?php

	error_reporting(0);
	session_start();
	include('php/connect.php');
//	include('../php/connect.php');

	$username = $_SESSION['user'];
//	$username = "test";
	
	$sql = 'SELECT `FID` FROM `'.$friends.'` WHERE `ID` IN ( SELECT `ID` FROM `'.$login.'` WHERE `username`="'.$username.'" );';
	$data = mysql_query($sql);
	
	$f = NULL;
	$count = 0;
	
	while( $val = mysql_fetch_array($data) )		{
	
		$f .= $val['FID'].'/::/';
		$count++;

	}
	
	$arr = explode( "/::/" , $f );
	
	$sql = 'CREATE TABLE IF NOT EXISTS `temp`( ID int(11) NOT NULL );';
	mysql_query($sql);
	
	foreach( $arr as $x )	{
		
		if( !empty($x) )		{
			
			$sql = 'INSERT INTO `temp`(ID) VALUES('.$x.');';
			mysql_query($sql);
		
		}//End Of IF
	}//End Of Foreach

	if( $count<=3 )	{
	
		$sql = 'SELECT `ID` FROM `'.$login.'` WHERE `ID` NOT IN ( SELECT `ID` FROM `temp` ) AND `ID` NOT IN ( SELECT `ID` FROM `'.$login.'` WHERE `username`="'.$username.'" );';
		$data = mysql_query( $sql );
		
		$j=1;
		$arry = array();
		while( $val = mysql_fetch_array($data) )	{
		
			$arry[$j] = $val['ID'];
			$j++;
		
		}//End Of While Loop

//		print_r( $arry );
		
		mt_srand( mktime() );

		for( $i=0; $i<3; $i++ )			{
			$arr[$count] = $arry[ mt_rand( 1, $j-1 ) ];
			$count++;
		}
		
//		print_r( $arr );
		
	}//End Of If	

	$f = NULL;
	
	for( $j=1; $j<=3; $j++ )		{
	
		$id = mt_rand( 0 , $count );
		$f .= $arr[$id].'/::/';

	}//End Of For Loop
	
	$sql = 'DROP TABLE `temp`;';
	mysql_query($sql);	
	
//	echo "<br/>".$f;
	
	$arr = NULL;
	$arr = explode( "/::/" , $f );
	
	for( $j=0 ; $j<3 ; $j++ )	{
	
		$id = $arr[$j];
		
		$sql = 'SELECT * FROM `'.$profile.'` WHERE `ID`='.$id.';';
		$data = mysql_query($sql);
		$info = mysql_fetch_array($data);
		
		$div = '<div class="suggestion">
					<span class="user_pic">
						<img src="data/user_pics/'.$id.'.png" alt="Pic" width="100%" height="100%" />
					</span>
					<span class="follow_user">
						<button user="'.$id.'">Jod-Taar</button>
					</span>
					<span class="user_name">
						<p>'.$info['full_name'].'</p>
						<label>'.$info['city'].'</label>
					</span>
				</div>';
	
		echo $div;
	
	}//End Of Loop
?>

<!--
				<div class="suggestion">
					<span class="user_pic">
						<img src="data/user_pics/nopicture.png" alt="Username Pic" height="100%" width="100%"/>
					</span>
					<span class="follow_user">
						<button>Jod-Taar</button>
					</span>
					<span class="user_name">
						<p>Siddhant Goenka</p>
						<label>Jaipur</label>
					</span>
				</div>		
-->