<?php

	session_start();
	
	include('../PFBC/PFBC/Form.php');
	include('taskModel.php');

	use PFBC\Form;
	use PFBC\Element;

	include('../header.html');

	CreateTable();

	if(!empty($_POST['name']) && !empty($_POST['category']) && !empty($_POST['date']))
	{
		$date_pattern = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";

		if(preg_match($date_pattern, $_POST['date']))
		{
			AddItem();
		}
		else
		{
			header("Location: task11_invalid_email.php");
		}
	}

	if(isset($_GET['complete']))
	{
		MarkItemsComplete();
	}

	if(isset($_GET['delete_id']))
	{
		DeleteItem();
	}

	$user_tasks = GetItems();
?>

	<div class="lead well well-sm">
		<h1>My ToDo List</h1>
	</div>
	<table class="table table-striped">
		<tr>
			<th>Name</th>
			<th>Category</th>
			<th>Date</th>
			<th>Complete</th>
			<th>Mark Complete?</th>
			<th>Delete</th>
		</tr>
		<?php
			if(count($user_tasks > 0))
			{
				foreach ($user_tasks as $value)
				{
					$is_completed = ($value['completed'] == 'Yes') ? 'Mark Incomplete' : 'Mark Complete';

					echo 	"<tr>
								<td>" . $value['name'] . "</td>
								<td>" . $value['category'] . "</td>
								<td>" . $value['_date'] . "</td>
								<td>" . $value['completed'] . "</td>
								<td><a href='index.php?complete=" . $value['completed'] . "&complete_id= " . $value['id'] . "'>". $is_completed . "</a></td>
								<td><a href='index.php?delete_id= " . $value['id'] . "'>Delete</a></td>
							 <tr>";
				}
			}
		?>
	</table>

<?php

	$form = new Form('user-input');

	$form->addElement(new Element\Hidden('form', 'user-input'));
	$form->addElement(new Element\HTML('<legend>User Input</legend>'));
	$form->addElement(new Element\TextBox("Name: ", "name"));
	$form->addElement(new Element\TextBox("Category: ", "category"));
	$form->addElement(new Element\TextBox("Date: ", "date", array("placeHolder"=>"YYYY-MM-DD")));
	$form->addElement(new Element\Button("Submit"));

	$form->render();

	include('../footer.html');

	echo "<iframe src='index.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";
	echo "<iframe src='addItems.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";
	echo "<iframe src='createTable.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";
	echo "<iframe src='dbDetails.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";
	echo "<iframe src='deleteItems.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";
	echo "<iframe src='getItems.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";
	echo "<iframe src='markItemsComplete.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";
	echo "<iframe src='taskModel.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";

?>