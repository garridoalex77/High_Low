<?php

$randomNum = mt_rand(1, 100);
$guessCount = 0;

fwrite(STDOUT, "Take a guess between 1-100\n");

do {
    $guessCount++;
    $guess = trim(fgets(STDIN));
    if ($guess == $randomNum) {
        echo "it only took you " .$guessCount. " tries\n";
        echo "somehow...you cheated\n";
    } elseif ($guess > $randomNum) {
        echo "too high\n";
    } elseif ($guess < $randomNum) {
        echo "too low\n";
    }
    $hint = $randomNum - $guess;
    if ($hint < 10 && $hint > -10) {
        echo "hot\n";
    } else {
        echo "cold\n";
    }
} while ($guess != $randomNum && $guess != "exit");
    
