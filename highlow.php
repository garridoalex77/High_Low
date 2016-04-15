<?php

$randomNum = rand(1, 100);

fwrite(STDOUT, "Take a guess between 1-100\n");
 echo $randomNum.PHP_EOL;
 echo $guess.PHP_EOL;


do {
    $guess = fgets(STDIN);
    if ($guess == $randomNum) {
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
    if ($guess == 'exit') {
        `exit`;
    }
} while ($guess != $randomNum);
    
