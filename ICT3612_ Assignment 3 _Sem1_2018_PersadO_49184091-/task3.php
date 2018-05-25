<?php

	include 'menu.inc';

	/*Task 3a */

	echo "<h1>Task 3a</h1>";

	class Animal
	{
		private $name;

		public function __construct()
		{

		}

		public function Greet()
		{
			echo "Hello, I'm some sort of animal and my name is Jock";
		}
	}

	$ref = new Animal();

	$ref->Greet();



	/*Task 3b */

	echo "<h1>Task 3b</h1>";

	class Dog extends Animal
	{
		public function Greet()
		{
			echo "Hello, I'm a dog and my name is Jock";
		}
	}

	$ref = new Dog();

	$ref->Greet();

	echo "<iframe src='task3.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";

?>