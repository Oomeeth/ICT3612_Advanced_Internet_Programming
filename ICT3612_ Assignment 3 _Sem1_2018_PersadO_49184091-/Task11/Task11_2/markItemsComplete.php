<?php

	//Mark Items Complete
	
	$completed = "";

	if($_GET['complete'] == "Yes")
	{
		$completed = "No";
	}
	else
	{
		$completed = "Yes";
	}

	try
	{
		$db_connect = new PDO($dns, $username, $password, $options);

		$query = 	"UPDATE tasks
					 SET completed = :value
					 WHERE id = :user_id";
		$statement = $db_connect->prepare($query);
		$statement->bindValue(':value', $completed);
		$statement->bindValue(':user_id', $_GET['complete_id']);
		$statement->execute();
		$statement->closeCursor();

		header('Location: index.php');
	}
	catch(PDOExcpetion $e)
	{
		echo "Error: " . $e->getMessage();
	}

?>