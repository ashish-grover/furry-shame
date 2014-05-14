<!doctype html>
<html>
	<head>
		<title>
			Registration
		</title>	
	</head>
	<body>
		<h1>
			Welcome to the registration page.
		</h1>
		<form id="registrationform" autocomplete="on" method="POST" action="savedata.php">
			<p class="contact">
				<label for="firstname">First Name</label>
			</p>
			<input name="firstname" placeholder="First Name" required="required"/>
			<p class="contact">
				<label for="lastname">Last Name</label>
			</p>
			<input name="lastname" placeholder="Last Name" required="required"/>
			<p class="contact">
				<label for="username">User Name</label>
			</p>
			<input name="username" placeholder="username" required="required"/>
			<p class="contact">
				<label for="email">Email Address</label>
			</p>
			<input type="email" name="email" placeholder="myemail@mydomain.com" required="required"/>
			<p class="contact">
				<label for="password">Password</label>
			</p>
			<input name="password" type="password" placeholder="eg. 123!@#hellO" required="required"/>
			<p class="contact">
				<label for="repassword">Confirm Password</label>
			</p>
			<input name="repassword" type="password" placeholder="Re-enter your password" required="required"/>
			<input class="button" name="submit" id="submit" value="Sign me up!" type="submit">
		</form>
	</body>
</html>