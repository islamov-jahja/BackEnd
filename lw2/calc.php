<?php
$arg1 = $_REQUEST["arg1"];
$arg2 = $_REQUEST["arg2"];
$result;
$str = $_REQUEST["operation"];
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
        $result = $arg1 / $arg2;
        break;
}
echo $result;
?>