<?php
    $outputLine = array();
    if ($argc == 2)
    {
        $inputLine = str_split($argv[1]);
        $len = sizeof($inputLine);
        for ($i = 0; $i < $len; $i++)
            for ($j = $i+1; $j < $len; $j++)
                if ($inputLine[$i] == $inputLine[$j])
                {
                    unset($inputLine[$j]);
                    $len -= 1;
                }
        $outputLine = implode('', $inputLine);
        echo $outputLine;
    }
    else
        echo "Incorrect number of arguments \nUsage php remove_duplicates.php input string";