<?php
// password-generator.php

// Ensure the script runs in the console
if (php_sapi_name() !== 'cli') {
    die("This script can only be run from the console.\n");
}

echo "=== Random Password Generator ===\n\n";

// Function to generate a random password
function generatePassword($length = 12, $includeSpecialChars = true) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $specialChars = '!@#$%^&*()-_=+[]{}<>?/|';

    if ($includeSpecialChars) {
        $chars .= $specialChars;
    }

    $password = '';
    $maxIndex = strlen($chars) - 1;
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[random_int(0, $maxIndex)];
    }

    return $password;
}

// Get user input for password length
echo "Enter password length (default is 12): ";
$length = trim(fgets(STDIN));
$length = is_numeric($length) && $length > 0 ? (int)$length : 12;

// Get user input for special characters
echo "Include special characters? (yes/no, default is yes): ";
$includeSpecialChars = strtolower(trim(fgets(STDIN))) !== 'no';

// Generate the password
$password = generatePassword($length, $includeSpecialChars);

// Display the generated password
echo "\nYour random password is: $password\n";
echo "Thank you for using the Password Generator!\n";