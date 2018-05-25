<?php

	//Get Items

	try
	{
		$db_connect = new PDO($dns, $username, $password, $options);

		$query = "SELECT * FROM tasks";
		$statement = $db_connect->prepare($query);
		$statement->execute();
		$user_tasks = $statement->fetchAll();
		$statement->closeCursor();
	}
	catch(PDOExcpetion $e)
	{
		echo "Error: " . $e->getMessage();
	}

?>