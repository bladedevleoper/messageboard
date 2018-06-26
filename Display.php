<?php

/*
	
	- This class extentds database to use the connection method
	- This will be used to query the database.
*/

class Display extends Database
{
	public function displayMessages()
	{	
		//use fetchAll when querying with PDO
		$statement = $this->dbConnection()->query("SELECT id, user, message FROM messages ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);


			if(!empty($statement)){
				foreach($statement as $user){
					echo 'User ID: ' . $user['id'] . ' ' . $user['user'] . "\n\r<br/>";
					echo 'User Message: ' . $user['message'] . "\n\r<br/>";
				}
			} else {
				echo '<div>No Messages do display</div>';
			}
		

		}
	
}