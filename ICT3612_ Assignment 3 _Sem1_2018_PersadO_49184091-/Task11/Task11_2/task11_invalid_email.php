<?php

	session_start();

	include('../PFBC/PFBC/Form.php');

	use PFBC\Form;
	use PFBC\Element;

	include('../header.html');
?>

	<div class="lead well well-sm">
		<h1>My ToDo List</h1>
		<p>Invalid Data</p>
		<a href="index.php">Go Back</a>
	</div>

<?php

	$form = new Form('user-input');

	$form->render();
	include('../footer.html');

?>