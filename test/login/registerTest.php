<?php
	class registerTest extends PHPUnit_Framework_TestCase{
		function test_Normal_Case_For_Resgister(){
			//1.frirst the form 
			//2.there is $_POST => username,email,password
			$data = array(
				'username' => 'kholifah',
				'email' => 'tm.kholifah@gmail.com',
				'password' => 'qweasd'
			);
			
			//3.validate it => thats'means we must create validation library
			//4.Insert it into DB => we must have DB library
		}
	}
?>