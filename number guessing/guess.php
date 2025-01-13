<?php
// number-guessing-game.php

// Ensure the script runs in the console
if (php_sapi_name() !== 'cli') {
    die("This script can only be run from the console.\n");
}

echo "=== Number Guessing Game ===\n\n";
echo "I have picked a random number between 1 and 100. Can you guess what it is?\n";

// Generate a random number
$randomNumber = random_int(1, 100);
$attempts = 0;

// Game loop
while (true) {
    // Prompt the player for a guess
    echo "Enter your guess: ";
    $guess = trim(fgets(STDIN));
    $attempts++;

    // Validate the input
    if (!is_numeric($guess)) {
        echo "Please enter a valid number.\n";
        continue;
    }

    $guess = (int) $guess;

    // Check the guess
    if ($guess < $randomNumber) {
        echo "Too low! Try again.\n";
    } elseif ($guess > $randomNumber) {
        echo "Too high! Try again.\n";
    } else {
        echo "Congratulations! You guessed the number in $attempts attempt(s)!\n";
        break;
    }
}

echo "Thanks for playing the Number Guessing Game!\n";