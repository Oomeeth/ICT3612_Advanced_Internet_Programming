<?php

	include 'menu.inc';

	abstract class Book
	{
		public $title;
		public $price;

		public function __construct($book_title)
		{
			$this->title = $book_title;
		}

		public function GetTitle()
		{
			return $this->title;
		}

		public function GetPrice()
		{
			return $this->price;
		}

		abstract public function setPrice();

		public function showOutput()
		{
			echo "The price of the book " . $this->GetTitle() . " is " . $this->GetPrice() . "<br>";
		}
	}

	class Fiction extends Book
	{
		public function __construct($title)
		{
			parent::__construct($title);
			$this->setPrice();
		}

		public function setPrice()
		{
			$this->price = 150;
		}
	}

	class NonFiction extends Book
	{
		public function __construct($title)
		{
			parent::__construct($title);
			$this->setPrice();
		}

		public function setPrice()
		{
			$this->price = 200;
		}
	}

	$my_books = array();
	$my_books[0] = new Fiction("A");
	$my_books[0]->showOutput();
	$my_books[1] = new Fiction("B");
	$my_books[1]->showOutput();
	$my_books[2] = new NonFiction("C");
	$my_books[2]->showOutput();
	$my_books[3] = new Fiction("D");
	$my_books[3]->showOutput();
	$my_books[4] = new NonFiction("E");
	$my_books[4]->showOutput();
	$my_books[5] = new NonFiction("F");
	$my_books[5]->showOutput();
	$my_books[6] = new Fiction("G");
	$my_books[6]->showOutput();
	$my_books[7] = new Fiction("H");
	$my_books[7]->showOutput();
	$my_books[8] = new NonFiction("I");
	$my_books[8]->showOutput();
	$my_books[9] = new Fiction("J");
	$my_books[9]->showOutput();

	echo "<iframe src='task5.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";

?>