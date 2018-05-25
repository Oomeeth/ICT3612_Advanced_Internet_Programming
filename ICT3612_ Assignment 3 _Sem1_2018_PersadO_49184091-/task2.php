<?php

	include 'menu.inc';

	/* TASK 2a */
	
	echo "<h1>TASK 2a</h1>";
	
	function calcIt($value1, $value2, $value3)
	{
		$total = $value1 + $value2 - $value3;
		
		return $total;
	}
	
	$input_one = 30;
	$input_two = 10;
	$input_three = 7;
	
	$result = calcIt($input_one, $input_two, $input_three);
	
	echo "The result of the calculation is " . $result;
	
	
	
	/* TASK 2b */
	
	function UserEntry()
	{
		if(!isset($_GET['food']))
		{
			echo "You have not selected anything";
		}
		else
		{
			$selection_output = "You have selected ";
			
			foreach($_GET['food'] as $food_item)
			{
				$selection_output .= $food_item . ", ";
			}

			$selection_output = rtrim($selection_output, ", ");
			
			echo $selection_output;
		}
	}
	
	echo "<h1>TASK 2b</h1>";
	
	include 'task2b_view.html';
	
	UserEntry();



	/* Task 2c */

	echo "<h1>Task 2C</h1>";

	function var_func($x)
	{
		$total_args = func_num_args();
		$variable_list = func_get_args();

		echo "There were " . $total_args . " numbers passed:";

		echo "<ul>";

		foreach($variable_list as $key => $value)
		{
			echo "<li>Number " . ($key+1) . " = " . $value . ".</li>";
		}

		echo "</ul>";
	}

	var_func(1, 2, 3, 4, 5);



	/* Task 2d */

	echo "<h1>Task 2D</h1>";

	var_func(16, 18, 20);

	echo "<iframe src='task2.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";

?>
	