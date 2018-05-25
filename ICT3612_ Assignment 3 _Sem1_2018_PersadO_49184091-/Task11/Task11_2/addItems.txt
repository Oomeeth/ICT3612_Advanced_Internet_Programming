<?php

	//Add Items

	try
	{
		$db_connect = new PDO($dns, $username, $password, $options);

		$query = 	"INSERT INTO tasks(name, category, _date)
					VALUES(:task_name, :task_category, :task_date)";
		$statement = $db_connect->prepare($query);
		$statement->bindValue(':task_name', $_POST['name']);
		$statement->bindValue(':task_category', $_POST['category']);
		$statement->bindValue(':task_date', $_POST['date']);
		$statement->execute();
		$statement->closeCursor();

		header('Location: index.php');
	}
	catch(PDOExcpetion $e)
	{
		echo "Error: " . $e->getMessage();
	}

?>