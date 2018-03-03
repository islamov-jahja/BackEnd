<?php

if (array_key_exists("arr", $_REQUEST)) {
    $inputLine = explode(',', $_REQUEST["arr"]);
    $length = sizeof($inputLine) - 1;
    $reverseSymbol;
    for ($i = $length; $i >= ($length + 1) / 2; $i--) {
        $reverseSymbol = $inputLine[$length - $i];
        $inputLine[$length - $i] = $inputLine[$i];
        $inputLine[$i] = $reverseSymbol;
    }
    print_r($inputLine);
} else
    header("HTTP/1.0 400 Not Found");;