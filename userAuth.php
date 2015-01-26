<?php
	session_start();

	require "lib/database/database.php";
	require "lib/validation/validation.php";

	$username = ($_POST['username']);
	$password =($_POST['password']);

	$validation = new validation();

	if(	$validation->validate_username($username) &&
		$validation->validate_password($password)
	){
		$dbname="calk";
		$host="localhost";
		$uname="postgres";
		$pswd="samporan";
		$dbh = new Database("pgsql:host=$host;dbname=$dbname;user=$uname;password=$pswd");

		// $query =$dbh->query('
		// 	SELECT 
		// 	*
		// 	FROM calker 
		// 	WHERE 
		// 	username=:$username 
		// 	AND 
		// 	password=:$password
		// 	');
		if ($dbh->isConnected()){
			$qry = $dbh->get('calker', array(
				'username'=>$username

			));

			$data= $qry->fetch(PDO::FETCH_ASSOC);

			if($data['password'] === md5($password) && $qry->rowCount() === 1){
				$_SESSION['is_login'] = true;
				$_SESSION['username'] = $username;
				header("location:users/dashboard.php");
			}else{
				header("location:login.php?log=username dan password anda salah");
			}

		}else{
			header("location:login.php?log=login gagal");
		}
	}else{
		header("location:login.php?log=Username dan Password tidak boleh kosong");
	}
?>