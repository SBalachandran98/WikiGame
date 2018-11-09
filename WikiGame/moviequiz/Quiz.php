<?php 
    include_once '../Resource/Database.php';
    include_once '../Resource/session.php';
    
    $_SESSION['type'] = 'movie';

    $sql = "SELECT question, option1, option2, option3, option4, answer FROM movie";
    $result = $db->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $rows = array();

    while($row = $result->fetch())
    {
        $rows[] = $row;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="quiz.css" rel="stylesheet">
</head>
<body>
Time : <span id="timer"></span>
<div id="quizContainer" class="container">
    <div class="title">Movies Quiz</div>
    <div id="question" class="question"></div>
    <label class="option"><input type="radio" name="option" value="1" /> <span id="opt1"></span></label>
    <label class="option"><input type="radio" name="option" value="2" /> <span id="opt2"></span></label>
    <label class="option"><input type="radio" name="option" value="3" /> <span id="opt3"></span></label>
    <label class="option"><input type="radio" name="option" value="4" /> <span id="opt4"></span></label>
    <form action="../category.html">
        <input type="submit" class="quit-btn" value="Quit"/>
    </form>
    <button id="nextButton" class="next-btn" onclick="loadNextQuestion();">Next Question</button>
</div>
<div id="result" class="container result" style="display:none;">
</div>

<button id="playagain" class="playagain" onclick=window.location.href="../category.html"; style="display:none;">
    Play Again</button>
	
<button id="home" class="home" onclick=window.location.href="../index.php"; style="display:none;">
    Home</button>

<!-- <script src="question.js"></script> -->
<script type="text/javascript">
    var questions = <?php echo json_encode($rows); ?>;
</script>
<script src="../Resource/jquery.min.js"></script>
<script src="../quiz-script.js"></script>
</body>
</html>