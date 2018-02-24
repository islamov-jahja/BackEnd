<?php
    if (array_key_exists("string", $_REQUEST))
    {
        $inputLine = str_split($_REQUEST["string"]);
        $counter = 0;
        $len = sizeof($inputLine);
        $arr = array();

        for ($k = 0; $k < $len; $k++)
            $inputLine[$k] = strtolower($inputLine[$k]);

        for ($i = 0; $i < $len; $i++)
        {
            for ($j = $i; $j < $len; $j++)
            {
                if (($inputLine[$i] == $inputLine[$j]) && !(in_array($inputLine[$j], $arr)))
                {
                    $counter += 1;
                }

                if ($j == $len - 1 && !(in_array($inputLine[$i], $arr)))
                {
                    array_push($arr, $inputLine[$i]);
                    echo $inputLine[$i] . ' ' . $counter;
                    echo "<br \>";
                    $counter = 0;
                }
            }
        }
    }
    else
        return 400;