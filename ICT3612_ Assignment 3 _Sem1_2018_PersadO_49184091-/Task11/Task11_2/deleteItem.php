<?php

	//Delete Item

	try
	{
		$db_connect = new PDO($dns, $username, $password, $options);

		$query = 	"DELETE FROM tasks
					 WHERE id = :id";
		$statement = $db_connect->prepare($query);
		$statement->bindValue(':id', $_GET['delete_id']);
		$statement->execute();
		$statement->closeCursor();

		header('Location: index.php');
	}
	catch(PDOExcpetion $e)
	{
		echo "Error: " . $e->getMessage();
	}

?>