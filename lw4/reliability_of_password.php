<?php
require_once 'c:\dev\nginx\projects\local\include\common.inc.php';
if (array_key_exists('password', $_GET)) {
    $str = $_GET["password"];
    $reliability = 0;
    $countOfNumber = 0;
    $uppercaseLetters = 0;
    $lowerCaseLetters = 0;
    $countOfLetters = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        if (is_numeric($str[$i]))
            $countOfNumber++;
        else
            $countOfLetters++;
        if (ctype_upper($str[$i]))
            $uppercaseLetters++;
        else
            $lowerCaseLetters++;
    }

    $lowerCaseLetters -= $countOfNumber;
    $reliability = characterCountingReliability($str) + numberCountingReliability($countOfNumber) + upperCase($uppercaseLetters, $str) + lowerCase($lowerCaseLetters, $str);

    if ($countOfNumber == 0)
        $reliability -= strlen($str);

    if ($countOfLetters == 0)
        $reliability -= strlen($str);

    $countSymbolsArr = array();
    $counterSameSymbol = 0;

    for ($i = 0; $i < strlen($str); $i++)
        if (!(in_array($str[$i], $countSymbolsArr))) {
            for ($j = $i; $j < strlen($str); $j++)
                if ($str[$i] == $str[$j])
                    $counterSameSymbol++;

            if ($counterSameSymbol > 1)
                $reliability -= $counterSameSymbol;

            $countSymbolsArr[$i] = $str[$i];

            if ($counterSameSymbol)
                $counterSameSymbol = 0;
        }
    echo $reliability;
} else
    header("HTTP/1.0 400 Not Found");