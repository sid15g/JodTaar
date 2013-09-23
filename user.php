<?php

	error_reporting(0);
	include('php/main-functions.php');

	session_start();
	
	$exist = redirect( 'user' );
	
	if( $exist == 'true' );	
	else
		header('Location: index.php');
	
	
	$data = fetch_json_data( NULL , NULL );
	$UD = json_decode($data);	
	$_fullName = $UD->{'full_name'};
	
	$UID = fetch_user_id( $_SESSION['user'] );
	$img = 'data/user_pics/'.$UID.'.png';
	$_img = $img;
	
	$data = fetch_json_data( NULL , $_GET['name'] );
	
	if( !empty($_GET['name']) && !empty($data) )			{
	
		$uname = $_GET['name'];
	
		$data = fetch_json_data( NULL , $uname );
		$UD = json_decode($data);
		
		$data = fetch_json_data( 'users' , $uname );
		$PD = json_decode($data);

		$data = fetch_json_data( 'log_details' , $uname );
		$LD = json_decode($data);		
		
		$UID = fetch_user_id( $uname );
		$img = 'data/user_pics/'.$UID.'.png';
	
	}//End Of If	
	else	{
	
		$data = fetch_json_data( 'users' , NULL );
		$PD = json_decode($data);

		$data = fetch_json_data( 'log_details' , NULL );
		$LD = json_decode($data);		
		
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- -----All the Display Settings are According to Firefox Web Browser----- -->
<head oncontextmenu="return false">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="shortcut icon" href="images/fav_icon.png" />
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	
	<title>Home Page</title>
	
	<link rel="stylesheet" type="text/css" href="css/user.css" />
	
</head>

<body oncontextmenu="return false">
<div id="wrapper">

	<div id="header">
	
		<div id="logout">
			
			<div id="nav">

				<span class="tab" id="oth">
					<label>
						<a href="home.php">Home</a>
					</label>
				</span>
				<span class="tab" id="present_tab">
					<label>
						<a href="user.php"><?php print $_fullName; ?></a>
					</label>
				</span>				
			
				<span id="darrow" title="Click Here"> 						
						<img src="images/darrow.png" alt="Click Here" height="50px" width="10px"/>					
				</span>
				
			</div>		
			
			<div id="list">
			
				<div id="ul_list">
				
					<img src="<?php echo $_img; ?>" alt="profile pic" height="75px" width="75px" />
				
					<ul>
						
						<li><a href="user.php"><?php print $_fullName; ?></a></li>				
						<li><a href="">Account Settings</a></li>					
						<li><a href="php/logout.php">Logout</a></li>
					
					</ul>
				
				</div>
				
				<div id="jodtaar">
					
					www.<em>jod</em><b>Taar</b>.com
				
				</div>
			
			</div>
					
		</div>
		
		<?php
		
			include('contents/header_parts.php');
		
		?>
		
	</div>

	<div id="container">

		<?php
		
			//---------User_Acc------------------//
			if( $_GET['acc']==NULL )
				include('contents/user_acc.php');
			else
				include('contents/edit_profile.php');
				
		?>
		
		<div id="contents">
			
			<div id="status">
			
				<?php
				
					if( empty($_GET['name']) )
						echo '<h1>Wat\'s Going On!</h1>';
					else
						echo '<h1>Wat\'s <em>'.$_GET['name'].'</em> Doing!</h1>';
				?>
				
				<hr/>
				<div class="status_msg">  
					<span class="user_pic"> <img src="images/users/nopicture.png" alt="username" height="100%" width="100%"/> </span>					
					<h2>
						<div class="edit_del" title="Edit/Delete">
							<ul>
								<li>Edit</li>
								<li>Delete</li>
							</ul>
						</div>
						<span class="post">  <label class="user_name">Siddhant Goenka</label> shared </span> 
					</h2>
					<p class="message">Message</p>
					<div class="comment">	
						<button> Comment </button>		
						<div class="com_box">
							<textarea></textarea>
							<input type="submit" value="Comment" disabled="true"/>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				
				<div class="status_msg">  
					<span class="user_pic"> <img src="images/users/nopicture.png" alt="username" height="100%" width="100%"/> </span>					
					<h2>
						<div class="edit_del" title="Edit/Delete">
							<ul>
								<li>Edit</li>
								<li>Delete</li>
							</ul>
						</div>
						<span class="post">  <label class="user_name">Siddhant Goenka</label> shared </span> 
					</h2>
					<p class="message">Message</p>
					<div class="comment">	
						<button> Comment </button>		
						<div class="com_box">
							<textarea></textarea>
							<input type="submit" value="Comment" disabled="true"/>
							<div class="clear"></div>
						</div>
					</div>
				</div>

				<div class="status_msg">  
					<span class="user_pic"> <img src="images/users/nopicture.png" alt="username" height="100%" width="100%"/> </span>					
					<h2>
						<div class="edit_del" title="Edit/Delete">
							<ul>
								<li>Edit</li>
								<li>Delete</li>
							</ul>
						</div>
						<span class="post">  <label class="user_name">Siddhant Goenka</label> shared </span> 
					</h2>
					<p class="message">Message</p>
					<div class="comment">	
						<button> Comment </button>		
						<div class="com_box">
							<textarea></textarea>
							<input type="submit" value="Comment" disabled="true"/>
							<div class="clear"></div>
						</div>
					</div>
				</div>

				<div class="status_msg">  
					<span class="user_pic"> <img src="images/users/nopicture.png" alt="username" height="100%" width="100%"/> </span>					
					<h2>
						<div class="edit_del" title="Edit/Delete">
							<ul>
								<li>Edit</li>
								<li>Delete</li>
							</ul>
						</div>
						<span class="post">  <label class="user_name">Siddhant Goenka</label> shared </span> 
					</h2>
					<p class="message">Message</p>
					<div class="comment">	
						<button> Comment </button>		
						<div class="com_box">
							<textarea></textarea>
							<input type="submit" value="Comment" disabled="true"/>
							<div class="clear"></div>
						</div>
					</div>
				</div>

				<div class="status_msg">  
					<span class="user_pic"> <img src="images/users/nopicture.png" alt="username" height="100%" width="100%"/> </span>					
					<h2>
						<div class="edit_del" title="Edit/Delete">
							<ul>
								<li>Edit</li>
								<li>Delete</li>
							</ul>
						</div>
						<span class="post">  <label class="user_name">Siddhant Goenka</label> shared </span> 
					</h2>
					<p class="message">Message</p>
					<div class="comment">	
						<button> Comment </button>		
						<div class="com_box">
							<textarea></textarea>
							<input type="submit" value="Comment" disabled="true"/>
							<div class="clear"></div>
						</div>
					</div>
				</div>			
				<div class="more"></div>
			
			</div>
		
		</div>
		<div id="sidebar">	
	
			<?php
			
				if( empty($_GET['name']) )		{
			
					include('contents/ToLinks.php');
			
					echo '<div id="intrst" class="Listee" >';
					echo '<h2>Friends Suggestions</h2>';
					
					include('contents/suggestion.php');
						
					echo '</div>';
				
				}//End Of If
				else
					include('contents/frndList.php');
				
			?>
			
		</div>
		<div class="clear"></div>
		
	</div>
	
	<div id="footer">
	
		<p> Copyright © 2012. All Rights Reserved. <br/> Designed & Developed By <em>Siddhant Goenka</em>.</p>
	
	</div>
	
</div>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<script src="js/user.js" type="text/javascript"></script>

</body>
</html>