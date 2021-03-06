<?php

	include 'menu.inc';

	class Register
	{
		const MIN_USERNAME = 5;
		const MIN_PASSWORD = 8;

		public function __construct($user_name, $user_password)
		{
			$password_check = $this->CheckPassword($user_password);
			$username_check = $this->CheckUserName($user_name);

			if($password_check && $username_check)
			{
				header("Location: task6_view_login.html");
			}
		}

		private function CheckUserName($username)
		{
			if(strlen($username) < self::MIN_USERNAME)
			{
				echo "<p>The minimum required username length is " . self::MIN_USERNAME .  ".</p>";
				return false;
			}
			else
			{
				return true;
			}
		}

		private function CheckPassword($password)
		{
			if(strlen($password) < self::MIN_PASSWORD)
			{
				echo "<p>The minimum required password length is " . self::MIN_PASSWORD . ".</p>";
				return false;
			}
			else
			{
				return true;
			}
		}
	}

	include 'task6_view.html';

	if(!empty($_POST['username']) && !empty($_POST['password']))
	{
		$reg = new Register($_POST['username'], $_POST['password']);
	}
	else
	{
		echo "Empty Fields!";
	}

	echo "<iframe src='task6.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";

?>