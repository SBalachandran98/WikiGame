<?php
	include_once 'resource/session.php';
	include_once 'resource/Database.php';

	if(isset($_POST['score']))
	{
		if(isset($_SESSION['id']) && isset($_SESSION['type']))
		{
			$id = $_SESSION['id'];
			$type = $_SESSION['type'];
			$score = $_POST['score'];

			$sqlCreate = "CREATE TABLE IF NOT EXISTS scores (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				userId INT(6) NOT NULL,
				type VARCHAR(250) NOT NULL,
				score INT(10) NOT NULL
				)";

			$db->exec($sqlCreate);

			$sqlInsert = "INSERT INTO scores
			VALUES (
				0,
				$id,
				'$type',
				$score
			)";
			$db->exec($sqlInsert);

			echo 'Score added';

		}
		else
		{
			echo 'Session not set!';
		}
	}
	else
	{
		echo 'Score not set!';
	}


?>