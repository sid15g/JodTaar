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

	$data = fetch_json_data( 'log_details' , NULL );
	$LD = json_decode($data);	
	
	$UID = fetch_user_id( $_SESSION['user'] );
	$img = 'data/user_pics/'.$UID.'.png';
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- -----All the Display Settings are According to Firefox Web Browser----- -->
<head oncontextmenu="return false">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="shortcut icon" href="images/fav_icon.png" />
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	
	<title>Home Page</title>
	
	<link rel="stylesheet" type="text/css" href="css/home.css" />
	
</head>

<body oncontextmenu="return false">
<div id="wrapper">

	<div id="header">
	
		<div id="logout">
			
			<div id="nav">

				<span class="tab" id="present_tab">
					<label>
						<a href="home.php">Home</a>
					</label>
				</span>
				<span class="tab" id="oth">
					<label>
						<a href="user.php"><?php print $UD->{'full_name'}; ?></a>
					</label>
				</span>				
			
				<span id="darrow" title="Click Here"> 						
						<img src="images/darrow.png" alt="Click Here" height="50px" width="10px"/>					
				</span>
				
			</div>		
			
			<div id="list">
			
				<div id="ul_list">
				
					<img src="<?php echo $img; ?>" alt="profile pic" height="75px" width="75px" />
				
					<ul>
						
						<li><a href="user.php"><?php print $UD->{'full_name'}; ?></a></li>				
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
		
		<div id="contents">
		
			<div id="status">
				
				<div id="user_status">
					
					<form method="post" action="php/status_update.php?rd=home">
					<div id="top_show">
					
						<img src="<?php print $img; ?>" alt="profile pic" height="80px" width="75px"/>
						<label><?php print $UD->{'full_name'}; ?></label>
						<textarea name="status_update" id="status_update"> </textarea>
						
						<div class="clear"></div>
						
					</div>
					<div id="post_update">
				
						<input type="submit" value="Post" />
						<div class="clear"></div>
						
					</div>
					</form>
				
				</div>
				
				<div class="status_show" id="s_s"> 
					<p><?php echo $LD->{'user_status'}; ?></p>
				</div>
				
			</div>	

			<div id="recent_act">
			
				<h1>Wat's Going On! </h1>
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
			
			<div id="new_job" class="modal_box" >
			
				<div id="head">  

					<span id="job_det_head" class="heading" >Job Details</span>
					<button class="close_but" onclick="close_win('new_job');">X</button>

				</div>

				<div id="data_form">

					<form method="post" action="php/" >

						<div class="form_field">
							<p>Job Title</p>
							<input type="text" name="job_title">
						</div>
						<div class="form_field">
							<p>Post Required</p>
							<input type="text" name="job_post">
						</div>
						<div class="form_field">
							<p>Location</p>
							<input type="text" name="job_loc">
						</div>
						<div class="form_field">
							<p>Salary</p>
							<input type="text" name="job_salary">
						</div>
						<div class="form_field">
							<p>Description</p>
							<textarea name="job_details" value=""></textarea>
						</div>
						<div id="form_sub">
							<button>Post</button>
						</div>

					</form>

				</div>
				
			</div>	

			<div id="new_rem" class="modal_box" >
			
				<div id="head">  

					<span id="rem_det_head" class="heading" >Reminder Details</span>
					<button class="close_but" onclick="close_win('new_rem');">X</button>

				</div>				
				
				<div id="rem_form">
				<form method="post" action="php/" >	
					<div class="form_field">
						<p>Title</p>
						<input type="text" name="rem_title" />
					</div>
					<div class="form_field">
						<p>Time</p>
						<input type="date" name="rem_time" />
					</div>
					<div class="form_field">
						<p>Description</p>
						<textarea name="rem_desc" value=""></textarea>
					</div>
					<div id="form_sub">
						<button>Add</button>
					</div>
				</form>	
				</div>
				
			</div>
		
			<div id="send_new_msg" class="modal_box" >
			
				<div id="head">  

					<span id="new_msg_head" class="heading" >Message</span>
					<button class="close_but" onclick="close_win('send_new_msg');">X</button>

				</div>	

				<div id="msg_form">
				<form method="post" action="php/" >		
					
					<div class="form_field">
						<p>To</p>
						<input type="text" name="sendTo" />
					</div>
					<div class="form_field">
						<p>Message</p>
						<textarea id="msg" name="msg" ></textarea>
					</div>					
					
				</form>
				</div>
			
			</div>		
		
		</div>	
		
		<!-- =====SIDEBAR===== -->
		<div id="sidebar">	

			<div id="reminders">
			
				<h2 title="Reminders: Click to add new" onclick="open_win('new_rem');">
					<span class="head_img"> <img src="images/reminder.png" alt="Reminder Bell" height="100%" width="49%"/> </span>
					<label>Add Reminders</label>
				</h2>
				
				<div class="rems">
					<label>Make Site :P</label>
					<label class="DateTime">@2300 hrs</label>
				</div>
				
			</div>
			<hr id="sideBreak" />
			<div id="opp">
			
				<h2 title="Opportunities: Click to add new" onclick="open_win('new_job');">
					<span class="head_img"> <img src="images/jobs.png" alt="Jobs" height="100%" width="100%"/> </span>
					<label>Share Job Opportunities</label>
				</h2>
				<div class="jobpost"> 
				
					<span class="user_pic"> <img src="images/users/nopicture.png" alt="username" height="100%" width="100%"/> </span>
					<h2> <span class="post"> <label class="user_name">Siddhant Goenka</label> posted	</span>	</h2>
					<h3> 
						<label class="job_title">Job Title</label> in <label class="comp">Company</label> 
					</h3>
					<p class="details">	Details	</p>
				</div>
				<div class="jobpost"> 
				
					<h2>
						<span class="user_pic"> <img src="images/users/nopicture.png" alt="username" height="100%" width="100%"/> </span>
						<span class="post"> <label class="user_name">Siddhant Goenka</label> posted	</span>
					</h2>
					<h3>	
						<span class="job_title">Job Title</span> in <span class="comp">Company</span>	
					</h3>
					<p class="details">	Details	</p>
				</div>
				<div class="jobpost"> 
				
					<h2>
						<span class="user_pic"> <img src="images/users/nopicture.png" alt="username" height="100%" width="100%"/> </span>
						<span class="post"> <label class="user_name">Siddhant Goenka</label> posted	</span>
					</h2>
					<h3>	
						<span class="job_title">Job Title</span> in <span class="comp">Company</span>	
					</h3>
					<p class="details">	Details	</p>
				</div>
				<div class="jobpost"> 
				
					<h2>
						<span class="user_pic"> <img src="images/users/nopicture.png" alt="username" height="100%" width="100%"/> </span>
						<span class="post"> <label class="user_name">Siddhant Goenka</label> posted	</span>
					</h2>
					<h3>	
						<span class="job_title">Job Title</span> in <span class="comp">Company</span>	
					</h3>
					<p class="details">	Details	</p>
				</div>				
				<div class="jobpost"> 
				
					<h2>
						<span class="user_pic"> <img src="images/users/nopicture.png" alt="username" height="100%" width="100%"/> </span>
						<span class="post"> <label class="user_name">Siddhant Goenka</label> posted	</span>
					</h2>
					<h3>	
						<span class="job_title">Job Title</span> in <span class="comp">Company</span>	
					</h3>
					<p class="details">	Details	</p>
				</div>	
				<div class="jobpost"> 
				
					<h2>
						<span class="user_pic"> <img src="images/users/nopicture.png" alt="username" height="100%" width="100%"/> </span>
						<span class="post"> <label class="user_name">Siddhant Goenka</label> posted	</span>
					</h2>
					<h3>	
						<span class="job_title">Job Title</span> in <span class="comp">Company</span>	
					</h3>
					<p class="details">	Details	</p>
				</div>	
				<div class="jobpost"> 
				
					<h2>
						<span class="user_pic"> <img src="images/users/nopicture.png" alt="username" height="100%" width="100%"/> </span>
						<span class="post"> <label class="user_name">Siddhant Goenka</label> posted	</span>
					</h2>
					<h3>	
						<span class="job_title">Job Title</span> in <span class="comp">Company</span>	
					</h3>
					<p class="details">	Details	</p>
				</div>					
			</div>				
			
		</div>
		<div class="clear"></div>
	
	</div>

	<div id="footer">
	
		<p> Copyright © 2012. All Rights Reserved. <br/> Designed & Developed By <em>Siddhant Goenka</em>.</p>
	
	</div>
	
</div>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<script src="js/home.js" type="text/javascript"></script>

</body>
</html>