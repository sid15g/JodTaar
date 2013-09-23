<?php

	error_reporting(0);
	include('php/main-functions.php');
	
	session_start();
	
	$exist = redirect( 'reg_json' );
	
	if( $exist == 'true' )
		$details = json_decode( $_SESSION['reg_json'] );
	else
		header('Location: index.php');
		
	if( !empty($_GET['return']) )
		$pro_pic = "data/user_pics/".$_GET['return'].".png";
	else
		$pro_pic = "images/nopicture.png";
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- -----All the Display Settings are According to Firefox Web Browser----- -->
<head oncontextmenu="return false">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="shortcut icon" href="images/fav_icon.png" />
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	
	<title>Registration</title>
	
	<link rel="stylesheet" type="text/css" href="css/index.css" />
	
	<script src="js/index.js"> </script>
	
</head>

<body oncontextmenu="return false">
<div id="wrapper">

	<div id="header">
	
		<div id="name">			<a href="index.php"><label><em>jod</em><strong>Taar</strong></label></a>		</div>
		
		<div class="clear"></div>
		
	</div>

	<div id="container">
		
		<div id="profile_pic">
			
			<div id="confirmed">
				<p id="wel"> Welcome <em><?php echo $details->{'username'}; ?></em>,</p>
				<p id="note"> Complete your profile with profile picture... </p>
			</div>
			<hr/>
			<div id="upload_pic">
			<form method="post" enctype="multipart/form-data" action="php/upload_propic.php" >
				
				<div id="pro_pic">
					<img src="<?php echo $pro_pic; ?>" alt="Profile Pic" height="100%" width="100%" />
				</div>
				<div id="field">
					<p>Profile Pic</p>
					<input type="file" name="upl" id="upl" />
				</div>	

				<div class="clear"></div>
				
				<div id="sub">		<input type="submit" value="Upload" />	</div>	
				<div id="skip">		<a href="<?php echo 'php/nopic_upl.php?id='.$details->{'username'}; ?>">Skip</a>	</div>	
				
				<div class="clear"></div>
				
			</form>
			</div>
		</div>

	</div>
	
	<div id="copyright">
		
		<p>Copyright 2012@ <label><em>jod</em><b>Taar</b></label> </p>
	
	</div>
	
</div>
</body>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/oth.js" type="text/javascript"></script>

</html>