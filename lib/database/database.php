<?php
	class Database{
		private $connected;
		function  __construct($str){
			try{
				$this->connected = new PDO($str);
				return $this->connected;
			}catch (PDOexception $e){
				$this->connected = FALSE;
			}
		}
		function isConnected(){
			if($this->connected === false){
				return FALSE;
			}else{
				return TRUE;
			}
		}
	}
?>