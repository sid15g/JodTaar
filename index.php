<?php

	error_reporting(0);
	include('php/main-functions.php');
	
	session_start();
	
	$exist = redirect( 'user' );
	
	if( $exist == 'true' )
		header('Location: home.php');
	else;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- -----All the Display Settings are According to Firefox Web Browser----- -->
<head oncontextmenu="return false">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="shortcut icon" href="images/fav_icon.png" />
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	
	<title>Welcome</title>
	
	<link rel="stylesheet" type="text/css" href="css/index.css" />

	<script src="js/index.js"></script>	
	
</head>

<body oncontextmenu="return false">
<div id="wrapper">

	<div id="header">
	
		<div id="name">			<a href="index.php"><label><em>jod</em><strong>Taar</strong></label></a>		</div>
		
		<div id="login">
		
			<form method="post" action="php/login.php">
				
				<div class="field">
					<p>Username</p>
					<input type="text" name="inp_user" class="brdr" id="user" />
				</div>
				<div class="field">
					<p>Password</p>
					<input type="password" name="inp_pass" class="brdr" id="pass" />
				</div>
				<div class="field">
					<input type="submit" value="Login" id="sub_button" />
				</div>
			</form>
		
		</div>
		<div class="clear"></div>
		
	</div>

	<div id="container">
		
		<div id="front_pic">
			<div id="kid_pic">
				<img src="images/kids.jpg" alt="Kids" width="100%" height="100%"/>
			</div>
		</div>
		<?php
			
			return_false( $_GET['return'] );
			
		?>			
		<div class="clear"></div>
	
	</div>
	
	<div id="copyright">
		
		<p>Copyright 2012@ <label><em>jod</em><b>Taar</b></label> </p>
	
	</div>
	
</div>
</body>
</html>