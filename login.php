<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>welcome to chechalk</title>
	<link rel="stylesheet" href="assets/font/web-fonts/roboto_regular_macroman/stylesheet.css">
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/login.js"></script>
</head>
<body>
	<div class="login-form">
		<ul class="login-tab-menu clear">
			<li class="active"><a href="#login" class="active" onclick="tabHandler(this)">Login</a></li>
			<li><a href="#register" onclick="tabHandler(this)">Register</a></li>
		</ul>
		
		<div id="login" class="tab-target">
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
		
		<div id="register" class="tab-target">
			<form action="userRegistration.php" method="post">
				<?php
					if(isset($_GET['msg'])){
				?>
				<p class="notivication">
					<?php echo $_GET['msg']; ?>
				</p>
				<?php
					}
				?>
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
	<script>
    	var tab = window.location.href.split('#');
    	var trigger = document.querySelector(".login-tab-menu li a[href='#"+tab[1]+"']");
    	tabHandler(trigger);
  </script>
</body>
</html>