<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>welcome to chechalk</title>
	<link rel="stylesheet" href="assets/font/web%2520fonts/roboto_regular_macroman/stylesheet.css">
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="login-form">
		<ul class="login-tab-menu">
			<li><a href="#login" class="active">Login</a></li>
			<li><a href="#register">Register</a></li>
		</ul>
		
		<div id="login">
			<form action="userAuth.php" method="post">
				<label>
					<input type="text" name="username" placeholder="username">
				</label>
				<label>
					<input type="password" name="password" placeholder="Password">
				</label>
				<label>
					<input type="checkbox">Remember me
				</label>
				<input type="submit" value="Login">
			</form>	
		</div>
		
		<div id="register">
			<form action="userAuth.php" method="post">
				<label>
					<input type="text" name="username" placeholder="username">
				</label>
				<label>
					<input type="email" name="email" placeholder="Email">
				</label>
				<label>
					<input type="password" name="password" placeholder="Password">
				</label>
				<label>
					<input type="checkbox">show password
				</label>
				<input type="submit" value="Register">
			</form>
		</div>
	</div>
</body>
</html>