<?php

	function CreateTable()
	{
		try
		{
			include('dbDetails.php');

			$db_connect = new PDO($dns, $username, $password, $options);

			$result = $db_connect->query("SELECT 1 FROM tasks LIMIT 1");
		}
		catch(PDOException $e)
		{
			include('createTable.php');

			echo 	"<script type='text/javascript'>
						alert('Table was created')
					</script>";
		}
	}

	function AddItem()
	{
		include('dbDetails.php');
		include('addItems.php');
	}

	function MarkItemsComplete()
	{
		include('dbDetails.php');
		include('markItemsComplete.php');
	}

	function DeleteItem()
	{
		include('dbDetails.php');
		include('deleteItem.php');
	}

	function GetItems()
	{
		include('dbDetails.php');
		include('getItems.php');

		return $user_tasks;
	}

?>