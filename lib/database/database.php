<?php
	class Database{
		private $connected;
		function  __construct($str){
			try{
				$this->connected = new PDO($str);
				return $this->connected;
			}catch (PDOException $e){
				$this->connected = FALSE;
			}
		}
		function isConnected(){
			if($this->connected===false){
				return FALSE;
			}else{
				return TRUE;
			}
		}
		function get($table, $data){
			$sql ="SELECT * FROM $table WHERE ";

			$where = "";
			$wh_value = "";

			foreach ($data as $column => $value) {
				$where[] = "$column = ?";
				$wh_value[] = "$value";
			}

			$sql .= implode("AND",$where);

			$query = $this->connected->prepare($sql);

			$stat =$query->execute($wh_value);
			if($stat && $query->rowCount() > 0 ){
				return $query;
			}else{
				return FALSE;
			}
		}
	}
?>