<?php
	require "lib/validation/validation.php";

	$username = ($_POST['username']);
	$email = ($_POST['email']);
	$password = ($_POST['password']);

	$validation = new validation();
	if($validation->validate_username($username) &&
		$validation->validate_email($email) &&
		$validation->validate_password($password)
	){
	
	}else{
		header("location:login.php?reg=Data Ada Yang Tidak Valid Broo...!#register");
	}
?>