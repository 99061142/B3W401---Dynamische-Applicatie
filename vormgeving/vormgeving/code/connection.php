<?php
	function databaseConnection(){
		try{
  			$connection = new PDO("mysql:host=localhost;dbname=mboweek4-5", 'root', 'mysql');
  			// set the PDO error mode to exception
  			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  			return $connection;
		}catch(PDOException $e) {
  			echo "Connection failed: " . $e->getMessage();
		}
	}
?>