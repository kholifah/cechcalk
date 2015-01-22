<?php
	require "lib/database/database.php";
	require "lib/validation/validation.php";

	$username = ($_POST['username']);
	$password =($_POST['password']);

	$validation = new validation();

	if(	$validation->validate_is_not_null($username) &&
		$validation->validate_password_is_not_null($password)
	){
		$db = new database("
				pgsql:dbname=calk;
				host=localhost;
				user=postgres;
				password=samporan;
			");
		if ($db->isConnected()) {
			$sql ="SELECT * FROM calker WHERE username=:username";

			echo $sql;
		}else{
			header("location:login.php?log=login gagal");
		}
	}else{
		header("location:login.php?log=Username dan Password tidak boleh kosong");
	}
?>