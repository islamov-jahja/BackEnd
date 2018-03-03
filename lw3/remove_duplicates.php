<?php
if ($argc == 2) {
    $checkSymbolForRepeat = array();
    $inputLine = str_split($argv[1]);
    $len = sizeof($inputLine);
    for ($i = 0; $i < $len; $i++)
        if (!in_array($inputLine[$i], $checkSymbolForRepeat)) {
            echo $inputLine[$i];
            array_push($checkSymbolForRepeat, $inputLine[$i]);
        }
} else
    echo "Incorrect number of arguments \nUsage php remove_duplicates.php input string";