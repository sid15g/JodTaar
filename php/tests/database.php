<?php

	error_reporting(0);
//	include('../connect.php');
	
//	$sql= "CREATE TABLE IF NOT EXISTS `messages`( `MID` bigint(20) NOT NULL, `from` bigint(20) NOT NULL , `to` bigint(20) NOT NULL , `status` int(10) NOT NULL, `msg` text, PRIMARY KEY(`MID`), FOREIGN KEY (`from`) REFERENCES `users`(`ID`), FOREIGN KEY (`to`) REFERENCES `users`(`ID`) );";

//	$sql= "CREATE TABLE IF NOT EXISTS `jobs`( `JID` bigint(20) NOT NULL, `ID` bigint(20) NOT NULL , `title` text NOT NULL , `post` text NOT NULL, `location` text NOT NULL, `salary` bigint(20) NOT NULL, `desc` text, PRIMARY KEY(`JID`), FOREIGN KEY (`ID`) REFERENCES `users`(`ID`) );";

//	$sql= "CREATE TABLE IF NOT EXISTS `posts`( `PID` bigint(20) NOT NULL, `ID` bigint(20) NOT NULL , `type` text NOT NULL , `REF` bigint(20) NOT NULL, PRIMARY KEY(`PID`), FOREIGN KEY (`ID`) REFERENCES `users`(`ID`), KEY (`REF`) );";

//	mysql_query( $sql );
	
	
//	$sql= "CREATE TABLE IF NOT EXISTS `comments`( `CID` bigint(20) NOT NULL, `PID` bigint(20) NOT NULL , `ID` bigint(20) NOT NULL ,`det` text NOT NULL, PRIMARY KEY(`CID`), FOREIGN KEY (`PID`) REFERENCES `posts`(`PID`), FOREIGN KEY (`ID`) REFERENCES `users`(`ID`) );";
	
	$sql= "CREATE TABLE IF NOT EXISTS `remds`( `RID` bigint(20) NOT NULL, `ID` bigint(20) NOT NULL , `time` date NOT NULL ,`det` text NOT NULL, PRIMARY KEY(`RID`), FOREIGN KEY (`ID`) REFERENCES `users`(`ID`) );";	
	
//	mysql_query( $sql );	
	
?>