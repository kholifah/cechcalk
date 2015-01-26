<?php
	session_start();
	if (isset($_SESSION['is_login']) && $_SESSION['is_login'] === true){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>welcome to dashboard</title>
</head>
<body>
	<div id="header-nav">
		<ul>
			<li><a href="#">tweets</a></li>
			<li><a href="#">following</a></li>
			<li><a href="#">folowers </a></li>
		</ul>
	</div><!--end header nav-->
</body>
</html>
<?php
	}else{
?>
<h1>403</h1>
<p>Forbidden Access!!!</p>
<?php
}
?>