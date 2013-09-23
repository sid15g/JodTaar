		<div id="user_acc">

			<div id="profile_fill">
			
				<div id="pro_head">
					<p>Edit Profile</p>
					<hr/>
				</div>
				
				<div id="profile_pic">
					<div id="pro_pic">
						<img src="<?php print $img; ?>" alt="Profile Pic" height="100%" width="100%" />
					</div>
					<div id="field">
						<input type="file" id="upl"/>
					</div>	
				</div>
				
				<div id="old_det">
					
					<div class="reg_field">
						<p>Username*</p>
						<input type="text" id="username" value="<?php echo $PD->{'username'}; ?>" disabled="true"/>
					</div>
					<div class="reg_field">
						<p>Email*</p>
						<input type="text" id="email" value="<?php echo $PD->{'email'}; ?>" />
					</div>	
					<div class="reg_field">
						<p>Mobile</p>
						<input type="number" id="phone" value="<?php echo $UD->{'phone'}; ?>"/>
					</div>									
					
				</div>
			
				<div id="new_det">
						
					<div class="reg_field">
						<p>Full Name*</p>
						<input type="text" id="fname" value="<?php echo $UD->{'full_name'}; ?>"/>
					</div>			
					<div class="reg_field">
						<p>Date Of Birth*</p>
						<input type="text" id="b_date" value="<?php echo $UD->{'dob'}; ?>" disabled="true"/>
					</div>				
					<div class="reg_field">
						<p>City</p>
						<input type="text" id="city" value="<?php echo $UD->{'city'}; ?>" />
					</div>				
					<div class="reg_field">
						<p>Country*</p>
						<input type="text" id="country" value="<?php echo $UD->{'country'}; ?>" />
					</div>			
					
				</div>
				
				<div class="clear"></div>
				
				<div id="sub_but">
					<input type="submit" value="Update" />
				</div>	
				
			</div>	
			
		</div>