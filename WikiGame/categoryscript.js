var categories = [{
    "category": "Choose a category",
    "option1": "Music Category",
    "option2": "Movie Category",
    "option3": "Games Category",
    "option4": "Sports Category",
}];

function loadCategory(categoryIndex) {
    var c = categories[categoryIndex];
    opt1.textContent = c.option1;
    opt2.textContent = c.option2;
    opt3.textContent = c.option3;
    opt4.textContent = c.option4;
};

function startGame() {
    var selectedOption = document.querySelector('input[type=radio]:checked');
    if(!selectedOption) {
        alert('Please select your answer!');
        return;
    }

    var option = selectedOption.value;
    if(option == 1){
        window.location.href='musicquiz/Quiz.php';
    }
    else if(option == 2) {
        window.location.href = 'moviequiz/Quiz.php';
    }
    else if(option == 3) {
        window.location.href = 'videogamequiz/Quiz.php';
    }
    else if(option == 4) {
        window.location.href = 'sportsquiz/Quiz.php';
    }
}

loadCategory(0);