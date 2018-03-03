<?php
function last($str)
{
    $lenOfStr = strlen($str);
    if ($lenOfStr != 0)
        return $str[$lenOfStr - 1];
    else
        header("HTTP/1.0 404 Not Found");
}

function withoutLast($str)
{
    $lenOfStr = strlen($str);
    $outStr = '';
    if ($lenOfStr != 0) {
        for($i = 0; $i < $lenOfStr-1; $i++)
            $outStr[$i] = $str[$i];
        return $outStr;
    } else
        header("HTTP/1.0 404 Not Found");
}

function revers($str){
    $lenOfStr = strlen($str) - 1;
    if ($lenOfStr != 0) {
        $reverseSymbol = '';
        for ($i = $lenOfStr; $i >= ($lenOfStr + 1) / 2; $i--) {
            $reverseSymbol = $str[$lenOfStr - $i];
            $str[$lenOfStr - $i] = $str[$i];
            $str[$i] = $reverseSymbol;
        }
        return $str;
    } else
        header("HTTP/1.0 404 Not Found");
}

function checkIdentifier($str)
{
    $lenOfStr = strlen($str);
    if ($lenOfStr != 0) {
        for ($i = 0; $i < $lenOfStr; $i++) {
            if ($i == 0)
                if ($str[i] >= '0' && $str[i] <= '9')
                    return "No.\nThe identifier can not begin with a digit";
            else
                if (!(($str[$i] >= '0' && $str[$i] <= '9') || ($str[$i] >= 'A' && $str[$i] <= 'Z') ||
                    ($str[$i] >= 'a' && $str[$i] <= 'z') && $str[$i] == '_'))
                    return ("No.\nIdentifier can only contain numbers, letters and underscores");
        }
        return "yes";
    } else
        header("HTTP/1.0 404 Not Found");
}

function removeExtraBlanks($str)
{
    $lenOfStr = strlen($str);
    $countOfSpaces = 0;
    $outLine = '';
    if ($lenOfStr != 0) {
        for ($i = 0; $i < $lenOfStr; $i++) {
            if ($i == 0 || $i == $lenOfStr - 1) {
                if (!($str[$i] == ' '))
                    $outLine[$i] = $str[$i];
            } else
                if ($str[$i] == ' ') {
                    $countOfSpaces++;
                    if ($countOfSpaces <= 1)
                        $outLine[$i] = $str[$i];
                } else {
                    $outLine[$i] = $str[$i];
                    $countOfSpaces = 0;
                }
        }
        return $outLine;
    } else
        header("HTTP/1.0 404 Not Found");
}
