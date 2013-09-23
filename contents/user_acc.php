		<div id="user_acc">
		
			<div id="user_details">
				
				<div id="pro_pic">	<img src="<?php print $img; ?>" width="100%" height="100%" alt="Profile Pic"/>	</div>
				<div id="user_name"> 
						
					<label id="full_name"> 
						<?php print $UD->{'full_name'}; ?> 
					</label> 
					<label id="id"><?php print $PD->{'username'}; ?> </label>
					<div id="details">

						<div id="personal">
							<label class="lines"><?php print $UD->{'city'}.', '.$UD->{'country'}; ?></label>
							<label class="lines"><?php print $UD->{'sex'}; ?> </label>
						</div>
						<div id="contact">
							<label class="lines"><?php print $PD->{'email'}; ?></label>
							<label class="lines"><?php print $UD->{'phone'}; ?> </label>
						</div>
						<div class="clear"></div>
			
					</div>
					
				</div>
					
				<?php	
				
					if( empty($_GET['name']) )
						include('contents/user_status.php');
				
				?>
				
			</div>	
			
			<div id="user_more">
			
				<?php
			
					if( empty($_GET['name']) )			{
				
						echo '<div id="edit_button">';
						echo '<button onclick="window.location.href=\'user.php?acc=true\';">Edit Profile</button>';
						echo '</div>';
						echo '<span class="clear"></span>';
					
					}//End Of If
				
				?>
				
				<div class="noti">
					<p>321 Friends</p>
					<div class="show" id="frnds">					
						<div class="person">
								<div class="user_pic">
									<img src="images/nopicture.png" height="100%" width="100%"/>
								</div>
								<div class="user_name">
									<a href="#">Sid Goenka</a>
								</div>
								<div class="clear"></div>
						</div>	
						<div class="person">
								<div class="user_pic">
									<img src="images/nopicture.png" height="100%" width="100%"/>
								</div>
								<div class="user_name">
									<a href="#">Sid Goenka</a>
								</div>
								<div class="clear"></div>
						</div>	
						<div class="person">
								<div class="user_pic">
									<img src="images/nopicture.png" height="100%" width="100%"/>
								</div>
								<div class="user_name">
									<a href="#">Sid Goenka</a>
								</div>
								<div class="clear"></div>
						</div>	
						<div class="person">
								<div class="user_pic">
									<img src="images/nopicture.png" height="100%" width="100%"/>
								</div>
								<div class="user_name">
									<a href="#">Sid Goenka</a>
								</div>
								<div class="clear"></div>
						</div>	
						<div class="person">
								<div class="user_pic">
									<img src="images/nopicture.png" height="100%" width="100%"/>
								</div>
								<div class="user_name">
									<a href="#">Sid Goenka</a>
								</div>
								<div class="clear"></div>
						</div>	
						<div class="person">
								<div class="user_pic">
									<img src="images/nopicture.png" height="100%" width="100%"/>
								</div>
								<div class="user_name">
									<a href="#">Sid Goenka</a>
								</div>
								<div class="clear"></div>
						</div>							
					</div>
				</div>
				<span class="clear"></span>
				<div class="noti"> 
					<p>Photos </p>
					<div class="show" id="pics">
					
						<div class="tabs">
							<img src="images/friends.jpg" height="100%" width="100%"/>
						</div>
						<div class="tabs">
							<img src="images/kids.jpg" height="100%" width="100%"/>
						</div>
						<div class="tabs">
							<img src="images/kids.jpg" height="100%" width="100%"/>
						</div>
						<div class="tabs">
							<img src="images/friends.jpg" height="100%" width="100%"/>
						</div>						
					
					</div>
				</div>
				<span class="clear"></span>
			
			</div>
			
			<div class="status_show"> 
				<p><?php echo $LD->{'user_status'}; ?></p>
			</div>					
			
			<div class="clear"></div>
		
		</div>