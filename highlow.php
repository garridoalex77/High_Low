<?php
start:
$guessCount = 0;
if (!is_numeric($argv[1]) && !is_numeric($argv[2])) {
    echo "OK let me help you\n";
    $randomNum = mt_rand(0, 100);
    $argv[1] = 1;
    $argv[2] = 100;
} elseif ($argv[1] > $argv[2]) {
    $randomNum = mt_rand($argv[2], $argv[1]);
} elseif ($argv[1] == $argv[2]) {
    echo "lazy...\n";
    $randomNum = mt_rand($argv[1], $argv[2]);
} else {
    $randomNum = mt_rand($argv[1], $argv[2]);
} 
fwrite(STDOUT, "Take a guess between ".$argv[1]." and ".$argv[2].PHP_EOL);

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
    
fwrite(STDOUT, "Would you like to play again?");
$again = trim(fgets(STDIN));

if ($again == "y" || $again == "yes") {
    goto start;
}