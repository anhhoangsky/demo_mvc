<?php
	class DATABASE{
		private static $conn;
		private static $hostName = 'localhost';
		private static $userDB = 'root';
		private static $passDB = '';
		private static $nameDB = 'db_info';

		public static function Connect(){
			if (!isset(self::$conn)){
				self::$conn = new mysqli(self::$hostName,self::$userDB,self::$passDB,self::$nameDB); 
				if (self::$conn->connect_error) {
    				die("Connection failed: " . self::$conn->connect_error);
				}
			}
			return self::$conn;
		}
	}
?>