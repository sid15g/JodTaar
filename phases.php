<?php

	error_reporting(0);
	include('php/main-functions.php');
	
	session_start();
	
	$exist = redirect( 'reg_json' );
	
	if( $exist == 'true' )
		$details = json_decode( $_SESSION['reg_json'] );
	else
		header('Location: index.php');
		
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
	
	<script src="js/phases.js"></script>
	
</head>

<body oncontextmenu="return false">
<div id="wrapper">

	<div id="header">
	
		<div id="name">			<a href="index.php"><label><em>jod</em><strong>Taar</strong></label></a>		</div>
		
		<div class="clear"></div>
		
	</div>

	<div id="container">
		
		<div id="profile_fill">
		
			<div id="profile_head">
				Registration
				<label id="marked_field">*Marked Fields are Compulsory</label>
			</div>
			<hr/>
			
			<form method="post" action="php/register_phase.php">
			<div id="old_det">
				
				<div class="reg_head">
					<p>Account Details</p>
				</div>
				<div class="reg_field">
					<p>Username</p>
					<input type="text" value="<?php echo $details->{'username'}; ?>" disabled="true"/>
				</div>
				<div class="reg_field">
					<p>Email</p>
					<input type="text" value="<?php echo $details->{'email'}; ?>" disabled="true"/>
				</div>	
				<div class="reg_field">
					<p>Mobile</p>
					<input type="number" name="phone" id="mobile"/>
				</div>					
				
			</div>
		
			<div id="new_det">
			
				<div class="reg_head">
					<p>Profile Details</p>
				</div>			
				<div class="reg_field">
					<p>Full Name*</p>
					<input type="text" name="full_name" id="fname"/>
				</div>
				<div class="reg_field" id="radio">
					<p>Sex*</p>
					<label>Male</label> <input type="radio" name="sex" value="Male" checked="true"/>
					<label>Female</label> <input type="radio" name="sex" value="Female" />
				</div>				
				<div class="reg_field">
					<p>Date Of Birth*</p>
					<select name="date" id="b_date">
						<option value="01">1</option>				<option value="02">2</option>
						<option value="03">3</option>				<option value="04">4</option>
						<option value="05">5</option>				<option value="06">6</option>
						<option value="07">7</option>				<option value="08">8</option>
						<option value="09">9</option>				<option value="10">10</option>
						<option value="11">11</option>				<option value="12">12</option>
						<option value="13">13</option>				<option value="14">14</option>
						<option value="15">15</option>				<option value="16">16</option>
						<option value="17">17</option>				<option value="18">18</option>
						<option value="19">19</option>				<option value="20">20</option>
						<option value="21">21</option>				<option value="22">22</option>
						<option value="23">23</option>				<option value="24">24</option>
						<option value="25">25</option>				<option value="26">26</option>
						<option value="27">27</option>				<option value="28">28</option>
						<option value="29">29</option>				<option value="30">30</option>
						<option value="31">31</option>						
					</select>
					<select name="month" id="b_month">
						<option value="01">January</option>				<option value="02">February</option>
						<option value="03">March</option>				<option value="04">April</option>
						<option value="05">May</option>					<option value="06">June</option>
						<option value="07">July</option>				<option value="08">August</option>
						<option value="09">September</option>			<option value="10">October</option>
						<option value="11">November</option>			<option value="12">December</option>
					</select>
					<input type="number" name="year" id="b_year" />
				</div>				
				<div class="reg_field">
					<p>City</p>
					<input type="text" name="city" id="city"/>
				</div>				
				<div class="reg_field">
					<p>Country*</p>
					<input type="text" name="country" id="country"/>
				</div>			
				
			</div>
			
			<div class="clear"></div>
			
			<div id="sub_but">
				<input type="submit" value="Register" />
			</div>
			</form>
			
		</div>
		<div class="clear"></div>
	
	</div>
	
	<div id="copyright">
		
		<p>Copyright 2012@ <label><em>jod</em><b>Taar</b></label> </p>
	
	</div>
	
</div>
</body>
</html>