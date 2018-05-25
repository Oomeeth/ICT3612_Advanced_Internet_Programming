<?php

	try
	{
		$db_connect = new PDO($dns, $username, $password);
		$db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$query = 	"CREATE TABLE IF NOT EXISTS tasks(
					id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
					name VARCHAR(255) NOT NULL,
					category VARCHAR(255) NOT NULL,
					_date DATE NOT NULL,
					completed VARCHAR(3) NOT NULL DEFAULT 'No'
					)";

		$db_connect->exec($query);
	}
	catch(PDOExcpetion $e)
	{
		echo "Error: " . $e->getMessage();
	}

?>