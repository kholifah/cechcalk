<?php
	class validation{
		function validation_username($string){
			//Validation rule
			//1.it's NOT NULL
			
			//4.minimal length 6
			//5.maximal length 20
			
			//not implement yet
			//2.only laetter or number
			//3.have to start with letter
			
			//cek if NULL
			if($string=="" or $string===NULL){
				return false;	
			}
			
			//cek if leng less than 6 or more than 20
			if(strlen($string)<6 or strlen($string)>20){
				return false;
			}
			
			return true;
		}
	}
?>