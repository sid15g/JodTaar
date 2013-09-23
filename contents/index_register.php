		<div id="register">
			
			<div id="new_user">
				<label id="ust"> <?php echo $user_status; ?> </label>
				<p> <label>New User?</label> Sign Up </p>
				<hr>
			</div>
			
			<div id="new_form">
			<form method="post" action="php/register.php">
				<div class="reg_field">
					<p>Username</p>
					<input type="text" name="username" id="reg_user"/> 
				</div>
				<div class="reg_field"> 
					<p>Password</p>
					<input type="password" name="password" id="reg_pass" />
				</div>
				<div class="reg_field"> 
					<p>Email</p>
					<input type="text" name="email" id="reg_email" /> 
				</div>
				<div id="SignUp">
					<input type="submit" value="Sign Up"/> 
				</div> 
			</form>
			</div>
			
		</div>