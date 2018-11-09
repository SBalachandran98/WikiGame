CREATE TABLE IF NOT EXISTS videogame (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `question` VARCHAR(250) CHARACTER SET utf8,
    `option1` VARCHAR(250) CHARACTER SET utf8,
    `option2` VARCHAR(250) CHARACTER SET utf8,
    `option3` VARCHAR(250) CHARACTER SET utf8,
    `option4` VARCHAR(250) CHARACTER SET utf8,
    `answer` INT
);
CREATE TABLE IF NOT EXISTS sports (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `question` VARCHAR(250) CHARACTER SET utf8,
    `option1` VARCHAR(250) CHARACTER SET utf8,
    `option2` VARCHAR(250) CHARACTER SET utf8,
    `option3` VARCHAR(250) CHARACTER SET utf8,
    `option4` VARCHAR(250) CHARACTER SET utf8,
    `answer` INT
);
CREATE TABLE IF NOT EXISTS music (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `question` VARCHAR(250) CHARACTER SET utf8,
    `option1` VARCHAR(250) CHARACTER SET utf8,
    `option2` VARCHAR(250) CHARACTER SET utf8,
    `option3` VARCHAR(250) CHARACTER SET utf8,
    `option4` VARCHAR(250) CHARACTER SET utf8,
    `answer` INT
);
CREATE TABLE IF NOT EXISTS movie (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `question` VARCHAR(250) CHARACTER SET utf8,
    `option1` VARCHAR(250) CHARACTER SET utf8,
    `option2` VARCHAR(250) CHARACTER SET utf8,
    `option3` VARCHAR(250) CHARACTER SET utf8,
    `option4` VARCHAR(250) CHARACTER SET utf8,
    `answer` INT
);
INSERT INTO movie VALUES
    (0,'Which superhero are in the movie The Avengers?','Superman','Batman','Iron Man','Wolverine',3),
    (0,'Who is the director for the movie Pulp Fiction?','Michael Bay','Quentin Tarantino','Martin Scorsese','Steve Spielberg',2),
    (0,'Which movie has the actor Leonardo DiCaprio starred in?','The Departed','Shrek','Batman: The Dark Knight','The Predator',1),
    (0,'Which movie has the actor Harrison Ford starred in?','Indiana Jones','Oceans 11','iRobot','Mission Impossible',1),
    (0,'Who is the main actor in the movie Django Unchained?','John Travolta','Tom Cruise','Jamie Foxx','Samuel L. Jackson',3);
INSERT INTO music VALUES
    (0,'Recently a Korean artist has reached the top of the Billboard 200. Which group is this?','EXO','BIGBANG','BTS','TWICE',3),
    (0,'Which music video has the most views within 24 hours of its initial release on YouTube?','Fake Love by BTS','Look What You Made Me Do by Taylor Swift','Ddu-Du Ddu-Du by BLACKPINK','Idol by BTS',4),
    (0,'Which music video has the most views on YouTube?','Gangnam Style by Psy','Despacito by Luis Fonsi ft. Daddy Yankee','Shape of You by Ed Sheeran','See You Again by Wiz Khalifa ft. Charlie Puth',2),
    (0,'What music video on YouTube has the most dislikes?','It''s Everyday Bro by Jake Paul ft. Team 10','Baby by Justin Bieber','Friday by Rebecca Black','Despacito by Luis Fonsi ft. Daddy Yankee',2),
    (0,'Which of these artists is best known as King of Pop?','Michael Jackson','Bruno Mars','The Weeknd','Drake',1);
INSERT INTO sports VALUES
    (0,'Who won the 2017 AFL premiership ?','Geelong','Richmond','Sydney','Hawthorn',2),
    (0,'Which nation won the 2018 World Cup ?','Germany','Spain','France','Italy',3),
    (0,'In which year''s olympic games was the American basketball ''Dream Team'' formed ?','1992','1996','2004','2012',1),
    (0,'Which player one the men''s Grand Slam final at the 2018 Australian Open ?','Roger Federer','Rafael Nadal','Novak Djokovic','None of the above',1),
    (0,'Who won the 2018 Formula 1 Melbourne Grand Prix ?','Lewis Hamilton','Michael Schumacher','Sebastian Vettel','Daniel Ricardo',3);
INSERT INTO videogame VALUES
    (0,'In what Game Series are Golden Rings used as Life-energy and Money  ?','Super Mario Bros','Sonic the Hedgehog','Soul Reaver','Half-Life',2),
    (0,'NES was Short for... ?','Never Ending Simulation','Nintendo Entertainment System','New Enterprise System ',' Not Ever Still',2),
    (0,' What was The First Home Console ?','NES ','Sega Genesis','Atari 2600','Odyssey',4),
    (0,'The Nintendo DS Lite is available in 6 different languages. What language is it not available in ?','Spanish','Italian','German','India',4),
    (0,'On the Xbox 360 controller, which of the following won''t you find ?','A green A button','A red O button','A joystick','A silver dome that glows green',2);

