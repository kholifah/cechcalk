<?php
	class validation{
		public function validate_username($string){
			//Username Validation rule
			//1.it's NOT NULL
			
			//4.minimal length 6
			//5.maximal length 20
			
			//not implement yet
			//2.only letter or number
			//3.have to start with letter
			
			//cek if NULL
			if($string=="" or $string===NULL){
				return false;	
			}
			
			//cek if leng less than 6 or more than 20
//			if(strlen($string)<6 or strlen($string)>20){
//				return false;
//			}
			
			//only letter or number
			//have to start with letters
			//cek if leng less than 6 or more than 20
			if(!preg_match("/^[a-zA-Z][a-zA-Z0-9]{6,20}$/", $string)){
				return false;	
			}
			return true;
		}

		public function validate_email($string){
			//Email validation rule
			//1.it's NOT NULL
			//2.format email


			//it's NOT NULL
			if($string=="" or $string===NULL){
				return false;	
			}
			//format eamil
			if(!filter_var($string,FILTER_VALIDATE_EMAIL)){
				return false;
			}
			return true;
		}

		public function validate_password($string){
			//Password validation rule
			//1.it's NOT NULL
			//2.

			//it's NOT NULL
			if($string=="" or $string===NULL){
				return false;	
			}
			if(strlen($string)<6){
				return false;
			}
			// if(!preg_match("/^[A-Z]/", $string)){
			// 	return false;
			// }
			return true;
		}
	}
?>