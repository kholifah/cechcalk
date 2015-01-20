<?php
	require "../../lib/validation/validation.php";
	class validationTest extends PHPUnit_Framework_TestCase{

		public $string = array(
			"username"=>"kholifah",
			"email"=>"tm.kholifah@gamil.com",
			"password"=>"qweasd" 
			);

		public $expectation = true;

		//test_username_validation
		public function test_Username_Validation(){
			$validation = new Validation();

			$username = "kholifah";
			$expectation = true;
			$realCase = $validation->validate_username($username);
			$this->assertEquals($expectation,$realCase);

			$username = "";
			$expectation = false;
			$realCase = $validation->validate_username($username);
			$this->assertEquals($expectation,$realCase);

			$username = "khol";
			$expectation = false;
			$realCase = $validation->validate_username($username);
			$this->assertEquals($expectation,$realCase);

			$username = "kholifah#";
			$expectation = false;
			$realCase = $validation->validate_username($username);
			$this->assertEquals($expectation,$realCase);
		}

		//test_email_validation
		public function test_Email_Validation(){
			$validation = new Validation();

			$email ="tm.kholifah@gmail.com";
			$expectation = true;
			$realCase = $validation->validate_email($email);
			$this->assertEquals($expectation,$realCase);

			$email ="tm.kholifah@gmail.co.id";
			$expectation = true;
			$realCase = $validation->validate_email($email);
			$this->assertEquals($expectation,$realCase);

			$email ="";
			$expectation = false;
			$realCase = $validation->validate_email($email);
			$this->assertEquals($expectation,$realCase);

			$email ="tm.kholifah@";
			$expectation = false;
			$realCase = $validation->validate_email($email);
			$this->assertEquals($expectation,$realCase);

			$email ="kholifah";
			$expectation = false;
			$realCase = $validation->validate_email($email);
			$this->assertEquals($expectation,$realCase);
		}

		//test_password_validation
		public function test_Password_Validation(){
			$validation = new Validation();

			$password ="";
			$expectation = false;
			$realCase = $validation->validate_password($password);
			$this->assertEquals($expectation,$realCase);

			$password ="a";
			$expectation = false;
			$realCase = $validation->validate_password($password);
			$this->assertEquals($expectation,$realCase);

			$password ="qweasd";
			$expectation = true;
			$realCase = $validation->validate_password($password);
			$this->assertEquals($expectation,$realCase);
		}
	}
?>