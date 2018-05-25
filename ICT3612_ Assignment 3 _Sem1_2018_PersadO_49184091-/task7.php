<?php

	include 'menu.inc';

	echo "<h1>Task 7a</h1>";

	$date="2012-05-27";

	if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $date))
	{
		echo "Format is correct!";
	}
	else
	{
		echo "Format is not correct!";
	}



	echo "<h1>Task 7b</h1>";

	$date="31-01-1998";

	if (preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-[0-9]{4}$/", $date))
	{
		echo "Format is correct!";
	}
	else
	{
		echo "Format is not correct!";
	}

	echo "<iframe src='task7.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";

?>