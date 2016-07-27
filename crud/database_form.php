<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title></title>
</head>

<body>
<!-- Brandon Golden -->
<h2>Sign Up Today!</h2>

<form enctype="multipart/form-data" action="signup.php" method="post">
	<fieldset>
		<legend>Sign-Up Now?</legend>
		Username: <input type="text" name="user" /><br>
		Password: <input type="password" name="password" /><br>
		<br />Select avatar photo to upload:
		<input type="file" name="avatarfile" /><br>
		<br />
		<input type="submit" value="Sign Up!" name="submit">
	</fieldset>
</form><br /><br />

<form action="login.php" method="post">
	<fieldset>
		<legend>Already a Member? Login...</legend>

		<p>
			<label for="username_li">Username:</label><input id="username_li" type="text" name="username_li">
		</p>
		<p>
			<label for="password_li">Password:</label><input id="password_li" type="password" name="password_li">
			<p class="rel">
			<button type="submit" class="right">Submit</button>
		</p>
	</fieldset>
</form>

</body>
</html>