<?php
/* 

- This class extends database to use the connection method
- This class will be used to submit items to the database.
- Will build on a create, update and delete method

*/

class Post extends Database
{

	public function postMessage($username, $message)
	{

		$statement = $this->dbConnection()->prepare("INSERT INTO messages (user, message) VALUES (:user, :message)");


				$statement->bindParam(':user', $username);
				$statement->bindParam(':message', $message);

				$statement->execute();
				//header("Location: http://www.syn-code.co.uk/");
		
	}

	/*public function displayMessages()
	{

		$statement = $this->dbConnection()->prepare("SELECT * FROM messages");

		$statement->fetchAll();

		

		//return $statement->fetch();

		/*foreach($statement as $value){

			$value['user'] . ' ' . $value['message'];

		}*/

		/*while($row = $statement->fetch()){

			$message = $row['user'];
			return $message;
		}

		//$statement->bindParam(':user', $username);
		//$statement->bindParam(':message', $message);
	}*/

}