<?php

$correctAnswers   = 0;
$incorrectAnswers = 0;

echo "How much do you know about SEO?\n";

// ~~~~~~~~~~ Question 1 ~~~~~~~~~~

echo "True or false: It's better to use exact match keywords rather than partial match keywords.\n\n 1.True\n 2.False\n";

$answer1 = readline(">>");

if ($answer1 === "1") {
    $incorrectAnswers++;
} else if ($answer1 === "2"){
    $correctAnswers++;
}

echo "When the searcher performs this kind of search, they typically need knowledge, such as the dimensions of a queen mattress or how to care for a rosebush.\n\n
1.Transactional\n
2.Informational\n
3.Navigational\n
4.None of the above\n";

$answer2 = readline(">>");

if ($answer2 == "1") {
    $incorrectAnswers++;
} else if ($answer2 == "2") {
    $correctAnswers++;
} else if ($answer2 == "3") {
    $incorrectAnswers++;
} else if ($answer2 == "4") {
    $incorrectAnswers++;
}


echo "You have $correctAnswers correct and $incorrectAnswers incorrect answers!";
