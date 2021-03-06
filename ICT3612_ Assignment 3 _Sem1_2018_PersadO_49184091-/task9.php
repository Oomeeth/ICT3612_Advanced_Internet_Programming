<?php

	include 'menu.inc';

	/*TASK 9 */

	echo "<h1>Task 9</h1>";

	$dsn = 'mysql:host=localhost;dbname=assignment_3_task_9';
	$username = "root";
	$password = "";
	$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);



	/*TASK 9C */



	if(isset($_GET['v_name']) && isset($_GET['v_type']))
	{
		try
		{
			$db_connect = new PDO($dsn, $username, $password, $options);

			$query = "INSERT INTO vegetables(vegetable_name, vegetable_type) VALUES(:name, :type)";
			$statement = $db_connect->prepare($query);
			$statement->bindValue(':name', $_GET['v_name']);
			$statement->bindValue(':type', $_GET['v_type']);
			$statement->execute();
			$statement->closeCursor();

			header('Location: task9.php');
		}
		catch(PDOException $e)
		{
			echo "Could not connect to the database. Error: " . $e->getMessage();
		}
	}



	/*TASK 9b */



	try
	{
		$db_connect = new PDO($dsn, $username, $password, $options);

		$query = "SELECT * FROM vegetables";
		$statement = $db_connect->prepare($query);
		$statement->execute();
		$fetch_results = $statement->fetchAll();
		$statement->closeCursor();

		echo 	"<table style='width: 100%;'>
					<tr>
						<th style='width: 25%; text-align: center;'>Vegetable ID</th>
						<th style='width: 25%; text-align: center;'>Vegetable Name</th>
						<th style='width: 25%; text-align: center;'>Vegetable Type</th>
						<th style='width: 25%; text-align: center;'>Vegetable Color</th>
					</tr>";

		foreach($fetch_results as $result)
		{
			echo 	"<tr>
						<td style='width: 25%; text-align: center;'>" . $result['vegetable_id'] . "</td>
						<td style='width: 25%; text-align: center;'>" . $result['vegetable_name'] . "</td>
						<td style='width: 25%; text-align: center;'>" . $result['vegetable_type'] . "</td>
						<td style='width: 25%; text-align: center;'>" . $result['vegetable_color'] . "</td>
					</tr>";
		}

		echo 	"</table><br><br>";
	}
	catch(PDOException $e)
	{
		echo "Could not connect to the database. Error: " . $e->getMessage();
	}



	/*TASK 9C */



	include 'task9_view.html';

	try
	{
		$db_connect = new PDO($dsn, $username, $password, $options);

		$query = "SELECT * FROM vegetables";

		$statement = $db_connect->prepare($query);
		$statement->execute();
	}
	catch(PDOException $e)
	{
		echo "Could not connect to the database. Error: " . $e->getMessage();
	}

	echo "<iframe src='task9.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";

?>