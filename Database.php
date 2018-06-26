<?php

class Database
{
	private $host;
	private $username;
	private $password;
	private $dbname;
	

	public function dbConnection()
	{
		//setup access modifiers
		$this->host = 'localhost';
		$this->username = 'root';
		$this->password = 'root';
		$this->dbname = 'messageboard';
		
		try{

				
		//exception handler
		
			$connection = new PDO("mysql:host=". $this->host . ';dbname' .'='.$this->dbname, $this->username, $this->password);
			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $connection;
			//if connection is made, for testing purposes
			//echo "connection successful";

		} catch (Exception $e) {
			//if connection fails $e in exception is only used for development shouldn't be used in production
			echo 'connection failed' . ' ' . $e->getMessage();
			exit;
			
		}
	}


}

