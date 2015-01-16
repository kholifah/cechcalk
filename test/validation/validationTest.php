<?php
	require "../../lib/validation/validation.php";
	class validationTest extends PHPUnit_Framework_TestCase{
		function test_Username_Validation(){
			//Validation rule
			//1.it's NOT NULL
			//2.only laetter or number
			//3.have to start with letter
			//4.minimal length 6
			//5.maximal length 20
			
			$username = "kholifah";
			$expectation = true;
			
			$validation = new Validation();
			$realCase = $validation->validate_username($username);
			$this->assertEquals($expectation,$realCase);
		}
	}
?>