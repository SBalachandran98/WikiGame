<?php include_once 'resource/session.php'?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="style.php"/>
</head>
<body>

<h1>Wiki Game</h1>

<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="signup.php">Sign Up</a></li>
</ul>


<?php if(!isset($_SESSION['username'])): ?>
<p>In order to play you must <a href="login.php">sign in.</a> If you don't have an account you can register <a href="signup.php">here</a></p>
<?php else: ?>
<p>You are logged in as <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a></p>
    <h3><a href="gamerules.html"> Play Game</a> </h3>
<?php endif ?>


</body>
</html>