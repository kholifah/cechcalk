<?php
	class  users extend session{
		public $username = "";

		function __construct(){
			parent::__construct();
			$this->username = $_SESSION['username'];
		}

		function isLogin(){
			if(isset($_SESSION['is_login']) && $_SESSION['is_login'] === true){
				return true;
			}else{
				return false;	
			}
		}
	}

	$currentUsers = false; 
?>