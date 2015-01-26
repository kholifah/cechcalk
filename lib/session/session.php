<?php
	class session{
		function _constract(){
			session_start();
		}

		function setsession(){
			foreach ($data as $key => $value) {
				$_SESSION['$key'] = $value;
			}
		}

		function unsetsesion(){
			foreach ($data as $key => $value) {
				session_unset($_SESSION['$key']);
			}
		}
	}
?>