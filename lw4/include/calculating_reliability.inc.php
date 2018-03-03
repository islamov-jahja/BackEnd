<?php
function characterCountingReliability($str)
{
    return (strlen($str) * 4);
}

function numberCountingReliability($countOfNumber)
{
    return ($countOfNumber * 4);
}

function upperCase($uppercaseLetters, $str)
{
    if ($uppercaseLetters != 0)
        return ((strlen($str) - $uppercaseLetters) * 2);
    else
        return 0;
}

function lowerCase($lowercaseLetters, $str)
{
    if ($lowercaseLetters != 0)
        return ((strlen($str) - $lowercaseLetters) * 2);
    else
        return 0;
}