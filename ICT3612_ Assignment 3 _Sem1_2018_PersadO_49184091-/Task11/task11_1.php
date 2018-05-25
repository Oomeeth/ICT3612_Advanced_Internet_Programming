<?php

	session_start();
	
	include('PFBC/PFBC/Form.php');

	use PFBC\Form;
	use PFBC\Element;

	$teams = "";

	if(isset($_POST['TeamNames']))
	{
		$teams = $_POST['TeamNames'];
	}

	if(isset($_POST['Select']))
	{
		if(!empty($_POST['TeamNames']))
		{
			$teams .= ', ' . $_POST['Select'];
		}
		else
		{
			$teams = $_POST['Select'];
		}
	}

	include('header.html');
?>

	<div class="page-header">
		<h1>Ticket Taker App</h1>
	</div>

<?php

	$form = new Form("form-elements");

	$form->addElement(new Element\Hidden("form", "form-elements"));
	$form->addElement(new Element\HTML("<legend>Team Selection:</legend>"));
	$form->addElement(new Element\Select("Select:", "Select", array("Liverpool", "Manchester United", "Barcalona", "Arsenal", "Manchester City")));
	$form->addElement(new Element\Button);$form->addElement(new Element\Textbox("Teams you have selected: ", "TeamNames", array(
    "value" => $teams
	)));

	$form->render();

	include('footer.html');

	echo "<iframe src='task11_1.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";

?>