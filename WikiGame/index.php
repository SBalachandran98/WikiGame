<?php include_once 'resource/session.php'?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link href="format.css" rel="stylesheet">
</head>
<body>



<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="signup.php">Sign Up</a></li>
</ul>

<div id="signupContainer" class="container" style="height: 400px; top: 55%">
    <h2>Wiki Game</h2>
        <?php if(!isset($_SESSION['username'])): ?>
            <h3>In order to play you must <a href="login.php">sign in.</a> If you don't have an account you can register <a href="signup.php">here</a></h3>
        <?php else: ?>
            <h3>You are logged in as <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a></h3>
			<h3><a href="gamerules.html"> Play Game</a> </h3>
        <?php endif ?>
    
</div>

</body>
</html>