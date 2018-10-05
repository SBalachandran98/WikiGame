<?php
//add our database connection script
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

//process the form
if(isset($_POST['signupBtn'])) {
    //initialise the array to store any error message from the form
    $form_errors = array();

    //form validation
    $required_fields = array('email', 'username', 'password');

    //call the function to check empty field and merge the return data into form_error array
    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

    //fields that requires checking for minimum length
    $fields_to_check_length = array('username' => 4, 'password' => 6);

    //call the function to check minimum required length and merge the return data into form_error array
    $form_errors = array_merge($form_errors, check_min_length($fields_to_check_length));

    //email validation / merge the return data into form_error array
    $form_errors = array_merge($form_errors, check_email($_POST));

    //check if error array is empty, if yes process form data and insert record
    if (empty($form_errors))
    {

        //collect form data and store in variables
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //hashing the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $msg = "Here";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        try
        {

            //create SQL insert statement
            $sqlInsert = "INSERT INTO users (username, email, password, join_date)
                  VALUES (:username, :email, :password, now())";

            //use PDO prepared to sanitize data
            $statement = $db->prepare($sqlInsert);

            //add the data into the database
            $statement->execute(array(':username' => $username, ':email' => $email, ':password' => $hashed_password));

            //check if one new row was created
            if ($statement->rowCount() == 1)
            {
                $msg = "Registration Successful";
                echo "<script type='text/javascript'>alert('$msg');</script>";
            }
        }
        catch (PDOException $ex)
        {
            echo "<script type='text/javascript'>alert('User already Exists!');</script>";
        }
    }
    else
    {
        if(count($form_errors) == 1)
        {
            $result = "<p style='color: red;'> There was 1 error in the form<br>";
        }else
        {
            $result = "<p style='color: red;'> There were " .count($form_errors). " errors in the form <br>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Register Page</title>
    <!-- <link href="MovieQuiz/quiz.css" rel="stylesheet"> -->
    <link href="format.css" rel="stylesheet">
</head>
<body>
    <div id="signupContainer" class="container" style="height: 400px; top: 55%">
        <h2>Wiki Game</h2>
        <h3>Registration Form</h3>

        <form method="post" action="">
            <table align="center">
                <tr>
                    <td>Email:</td>
                    <td> <input type="text" value="" name="email"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" value="" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" value="" name="password"></td>
                </tr>
                <!-- <tr>
                    <td></td>
                    <td><input style="float: right"; type="submit" name="signupBtn" value="Sign up"></td>
                </tr> -->
            </table>

            <input class="myBtn" type="button" name="backBtn" value="Back" onclick="window.location='index.php';">
            <input class="myBtn" type="submit" name="signupBtn" value="Sign up">
        </form>
    </div>

<div id="errorContainer">
    <?php 
        if(isset($result))
            echo "<script type='text/javascript'>alert('$result');</script>";
    ?>

    <?php 
        if(!empty($form_errors))
        {
            $err = implode(",\t",$form_errors);
            echo "<script type='text/javascript'>alert('$err');</script>";
        }
     ?>
<div>
</body>
</html>