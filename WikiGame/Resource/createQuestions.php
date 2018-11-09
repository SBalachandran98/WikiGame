<?php
//add our database connection script
include_once 'Database.php';
//include_once 'resource/utilities.php';

//process the form
if(isset($_POST['addBtn']))
{
	//collect form data and store in variables
	$type = $_POST['type'];
	$question = $_POST['question'];
	$option1 = $_POST['option1'];
	$option2 = $_POST['option2'];
	$option3 = $_POST['option3'];
	$option4 = $_POST['option4'];
	$answer = $_POST['answer'];
	try
	{
		$sqlCreate = "CREATE TABLE IF NOT EXISTS $type (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			question VARCHAR(250) NOT NULL,
			option1 VARCHAR(250) NOT NULL,
			option2 VARCHAR(250) NOT NULL,
			option3 VARCHAR(250) NOT NULL,
			option4 VARCHAR(250) NOT NULL,
			answer int(1) NOT NULL
			)";

		//$statementCreate = $db->prepare($sqlCreate);

		//$statementCreate->execute(array(':type' => $type));

		// if ($statementCreate->rowCount() == 1)
		// {
		// 	$msg = "New table created.";
		// 	echo "<script type='text/javascript'>alert('$msg');</script>";
		// }

		$db->exec($sqlCreate);

		$sqlInsert = "INSERT INTO $type (question, option1, option2, option3, option4, answer)
			VALUES (
				'$question', 
				'$option1', 
				'$option2', 
				'$option3', 
				'$option4', 
				'$answer'
			)";

		$db->exec($sqlInsert);

		echo "<script type='text/javascript'>alert('Question Added');</script>";
		// //use PDO prepared to sanitize data
		// $statement = $db->prepare($sqlInsert);
		// echo "<pre>";
		// print_r($statement);
		// echo "</pre>";
		// //add the data into the database
		// $statement->execute(array(
		// 	':type' => $type,
		// 	':question' => $question,
		// 	':o1' => $o1,
		// 	':o2' => $o2,
		// 	':o3' => $o3,
		// 	':o4' => $o4,
		// 	':ans' => $ans,
		// ));


		//check if one new row was created
	}
	catch (PDOException $ex)
	{
		echo "<pre>";
		print_r($ex);
		echo "</pre>";
		echo "<script type='text/javascript'>alert('Error');</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>Add question page</title>
	<link href="format.css" rel="stylesheet">
</head>
<body>
	<form method="post" action="">
		<table align="center">
			<tr>
				<td>Question type:</td>
				<td> <input type="text" value="" name="type"></td>
			</tr>
			<tr>
				<td>Question:</td>
				<td><input type="text" value="" name="question"></td>
			</tr>
			<tr>
				<td>Option 1:</td>
				<td><input type="text" value="" name="option1"></td>
			</tr>
			<tr>
				<td>Option 2:</td>
				<td><input type="text" value="" name="option2"></td>
			</tr>
			<tr>
				<td>Option 3:</td>
				<td><input type="text" value="" name="option3"></td>
			</tr>
			<tr>
				<td>Option 4:</td>
				<td><input type="text" value="" name="option4"></td>
			</tr>
			<tr>
				<td>Answer Number:</td>
				<td><input type="text" value="" name="answer"></td>
			</tr>
		</table>

		<input class="myBtn" type="button" name="backBtn" value="Back" onclick="window.location='index.php';">
		<input class="myBtn" type="submit" name="addBtn" value="AddQuestion">
	</form>
</body>
</html>