<?php
$query = explode('&', $_SERVER['QUERY_STRING']);
$numArg = sizeof($query);

if ($numArg < 3) {
    echo "мало параметров: их должно быть 3";
    return;
} else if ($numArg > 3) {
    echo "много параметров: их должно быть 3";
    return;
}
if (!isset($_REQUEST["arg1"]) || !isset($_REQUEST["arg2"]) || !isset($_REQUEST["operation"])) {
    echo "неверный параметр";
    return;
}

$arg1 = $_REQUEST["arg1"];
$arg2 = $_REQUEST["arg2"];
$str = $_REQUEST["operation"];


if (!ctype_digit($arg1) || !ctype_digit($arg2)) {
    echo "один из параметров не является числом";
    return;
}

switch ($str) {
    case "add":
        $result = $arg1 + $arg2;
        break;
    case "sub":
        $result = $arg1 - $arg2;
        break;
    case "mul":
        $result = $arg1 * $arg2;
        break;
    case "div":
        if ($arg2 == 0) {
            echo "происходит деление на ноль";
            return;
        } else
            $result = $arg1 / $arg2;
        break;
    default:
        echo "некорректная операция";
        return;
}

echo $result;
?>