<?php
if ($argc == 1) {
    echo "No parameters were specified!";
} else {
    echo "number of arguments ";
    echo $argc . "\n\r";

    for ($len = 0; $len < $argc; $len++) {
        echo $argv[$len] . ' ';
    }
}
