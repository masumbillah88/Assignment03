<?php

// Task 5: Password Generator

function generatePassword($length){
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $password = $uppercaseChars[mt_rand(0, strlen($uppercaseChars) - 1)];
    $password .= $lowercaseChars[mt_rand(0, strlen($lowercaseChars) - 1)];
    $password .= $numberChars[mt_rand(0, strlen($numberChars) - 1)];
    $password .= $specialChars[mt_rand(0, strlen($specialChars) - 1)];

    $remainingLength = $length - 4;
    $allChars = $uppercaseChars . $lowercaseChars . $numberChars . $specialChars;

    for ($i = 0; $i < $remainingLength; $i++) {
        $password .= $allChars[mt_rand(0, strlen($allChars) - 1)];
    }

    $password = str_shuffle($password);

    return $password;
}

$generatedPassword = generatePassword(12);

echo "Generated Password: " . $generatedPassword;
