<?php

	include 'menu.inc';

	$directory = getcwd() . DIRECTORY_SEPARATOR . 'File_Directory';

	if(isset($_FILES['file1']['tmp_name']))
	{
		if($_FILES['file1']['type'] == "text/plain")
		{
			echo "<br>" . $_FILES['file1']['name'];
			$tmp_name = $_FILES['file1']['tmp_name'];
			$name = $directory . DIRECTORY_SEPARATOR . $_FILES['file1']['name'];
			$success = move_uploaded_file($tmp_name, $name);

			if($success)
			{
				$upload_message = $name . ' has been uploaded in directory';
			}

			$to = "12345@wherever.com";
			$subject = "File Uploaded";
			$message = "File " . $_FILES['file1']['name'] . " has been uploaded to the server";

			mail($to, $subject, $message);

			header('Location: task10.php');
		}
		else
		{
			echo "Incorrect file format!<br><br>";
		}
	}
	
	$file_array = array_diff(scandir($directory), array('..', '.'));

	if(count($file_array) > 0)
	{
		echo "The following files are currently stored in directory " . $directory;

		foreach($file_array as $file_name)
		{
			echo 	"<ul>
						<li>" . $file_name . "</li>
					</ul>"; 
		}
	}
	else
	{
		echo "No files are stored in this directory";
	}

	include_once 'task10_view.html';

	if(count($file_array) > 0)
	{
		echo 	"<table style='width: 100%'>
							<tr>
								<th style='width: 50%; text-align: center;'>File Name</th>
								<th style='width: 50%; text-align: center;'>File Contents</th>
							</tr>";

		foreach($file_array as $file_name)
		{
			echo 	"<tr>
						<td style='width: 50%; text-align: center;'> " . $file_name . "</td>" .
						"<td style='width: 50%; text-align: center;'> " . file_get_contents($directory . DIRECTORY_SEPARATOR . $file_name) . 
						"</td>
					</tr>";
		}
		echo 	"</table>"; 
	}

	echo "<iframe src='task10.txt' style='margin-top:50px;' height='400' scrolling='yes' width='1200px'> <p>Your browser does not support iframes.</p></iframe>";

?>