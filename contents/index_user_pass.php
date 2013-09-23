
		<div id="register" class="reg_pos">
		
			<div id="new_user">
				<span class="status"> <label>*</label><?php echo $user_status; ?> </span>
				<hr>
			</div>
			
			<div id="new_form" class="wrong">
			<form method="post" action="php/login.php">
				<div class="reg_field">
					<p>Username</p>
					<input type="text" name="inp_user" id="reg_user"/> 
				</div>
				<div class="reg_field"> 
					<p>Password</p>
					<input type="password" name="inp_pass" id="reg_pass" />
				</div>
				<div id="SignUp">
					<input type="submit" value="Login"/> 
				</div> 
			</form>
			</div>
		
		</div>