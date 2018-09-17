<?php include_once 'resource/session.php'?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="style.php"/>
</head>
<body>

<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="signup.php">Sign Up</a></li>
</ul>

<h2>Wiki Game</h2>
<?php if(!isset($_SESSION['username'])): ?>
<p>You are currently not signed in <a href="login.php">Login</a> Not yet a member? <a href="signup.php">Signup</a></p>

<?php else: ?>
<p>You are logged in as <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a></p>

<?php endif ?>
</body>
</html>