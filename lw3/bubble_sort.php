<?php
if (array_key_exists('numbers', $_REQUEST)) {
    $inputLine = explode(',', $_REQUEST['numbers']);
    $len = sizeof($inputLine);
    for ($i = 0; $i < $len; $i++)
        if (!ctype_digit($inputLine[$i]))
            return 400;

    for ($i = 0; $i < $len; $i++)
        for ($j = 0; $j < $len - $i - 1; $j++)
            if ($inputLine[$j] > $inputLine[$j + 1])
                list($inputLine[$j], $inputLine[$j + 1]) = array($inputLine[$j + 1], $inputLine[$j]);
    $outputLine = implode(', ', $inputLine);
    echo $outputLine;
} else
    header("HTTP/1.0 400 Not Found");