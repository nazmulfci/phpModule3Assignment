<?php
function generatePassword($length)
{

    $lChar = 'abcdefghijklmnopqrstuvwxyz';
    $uChar = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $nChar = '0123456789';
    $sChar = '!@#$%^&*()_+';


    $allChars = $lChar . $uChar . $nChar . $sChar;

    $totalChars = strlen($allChars);

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomChar = $allChars[rand(0, $totalChars - 1)];

        $password .= $randomChar;
    }

    return $password;
}

$password = generatePassword(12);
echo $password;
