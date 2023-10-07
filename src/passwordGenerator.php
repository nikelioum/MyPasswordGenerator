<?php
function generatePassword($length = 24) {
    // Define the character sets for the password
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()-_+=<>?';

    // Combine all character sets
    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;

    // Get the total number of characters in the combined set
    $charLength = strlen($allChars);

    // Initialize the password variable
    $password = '';

    // Generate a random password
    for ($i = 0; $i < $length; $i++) {
        // Get a random index from the character set
        $randomIndex = rand(0, $charLength - 1);

        // Add the character at the random index to the password
        $password .= $allChars[$randomIndex];
    }

    return $password;
}

// Usage example: generate a 24-character password
$generatedPassword = generatePassword(24);
return $generatedPassword;
?>
