<?php

	include 'menu.inc';

	/*Task 4a */

	echo "<h1>Task 4a</h1>";

	class myHouse
	{
		private $type;
		private $size;
		private $color;

		public function __construct($structure_size, $structure_color, $structure_type)
		{
			$this->size = $structure_size;
			$this->color = $structure_color;
			$this->type = $structure_type;
		}

		public function SetSize($structure_size)
		{
			$this->size = $structure_size;
		}

		public function SetColor($structure_color)
		{
			$this->color = $structure_color;
		}

		public function SetType($structure_type)
		{
			$this->type = $structure_type;
		}

		public function GetSize()
		{
			return $this->size;
		}

		public function GetColor()
		{
			return $this->color;
		}

		public function GetType()
		{
			return $this->type;
		}

		public function showOutput()
		{
			echo "I live in a " . $this->GetSize() . " square meter " . $this->GetColor() . " " . $this->GetType();
		}

	}



	/*Task 4b */

	echo "<h1>Task 4b</h1>";

	$house = new myHouse("250", "grey", "townhouse");
	$house->showOutput();



	/*Task 4c */

	echo "<h1>Task 4c</h1>";

	$house->SetSize("155");
	$house->SetColor("yellow");
	$house->SetType("semi-detached");

	$house->showOutput();

	echo "<iframe src='task4.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";

?>