<?php
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

if(isset($_POST['loginBtn'])){
    //array to hold errors
    $form_errors = array();

    //validate the form
    $required_fields = array('username', 'password');

    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

    if(empty($form_errors)){
        //collect form data
        $user = $_POST['username'];
        $password = $_POST['password'];

        //check if user exists in the database
        $sqlQuery = "SELECT * FROM users WHERE username = :username";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':username' => $user));


        if($row = $statement->fetch())
        {
            $id = $row['id'];
            $hashed_password = $row['password'];
            $username = $row['username'];
            if(password_verify($password, $hashed_password))
            {
                echo "<script type='text/javascript'>alert('Login Successful');</script>";
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                header("location: index.php");
            }
            else
            {
                echo "<script type='text/javascript'>alert('Invalid password');</script>";
            }
        }
        else
        {
            echo "<script type='text/javascript'>alert('Invalid username');</script>";
        }

    }else{
        if(count($form_errors) == 1){
            $result = "<p style='color: red;'>There was one error in the form</p>";
        }else{
            $result = "<p style='color: red;'>There were " .count($form_errors). " errors in the form</p>";

        }
    }
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link href="format.css" rel="stylesheet">
</head>
<div id="loginContainer" class="container">
    <h2>Wiki Game</h2>
    <h3>Login Form</h3>

    <form method="post" action="">
        <table align="center">
            <tr>
                <td>Username:</td>
                <td><input type="text" value="" name="username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" value="" name="password"></td>
            </tr>
        </table>
        
        
        <input class="myBtn" type="button" name="backBtn" value="Back" onclick="window.location='index.php';">

        <input class="myBtn" type="submit" name="loginBtn" value="Sign in">
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
            $err = implode(" and ",$form_errors);
            echo "<script type='text/javascript'>alert('$err');</script>";
        }
     ?>
<div>
</body>
</html>