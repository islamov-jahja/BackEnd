<?php
    header('Content-Type: text/plain; charset=UTF-8');
    $primeNumber = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];
    echo "простой массив\n";
    print_r($primeNumber);
    echo "\n";
    echo "ассоциативный массив\n";
    $phpFunctions = [
        "print_r" => "Выводит удобочитаемую информацию о переменной",
        "is_array" => "Определяет массив ли это",
        "count" => "выводит количество элементов массива",
        "array_merge" => "слияние двух массивов",
        "empty" => "проверяет пуста ли переменная"
    ];
    print_r($phpFunctions);
    echo "многомерный массив\n";
    $initMatrix = [
        [1, 0, 0, 0],
        [0, 1, 0, 0],
        [0, 0, 1, 0],
        [0, 0, 0, 1],
    ];
    print_r($initMatrix);
